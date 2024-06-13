<?php 
session_start();
include("config.php");?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/aboutUS.css">
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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/bootModif.css">
    <title></title>
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
          <p id="title-modal-login">
            <h1 class="nama">Login Pencari Kos</h1></p>
            
            <div id="emw">
              <div id="em" style="display:block"><?php echo htmlspecialchars($rr, ENT_QUOTES, 'UTF-8'); ?></div>
            </div>
            <form method="POST" action="" id="1">
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
              <a href="buatAkunPenyewa.php" class="register-e">Daftar sekarang</a></p>
            
          </form>
          <script>
         $(document).ready(function() {
            $('#1').on('submit', function(e) {
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
                            $('#em').text('Password atau nomor handphone tidak sesuai');
                            $('#emw').show();
                        } else {
                            // Redirect to the menu page
                            if(response.role == 'admin'){
                              window.location.href = "../page_admin/home.php"
                            }else{
                              window.location.href = "../page_afterlogin/menu2.php";
                            }
                            
                            
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
          
          
          <p id="title-modal-login">
            <h1 class="nama">Login Pemilik Kos</h1></p>
            
            <div id="emw1">
              <div id="em1" style="display:block"><?php echo htmlspecialchars($rr, ENT_QUOTES, 'UTF-8'); ?></div>
            </div>
            <form method="POST" action="" id="2">
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
              <a href="buatAkunPemilik.php" class="register-e">Daftar sekarang</a></p>
          </form>  
          <script>
            $(document).ready(function() {
            $('#2').on('submit', function(e) {
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
                            $('#em1').text('Password atau nomor handphone tidak sesuai');
                            $('#emw1').show();
                        } else {
                            // Redirect to the menu page
                            window.location.href = "../page_afterlogin/menu3.php";
                            
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
        
  <footer class="footer">

<!-- Widgets - Bootstrap Brain Component -->
<section class=" py-4 py-md-5 py-xl-8 border-top border-light">
  <div class="container overflow-hidden">
    <div class="row gy-4 gy-lg-0 justify-content-xl-between">
      <div class="col-12 col-md-4 col-lg-3 col-xl-4">
        <div class="widget">
          <a href="#!">
            <img src="../asset/Grey and Black Simple Minimalist Real Estate Logo (1) (1).png" alt="BootstrapBrain Logo" width="175" height="57">
          </a>
          <p style="margin-left:10px; margin-top:10px;">Dapatkan informasi kos-kosan 'terbaik' hanya di Kostify</p>
        </div>
       
      </div>
      <div class="col-12 col-md-4 col-lg-3 col-xl-2">
        <div class="widget">
          <h4 class="widget-title mb-4">Follow us</h4>
          <ul class="list-unstyled m-0 p-0 d-flex  ">
            <li class="me-3">
              <a href="#!" class="link-dark link-opacity-75-hover">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                </svg>
              </a>
            </li>
            <li class="me-3">
              <a href="#!" class="link-dark link-opacity-75-hover">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                  <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                </svg>
              </a>
            </li>
            <br>
            <li class="me-3">
              <a href="#!" class="link-dark link-opacity-75-hover">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                  <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                </svg>
              </a>
            </li>
            <li class="">
              <a href="#!" class="link-dark link-opacity-75-hover">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                </svg>
              </a>
            </li>
          </ul>
         
        </div>
      </div>
      <div class="col-12 col-md-4 col-lg-3 col-xl-2">
        <div class="widget">
          <h4 class="widget-title mb-4">Pelajari lebih lanjut</h4>
          <ul class="list-unstyled">
            <li class="mb-2">
              <a href="faq.php" class="link-secondary text-decoration-none">Tentang kami</a>
            </li>
           
    
          </ul>
        </div>
      </div>
      <div class="col-12 col-lg-3 col-xl-2">
        <div class="widget">
          <h4 class="widget-title mb-4">HUBUNGI KAMI</h4>
          <p class="mb-4"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
                </svg> kostify@gmail.com <br> <br>
            
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                </svg> 08129212782</p>
         
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Copyright - Bootstrap Brain Component -->
<div class="bg-light py-4 py-md-5 py-xl-8 border-top border-light-subtle">
  <div class="container overflow-hidden">
    <div class="row gy-4 gy-md-0 align-items-md-center">
      <div class="col-xs-12 col-md-7 order-1 order-md-0">
        <div class="copyright text-center text-md-start">
          &copy; 2024. All Rights Reserved.
        </div>
        
      </div>

   

        </div>
      </div>
    </div>
  </div>
</div>

</footer>
    <script src="../js/aboutus.js"></script>
</body>
</html>