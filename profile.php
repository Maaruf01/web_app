
<?php 
// chech if user is logged in
require 'session.php';

require 'common.php';
require "config.php";

$connection= new PDO($dsn, $username, $password, $options);

if (isset( $_SESSION['user_id'])) {
    try {
        $connection = new pdo($dsn, $username, $password, $options);
        $id =  $_SESSION['user_id'];
  
        $sql = "SELECT * FROM users WHERE id = :id";
        $statement = $connection->prepare($sql);
        $statement->bindValue(':id', $id);
        $statement->execute();
  
        $user = $statement->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $error) {
        echo $sql . "<br>" . $error->getMessage;
    }
} else {
    echo "Something went wrong!";
    exit;
}
  

include 'include/head.php'; 
?>
   
    <title>Profile</title>
</head>
<body>
    <header><h1>DASHBOARD</h1></header>
    <?php $_GET['currentPage'] = 'profile'; 
    include 'include/admin_menu.php'?>


    <div class="container-fluid">
        <div id="profile-pic">
        <img src="#" alt="Profile Pic" ></div>
        <div id="profile-info">
        <a href="#">Edit Profile</a>
        <form action="#" method="post" id="profile-form" >
            <ul>
                <li><label for="fname">Firstname:</label></li>
                <li><input type="text" name="fname"  value="<?php echo escape($user['firstname']); ?>"></li>
                <li><label for="lname">Lastname:</label></li>
                <li><input type="text" name="lname" value="<?php echo escape($user['lastname']); ?>"></li>
                <li><label for="tel" >Phone:</label> </li>
                <li><input type="tel" name="tel" value="<?php echo escape($user['phone']); ?>">  </li>
                <li><label for="email"> Email:</label> </li>
                <li><input type="email" name="email" value="<?php echo escape($user['email']); ?>"> </li>
                <li><label for="username" >Username:</label> </li>
                <li><input type="text" name="username" value="<?php echo escape($user['username']); ?>"> </li>
                <li><label for="date">Date:</label> </li>
                <li><input type="text" name="date" value="<?php echo escape($user['date']); ?>"> </li>
                <li><input type="submit" name="submit" value="Update"> </li>
            </ul>
        </form>
        </div>
    </div>

    <script src="js/jquery-3.6.0.js"></script>
    <script src="js/main.js"></script>
    <?php
    include 'include/footer.php'; 
    ?>
