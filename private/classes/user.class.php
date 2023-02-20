<?php

class User extends DatabaseObject
{

  static protected $table_name = "user";
  static protected $db_columns = ['user_id', 'user_level', 'user_first_name', 'user_last_name', 'user_email', 'user_password', 'bio'];

  public const USER_LEVELS = ['a', 'm'];

  public $user_id;
  public $user_level;
  public $user_first_name;
  public $user_last_name;
  public $user_email;
  protected $user_password;
  public $bio;
  public $confirm_password;
  protected $password_required = true;

  public function __construct($args = [])
  {
    $this->user_level = $args['user_level'] ?? '';
    $this->user_first_name = $args['first_name'] ?? '';
    $this->user_last_name = $args['last_name'] ?? '';
    $this->user_email = $args['email'] ?? '';
    $this->user_password = $args['password'] ?? '';
    $this->confirm_password = $args['confirm_password'] ?? '';
    $this->bio = $agrs['bio'] ?? '';
  }

  public function full_name()
  {
    return $this->user_first_name . " " . $this->user_last_name;
  }

  /**
   * Hashes password so it can be safely stored in the db
   *
   */ 
  protected function set_hashed_password()
  {
    $this->user_password = password_hash($this->user_password, PASSWORD_BCRYPT);
  }

  /**
   * Creates the user
   *
   * @return  mixed  Returns the result of the db query
   */
  protected function create()
  {
    $this->set_hashed_password();
    return parent::create();
  }

  /**
   * Updates user without changing password
   *
   * @return  mixed  Returns result of update query
   */
  protected function update()
  {
    if ($this->user_password != '') {
      $this->set_hashed_password();
      //validate password
    } else {
      //skip hashing
      $this->password_required = false;
    }
    
    return parent::update();
  }

  protected function validate()
  {
    $this->errors = [];

    if (is_blank($this->user_level)) {
      $this->errors[] = "First name cannot be blank.";
    } elseif (!has_length($this->user_level, array('min' => 1, 'max' => 1))) {
      $this->errors[] = "User level must be 1 character.";
    }

    if (is_blank($this->user_first_name)) {
      $this->errors[] = "First name cannot be blank.";
    } elseif (!has_length($this->user_first_name, array('min' => 2, 'max' => 255))) {
      $this->errors[] = "First name must be between 2 and 255 characters.";
    }

    if (is_blank($this->user_last_name)) {
      $this->errors[] = "Last name cannot be blank.";
    } elseif (!has_length($this->user_last_name, array('min' => 2, 'max' => 255))) {
      $this->errors[] = "Last name must be between 2 and 255 characters.";
    }

    if (is_blank($this->user_email)) {
      $this->errors[] = "Email cannot be blank.";
    } elseif (!has_length($this->user_email, array('max' => 255))) {
      $this->errors[] = "Last name must be less than 255 characters.";
    } elseif (!has_valid_email_format($this->user_email)) {
      $this->errors[] = "Email must be a valid format.";
    }

    if ($this->password_required) {
      if (is_blank($this->user_password)) {
        $this->errors[] = "Password cannot be blank.";
      } elseif (!has_length($this->user_password, array('min' => 12))) {
        $this->errors[] = "Password must contain 12 or more characters";
      } elseif (!preg_match('/[A-Z]/', $this->user_password)) {
        $this->errors[] = "Password must contain at least 1 uppercase letter";
      } elseif (!preg_match('/[a-z]/', $this->user_password)) {
        $this->errors[] = "Password must contain at least 1 lowercase letter";
      } elseif (!preg_match('/[0-9]/', $this->user_password)) {
        $this->errors[] = "Password must contain at least 1 number";
      } elseif (!preg_match('/[^A-Za-z0-9\s]/', $this->user_password)) {
        $this->errors[] = "Password must contain at least 1 symbol";
      }

      if (is_blank($this->confirm_password)) {
        $this->errors[] = "Confirm password cannot be blank.";
      } elseif ($this->user_password !== $this->confirm_password) {
        $this->errors[] = "Password and confirm password must match.";
      }
    }

    return $this->errors;
  }

  static public function find_by_username($user_email) {
    $sql = "SELECT * FROM " . static::$table_name . " ";
    $sql .= "WHERE user_email ='" . self::$database->escape_string($user_email) . "'";
    $obj_array = static::find_by_sql($sql);
    if(!empty($obj_array)) {
      return array_shift($obj_array);
    } else {
      return false;
    }
  }

  public function verify_password($password) {
    return password_verify($password, $this->user_password);
  }
}
