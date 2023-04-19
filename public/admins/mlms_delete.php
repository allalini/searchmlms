<?php require_once('../../private/initialize.php');
// check that the current user has admin user_level, otherwise redirect
/** @var $session */
if ($session->user_level != 'a') {
    redirect_to(url_for('/public/index.php'));
}

// Find all posts
$mlms = Mlm::find_all();
?>
<?php $page_title = 'MLMs'; ?>
<?php require(SHARED_PATH . '/public_header.php'); ?>

<div>
    <div class="content">
        <h1>Delete MLMs</h1>

        <table class="list">
            <tr>
                <th>MLM ID</th>
                <th>MLM Name</th>
                <th>Is MLM</th>
            </tr>

            <?php foreach($mlms as $mlm) { ?>
                <tr class="admin-tables">
                    <td><?php echo ($mlm->mlm_id); ?></td>
                    <td><?php echo h($mlm->mlm_name); ?></td>
                    <td><?= ($mlm->is_mlm ? 'Yes' : 'No') ?></td>
                    <td><a class="action" href="<?php echo url_for('/public/admins/delete_mlms.php?id=' . h(u($mlm->id))); ?>">Delete</a></td>
                </tr>
            <?php } ?>
        </table>

    </div>

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

<?php include(SHARED_PATH . '/admin_footer.php'); ?>
