<?php
/** @var $session */
require_once('../../private/initialize.php');
include(SHARED_PATH . '/public_header.php');

$errors = [];
$user_email = '';
$password = '';

if (is_post_request()) {

    $user_email = $_POST['user_email'] ?? '';
    $password = $_POST['password'] ?? '';

    // Validations
    if (is_blank($user_email)) {
        $errors[] = "Email cannot be blank.";
    }
    if (is_blank($password)) {
        $errors[] = "Password cannot be blank.";
    }

    // if there were no errors, try to login
    if (empty($errors)) {
        $user = user::find_by_username($user_email);
        // test if user found and password is correct
        if ($user && $user->verify_password($password)) {
            // Mark user as logged in

            $session->login($user);
            redirect_to(url_for('/index.php'));

        } else {
            // username not found or password does not match
            $errors[] = "Login was unsuccessful.";
        }
    }
}

?>
<div id="login">
    <div id="login-style">
        <?php $page_title = 'Log in'; ?>
        <h1>Login</h1>

        <?php echo display_errors($errors); ?>

        <form action="login.php" name="login" method="post">
            Email:<br/>
            <input type="text" name="user_email" value="<?php echo h($user_email); ?>"/><br/>
            Password:<br/>
            <input type="password" name="password" value=""/><br/>
            <input type="submit" name="submit" id="login-button" value="Log in"/>
        </form>

        <h2>Don't have an account? Click <a href="signup.php">here</a> to sign up and join conversations about MLMs.
        </h2>
    </div>
</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>
