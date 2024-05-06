<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

<link rel="stylesheet" type="text/css"href="../css/login.css">
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
<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.js"></script>
</head>
<body>

  <!-- template header -->
  <header>
    <div class="logo1">
      <a href="menu.html" ><img src="../asset/WhatsApp Image 2024-05-05 at 14 2.png" class="logo-brand"></a>
    </div>
    <div class="menu-cta-group"> <!-- Tambahkan kontainer ini -->
      <nav id="navbar">
        <ul>
          <li><a href="#">Cari apa?</a></li>
          <li><a href="#">Pusat Bantuan</a></li>
        </ul>
      </nav>
    </div>
  </header>

  
  <!-- template header -->
  
 <div class="regis-wrapper" style= "background-image: url(../asset/bg-registration-tenant.svg);";>
  <div class="form-login">
  <?php
include("config.php");

    if (isset($_POST['submit'])) {
      $nama2 = isset($_POST['nama2']) ? $_POST['nama2'] : '';
      $phonenum2 = isset($_POST['phonenum2']) ? $_POST['phonenum2'] : '';
      $mail = isset($_POST['mail']) ? $_POST['mail'] : '';
      $password = isset($_POST['password']) ? $_POST['password'] : '';

      $verif_query = mysqli_query($con, "SELECT emailUser FROM users WHERE emailUser = '$mail'");

      if (!$verif_query) {
        die('Error: ' . mysqli_error($con));
      }

      if (mysqli_num_rows($verif_query) != 0) {
        echo "<div class='message'> 
                <p> email already in use <p>
                <div><br>";
        echo "<a href = javascript:self.history.back()'><button class='btn'> Go back</button>";
      } else {
        mysqli_query($con,"INSERT INTO users(namaUser, nomorTelpon, emailUser, userPassword) VALUES('$nama2', '$phonenum2', '$mail', '$password')");
        echo "<div class='message'> 
                <p> Registration success <p>
                <div><br>";
        echo "<a href = <a hre  f='index.php'> <button class='btn'>login now </button>";
      }
    } else{
?>
   <h1 class="login-title">Daftar Akun</h1>
    <form action="" method="POST" class="registration-form">
      <div class="input-n1">
        <div class="label-cover1">
          <label for="name">Nama Lengkap</label><br>
        </div>
            <input type="text" name="nama2" placeholder="Masukkan nama lengkap anda"><br>
     
      </div>
      <div class="input-n">
        <div class="label-cover">
        <label for="phone">Nomor Handphone</label><br>
        </div>
            <input type="tel"  name="phonenum2" id="phone" placeholder="Masukkan nomor handphone aktif" required><br>
            <div id="p-response"></div>
            
      </div>
      <div class="input-n">
        <div class="label-cover">
        <label for="email">Email</label><br>
        </div>
            <input type="email" id="mail" name="mail" placeholder="Masukkan email untuk kostify" required>
            <div id="e-response"></div>  
      </div>

      <div class="input-n">
        <div class="label-cover">
          <label for="password">Password</label><br>
        </div>
            <input type="password" id="password" name="password" placeholder="Minimal 8 karakter"><br>
            <span id="message"></span>
      </div>     
      <div class="input-n">
        <div class="label-cover">
          <label for="r-password">Ulangi password</label><br>
        </div>
            <input type="password" name="r-password" id="r-password" placeholder="Minimal 8 karakter"><br>
            <span id="r-message"></span>
      </div>
      <div class="button-container">
        <input type="submit"name="submit" value="Daftar" id="button-login" class="submit-button"></button>
      </div>
      
    </form>
  </div>
  <?php } ?>
 </div>
      
 
 <script src="../js/login.js"></script>
</body>
</html>