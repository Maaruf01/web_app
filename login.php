
<?php include 'include/head.php'; ?>

<title>Login </title>

<script src="js/jquery-3.6.0.js"></script>
<script src="js/main.js"></script>

</head>
<body class="login_register-body">
<div>
<form method="post" action="login_auth.php" id="login"> 
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
<?php
include 'include/footer.php';
?>
