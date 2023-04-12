<?php

$page = $_SERVER['REQUEST_URI'];
$page = explode('/', $page);
$page = end($page);
?>

<header>
    <nav id="admin-nav">
        <span>Admin Tools</span>
        <div class="user-dropdown">
            <button class="dropbtn" onclick="showUserDropdown()">Users</button>
            <ul class="dropdown-content" id="userDropdown">
                <li><a class="<?= $page == 'index.php' ? 'active' : '' ?>"
                       href="<?php echo url_for('/public/admins/index.php'); ?>">Edit Users</a></li>
                <li><a class="<?= $page == 'delete_users.php' ? 'active' : '' ?>"
                       href="<?php echo url_for('/public/admins/delete_users.php'); ?>">Delete Users</a></li>
            </ul>
        </div>

        <div class="post-dropdown">
            <button class="dropbtn" onclick="showPostDropdown()">Posts</button>
            <ul class="dropdown-content" id="postDropdown">
                <li><a class="<?= $page == 'new.php' ? 'active' : '' ?>"
                       href="<?php echo url_for('/public/admins/new.php'); ?>">Add Posts</a></li>
                <li><a class="<?= $page == 'index.php' ? 'active' : '' ?>"
                       href="<?php echo url_for('/public/admins/posts_edit.php'); ?>">Edit Posts</a></li>
                <li><a class="<?= $page == 'posts_delete.php' ? 'active' : '' ?>"
                       href="<?php echo url_for('/public/admins/posts_delete.php'); ?>">Delete Posts</a></li>
            </ul>
        </div>

    </nav>
</header>

<script>
    /* When the user clicks on the button,
    toggle between hiding and showing the dropdown content */
    function showUserDropdown() {
        document.getElementById("userDropdown").classList.toggle("show");
    }

    // Close the dropdown if the user clicks outside of it
    window.addEventListener('click', function (e) {
        if (!e.target.matches('.user-dropdown .dropbtn')) {
            let adminDropdown = document.getElementById("userDropdown");
            adminDropdown.classList.remove('show');
        }
    });

    function showPostDropdown() {
        document.getElementById("postDropdown").classList.toggle("show");
    }

    // Close the dropdown if the post clicks outside of it
    window.addEventListener('click', function (e) {
            if (!e.target.matches('.post-dropdown .dropbtn')) {
                let adminDropdown = document.getElementById("postDropdown");
                adminDropdown.classList.remove('show');
            }
        }
    );
</script>