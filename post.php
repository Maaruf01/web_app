<?php require 'common.php'; ?>

<?php require 'include/head.php'; ?>
<?php include 'include/bootstrap.php'; ?>
<title> Manage Post </title>
</head>
<body>
<header><h1>DASHBOARD</h1></header>
<?php $_GET['currentPage'] = 'post'; 
    include 'include/admin_menu.php'?>
    <form action="publish_post" method="POST">
    <div class="form-group">
<label for="title">Enter Title:</label><br>
    <input type="text" name="title" placeholder="Add Title">
    </div>
<div class="form-group">
<label for="post">Write Post Here:</label><br>
        <textarea name="post" id="" cols="150" rows="18" placeholder="Enter text here..."></textarea>
        </div>
        <input type="submit" name="submit" value="Publish">
    </form>
</body>
<?php
include 'include/footer.php';
?>