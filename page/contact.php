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
</head>


<body>
  <!-- template header -->
    <header>
        <div class="logo">
          <a href="menu.php"><img src="../asset/Grey and Black Simple Minimalist Real Estate Logo (1) (1).png" alt="Logo"></a>
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
          <p id="title-modal-login">Masuk ke 
            <h1 class="nama">KOSTIFY</h1></p>
       
          <form>
            <label for="phone" id="telpon">Nomor Handphone:</label><br>
            <input type="text" id="phone" name="phone"><br>
            <label for="pwd" id="password">Password:</label><br>
            <input type="password" id="pwd" name="pwd"><br>
            <div class="login-btn-container">
              <button type="button" id="button-login"><p class="login-w">Login</p></button>
              <br>
              <br>
            </div>
            <p>Belum punya akun Kostify? 
              <a href="login.php" class="register-e">Daftar sekarang</a></p>
            
          </form>
      
        </div>
      
      </div>
      <!-- template header -->
      <script src="../js/menu.js"></script>

      <h2>Hubungi Kami</h2>
    <p>Silakan hubungi kami melalui formulir di bawah ini:</p>
    <form action="submit_contact.php" method="POST">
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" required><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>
        <label for="message">Pesan:</label><br>
        <textarea id="message" name="message" rows="4" required></textarea><br>
        <button type="submit">Kirim Pesan</button>
    </form> 
</body>


</html>
    

