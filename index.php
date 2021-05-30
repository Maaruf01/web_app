<?php include 'include/head.php'; ?>
 <title>Web Application</title>
 <script src="js/jquery-3.6.0.js"></script>
<script src="js/main.js"></script>
</head>

<body>
<header><a href="index.php" id="textlogo">WEB APPLICATION</a> </header>

<?php $_GET['currentPage'] = 'index';
 include 'include/menu.php'?>

    <section class="hero">

    <div class="cta">
    <h1 id="welcome"> Welcome to our site </h1>
    <a href="login.php" id="btnlogin"> Login</a>
    <h6>OR</h6>
    <a href="register.php" id="btnregister">Register</a>
    </div>
    </section>

<?php include 'include/footer.php'; ?>
