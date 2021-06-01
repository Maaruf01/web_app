<?php
if (!isset($_SESSION)) {
	session_start();
}
?>

<?php require'common.php'; ?>

<?php include 'include/head.php'; ?>

<title>Login </title>

</head>
<body class="login_register-body">
<div>
	<form method="post" action="auth.php" id="login"> 
		<input name="csrf" type="hidden" value="<?php echo escape($_SESSION['csrf']); ?>">
		<ul>
			<li> Enter Login Details</li>
			<li><input type="text" name="username" placeholder="User Name" class="details"></li>
			<li><input type="password" name="password" placeholder="Password" class="details"></li>			
			<li><input type="submit" name="submit" value="Login" class="btn"></li>
		</ul>
		<p class="msg"> Not registered?<a href="register.php"> Register Now</a></p>
		<p class="msg"><a href="index.php"> <-- Back to home</a></p>
	</form>
</div>

<script src="js/jquery-3.6.0.js"></script>
<script src="js/main.js"></script>

<?php
include 'include/footer.php';
?>
