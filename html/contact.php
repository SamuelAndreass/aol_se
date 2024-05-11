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

      <style>:root{
    --primary: #2BD232;
    --bg: #ece8e1
    ;
}
*{
    margin:0;
    padding: 0;
    box-sizing: border-box;
    outline: none;
    border: none;
    text-decoration: none;

}

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
  }
  
  header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: white;
    border-bottom: 1px solid rgb(216, 211, 211); /* Tambahkan ini */
    padding: 1rem;
    margin-right: 20px;
  }
  

  .logo-brand {
    margin-left: 20px;
      width: auto;
      height:40px;
      
    }
  nav ul {
    list-style-type: none;
    padding: 0;
    display: flex;
    margin-left: 45.2rem;
  }
  
  nav ul li {
    margin-left: 1rem;
  }
  
  nav ul li:last-child {
    margin-right: 1rem;
  }
  
  nav ul li a {
    text-decoration: none;
    color: #333;
    
    border-bottom: 2px solid transparent; /* Tambahkan ini */
  }
  nav ul li a:hover{
    text-decoration: none;
    border-bottom: 5px solid var(--primary); /* Tambahkan ini */
    padding-bottom: 1.6rem;
    color: #333;
  }
  .cta {
    display: flex;
    margin-left: 0px;
  }
  

  .cta .secondary-button {
    background-color: transparent;
    color: #4CAF50;
    padding: 0.5rem 1rem;
    border: 1px solid #4CAF50;
    border-radius: 4px;

  }
  .menu-cta-group {
    display: flex;
    align-items: center;
  }
  
  /* CSS */
.modal {
  
  display: none; /* Modal awalnya tersembunyi */
  position: fixed; /* Tetap berada di tempat saat di-scroll */
  z-index: 1; /* Berada di atas semua konten lain */
  left: 0;
  top: 0;
  width: 100%; /* Lebar penuh */
  height: 100%; /* Tinggi penuh */
  overflow: auto; /* Memungkinkan scroll jika diperlukan */
  background-color: rgb(0,0,0); /* Warna latar belakang */
  background-color: rgba(0,0,0,0.4); /* Warna latar belakang dengan sedikit transparansi */
}
.modal-content .nama{
  color: var(--primary);
  margin-bottom: 20px;
}
.modal-content {
  border-radius: 0.25rem;
  background-color: #fefefe;
  margin: 15% auto; /* 15% dari atas dan ditengah */
  padding: 20px;
  border: 1px solid #888;
  width: 25%; /* Lebar modal */
}
#login-btn-container{
  margin:auto;
  display: flex;
  justify-content: center;
}
#button-login{
  display: block;
  background-color: transparent;
    color: #4CAF50;
    padding: 0.5rem 1rem;
    padding-left: 10px;
    width: 100%;
    padding-right: 10px;
    border: 1px solid #4CAF50;
    border-radius: 0.25rem;
    margin: auto;
    text-align: center;
}

.login-w{
  text-align: center;
}

.register-e{
  color: var(--primary);
}

#phone{
  width: 100%;
  margin-top: 20px;
  border-bottom: 1px solid black;
  margin-bottom: 20px;
  margin-left: auto;
  margin-right:auto;
} 

#pwd{
  width: 100%;
  margin-top: 20px;
  border-bottom: 1px solid black;
  margin-bottom: 20px;
  margin-left: auto;
  margin-right: auto;
}
/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
 
  
  footer {
    background-color: #f2f2f2;
    padding: 1rem;
    text-align: center;

  }

.navbar .navbar-extra a{
    color: #fff;
    font-size: 24px; /* Increase the font size */
  width: 40px; /* Adjust the width */
  height: 40px; /* Adjust the height */
    margin: 0 0.5rem;

}
/* Tambahkan ini */

.navbar .navbar-extra a:hover{
    color: var(--primary);
}



/* Tambahkan ini */
#navbar {
    display: flex;
  }
.hamburger {
    display: none;
}
/* Tambahkan ini */
.cta-hamburger-group {
    display: flex;
    align-items: center;
  }
  
.bar {
    display: block;
    width: 25px;
    height: 3px;
    margin: 5px auto;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    background-color: #101010;
}  

@media screen and (max-width: 1190px) {
    #navbar {
      display: none;
    }
  
    .hamburger{
      display: block;
    }
    .secondary-button{
        display: none;
    }
  }

  @media screen and (max-width: 990px) {
    #navbar {
      display: none;
    }
  
    .hamburger{
      display: block;
    }
    .secondary-button{
        display: none;
    }
  }
  

/* tablet */
@media (max-width: 768px){
    html{

        font-size: 76.5%;
    }


    #hamburger-box{
        display: block;
    }

    .navbar .navbar-nav{
        position: absolute;
        top: 100%;
        right: -100%;
        background-color: rgb(255, 255, 255);
        width: 30rem;
        height: 100vh;
        transition: 0.3s;
    }
    .navbar .navbar-nav.active{
        right: 0;
    }

    .navbar .navbar-nav a{
        color: var(--bg);
        display: block;
        margin: 1.5rem;
        padding: 0.5px;
        font-size: 2rem;
    }

    .navbar .navbar-nav a::after {
        transform-origin: 0 0;
    }

    .navbar .navbar-nav a:hover::after {
        transform: scaleX(0.25);
    }


}


/* hp */
@media (max-width: 450px){
    html {
        font-size: 45%;
    }
    .secondary-button{
        display: none;
    }
    .countdown-item .number{
        padding-top: -5px;
        font-size: 8px;
        padding-left: 3px;
   }
    .countdown-item{
        padding-right: 1px;
        padding-left: 1px;
    }
    .countdown-label{
        font-size: 6px;
        margin-left: 7px;
        margin-right: 6px;
    }
    .image-paragraph{
      width: 30px;
      height: 350px;
    }
    #search{
      font-size: 300%;
    }
    .bnn {
     margin-left: 70px; 
    }
    .info .paragraph-container{
      font-size: 10px;
    }
    .text1 p{
      font-size: 11.3px;
    }
}


</style>
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
    

