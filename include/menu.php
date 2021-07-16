<nav id="nav-menu">
<ul>
<li><a href="index.php" <?php if($_GET['currentPage'] == 'index') echo 'class="active"'; ?>>Home</a></li>
<li><a href="login.php" <?php if($_GET['currentPage'] == 'login') echo 'class="active"'; ?>>Login</a></li>
<li><a href="register.php" <?php if($_GET['currentPage'] == 'register') echo 'class="active"'; ?>>Register</a></li>
</ul>
</nav>