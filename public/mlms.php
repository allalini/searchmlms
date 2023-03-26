<?php
require_once('../private/initialize.php');
include(SHARED_PATH . '/public_header.php');

$mlms = Mlm::find_all();
$posts = Post::find_all();
?>
<div id="forum-list">
    <h1 id="forum-h1">Welcome to Search MLMs Forums.</h1>

    <?php
    foreach ($mlms as $mlm) { ?>
        <?php if ($mlm->is_mlm == 1) { ?>
            <div class="forum-links">
                <h3><?= $mlm->mlm_name; ?></h3>
                <a href="<?=(url_for('/public/forum.php?mlm_id='.$mlm->mlm_id))?>">Go to forum</a>
                <a href="https://www.google.com/search?q=<?= $mlm->mlm_name; ?>"
                   target="_blank">Search in Google</a>
<!--                <p id="mlm-error">If this company no longer exists, or you think it has been listed as an MLM in error,-->
<!--                    click <a href="#" id="error-link">here.</a></p>-->
            </div>
        <?php }
    } ?>

</div>
<?php include(SHARED_PATH . '/public_footer.php'); ?>
