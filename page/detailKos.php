<?php 
  session_start();
  include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Kostify</title>
<meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

 	<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css" />
  <link rel="stylesheet" href="../assets/style.css"/>
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="../assets/bootstrap/js/bootstrap.js"></script>
  <script src="../assets/script.js"></script>
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
<!-- Icon -->

<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src="https://kit.fontawesome.com/b70a66a843.js" crossorigin="anonymous"></script>
<!-- Owl stylesheet -->
<link rel="stylesheet" href="../assets/owl-carousel/owl.carousel.css">
<link rel="stylesheet" href="../assets/owl-carousel/owl.theme.css">
<script src="../assets/owl-carousel/owl.carousel.js"></script>
<!-- Owl stylesheet -->
<!-- slitslider -->
    <link rel="stylesheet" type="text/css" href="../assets/slitslider/css/style.css" />
    <link rel="stylesheet" type="text/css" href="../assets/slitslider/css/custom.css" />
    <script type="text/javascript" src="../assets/slitslider/js/modernizr.custom.79639.js"></script>
    <script type="text/javascript" src="../assets/slitslider/js/jquery.ba-cond.min.js"></script>
    <script type="text/javascript" src="../assets/slitslider/js/jquery.slitslider.js"></script>
<!-- slitslider -->
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
              <li><a href="faq.php" style=" color:black !important;"  >FAQ</a></li>
              <li><a href="aboutUS.php" style=" color:black !important;">Tentang Kami</a></li>
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
<!-- Header Starts -->


<div class="container">
<div class="properties-listing spacer">

<div class="row">
<div class="col-lg-3 col-sm-4 hidden-xs">

<div class="hot-properties hidden-xs">
<h4>Lihat kos lainnya</h4>
<?php 
        $counter = 0;
        $viewedKos = $_GET["viewKos"];
        $queryKos = "SELECT * FROM kos s JOIN pemilik_kos ps ON s.pemilikID = ps.pemilikID";
        $getKos = mysqli_query($con,$queryKos);
          if (mysqli_num_rows($getKos) > 0){
              while($row = mysqli_fetch_assoc($getKos)){
                $kostId = $row['idKos'];
                if($kostId == $viewedKos){
                  $currNama = $row["namaKos"];
                  $currHarga = $row["hargaKos"];
                  $currGambar = $row["gambarKos"];
                  $currAlamat = $row["alamatKos"];
                  $pemilik = $row["namaUser"];
                  $hppemilik = $row["nomorTelpon"];
                  continue;
                }if($counter == 3){
                  break;
                }
                ?>
               <div class="row">
                  <div class="col-lg-4 col-sm-5"><img src=<?php echo '../images/' . $row['gambarKos'];?> class="img-responsive img-circle" alt="properties"/></div>
                  <div class="col-lg-8 col-sm-7">
                    <h5 style="color:black;text-decoration:none;font-size: 15px;overflow:hidden;width:auto;"><a href=<?php echo "detailKos.php?viewKos={$row["idKos"]}";?>>
                        <?php echo $row['namaKos'];?><br>
                        <?php echo $row['alamatKos'];?>
                      </a></h5>
                    <p class="price"><?php echo $row['hargaKos'];?></p> 
                  </div>
                </div>
              <?php 
              $counter++;  
            } 
          }
     ?>
</div>





</div>

<div class="col-lg-9 col-sm-8 ">


<div class="row">
  <div class="col-lg-8">
  <div class="property-images">
    <!-- Slider Starts -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators hidden-xs">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
        <li data-target="#myCarousel" data-slide-to="3" class=""></li>
      </ol>
      <div class="carousel-inner">
        <!-- Item 1 -->
        <div class="item active">
          <img src="../images/properties/4.jpg" class="properties" alt="properties" />
        </div>
        <!-- #Item 1 -->

        <!-- Item 2 -->
        <div class="item">
          <img src="../images/properties/2.jpg" class="properties" alt="properties" />
         
        </div>
        <!-- #Item 2 -->

        <!-- Item 3 -->
         <div class="item">
          <img src="../images/properties/1.jpg" class="properties" alt="properties" />
        </div>
        <!-- #Item 3 -->

        <!-- Item 4 -->
        <div class="item ">
          <img src="../images/properties/3.jpg" class="properties" alt="properties" />
          
        </div>
        <!-- # Item 4 -->
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
<!-- #Slider Ends -->

  </div>
  



  <div class="spacer"><h4><span class="glyphicon glyphicon-th-list"></span>Detail</h4>
  <p>Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. Dramatically maintain clicks-and-mortar solutions without functional solutions.</p>
  <p>Completely synergize resource sucking relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas. Dynamically innovate resource-leveling customer service for state of the art customer service</p>
  
  </div>
  <div><h4><span class="glyphicon glyphicon-map-marker"></span> Location</h4>
