<?php
if (!isset($_SESSION)) {
	session_start();
}
?>
<?php require 'common.php'; ?>

<?php require 'include/head.php'; ?>
<?php include 'include/bootstrap.php'; ?>
<title> View Post </title>
</head>
<body>
<header><h1>WEB APPLICATION</h1></header>

<div>

<form action="add_comment.php" method="POST">
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