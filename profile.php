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
        <link rel="stylesheet" href="profile.css">
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

        <?php
        $users_id=$_SESSION['id'];
        $stmt=$pdo->prepare("SELECT * FROM user_details where users_id=:users_id");
        $stmt->bindParam(":users_id",$users_id,PDO::PARAM_INT,1);
        if($stmt->execute()){
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
        ?>
          <img src="passport/<?php echo $row['passport_photo'];?>" alt=" " class="photo">
          <div class="details">
        <?php
        echo "<b>";
        echo "<table class='table table-bordered'>";
        echo "<tr>";
        echo "<td>";
        echo "<b> Full Name: </b>";
        echo "</td>";

        echo "<td>";
        echo  $row['full_name'];
        echo "</td>";
        echo "</tr>";


        echo "<tr>";
        echo "<td>";
        echo "<b> Email Address: </b>";
        echo "</td>";

        echo "<td>";
        echo  $row['email_address'];
        echo "</td>";
        echo "</tr>";


        echo "<tr>";
        echo "<td>";
        echo "<b> Home Address: </b>";
        echo "</td>";

        echo "<td>";
        echo  $row['home_address'];
        echo "</td>";
        echo "</tr>";


        echo "<tr>";
        echo "<td>";
        echo "<b> Date of Birth: </b>";
        echo "</td>";

        echo "<td>";
        echo  $row['date_of_birth'];
        echo "</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>";
        echo "<b> Father's Name: </b>";
        echo "</td>";

        echo "<td>";
        echo  $row['fathers_name'];
        echo "</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>";
        echo "<b> Mother's Name: </b>";
        echo "</td>";

        echo "<td>";
        echo  $row['mothers_name'];
        echo "</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>";
        echo "<b> Guardian's Name: </b>";
        echo "</td>";

        echo "<td>";
        echo  $row['guardians_name'];
        echo "</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>";
        echo "<b> Marital Status: </b>";
        echo "</td>";

        echo "<td>";
        echo  $row['marital_status'];
        echo "</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>";
        echo "<b> Spouse Name: </b>";
        echo "</td>";

        echo "<td>";
        echo  $row['spouse_name'];
        echo "</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>";
        echo "<b> National id Number: </b>";
        echo "</td>";

        echo "<td>";
        echo  $row['national_id_number'];
        echo "</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>";
        echo "<b> Place of Birth: </b>";
        echo "</td>";

        echo "<td>";
        echo  $row['place_of_birth'];
        echo "</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>";
        echo "<b> Gender: </b>";
        echo "</td>";

        echo "<td>";
        echo  $row['gender'];
        echo "</td>";
        echo "</tr>";
        
            echo "</table>";
            echo "</b>";
        }
        ?>
        </div>
	</body>
</html>