<?php 
  session_start();
  include("config.php");
  if(!isset($_SESSION['role']) || $_SESSION['role'] != 'pencari kos'){
    echo "<script>alert('forbbiden access to this page')</script>";
    header("Location: ../page/menu.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    />
    <link rel="stylesheet" href="../css/aboutUS2.css" />
    <title>Profile Dropdown</title>
     <!-- box icons -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="dist/hamburgers.css" rel="stylesheet">
    <!-- remxicons -->
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>
    <nav class="navbar">
      <a href="menu2.php"><img src="../asset/Grey and Black Simple Minimalist Real Estate Logo (1) (1).png" class="navbar-logo" alt="logo" /></a>
      <ul class="navbar-list">
        <li><a href="faq2.php">FAQ</a></li>
        <li><a href="aboutUS2.html">Tentang Kami</a></li>
      </ul>


      <?php
    $nama = $_SESSION['nama'];
    $r_phone = ""; // Declare $r_name here
    $q1 = mysqli_query($con,"SELECT * FROM pencari_kos where namaUser = '$nama'");
    $r1 = mysqli_fetch_assoc($q1);
    if ($r1){
        
        $r_id = $r1['pencariID'];
    }
?>



      <div class="profile-dropdown">
        <div onclick="toggle()" class="profile-dropdown-btn">
          <div class="profile-img">
            
            <i class="fa-solid fa-circle"></i>
          </div>


          <ul class="profile-dropdown-list">
          <li class="profile-dropdown-list-item">

              <?php echo"<a href='editprofile.php?id=$r_id'>
             
              <i class='fa-regular fa-user'></i>"?>
              Profile
            </a>
          </li>

          <li class="profile-dropdown-list-item">
            <a href="#">
                <i class="fa-solid fa-cart-shopping"></i>
              Riwayat Transaksi
            </a>
          </li>

         

          <li class="profile-dropdown-list-item">
            <a href="../page/home.php" id="logout-link">
                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                Keluar
            </a>
          </li>
        </ul>
      </div>
    </nav>
<!-- end of header -->
    <section class="about-us">
        <div class="about">
        <img src="../asset/about image.jpg" alt="" class="pic">
        <div class="text">
            <h2>About <span style="color:#2BD232;">Us</span></h2>
            <h5 style="margin-top:30px;">Penyedia informasi <span style="color:#2BD232;">Kos-Kosan</span> terbaik</h5>
            <p style="text-align:justify;">Kostify adalah platform terdepan dalam menyediakan informasi kost terbaik. Kami percaya bahwa mencari tempat tinggal yang nyaman dan terjangkau tidak harus menjadi proses yang sulit dan membingungkan. Itulah sebabnya kami berdedikasi untuk membuat proses tersebut menjadi mudah dan menyenangkan. Di Kostify, kami mengumpulkan dan menyediakan informasi kost terlengkap dan terpercaya. Dengan berbagai pilihan kost di berbagai lokasi, kami membantu Anda menemukan tempat tinggal yang paling sesuai dengan kebutuhan dan anggaran Anda.Bergabunglah dengan ribuan pengguna lainnya yang telah menemukan tempat tinggal mereka melalui Kostify. Selamat mencari kost, dan selamat tinggal di rumah baru Anda!  </p>
            
        </div>
        </div>
    </section>
    <script src="../js/menu2.js"></script>
  </body>
</html>