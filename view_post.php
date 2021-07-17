<?php
if (!isset($_SESSION)) {
	session_start();
}

require 'common.php'; 
require "config.php";

if (isset($_GET['post_id'])) {
	$post_id = $_GET['post_id'];
	
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
	
		$sql = "SELECT name, comment, `time` FROM comments WHERE post_id = :post_id";
		$statement = $connection->prepare($sql);
		$statement->bindValue(':post_id', $post_id);
		$statement->execute();
	
		$comments = $statement->fetch(PDO::FETCH_ASSOC);
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

<div>

</div>
<div>
<form action="" method="POST">
<input name="csrf" type="hidden" value="<?php echo escape($_SESSION['csrf']); ?>">
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