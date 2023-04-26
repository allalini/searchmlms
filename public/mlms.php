<?php
require_once('../private/initialize.php');
include(SHARED_PATH . '/public_header.php');

$mlms = Mlm::find_all();
$posts = Post::find_all();

?>
<div id="forum-list">
    <h1 id="forum-h1">All MLMs &amp; Forums</h1>

    <?php
    foreach ($mlms as $mlm) { ?>
        <?php if ($mlm->is_mlm == 1) { ?>
            <div class="forum-links">
                <h3><?= $mlm->mlm_name; ?></h3>
                <?php
                $space = ' ';
                $good_space = '%20';
                $google_link = $mlm->mlm_name;
                ?>
                <a href="<?= (url_for('/public/forum.php?mlm_id=' . $mlm->mlm_id)) ?>">Go to forum</a>
                <a href="https://www.google.com/search?q=<?= str_replace($space, $good_space, $google_link); ?>"
                   target="_blank">Search in Google</a>
                <!--                <p id="mlm-error">If this company no longer exists, or you think it has been listed as an MLM in error,-->
                <!--                    click <a href="#" id="error-link">here.</a></p>-->
            </div>
        <?php }
    } ?>

    <script>
        // Get the button:
        // let scrollup = document.getElementById("scroll-up");
        //
        // // When the user scrolls down 20px from the top of the document, show the button
        // window.onscroll = function () {
        //     scrollFunction()
        // };
        //
        // function scrollFunction() {
        //     if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
        //         scrollup.style.display = "block";
        //     } else {
        //         scrollup.style.display = "none";
        //     }
        // }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }
    </script>
    <button onclick="topFunction()" id="scroll-up" title="Go to top">Top</button>
</div>
<?php include(SHARED_PATH . '/public_footer.php'); ?>
