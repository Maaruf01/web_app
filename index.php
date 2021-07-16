<?php include 'include/head.php'; ?>
 <title>Home - Blog</title>
 <script src="js/jquery-3.6.0.js"></script>
<script src="js/main.js"></script>
<?php include 'include/bootstrap.php'; ?>
</head>

<body>
<header><a href="index.php" id="textlogo">WEB APPLICATION</a> </header>

<?php $_GET['currentPage'] = 'index';
 include 'include/menu.php'?>
<div>

<form action="add_comment.php" method="POST">
<div class="form-group">
<label for="name">Name:</label> <br>
<input type="text" name="name" placehoder="name">
</div>
<div class="form-group">
<label for="comment">Comment:</label><br>
<textarea name="comment" id="" cols="30" rows="10"> 

</textarea> <br>
</div>
<input type="submit" class="comment" name="submit" value="Submit"> 
</form>
</body>
</div>


<!--
    <section class="hero">

    <div class="cta">
    <h1 id="welcome"> Welcome to our site </h1>
    <a href="login.php" id="btnlogin"> Login</a>
    <h6>OR</h6>
    <a href="register.php" id="btnregister">Register</a>
    </div>
    </section>
 -->
<?php include 'include/footer.php'; ?>
