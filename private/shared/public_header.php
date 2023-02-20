<!doctype html>

<html lang="en">
  <head>
    <title>Search MLMs <?php if(isset($page_title)) { echo '- ' . h($page_title); } ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" media="all" href="<?php echo url_for('/styles/styles.css'); ?>" />
  </head>

  <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="styles/styles.css" rel="stylesheet" />
  <!-- <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest"> -->
  <title>Search MLMs</title>
</head>

<body>
  <nav>
    <ul>
      <li><a>MLM Master List</a></li>
      <li><a href="public/posts.php">Forums</a></li>
      <li><a href="index.php">Search MLMs</a></li>
      <li><a href="https://consumer.ftc.gov/articles/multi-level-marketing-businesses-pyramid-schemes" target="_blank">FTC Article</a></li>
      <li><a href="https://www.youtube.com/results?search_query=mlms" target="_blank">YouTube</a></li>
      <li><a href="users/login.php">Login</a></li>
    </ul>
  </nav>

<?php
  include(SHARED_PATH . '/public_footer.php'); 
?>
</body>
