<?php require_once('../../private/initialize.php');
// check that the current user has admin user_level, otherwise redirect
/** @var $session */
if ($session->user_level != 'a') {
    redirect_to(url_for('/public/index.php'));
}

// Find all users
$mlms = Mlm::find_all();

?>
<?php $page_title = 'MLMs'; ?>
<?php require(SHARED_PATH . '/public_header.php'); ?>

<div>
    <div class="content">
        <h1>Edit MLMs</h1>

        <table class="list">
            <tr>
                <th>MLM ID</th>
                <th>MLM Name</th>
                <th>Is MLM</th>
            </tr>

            <?php foreach($mlms as $mlm) { ?>
                <tr>
                    <td><?= ($mlm->mlm_id) ?></td>
                    <td><?= h($mlm->mlm_name) ?></td>
                    <td><?= ($mlm->is_mlm ? 'Yes' : 'No') ?></td>
                    <td><a class="action" href="<?= url_for('/public/admins/edit_mlms.php?id=' . h(u($mlm->id))) ?>">Edit</a></td>
                </tr>
            <?php } ?>
        </table>

    </div>

</div>

<?php include(SHARED_PATH . '/admin_footer.php'); ?>
