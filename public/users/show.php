<?php require_once('../../private/initialize.php');
include(SHARED_PATH . '/public_header.php');?>
<?php

$id = $_GET['id'] ?? '1';

$user = User::find_by_id($id);

?>

<?php $page_title = 'Show User: ' . h($user->full_name()); ?>


<h1>Welcome, <?php echo h($user->full_name()); ?>!</h1>

<dl>
    <dt>First name</dt>
    <dd><?php echo h($user->user_first_name); ?></dd>
</dl>
<dl>
    <dt>Last name</dt>
    <dd><?php echo h($user->user_last_name); ?></dd>
</dl>
<dl>
    <dt>Email</dt>
    <dd><?php echo h($user->user_email); ?></dd>
</dl>


