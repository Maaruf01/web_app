
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
            <img src="#" alt="Profile Pic" >
            <form action="#" method="POST" id="form-pic">
                <input type="file" name="picture" >
            </form>
        </div>
        <div id="profile-info">
            <a  id="edit-profile">Edit Profile</a>
            <form action="#" method="post" id="profile-form" >
            <input name="csrf" type="hidden" value="<?php echo escape($_SESSION['csrf']); ?>">
                <ul>
                    <li><label for="fname">Firstname:</label></li>
                    <li><input type="text" class="userInfo" name="fname" value="<?php echo escape($user['firstname']); ?>"></li> <br/>
                    <li><label for="lname">Lastname:</label></li>
                    <li><input type="text" class="userInfo" name="lname" value="<?php echo escape($user['lastname']); ?>"></li> <br/>
                    <li><label for="tel" >Phone:</label> </li>
                    <li><input type="tel" class="userInfo" name="tel" value="<?php echo escape($user['phone']); ?>">  </li>  <br/>
                    <li><label for="email"> Email:</label> </li>
                    <li><input type="email" class="userInfo" name="email" value="<?php echo escape($user['email']); ?>"> </li> <br/>
                    <li><label for="address"> Address:</label> </li>
                    <li><input type="text" class="userInfo" name="address" value="<?php echo escape($user['address']); ?>"> </li> <br/>
                    <li><label for="username" >Username:</label> </li>
                    <li><input type="text" class="userInfo" name="username" value="<?php echo escape($user['username']); ?>"> </li> <br/>
                    <li><label for="date">Date:</label> </li>
                    <li><input type="text" class="userInfo" name="date" value="<?php echo escape($user['date']); ?>"> </li> <br/>
                    <li><input type="submit" id="save-edit" name="submit" value="Save"> </li>
                </ul>
            </form>
           
        </div>
    </div>

    <script src="js/jquery-3.6.0.js"></script>
    <script src="js/main.js"></script>
    <?php
    include 'include/footer.php'; 
    ?>
