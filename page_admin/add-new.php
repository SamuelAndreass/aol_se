<?php
include ("../page/config.php");
if (isset($_POST["submit"])) {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
 
    $s1 =  "SELECT * FROM users WHERE nomorTelpon = '$phone' OR emailUser = '$email'";
    $exist = mysqli_query($con, $s1);
   
    
       $sql = "INSERT INTO `users`( `namaUser`, `emailUser`, `nomorTelpon`, `userPassword`) VALUES ('$username','$email','$phone','$password')";
       $result = mysqli_query($con, $sql);
 
       if ($result) {
          // If the user was created successfully, return a success message
          echo  "<script>alert('berhasil melakukan perubahan data')</script>";
          header('Location: home.php');
       } else {
        header('Location: home.php?msg:"error"');
         
       }
}



?>
