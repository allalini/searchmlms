<?php
require_once('../private/initialize.php');
include(SHARED_PATH . '/public_header.php');

$mlms = Mlm::find_all();
?>
    <!-- //var_dump($mlms); -->
    <ul id="mlm-list">
        <?php
        foreach ($mlms as $mlm) { ?>
            <?php if ($mlm->is_mlm == 1) { ?>
                <li><?= $mlm->mlm_name; ?></li>
            <?php }
        } ?>

    </ul>
<?php include(SHARED_PATH . '/public_footer.php'); ?>