<?php include 'include/head.php'; ?>
 <title>Profile</title>
 <script src="js/jquery-3.6.0.js"></script>
<script src="js/main.js"></script>

</head>

<body>
<header><h1>DASHBOARD</h1></header>
<?php $_GET['currentPage'] = 'profile'; 
 include 'include/admin_menu.php'?>


<div class="container-fluid">
<div id="profile-pic">
<img src="img/face1.jpg" alt="Profile Pic" ></div>
<div id="profile-info">
<a href="#" id="edit-profile">Edit Profile</a>
<form action="#" method="post" id="profile-form" >
<ul>
<li><label for="fname">Firstname:</label></li>
<li><input type="text" name="fname"></li>
<li><label for="lname">Lastname:</label></li>
<li><input type="text" name="lname"></li>
<li><label for="tel" >Phone:</label> </li>
<li><input type="tel" name="tel">  </li>
<li><label for="email"> Email:</label> </li>
<li><input type="email" name="email"> </li>
<li><label for="username" >Username:</label> </li>
<li><input type="text" name="username" > </li>
<li><label for="password">Password:</label> </li>
<li><input type="password" name="password" > </li>
<li><label for="date">Date:</label> </li>
<li><input type="date" name="date"> </li>
<li><input type="submit" name="submit" id="save-edit" value="Save"> </li>
</ul>
</form>
</div>
</div>

<?php
include 'include/footer.php'; ?>