<?php require_once('../private/initialize.php');


$comments = Comment::find_all();
// var_dump($users);

foreach($comments as $comment) { ?>
       
        <?= h($comment->comment_id); ?>
        <?= h($comment->post_id); ?>
        <?= h($comment->user_id); ?>
        <?= h($comment->user_comment); ?>
        <?= h($comment->comment_date); ?>
        <?= h($comment->parent_comment_id); ?>
      
      <?php } ?>

