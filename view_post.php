<?php
if (!isset($_SESSION)) {
	session_start();
}

require 'common.php'; 
require "config.php";

if (isset($_GET['post_id'])) {
	$post_id = $_GET['post_id'];
	
	if (isset($_POST['submit'])) {
		if (!hash_equals($_SESSION['csrf'], $_POST['csrf'])) die();
	
		try {
			$connection = new pdo($dsn, $username, $password, $options);
			
			$date = date('Y-m-d H:i:s');
			$comment = $_POST['comment'];
			$name = $_POST['name'];
			
			$sql = "INSERT INTO `web_app_db`.`comment` (`name`, `comment`, `time`, `post_id`) VALUES (:name, :comment, :time, :post_id);			";
			
			$statement = $connection->prepare($sql);
			$statement->bindParam(':name', $name, PDO::PARAM_STR);
			$statement->bindParam(':comment', $comment, PDO::PARAM_STR);
			$statement->bindParam(':time', $date, PDO::PARAM_STR);
			$statement->bindParam(':post_id', $post_id, PDO::PARAM_INT);
			$statement->execute();
		} catch (PDOExeption $error) {
			echo $sql . "</br>" . $error->getMesage();
		}
	}

	try {
		$connection = new PDO($dsn, $username, $password, $options);
	
		$sql = "SELECT posts.title, posts.content, posts.`time`, users.firstname FROM web_app_db.posts INNER JOIN web_app_db.users ON posts.user_id = users.id WHERE posts.id = :id;";
		$statement = $connection->prepare($sql);
		$statement->bindParam(':id', $post_id, PDO::PARAM_STR);
		$statement->execute();
	
		$post = $statement->fetch(PDO::FETCH_ASSOC);
	} catch (PDOException $error) {
		echo $sql . "<br>" . $error->getMessage;
	}
	
	try {
		$connection = new PDO($dsn, $username, $password, $options);
	
		$sql = "SELECT name, comment, `time` FROM comment WHERE post_id = :post_id";
		$statement = $connection->prepare($sql);
		$statement->bindValue(':post_id', $post_id);
		$statement->execute();
	
		//$comments = $statement->fetch(PDO::FETCH_ASSOC);
	} catch (PDOException $error) {
		echo $sql . "<br>" . $error->getMessage;
	}
}

?>

<?php require 'include/head.php'; ?>
<?php include 'include/bootstrap.php'; ?>
<title> View Post </title>
</head>
<body>
<header><h1>WEB APPLICATION</h1></header>
<hr> <!--display post in full -->
        <h3><?php echo $post['title']; ?></h3>
        <p><?php echo $post['content']; ?></p>
        <?php echo $post['firstname']; ?>
        <?php echo $post['time']; ?> <hr> <br>
        
<!-- display users comments on a post-->
     <?php while($comments = $statement->fetch(PDO::FETCH_ASSOC)){ ?>
   
        <h6><?php echo $comments['name']; ?> <?php echo $comments['time']; ?></h6>
        <p><?php echo $comments['comment']; ?></p>
        <?php
       } ?>

<form action="" method="POST">
<input name="csrf" type="hidden" value="<?php echo escape($_SESSION['csrf']); ?>">

<div class="form-group"><br>
    LEAVE A COMMENT <br>
<label for="name">Name:</label> <br>
<input type="text" name="name" placehoder="name">
</div>
<div class="form-group">
<label for="comment">Comment:</label><br>
<textarea name="comment" id="" cols="30" rows="4"> 

</textarea> <br>

</div>
<input type="submit" class="btn" name="submit" value="Submit"> 
</form> <br>
<hr>
<a href="index.php">Back to Home</a>
       <br> <br> <br> <br> <br>
</body>
<?php include 'include/footer.php'; ?>