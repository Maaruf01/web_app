<?php
if (!isset($_SESSION)) {
	session_start();
}
?>

<?php require 'common.php'; ?>

<?php require 'include/head.php'; ?>

	<title>Register </title>
</head>
<body class="login_register-body">
	<div>
		<form  method="post" action="add_user.php" id="register">

			<input name="csrf" type="hidden" value="<?php echo escape($_SESSION['csrf']); ?>">
			<ul>
			<li> Enter Details</li>
				<li><input type="text" name="fname" placeholder="First Name" class="fname"></li>
				<li><input type="text" name="lname" placeholder="Last Name" class="lname"></li>
				<li><input type="email" name="email" placeholder="example@gmail.com" class="email"></li>
				<li><input type="text" name="tel" placeholder="08035069008" class="tel"></li>
				<li><input type="text" name="address" placeholder="Address" class="address"></li>
				<li><input type="text" name="username" placeholder="User Name" class="username"></li>
				<li><input type="password" name="password" placeholder="Password" class="password"></li>
				<li><input type="submit" name="submit" value="Sign-up" class="btn" id="sign-up"></li>
			</ul>
			<p class="msg">Aready registered? <a href="login.php" id="sign_in"> Login</a></p>
			<p class="msg"><a href="index.php"> <-- Back to home</a></p>
		</form>
	</div>

<script src="js/jquery-3.6.0.js"></script>
<script src="js/main.js"></script>

<?php
include 'include/footer.php';
?>
