<?php include 'include/head.php'; ?>

<title>Register </title>
<script src="js/jquery-3.6.0.js"></script>
<script src="js/main.js"></script>
</head>
<body class="access">
<div>
<form  method="post"  id="register">
<ul>
		
			<label for="fname">Firstname: </label>
			<li><input type="text" name="fname" placeholder="First Name" class="fname"></li>
			<label for="fname">Lastname: </label>
			<li><input type="text" name="lname" placeholder="Last Name" class="lname"></li>
			<label for="email">Email: </label>
			<li><input type="email" name="email" placeholder="example@gmail.com" class="email"></li>
			<label for="tel">Tel: </label>
			<li><input type="text" name="tel" placeholder="+2348031856408" class="tel"></li>
			<label for="address">Address:</label>
			<li><input type="text" name="address" placeholder="Address" class="address"></li>
			<label for="username">username: </label>
			<li><input type="text" name="username" placeholder="User Name" class="username"></li>
			<label for="pwd">password: </label>
			<li><input type="password" name="password" placeholder="Password" class="password"></li>
			<label>Upload Profile Pic:</label>	
			<li><input type="file" name="image" id="pic"></li>
			<li><input type="submit" name="submit" value="Sign-up" class="btn"></li>
		           </ul>
           <p class="msg">Aready registered? <a href="login.php" id="sign_in"> Login</a></p>
		   <p class="msg"><a href="index.php"> <-- Back to home</a></p>
</form>
</div>