<?php
if (!isset($_SESSION)) {
	session_start();
}
?>
<?php require 'common.php'; ?>

<?php require 'include/head.php'; ?>
<?php include 'include/bootstrap.php'; ?>
<title> Post </title>
</head>
<body>
<header><h1>DASHBOARD</h1></header>
<?php $_GET['currentPage'] = 'post'; 
    include 'include/admin_menu.php'?>
    <div class="container">
    <form action="publish_post.php" method="POST">
    <input name="csrf" type="hidden" value="<?php echo escape($_SESSION['csrf']); ?>">
    <div class="form-group">
  <label for="title">Enter Title:</label><br>
    <input type="text" name="title" id="title" placeholder="Add Title">
    </div>
<div class="form-group">
<label for="post">Write Post Here:</label><br>
        <textarea name="post" id="contents" cols="100" rows="16" placeholder="Enter text here..."></textarea> <br> <br>
        </div>
        <input type="submit" class="btn" name="submit" value="Publish">
    </form>
    </div>
</body>
<?php
include 'include/footer.php';
?>