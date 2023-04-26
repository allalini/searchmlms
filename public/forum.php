<?php require_once('../private/initialize.php');
include(SHARED_PATH . '/public_header.php'); ?>

<?php
/** @var $session */
if (!$session->is_logged_in()) {
    redirect_to(url_for('public/users/login.php?redirected=1'));
}
$id = $_GET['mlm_id'] ?? '1';
$mlm = Mlm::find_by_id($id);
$posts = Post::find_by_mlm_id($id);
?>

<h1 id="mlm-forum-h1"><?php echo h($mlm->mlm_name); ?> Forum</h1>
<div id="new-form">
    <script>
        function showTextField() {
            document.getElementById('new-post-form').style.display = 'block';
        }
    </script>
    <span onclick="showTextField()">New Post</span>
    <form id="new-post-form" method="post" action="<?= url_for('public/posts/new.php') ?>" style="display: none;">
        <input type="hidden" name="mlm_id" value="<?= $id ?>"/>
        <label for="post-title"></label><input type="text" name="post_title" placeholder="Post Title"
                                               id="post-title"
                                               required>
        <label for="post-body"></label><textarea rows="10" name="post" cols="80"
                                                 wrap="soft" id="post-body" required></textarea>
        <button type="submit" id="submit-button">Submit</button>
    </form>
</div>

<hr>
<div class="forum-posts"><?php
    if (!empty($posts)) {
    foreach ($posts as $post) { ?>
        <article>
            <h1>
                <a href="<?= url_for('public/posts/show.php?post_id=' . $post->post_id) ?>"><?php echo $post->post_title ?></a>
            </h1>
            <span>By <?= $post->user_first_name ?> <?= $post->user_last_name ?></span>
        </article>
    <?php }} ?>
</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>
