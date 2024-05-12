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
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
      <?php include('../validationDB/action.php')?>
     
      <div id="myModal" class="modal">
     
        <!-- Modal content -->
        <div class="modal-content">
          <span class="close">&times;</span> 
          

          <p id="title-modal-login">Masuk ke 
            <h1 class="nama">KOSTIFY</h1></p>
    
          <form method="POST" action="">
          <div class="input">
            <label for="phone" id="telpon">Nomor Handphone:</label><br>
            <input type="text" id="phone" name="phone"><br>
            <div id="p-message2" style="color:red; font-family:'Lato', sans-serif; font-size:10px"></div>
          </div>
          <div class="input">
            <label for="pwd" id="password">Password:</label><br>
            <input type="password" id="pwd" name="pwd"><br>
            <div id="pwd2"></div>
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
$(document).ready(function(){
  $("form").on("submit", function(event){
    

    $.ajax({
      url: '../validationDB/action.php', // Change this to the path of your PHP script
      type: 'post',
      data: $(this).serialize(),
      success: function(response){
    var data = JSON.parse(response);
    if (data.status === 'success') {
        window.location.href = 'buatAkun.php';
    } else {
        // Select the modal element and display the error message
        $('.modal-content').append('<p>' + data.message + '</p>');
    }
}

    });
  });
});
</script>
        </div>
       
      </div>
      <!-- template header -->
      <script src="../js/menu.js"></script>

      
</body>


</html>