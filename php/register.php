<?php

$conn = new mysqli('localhost', 'root', '', 'aol_se');


if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}else{
    if(isset($_POST["submit"])){
        $nama2 = isset($_POST['nama2']) ? $_POST['nama2'] : '';
        $phonenum2 = isset($_POST['phonenum2']) ? $_POST['phonenum2'] :
        $mail = isset($_POST['mail']) ? $_POST['mail'] : '';
        $password = isset($_POST['password']) ? $_POST['password'] : '';

        $stmt = $conn->prepare("INSERT INTO user(userName, userPhone, userEmail, userPassword) VALUES(?,?,?,?)");
        $stmt->bind_param("ssss", $nama2, $phonenum2, $password); 
        $stmt->execute();
        echo "register succesfully";
        $stmt->close();
        $conn->close();
    }  
    
}
    

    

    

?>