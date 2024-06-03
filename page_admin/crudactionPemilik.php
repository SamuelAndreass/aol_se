<?php
include ("../page/config.php");
if (isset($_POST["submit21"])) {
    $email = $_POST['email1'];
    $username = $_POST['username1'];
    $phone = $_POST['phone1'];
    $password = $_POST['password1'];
    
    $stmt = $con->prepare("SELECT id FROM pencari_kos WHERE emailUser = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    if($result->num_rows === 0) exit('No rows');
    $row = $result->fetch_assoc();
    $id = $row['id'];
    
    $stmt = $con->prepare("UPDATE pencari_kos SET nomorTelpon=?, namaUser=?, emailUser=?, userPassword=? WHERE id=?");
    $stmt->bind_param("ssssi", $phone, $username, $email, $password, $id);
    $stmt->execute();
    
    if($stmt->affected_rows === 1){
        echo "<script>alert('ubah data sukses')
        document.location='home.php'</script>";
    }else{
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
