<?php
    include_once 'user.php';
    include_once 'db.php'; 
    $con = new DBConnector();
    $pdo = $con->connectToDB();
    $event = isset($_POST['event'])?$_POST['event']:"";
    if($event == "register")
    {       
        $fullName = $_POST['fullName'];
        $email = $_POST['email'];  
        $password = $_POST['password']; 
        $user = new User($email, $password);
        $user->setFullName($fullName);
        echo $user->register($pdo); 
    }
    ?>