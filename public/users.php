<?php require_once('../private/initalize.php');


$users = User::find_all();
// var_dump($users);

foreach($users as $user) { ?>
       
        <?= h($user->user_id); ?>
        <?= h($user->user_level); ?>
        <?= h($user->user_first_name); ?>
        <?= h($user->user_last_name); ?>
        <?= h($user->user_email); ?>
        <?= h($user->bio); ?>
      
      <?php } ?>

