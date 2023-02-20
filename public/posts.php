<?php require_once('../private/initalize.php');
include(SHARED_PATH . '/public_header.php'); 


$posts = Post::find_all();
// var_dump($posts);

foreach($posts as $post) { ?>
       
        <?php echo h($post->post_id); ?><br>
        <?php echo h($post->mlm_id); ?><br>
        <?php echo h($post->post_title); ?><br>
        <?php echo h($post->post); ?><br>
        <?php echo h($post->post_date); ?><br>
      
      <?php } ?>

