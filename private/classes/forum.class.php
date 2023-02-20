<?php

class Post extends DatabaseObject
{

  static protected $table_name = "post";
  static protected $db_columns = ['post_id', 'mlm_id', 'post_title', 'post', 'post_date'];

  public $post_id;
  public $mlm_id;
  public $post_title;
  public $post;
  public $post_date;

  public function __construct($args = [])
  {
    $this->post_id = $args['post_id'] ?? '';
    $this->mlm_id = $args['mlm_id'] ?? '';
    $this->post_title = $args['post_title'] ?? '';
    $this->post = $args['post'] ?? '';
    $this->post_date = $args['post_date'] ?? '';
  }

//   public function full_name()
//   {
//     return $this->user_first_name . " " . $this->user_last_name;
//   }

//   /**
//    * Hashes password so it can be safely stored in the db
//    *
//    */ 
//   protected function set_hashed_password()
//   {
//     $this->user_password = password_hash($this->password, PASSWORD_BCRYPT);
//   }

//   /**
//    * Creates the user
//    *
//    * @return  mixed  Returns the result of the db query
//    */
//   protected function create()
//   {
//     $this->set_hashed_password();
//     return parent::create();
//   }

//   /**
//    * Updates user without changing password
//    *
//    * @return  mixed  Returns result of update query
//    */
//   protected function update()
//   {
//     if ($this->password != '') {
//       $this->set_hashed_password();
//       //validate password
//     } else {
//       //skip hashing
//       $this->password_required = false;
//     }
    
//     return parent::update();
//   }

//   protected function validate()
//   {
//     $this->errors = [];

//     if (is_blank($this->user_level)) {
//       $this->errors[] = "First name cannot be blank.";
//     } elseif (!has_length($this->user_level, array('min' => 1, 'max' => 1))) {
//       $this->errors[] = "User level must be 1 character.";
//     }

//     if (is_blank($this->user_first_name)) {
//       $this->errors[] = "First name cannot be blank.";
//     } elseif (!has_length($this->user_first_name, array('min' => 2, 'max' => 255))) {
//       $this->errors[] = "First name must be between 2 and 255 characters.";
//     }

//     if (is_blank($this->user_last_name)) {
//       $this->errors[] = "Last name cannot be blank.";
//     } elseif (!has_length($this->user_last_name, array('min' => 2, 'max' => 255))) {
//       $this->errors[] = "Last name must be between 2 and 255 characters.";
//     }

//     if (is_blank($this->user_email)) {
//       $this->errors[] = "Email cannot be blank.";
//     } elseif (!has_length($this->user_email, array('max' => 255))) {
//       $this->errors[] = "Last name must be less than 255 characters.";
//     } elseif (!has_valid_email_format($this->user_email)) {
//       $this->errors[] = "Email must be a valid format.";
//     }

//     if ($this->password_required) {
//       if (is_blank($this->user_password)) {
//         $this->errors[] = "Password cannot be blank.";
//       } elseif (!has_length($this->user_password, array('min' => 12))) {
//         $this->errors[] = "Password must contain 12 or more characters";
//       } elseif (!preg_match('/[A-Z]/', $this->user_password)) {
//         $this->errors[] = "Password must contain at least 1 uppercase letter";
//       } elseif (!preg_match('/[a-z]/', $this->user_password)) {
//         $this->errors[] = "Password must contain at least 1 lowercase letter";
//       } elseif (!preg_match('/[0-9]/', $this->user_password)) {
//         $this->errors[] = "Password must contain at least 1 number";
//       } elseif (!preg_match('/[^A-Za-z0-9\s]/', $this->user_password)) {
//         $this->errors[] = "Password must contain at least 1 symbol";
//       }

//       if (is_blank($this->confirm_password)) {
//         $this->errors[] = "Confirm password cannot be blank.";
//       } elseif ($this->user_password !== $this->confirm_password) {
//         $this->errors[] = "Password and confirm password must match.";
//       }
//     }

    // return $this->errors;
  }
// }
