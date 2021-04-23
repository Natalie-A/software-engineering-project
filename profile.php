<?php
session_start();
include_once "db.php";
include_once 'util.php';
$con = new DBConnector();
$pdo = $con->connectToDB();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>My Profile</title>
        <link rel="stylesheet" href="idApplication.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="content">
            <header>
                <a href="#" class="brand">Kenya</a>
                <div class="menu-btn"></div>
                <div class="navigation">
                    <div class="navigation-items">
                        <a href="homePage.php">Home</a>
                        <a href="idApplication.php">Apply for an ID</a>
                        <a href="idReapplication.php">Lost/Stolen ID</a>
                        <a href="profile.php">My Profile</a>
                        <a href="help.php">Instructions</a>
                        <a href="processLogout.php">Logout</a>
                    </div>
                </div>
            </header>
        </div>
        <img src="img/profile.svg" class="image" alt="" />
        <?php
        $users_id=$_SESSION['id'];
        $stmt=$pdo->prepare("SELECT * FROM user_details where users_id=:users_id");
        $stmt->bindParam(":users_id",$users_id,PDO::PARAM_INT,1);
        if($stmt->execute()){
            echo " Success <br>";
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            echo "<hr>";
            //echo "<img src = 'Image/".$row['image'].'" />';
            echo "<br> fullName=$row[full_name]";
            echo "<br> email_address=$row[email_address]";
            echo "<br> home_address=$row[home_address]";
            echo "<br> date_of_birth=$row[date_of_birth]";
            echo "<br> fathers_name=$row[fathers_name]";
            echo "<br> mothers_name=$row[mothers_name]";
            echo "<br> guardians_name=$row[guardians_name]";
            echo "<br> marital_status=$row[marital_status]";
            echo "<br> spouse name=$row[spouse_name]";
            echo "<br> national id number=$row[national_id_number]";
            echo "<br> place_of_birth=$row[place_of_birth]";
            echo "<br> gender=$row[gender]";
            
            }
        ?>
	</body>
</html>