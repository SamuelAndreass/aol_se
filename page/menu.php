
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KOSTIFY</title>

 <!-- css -->
  <link rel="stylesheet" type="text/css"href="../css/menu.css">
  <!-- box icons -->
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="dist/hamburgers.css" rel="stylesheet">
  <!-- remxicons -->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
  <script src="https://unpkg.com/feather-icons"></script>
  <!-- google font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
</head>


<body>
  <!-- template header -->
    <header>
        <div class="logo">
          <a href="menu.html"><img src="../asset/Grey and Black Simple Minimalist Real Estate Logo (1) (1).png" alt="Logo"></a>
        </div>
        <div class="menu-cta-group"> <!-- Tambahkan kontainer ini -->
          <nav id="navbar">
            <ul>
              <li><a href="faq.php">FAQ</a></li>
              <li><a href="contact.php">Hubungi Kami</a></li>
            </ul>
          </nav>
          <div class="cta-hamburger-group"> <!-- Tambahkan kontainer ini -->
            <div class="cta">
              <a href="#" class="secondary-button" id="sign-btn">Masuk</a>
            </div>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
          </div> <!-- Tutup kontainer yang ditambahkan -->
        </div> <!-- Tutup kontainer yang ditambahkan -->
      </header>


      <div id="myModal" class="modal">
     
        <!-- Modal content -->
        <div class="modal-content">
          <span class="close">&times;</span> 
          
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
include('config.php');

if(isset($_SESSION['log'])){
    header('location:menu.php');
}

if(isset($_POST['submit'])){
    $phone = mysqli_real_escape_string($con, $_POST['phone2']);
    $pwd = mysqli_real_escape_string($con, $_POST['pwd2']);
    $query_user = $con->prepare("SELECT * FROM users WHERE nomorTelpon = ? and userPassword = ?");
    $query_user->bind_param("is", $phone, $pwd);
    $query_user->execute();
    $result = $query_user->get_result();
    $cari_user = $result->fetch_assoc();

    if($cari_user){
        if(password_verify($pwd, $cari_user['userPassword'])){
            $_SESSION['namauser'] = $cari_user['namaUser'];
            echo'<script>alert("anda berhasil login, halo ' . $cari_user['namaUser'] . '");windows.location= "index.php"</script>';
        } else {
            echo'<script>alert("Password yang anda masukkan salah)"; history.go(-1);</script>';
        }
    } else {
        echo'<script>alert("Data yang anda masukkan salah)"; history.go(-1);</script>';
    }
}
?>
          <p id="title-modal-login">Masuk ke 
            <h1 class="nama">KOSTIFY</h1></p>
    
          <form method="POST" >
          <div class="input">
            <label for="phone" id="telpon">Nomor Handphone:</label><br>
            <input type="text" id="phone" name="phone"><br>
            <div id="p-message2" style="color:red; font-family:'Lato', sans-serif; font-size:10px"></div>
          </div>
          <div class="input">
            <label for="pwd" id="password">Password:</label><br>
            <input type="password" id="pwd" name="pwd"><br>
            <div id="pwd2"></div>
          </div>
            <div class="login-btn-container">
              <button type="submit"value ="Login"id="button-login" disabled="disabled">Login</button>
              <br>
              <br>
            </div>  
            <p>Belum punya akun Kostify? 
              <a href="buatAkun.php" class="register-e">Daftar sekarang</a></p>
            
          </form>
            
        </div>
       
      </div>
      <!-- template header -->
      <script src="../js/menu.js"></script>

      
</body>


</html>