<?php
include ("../page/config.php");
if (isset($_POST["submit21"])) {
    $email = $_POST['email1'];
    $username = $_POST['username1'];
    $phone = $_POST['phone1'];
    $password = $_POST['password1'];
    
    $stmt = $con->prepare("SELECT id FROM users WHERE emailUser = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    if($result->num_rows === 0) exit('No rows');
    $row = $result->fetch_assoc();
    $id = $row['id'];
    
    $stmt = $con->prepare("UPDATE users SET nomorTelpon=?, namaUser=?, emailUser=?, userPassword=? WHERE id=?");
    $stmt->bind_param("ssssi", $phone, $username, $email, $password, $id);
    $stmt->execute();
    
    if($stmt->affected_rows === 1){
       header("Location: home.php");
       exit();
    }
}
?>
