<?php
require_once('../private/initalize.php');
include(SHARED_PATH . '/public_header.php'); 

$errors = [];
$user_email = '';
$password = '';

if(is_post_request()) {

  $user_email = $_POST['user_email'] ?? '';
  $password = $_POST['password'] ?? '';

  // Validations
  if(is_blank($user_email)) {
    $errors[] = "Email cannot be blank.";
  }
  if(is_blank($password)) {
    $errors[] = "Password cannot be blank.";
  }

  // if there were no errors, try to login
  if(empty($errors)) {
    $user = user::find_by_username($user_email);
    // test if user found and password is correct
    if($user != false && $user->verify_password($password)){
      // Mark user as logged in
      $session->login($user); 
      redirect_to(url_for('/index.php'));
    } else {
      // username not found or password does not match
      $errors[] = "Log in was unsuccessful.";
    }
  }
}

?>

<?php $page_title = 'Log in'; ?>
  <h1>Log in</h1>

  <?php echo display_errors($errors); ?>

  <form action="login.php" method="post">
    Email:<br />
    <input type="text" name="user_email" value="<?php echo h($user_email); ?>" /><br />
    Password:<br />
    <input type="password" name="password" value="" /><br />
    <input type="submit" name="submit" value="Login"  />
  </form>

</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>
