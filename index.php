<?php 
require "config.php";

try {
   $connection = new PDO($dsn, $username, $password, $options);

   $sql = "SELECT title, content, `time`, user_id FROM posts";
   $statement = $connection->prepare($sql);
   $statement->execute();

   $posts = $statement->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $error) {
   echo $sql . "<br>" . $error->getMessage;
}

?>

<?php include 'include/head.php'; ?>
 <title>Home - Blog</title>
 <script src="js/jquery-3.6.0.js"></script>
<script src="js/main.js"></script>
<?php include 'include/bootstrap.php'; ?>
</head>

<body>
<header><a href="index.php" id="textlogo">WEB APPLICATION</a> </header>

<?php $_GET['currentPage'] = 'index';
 include 'include/menu.php';

  function readMore(){ ?> 
  <a href="view_post.php" id="readmore">Read More</a> <?php
   }?>
   <?php readMore(); ?>
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
