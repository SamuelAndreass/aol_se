<?php
include ("../page/config.php");
if (isset($_POST["submit21"])) {
    $email = $_POST['email1'];
    $username = $_POST['username1'];
    $phone = $_POST['phone1'];
    $password = $_POST['password1'];
    $id = $_POST['id'];

    $sql = "UPDATE pencari_kos SET nomorTelpon='$phone', namaUser='$username', emailUser='$email', userPassword='$password' WHERE pencariID= '$_POST[id]'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "<script>alert('ubah data sukses')
        document.location='home.php'</script>";
    } else {
        echo "<script>alert('ubah data gagal')
        document.location='home.php'</script>";
    }
}







if (isset($_POST["submit"])) {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
 
    $s1 =  "SELECT * FROM pencari_kos WHERE nomorTelpon = '$phone' OR emailUser = '$email'";
    $exist = mysqli_query($con, $s1);
   
    
       $sql = "INSERT INTO `pencari_kos`( `namaUser`, `emailUser`, `nomorTelpon`, `userPassword`) VALUES ('$username','$email','$phone','$password')";
       $result = mysqli_query($con, $sql);
 
       if ($result) {
          // If the user was created successfully, return a success message
          echo "<script>alert('ubah data sukses')
            document.location='home.php'</script>";
       } else {
        echo "<script>alert('ubah data gagal')
       document.location='home.php'</script>";
         
       }
}


if (isset($_POST["submitdel"])) {
    
    $stmt = mysqli_query($con, "DELETE FROM pencari_kos WHERE pencariID = '$_POST[id]'");
   
    
    if($stmt){
       echo "<script>alert('ubah data sukses')
       document.location='home.php'</script>";
    }else{
        echo "<script>alert('ubah data gagal')
       document.location='home.php'</script>";
    }
}



?>
