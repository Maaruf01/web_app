<?php include 'include/head.php'; ?>

<title>Register </title>
<script src="js/jquery-3.6.0.js"></script>
<script src="js/main.js"></script>
</head>
<body class="login_register-body">
<div>
<form  method="post"  id="register">
<ul>
		
		
			<li><input type="text" name="fname" placeholder="First Name" class="fname"></li>
			
			<li><input type="text" name="lname" placeholder="Last Name" class="lname"></li>
			
			<li><input type="email" name="email" placeholder="example@gmail.com" class="email"></li>
			
			<li><input type="text" name="tel" placeholder="+2348031856408" class="tel"></li>
			
			<li><input type="text" name="address" placeholder="Address" class="address"></li>
			
			<li><input type="text" name="username" placeholder="User Name" class="username"></li>
			
			<li><input type="password" name="password" placeholder="Password" class="password"></li>
				
			<li><input type="file" name="image" id="pic"></li>
			<li><input type="submit" name="submit" value="Sign-up" class="btn"></li>
		           </ul>
           <p class="msg">Aready registered? <a href="login.php" id="sign_in"> Login</a></p>
		   <p class="msg"><a href="index.php"> <-- Back to home</a></p>
</form>
</div>