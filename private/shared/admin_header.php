<?php
  if(!isset($page_title)) { $page_title = 'Admin Area'; }
?>

    <header>
      <h1>Search MLMs Admin Portal</h1>
    </header>

    <navigation>
      <ul>
          <li <a href="<?php echo url_for('/index.php'); ?>">>Menu</a></li>
          <li></li>
      </ul>
    </navigation>

    <?php echo display_session_message(); ?>
