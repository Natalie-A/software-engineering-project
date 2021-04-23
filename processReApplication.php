<?php
session_start();
include_once 'util.php';
include_once 'db.php';
$con = new DBConnector();
$pdo = $con->connectToDB();
$event = isset($_POST['event']) ? $_POST['event'] : "";
if ($event == "reApply") 
{
    $uploadNationalIDTo = null;
    if (isset($_FILES['natID'])) {
        $nat_id_name = $_FILES['natID']['name'];
        $nat_id_size = $_FILES['natID']['size'];
        $nat_id_tmp = $_FILES['natID']['tmp_name'];
        $uploadLocation = "nationalIDCopy/";
        $uploadNationalIDTo = $uploadLocation . $nat_id_name;
        $moveNationalID = move_uploaded_file($nat_id_tmp, $uploadNationalIDTo);
    }

    $uploadPoliceAbstractTo = null;
    if (isset($_FILES['policeAbstract'])) {
        $police_abstract_name = $_FILES['policeAbstract']['name'];
        $police_abstract_size = $_FILES['policeAbstract']['size'];
        $police_abstract_tmp = $_FILES['policeAbstract']['tmp_name'];
        $uploadLocation = "policeAbstractCopy/";
        $uploadPoliceAbstractTo = $uploadLocation . $police_abstract_name;
        $movePoliceAbstract = move_uploaded_file($police_abstract_tmp, $uploadPoliceAbstractTo);
    }
    $stmt = $pdo->prepare("UPDATE user_documents SET police_abstract_copy=?, national_id_copy=? WHERE users_id=".$_SESSION["id"]);
    $stmt->execute([$nat_id_name, $police_abstract_name]);
}
