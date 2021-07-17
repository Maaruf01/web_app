<?php 
require "config.php";

try {
   $connection = new PDO($dsn, $username, $password, $options);
  $sql = "SELECT posts.id, posts.title, posts.content, posts.`time`, users.firstname FROM web_app_db.posts INNER JOIN web_app_db.users ON posts.user_id = users.id";
   $statement = $connection->prepare($sql);
   $statement->execute();
  // $posts = $statement->fetch(PDO::FETCH_ASSOC);

} catch (PDOException $error) {
   echo $sql . "<br>" . $error->getMessage;
}

?>

<?php require 'include/head.php'; ?>
 <title>Home - Blog</title>
 <script src="js/jquery-3.6.0.js"></script>
<script src="js/main.js"></script>
<?php include 'include/bootstrap.php'; ?>
</head>

<body>
<header><a href="index.php" id="textlogo">WEB APPLICATION</a> </header>

<?php $_GET['currentPage'] = 'index';
 include 'include/menu.php'; 

 // display all posts in home page
 while($posts = $statement->fetch(PDO::FETCH_ASSOC)){ ?>
 <div class="container-fluid">
      <h6><?php echo $posts['firstname']; ?> <?php echo $posts['time']; ?> </h6>
      <h4><?php echo $posts['title']; ?></h4>
      <p id="meta-description"><?php echo $posts['content']; ?> ... </p>    
      <a href="view_post.php?post_id=<?php echo $posts['id']; ?>" id="readmore">Read More</a> </div>
 <hr>
<?php
 } ?> 
 
</body>
<?php include 'include/footer.php'; ?>
