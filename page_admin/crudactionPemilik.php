<?php
include ("../page/config.php");
if (isset($_POST["submit21"])) {
    $email = $_POST['email1'];
    $username = $_POST['username1'];
    $phone = $_POST['phone1'];
    $password = $_POST['password1'];


    $sql = "UPDATE pemilik_kos SET nomorTelpon='$phone', namaUser='$username', emailUser='$email', userPassword='$password' WHERE pemilikID = '$_POST[id]'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "<script>alert('ubah data sukses')
        document.location='home2.php'</script>";
    } else {
        echo "<script>alert('ubah data gagal')
        document.location='home2.php'</script>";
    }
}






if (isset($_POST["submit"])) {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
 
    $s1 =  "SELECT * FROM pemilik_kos WHERE nomorTelpon = '$phone' OR emailUser = '$email'";
    $exist = mysqli_query($con, $s1);
   
    
       $sql = "INSERT INTO `pemilik_kos`( `namaUser`, `emailUser`, `nomorTelpon`, `userPassword`) VALUES ('$username','$email','$phone','$password')";
       $result = mysqli_query($con, $sql);
 
       if ($result) {
          // If the user was created successfully, return a success message
          echo "<script>alert('ubah data sukses')
            document.location='home2.php'</script>";
       } else {
        echo "<script>alert('ubah data gagal')
       document.location='home2.php'</script>";
         
       }
}


if (isset($_POST["submitdel"])) {
    
    $stmt = mysqli_query($con, "DELETE FROM pemilik_kos WHERE pemilikID = '$_POST[id]'");
   
    
    if($stmt){
       echo "<script>alert('ubah data sukses')
       document.location='home2.php'</script>";
    }else{
        echo "<script>alert('ubah data gagal')
       document.location='home2.php'</script>";
    }
}



?>
