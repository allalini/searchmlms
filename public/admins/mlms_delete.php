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
                <tr>
                    <td><?php echo h($mlm->mlm_id); ?></td>
                    <td><?php echo h($mlm->mlm_name); ?></td>
                    <td><?php echo h($mlm->is_mlm); ?></td>
                    <td><a class="action" href="<?php echo url_for('/public/admins/delete_mlms.php?id=' . h(u($mlm->id))); ?>">Delete</a></td>
                </tr>
            <?php } ?>
        </table>

    </div>

</div>

<?php include(SHARED_PATH . '/admin_footer.php'); ?>
