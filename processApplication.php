<?php
session_start();
include_once 'util.php';
include_once 'db.php';
$con = new DBConnector();
$pdo = $con->connectToDB();
$event = isset($_POST['event']) ? $_POST['event'] : "";
if ($event == "apply") {
    $fullName = $_POST['fullName'];
    $gender = $_POST['genderr'];
    $dateOfBirth = $_POST['dob'];
    $fatherName = $_POST['fatherName'];
    $motherName = $_POST['motherName'];
    $guardianName = $_POST['guardianName'];
    $homeAddress = $_POST['homeAddress'];
    $placeOfBirth = $_POST['placeOfBirth'];
    $maritalStatus = $_POST['maritalStat'];
    $spouseName = $_POST['spouseName'];
    $spouseID = $_POST['spouseID'];

    $uploadPassportTo = null;
    if (isset($_FILES['passport'])) {
        $passport_name = $_FILES['passport']['name'];
        $passport_size = $_FILES['passport']['size'];
        $passport_tmp = $_FILES['passport']['tmp_name'];
        $uploadLocation = "passport/";
        $uploadPassportTo = $uploadLocation . $passport_name;
        $movePassport = move_uploaded_file($passport_tmp, $uploadPassportTo);
    }

    $uploadBirthCertTo = null;
    if (isset($_FILES['birthCert'])) {
        $birth_cert_name = $_FILES['birthCert']['name'];
        $birth_cert_size = $_FILES['birthCert']['size'];
        $birth_cert_tmp = $_FILES['birthCert']['tmp_name'];
        $uploadLocation = "birthCert/";
        $uploadBirthCertTo = $uploadLocation . $birth_cert_name;
        $moveBirthCert = move_uploaded_file($birth_cert_tmp, $uploadBirthCertTo);
    }

    $uploadParentIDTo = null;
    if (isset($_FILES['parentIDCopy'])) {
        $parent_id_name = $_FILES['parentIDCopy']['name'];
        $parent_id_size = $_FILES['parentIDCopy']['size'];
        $parent_id_tmp = $_FILES['parentIDCopy']['tmp_name'];
        $uploadLocation = "parentIDCopy/";
        $uploadParentIDTo = $uploadLocation . $parent_id_name;
        $moveParentID = move_uploaded_file($parent_id_tmp, $uploadParentIDTo);
    }
    $pdo->beginTransaction();
    $stmt = $pdo->prepare('UPDATE user_details SET full_name=?,gender=?,date_of_birth=?,fathers_name=?,mothers_name=?,guardians_name=?,home_address=?,place_of_birth=?,marital_status=?,spouse_name=?,spouse_id_number=?,passport_photo=? WHERE users_id=' . $_SESSION["id"]);
    $stmt->execute([$fullName, $gender, $dateOfBirth, $fatherName, $motherName, $guardianName, $homeAddress, $placeOfBirth, $maritalStatus, $spouseName, $spouseID, $passport_name]);
    $Last_ID = $pdo->lastInsertId();
    $stmt = $pdo->prepare('INSERT INTO user_documents (birth_certificate_copy,parents_id_copy,users_id) VALUES (?,?,?)');
    $stmt->execute([$birth_cert_name, $parent_id_name,$_SESSION["id"]]);
    $pdo->commit();
}
