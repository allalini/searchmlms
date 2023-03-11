<!doctype html>

<html lang="en">

<head>
    <title>Search MLMs <?php if (isset($page_title)) {
            echo '- ' . h($page_title);
        } ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" media="all" href="<?php echo url_for('/styles/styles.css'); ?>"/>

    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="icon" type="image/x-icon" href="favicon.ico">

</head>

<body>
<a href="#main-search" id="skip-link">Skip to main content</a>
<header>
    <input id="nav-box" type="checkbox">
    <label for="nav-box" id="nav-trigger">Menu</label>
    <div id="nav-collapse">
        <nav>

            <a href="<?= url_for('/public/index.php') ?>" id="logo-link"><img
                        src="<?= url_for('images/logo.120.png') ?>" id="logo" alt="search mlms logo"></a>
            <ul>
                <li><a href="<?= url_for('/public/mlms.php') ?>">MLM Master List</a></li>
                <li><a href="<?= url_for('/public/posts.php') ?>">Forums</a></li>
                <li><a href="<?= url_for('/public/index.php') ?>"><img src="<?= url_for('images/logo-light.120.png') ?>"
                                                                       alt="search mlms logo"></a></li>
                <li><a href="https://consumer.ftc.gov/articles/multi-level-marketing-businesses-pyramid-schemes"
                       target="_blank">FTC Article</a></li>
                <li><a href="https://www.youtube.com/results?search_query=mlms" target="_blank">YouTube</a></li>
                <li>
                    <?php
                    /** @var Session $session */
                    if ($session->user_first_name) {?>
                        <a href="<?= url_for('/public/users/logout.php') ?>" id="login-link">Logout <?=$session->user_first_name?></a><?php
                    }
                    else { ?>
                        <a href="<?= url_for('/public/users/login.php') ?>" id="login-link">Login</a></li>
                   <?php }
                    ?>
            </ul>
        </nav>
    </div>
</header>
