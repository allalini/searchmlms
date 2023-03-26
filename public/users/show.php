<?php require_once('../../private/initialize.php');
include(SHARED_PATH . '/public_header.php'); ?>
<?php

$id = $_GET['id'] ?? '1';

$user = User::find_by_id($id);

?>

<?php $page_title = 'Welcome, ' . h($user->full_name()); ?>


    <h1 id="welcome">Welcome to Search MLMs, <?php echo h($user->full_name()); ?>! So glad you're here.</h1>

    <div id="welcome-details">
        <span>First name:</span>
        <?php echo h($user->user_first_name); ?><br>

        <span>Last name:</span>
        <?php echo h($user->user_last_name); ?><br>

        <span>Email:</span>
        <?php echo h($user->user_email); ?>

        <p>Click <a href="#">here</a> to edit your deets.</p>
    </div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>