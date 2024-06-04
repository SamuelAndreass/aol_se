<?php 
   session_start();
   include("config.php");
   if(!isset($_SESSION['role']) || $_SESSION['role'] != 'pencari kos'){
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
    <link rel="stylesheet" href="../css/riwayat.css" />
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
  </head>
  <body>
  <nav class="navbar">
      <a href="menu.php"><img src="../asset/Grey and Black Simple Minimalist Real Estate Logo (1) (1).png" class="navbar-logo" alt="logo" /></a>
      <ul class="navbar-list">
        <li><a href="faq2.php">FAQ</a></li>
        <li><a href="aboutUS2.php">Tentang Kami</a></li>

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
            
          
        </div>
        
        <ul class="profile-dropdown-list">
          <li class="profile-dropdown-list-item">

              <?php echo"<a href='editprofile.php?id=$r_id'>
             
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

    <div class=".card mt-3">
        <div class="card-body">
            <div class="card-header ">Riwayat transaksi</div>
    <table class="table table-striped table-hover table-bordered">
    <thead>
       

        <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
        </tr>
    </thead>
   
    <tbody>
    
        <tr>
        <?php
        $id = $_SESSION['id'];
        $q1 = mysqli_query($con, "SELECT * FROM pembayaran p JOIN kos s ON s.idKos = p.idKos WHERE p.idKos= 3;");
        
        while( $row = mysqli_fetch_assoc($q1)):
    ?>
        <th scope="row"><?php echo $row['transactionID']?></th>
        <td><?php echo $row['transactionDate']?></td>
        <td><?php echo $row['total_bayar']?></td>
        <td><?php echo $row['namaKos']?></td>
        </tr>
    <?php endwhile;?>
    </tbody>
    </table>
    </div>
    </div>
   
    <script src="../js/menu2.js"></script>
  </body>
</html>
