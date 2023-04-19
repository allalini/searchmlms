<?php
require_once('../../private/initialize.php');
include(SHARED_PATH . '/public_header.php');

$errors = [];

if (is_post_request()) {
    $mlm = new Mlm($_POST);
    if (empty($errors)) {
        $result = $mlm->save();

        if ($result === true) {
            $new_id = $mlm->id;
            /** @var $session */
            $session->message('The MLM was created successfully.');
            redirect_to(url_for('/public/admins/mlms_edit.php'));
        } else {
            // show errors
        }
    }
}

?>
    <div id="new-mlm">
        <?php $page_title = 'Add MLM'; ?>
        <h1>Add an MLM</h1>

        <?php echo display_errors($errors); ?>
        <form action="mlms_new.php" method="post" id="admin-pages">
            <label for="mlm_name">MLM Name:</label><br/>
            <input type="text" required name="mlm_name" id="mlm_name"
                   value="<?= $_POST['mlm_name'] ?? '' ?>"><br/>

            <label for="is_mlm">Is MLM:</label>
            <div>
                <input type="radio" id="mlm-yes" name="is_mlm" value="<?= $_POST['is_mlm'] ?? '' ?>" <label
                        for="mlm-yes">Yes</label></div>
            <div><input type="radio" id="mlm-no" name="is_mlm" value="<?= $_POST['is_mlm'] ?? '' ?>"/><label
                        for="mlm-no">No</label></div>

            <input type="submit" name="submit" class="admin-submit" value="Add MLM"/>
        </form>
    </div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>