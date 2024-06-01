<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

<link rel="stylesheet" type="text/css"href="../css/login.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
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
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.js"></script>
</head>
<body>

  <!-- template header -->
  <header>
    <div class="logo1">
      <a href="menu.php" ><img src="../asset/Grey and Black Simple Minimalist Real Estate Logo (1) (1).png" class="logo-brand"></a>
    </div>
    <div class="menu-cta-group"> <!-- Tambahkan kontainer ini -->
      <nav id="navbar">
        <ul>
          <li><a href="faq.php">FAQ</a></li>
          <li><a href="contact.php">Hubungi Kami</a></li>
        </ul>
      </nav>

      <main>
        <?php
            // Memeriksa apakah parameter page ada dan valid
            $page = isset($_GET['page']) ? $_GET['page'] : '';
            $allowed_pages = array('faq', 'contact'); // Daftar halaman yang diperbolehkan
            
            if (in_array($page, $allowed_pages)) {
                include($page . '.php'); // Memuat halaman yang diminta jika valid
            } else {
               
            }
        ?>
    </main>
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

      else {
        mysqli_query($con,"INSERT INTO users(namaUser, nomorTelpon, emailUser, userPassword) VALUES('$nama2', '$phonenum2', '$mail', '$password')");
        echo "<script>alert('Akun berhasil dibuat'); window.location.href='menu.php';</script>";
      }
    } else{
?>
   <h1 class="login-title" style="font-size:20px;">Daftar Akun Pencari Kos</h1>
    <form action="" method="POST" class="registration-form">
      <div class="input-n1">
        <div class="label-cover1">
          <label for="name">Nama Lengkap</label><br>
        </div>
            <input type="text" name="nama2" id="name2" placeholder="Masukkan nama lengkap anda"><br>
            <div id="n-message"></div>
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
        <div class="password-wrapper">
        <input type="password" id="password22" name="password" placeholder="Minimal 8 karakter">
            <i class="bi bi-eye-slash" id="togglePassword"></i><br>
        </div>   
            <div id="message2"></div>
        
      </div>     
      <div class="input-n">
        <div class="label-cover">
          <label for="r-password2">Ulangi password</label><br>
        </div>
        <div class="password-wrapper">
            <input type="password" name="r-password" id="r-password" placeholder="Minimal 8 karakter"><br>
            <i class="bi bi-eye-slash" id="togglePassword2"></i>
        </div>
            <div id="r-message"></div>
      </div>
      <div class="button-container">
        <button type="submit"name="submit" id="button-login" class="submit-button" disabled="disabled">Daftar
        
      </button>
      </div>
      
    </form>
  </div>
  <?php } ?>
 </div>
      
 
 <script src="../js/login.js"></script>
</body>
</html>