<div class="well"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63467.15327853382!2d106.55907622167972!3d-6.171298999999982!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f9006859126f%3A0x157c0d6292c74288!2sKost%20Singgahsini%20Daan%20Mogot%20Sukarasa%20Tangerang!5e0!3m2!1sid!2sid!4v1716207533483!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
  </div>

  </div>
  <div class="col-lg-4">
  <div class="col-lg-12  col-sm-6">
<div class="property-info">
<p class="price"><?php echo $currNama?></p>
  <p class="area"><span class="glyphicon glyphicon-map-marker"></span><?php echo $currAlamat?></p>
  
  <div class="profile">
  <span class="glyphicon glyphicon-user"></span> Dikelola oleh
  <p><?php echo $pemilik?><br><?php echo $hppemilik?></p>
  </div>
</div>


</div>
<div class="col-lg-12 col-sm-6 ">
<div class="box-pesan">
    <div class="diskon">
     
      <div class="wrapper-texet">
        <span class="discounted-price" style="text-decoration:none; color: black;"><?php echo "RP".$currHarga?></span> <span class="discounted-price-text">(Bulan pertama)</span>
      </div>
      <div class="button-wrapper1">
        <button class="button-tanya" onclick="window.location.href='https://wa.me/<?php $hp?>'">
        <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" style="margin-left:1px;margin-bottom:-1px;text-align: center;margin-right:5px;"   width="12" height="12" fill="currentColor" class="bi bi-chat-right-text" viewBox="0 0 16 16">
            <path d="M2 1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h9.586a2 2 0 0 1 1.414.586l2 2V2a1 1 0 0 0-1-1zm12-1a2 2 0 0 1 2 2v12.793a.5.5 0 0 1-.854.353l-2.853-2.853a1 1 0 0 0-.707-.293H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2z"/>
            <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6m0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5"/>
          </svg></span>
          <span>Tanya Pemilik</span>
        </button>
         
      </div>
      <div class="button-wrapper2">
        <button class="button-ajukan" onclick="larang()">Ajukan Sewa</button>
      </div>
      
    </div>
 </div>         
</div>
  </div>
</div>
</div>
</div>
</div>
</div>




<div class="footer">

<div class="container">



<div class="row">
            <div class="col-lg-3 col-sm-3">
                   <h4>Information</h4>
                   <ul class="row">
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="about.php">About</a></li>
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="agents.php">Agents</a></li>         
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="blog.php">Blog</a></li>
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="contact.php">Contact</a></li>
              </ul>
            </div>
            
            <div class="col-lg-3 col-sm-3">
                    <h4>Newsletter</h4>
                    <p>Get notified about the latest properties in our marketplace.</p>
                    <form class="form-inline" role="form">
                            <input type="text" placeholder="Enter Your email address" class="form-control">
                                <button class="btn btn-success" type="button">Notify Me!</button></form>
            </div>
            
            <div class="col-lg-3 col-sm-3">
                    <h4>Follow us</h4>
                    <a href="#"><img src="../images/facebook.png" alt="facebook"></a>
                    <a href="#"><img src="../images/twitter.png" alt="twitter"></a>
                    <a href="#"><img src="../images/linkedin.png" alt="linkedin"></a>
                    <a href="#"><img src="../images/instagram.png" alt="instagram"></a>
            </div>

             <div class="col-lg-3 col-sm-3">
                    <h4>Contact us</h4>
                    <p><b>Bootstrap Realestate Inc.</b><br>
<span class="glyphicon glyphicon-map-marker"></span> 8290 Walk Street, Australia <br>
<span class="glyphicon glyphicon-envelope"></span> hello@bootstrapreal.com<br>
<span class="glyphicon glyphicon-earphone"></span> (123) 456-7890</p>
            </div>
        </div>
<p class="copyright">Copyright 2013. All rights reserved.	</p>


</div></div>




<!-- Modal -->
<div id="loginpop" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="row">
        <div class="col-sm-6 login">
        <h4>Login</h4>
          <form class="" role="form">
        <div class="form-group">
          <label class="sr-only" for="exampleInputEmail2">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label class="sr-only" for="exampleInputPassword2">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox"> Remember me
          </label>
        </div>
        <button type="submit" class="btn btn-success">Sign in</button>
      </form>          
        </div>
        <div class="col-sm-6">
          <h4>New User Sign Up</h4>
          <p>Join today and get updated with all the properties deal happening around.</p>
          <button type="submit" class="btn btn-info"  onclick="window.location.href='register.php'">Join Now</button>
        </div>

      </div>
    </div>
  </div>
</div>
<!-- /.modal -->
<script src="../js/detailkos.js"></script>
<script>
  function larang(){
    alert("Harap melakukan login terlebih dahulu");
  }
</script>
</body>
</html>



