<?php
  if(!isset($page_title)) { $page_title = 'Admin Area'; }
?>

<!doctype html>

<html lang="en">
  <head>
    <title>Search MLMs - <?php echo h($page_title); ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" media="all" href="<?php echo url_for(''); ?>" />
  </head>

  <body>
    <header>
      <h1>Search MLMs Admin Portal</h1>
    </header>

    <navigation>
      <ul>
        <li><a href="<?php echo url_for('/index.php'); ?>">Menu</a></li>
      </ul>
    </navigation>

    <?php echo display_session_message(); ?>
