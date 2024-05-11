<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KOSTIFY</title>

 <!-- css -->
  <link rel="stylesheet" type="text/css"href="../css/styles.css">
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

      
      
    <div class ="wrapper">
        <h1>Frequently Asked<span class="spn"> Questions</span></h1>

        <div class ="faq active">
            <button class="accordion">
                Apa itu Kostify?
                <i class="fa-solid fa-chevron-down"></i>
            </button>
            <div class="pannel">
                <p>
                Kostify adalah platform daring yang dirancang khusus untuk membantu Anda menemukan kost yang sesuai dengan kebutuhan dan preferensi Anda. Kami menyediakan berbagai informasi tentang kost yang tersedia, termasuk lokasi, fasilitas, harga, dan lainnya, sehingga Anda dapat dengan mudah menemukan tempat tinggal yang cocok.
                </p>
            </div>
        </div>
        <div class ="faq active">
            <button class="accordion">
            Apakah Kostify memberikan informasi tentang fasilitas yang tersedia di kost??
                <i class="fa-solid fa-chevron-down"></i>
            </button>
            <div class="pannel">
                <p>
                Tentu saja. Kostify menyediakan informasi lengkap tentang fasilitas yang tersedia di setiap kost, termasuk fasilitas seperti kamar mandi dalam, akses internet, parkir, dapur bersama, dan banyak lagi. Ini membantu Anda untuk menemukan kost yang sesuai dengan preferensi dan kebutuhan Anda.
            </div>
        </div>
        <div class ="faq active">
            <button class="accordion">
            Bagaimana cara saya menghubungi pemilik kost yang terdaftar di Kostify?
                <i class="fa-solid fa-chevron-down"></i>
            </button>
            <div class="pannel">
                <p>
                Setelah Anda menemukan kost yang sesuai dengan keinginan Anda, Anda dapat menghubungi pemilik kost langsung melalui informasi kontak yang tersedia di halaman detail kost. 
                </p>
            </div>
        </div>
        <div class ="faq active">
            <button class="accordion">
            Bagaimana cara menggunakan Kostify?
                <i class="fa-solid fa-chevron-down"></i>
            </button>
            <div class="pannel">
                <p>
                </p>
            </div>
        </div>
        <div class ="faq active">
            <button class="accordion">
            Bagaimana Kostify menjaga keamanan data pengguna?
                <i class="fa-solid fa-chevron-down"></i>
            </button>
            <div class="pannel">
                <p>
                Kami mengambil keamanan data pengguna dengan serius di Kostify. Kami menerapkan langkah-langkah keamanan teknis dan prosedural yang ketat untuk melindungi informasi pribadi pengguna kami.                 </p>
            </div>
        </div>
    </div>
    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for(i = 0; i < acc.length ; i++){
            acc[i].addEventListener("click",function(){
                this.classList.toggle("active");
                this.parentElement.classList.toggle("active");

                var pannel =this.nextElementSibling;

                if(pannel.style.display === "block"){
                    pannel.style.display = "none";
                }else{
                    pannel.style.display = "block";
                }
            });
        }
    </script>
</body>

</html>
