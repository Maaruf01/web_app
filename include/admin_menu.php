<nav id="nav-menu">
<ul>
<li><a href="profile.php" <?php if($_GET['currentPage'] == 'profile') echo 'class="active"'; ?>>Profile</a></li>
<li><a href="post.php" <?php if($_GET['currentPage'] == 'post') echo 'class="active"'; ?>>Post</a></li>
<li><a href="logout.php">Logout</a></li>
</ul>
</nav>