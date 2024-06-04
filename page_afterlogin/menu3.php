<?php 
  session_start();
  include("config.php");
  if(!isset($_SESSION['role']) || $_SESSION['role'] != 'pemilik kos'){
    echo "<script>alert('forbbiden access to this page')
    document.location='../page/menu.php'</script>";
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
    <link rel="stylesheet" href="../css/menu2.css" />
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
      <a href="menu3.php"><img src="../asset/Grey and Black Simple Minimalist Real Estate Logo (1) (1).png" class="navbar-logo" alt="logo" /></a>
      <ul class="navbar-list">
        <li><a href="faq3.php">FAQ</a></li>
        <li><a href="aboutUS3.php">Tentang Kami</a></li>

      </ul>


      <?php
    $nama = $_SESSION['nama'];
    $r_phone = ""; // Declare $r_name here
    $q1 = mysqli_query($con,"SELECT * FROM pemilik_kos where namaUser = '$nama'");
    $r1 = mysqli_fetch_assoc($q1);
    if ($r1){
      $r_id = $r1['pemilikID'];
    }
?>


      <div class="profile-dropdown">
        <div onclick="toggle()" class="profile-dropdown-btn">
          <div class="profile-img">
            
            <i class="fa-solid fa-circle"></i>
          </div>
            
          
        </div>
        
        <ul class="profile-dropdown-list">
          <li class="profile-dropdown-list-item">

              <?php echo"<a href='editprofile2.php?id=$r_id'>
             
              <i class='fa-regular fa-user'></i>"?>
              Profile
            </a>
          </li>

          <li class="profile-dropdown-list-item">
          <a href="riwayat-transaksi.php">
              <i class="fa-solid fa-cart-shopping"></i>
              Riwayat Transaksi
            </a>
          </li>

              
            <li class="profile-dropdown-list-item">
            <a href="../page/menu.php" id="logout-link">
                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                Keluar
            </a>
        </li>
        </ul>
      </div>
    </nav>
   
    <script src="../js/menu2.js"></script>
  </body>
</html>
