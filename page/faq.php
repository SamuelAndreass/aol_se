
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KOSTIFY</title>

 <!-- css -->
  <link rel="stylesheet" type="text/css"href="../css/faq.css">
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
              <li><a href="aboutUS.php">Tentang Kami</a></li>
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

      <!-- modal login menu -->
      <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
          <span class="close">&times;</span> 
          <div id="gatau"></div>
          <p id="title-modal-login">Masuk ke 
            <h1 class="nama">KOSTIFY</h1></p>
              <div style="margin-bottom:12px;">Saya ingin masuk sebagai</div>   
              <div class="selection-role">
              <div class="pencari-kos" id="pencari-kos" onclick="showModal2()">
                    <img src="../images/login-tenant.svg" alt="" height="65">
                    <p style="font-size: 16px; font-weight: 700;  line-height: 24px; font-family: Lato, sans-serif;">Pencari kos</p>
                  </div>
                  <div class="pemilik" id="pemilik" onclick="showModal3()">
                    <img src="../images/login-owner.svg" height="65"alt="">
                    <p style="font-size: 16px; font-weight: 700; line-height: 24px; font-family: Lato, sans-serif;">Pemilik kos</p>
                  </div>
              </div>
        </div>       
      </div>
      
      <!-- login pencari kos -->
      <div id="modallogin" class="modallogin">
        <!-- Modal content -->
        <div class="modallogin-content" >
          <span class="tutup">&times;</span> 
          
          <?php   
              include('../validationDB/action.php');
              $rr = isset($_SESSION['rr']) ? $_SESSION['rr'] : '';
              ?>
          <p id="title-modal-login">
            <h1 class="nama">Login Pencari Kos</h1></p>
            
            <div id="emw">
              <div id="em" style="display:block"><?php echo htmlspecialchars($rr, ENT_QUOTES, 'UTF-8'); ?></div>
            </div>
            <form method="POST" action="" onsubmit="return validateForm()">
          <div class="input">
            <label for="phone" id="telpon">Nomor Handphone:</label><br>
            <input type="text" id="phone" name="phone" style="font-size: 15px; padding-left:10px; padding-left:10px;"><br>
            <div id="p-message2" style="color:red; font-family:'Lato', sans-serif; font-size:inherit; margin-bottom:10px;"></div>
          </div>
          <div class="input">
            <label for="pwd" id="password">Password:</label><br>
            <input type="password" id="pwd" name="pwd" style="font-size: 15px; padding-left:10px; padding-left:10px;"><br>
            <div id="pwd2" style="color:red; font-family:'Lato', sans-serif; font-size:inherit; margin-bottom:30px;"></div>
          </div>
            <div class="login-btn-container">
              <button type="submit"value ="Login"id="button-login" disabled="disabled">Login</button>
              <br>
              <br>
            </div>  
            <p>Belum punya akun Kostify? 
              <a href="buatAkun.php" class="register-e">Daftar sekarang</a></p>
            
          </form>
          <script>
            $(document).ready(function() {
            $('form').on('submit', function(e) {
            e.preventDefault();
                // Get the form data
                var formData = $(this).serialize();
                // Send the data using post
                $.ajax({
                    type: 'POST',
                    url: '../validationDB/action2.php',
                    data: formData,
                    dataType: 'json',
                    success: function(response) {
                        if (response.error) {
                            // Show the error message
                            $('#em').text('Password atau nomor handphone tidak sesuai');
                            $('#emw').show();
                        } else {
                            // Redirect to the menu page
                            window.location.href = "../page/menu.php";
                        }
                    }
                });
            });
        });

          </script>          
        </div>       
      </div>

    <!-- login pemilik kos -->
    <div id="modallogin2" class="modallogin2" >
        <!-- Modal content -->
        <div class="modallogin2-content">
          <span class="tutup2">&times;</span> 
          
          <?php   
              include('../validationDB/action.php');
              $rr = isset($_SESSION['rr']) ? $_SESSION['rr'] : '';
              ?>
          <p id="title-modal-login">
            <h1 class="nama">Login Pemilik Kos</h1></p>
            
            <div id="emw1">
              <div id="em1" style="display:block"><?php echo htmlspecialchars($rr, ENT_QUOTES, 'UTF-8'); ?></div>
            </div>
            <form method="POST" action="" onsubmit="return validateForm()">
          <div class="input">
            <label for="phone" id="telpon">Nomor Handphone:</label><br>
            <input type="text" id="phone3" name="phone" style="font-size: 15px; padding-left:10px; padding-left:10px;"><br>
            <div id="p-message3" style="color:red; font-family:'Lato', sans-serif; font-size:inherit; margin-bottom:10px;"></div>
          </div>
          <div class="input">
            <label for="pwd" id="password3">Password:</label><br>
            <input type="password" id="pwd3" name="pwd" style="font-size: 15px; padding-left:10px; padding-left:10px;"><br>
            <div id="pwd4" style="color:red; font-family:'Lato', sans-serif; font-size:inherit; margin-bottom:30px;"></div>
          </div>
            <div class="login-btn-container">
              <button type="submit"value ="Login"id="button-login3" disabled="disabled">Login</button>
              <br>
              <br>
            </div>  
            <p>Belum punya akun Kostify? 
              <a href="buatAkun.php" class="register-e">Daftar sekarang</a></p>
          </form>  
          <script>
            $(document).ready(function() {
            $('form').on('submit', function(e) {
            e.preventDefault();
                // Get the form data
                var formData = $(this).serialize();
                // Send the data using post
                $.ajax({
                    type: 'POST',
                    url: '../validationDB/action.php',
                    data: formData,
                    dataType: 'json',
                    success: function(response) {
                        if (response.error) {
                            // Show the error message
                            $('#em1').text('Password atau nomor handphone tidak sesuai');
                            $('#emw1').show();
                        } else {
                            // Redirect to the menu page
                            alert("login berhasil dilakukan");
                            window.location.href = "../afterLogin/menu.php";
                        }
                    }
                });
            });
        });

          </script>        
        </div>       
      </div>
    <!-- login penyewa -->
    <!-- template header -->  
      
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
   
</body>
<script src="../js/fuc.js"></script>
<script>var acc = document.getElementsByClassName("accordion");
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
 
</html>
