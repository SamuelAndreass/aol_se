<?php session_start();
include("config.php")?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/editProfile.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    />
   
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">

  </head>
</head>
<body>
    

  <?php
    $id = $_SESSION['id'];
    $r_phone = ""; // Declare $r_name here
    $q1 = mysqli_query($con,"SELECT * FROM users where id = '$id'");
    $r1 = mysqli_fetch_assoc($q1);
    if ($r1){
        $r_name = $r1['namaUser'];
        $r_email = $r1['emailUser'];
        $r_phone = $r1['nomorTelpon'];
        $r_pendidikan = $r1['pendidikanTerakhir'];
        $r_status = $r1['status'];
        $r_gender = $r1['jenisKelamin'];
        $r_pekerjaan = $r1['pekerjaan'];
        $r_id = $r1['id'];
    }
  ?>
    <nav class="navbar-nav2">
        <a href="menu.php"><img src="../asset/Grey and Black Simple Minimalist Real Estate Logo (1) (1).png" class="navbar-logo" alt="logo" /></a>
        <ul class="navbar-list">
          <li><a href="faq2.php">FAQ</a></li>
          <li><a href="aboutUS2.php">Tentang Kami</a></li>
        </ul>
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
            <a href="#">
              <i class="fa-solid fa-cart-shopping"></i>
              Riwayat Transaksi
            </a>
          </li>
          <li class="profile-dropdown-list-item">
            <a href="menu.php">
              <i class="fa-solid fa-arrow-right-from-bracket"></i>
              Keluar
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container-xl px-4 mt-4">
        <!-- Account page navigation-->
        <div class="row">
            <div class="col-xl-4">
                <!-- Profile picture card-->
                <div class="card mb-4 mb-xl-0">
                    <div class="card-header">Profile Picture</div>
                    <div class="card-body text-center">
                        <!-- Profile picture image-->
                        <img class="img-account-profile rounded-circle mb-2" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                        <!-- Profile picture help block-->
                        
                        
                    </div>
                </div>
            </div>
           
            <div class="col-xl-8">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header">Account Details</div>
                    <div class="card-body">

                    <?php 
               if(isset($_POST['submit'])){
                $username = $_POST['userN'];
                $gender = $_POST['gender'];
                $pendidikan = $_POST['jenjang-pendidikan'];
                $status = $_POST['status'];
                $pekerjaan = $_POST['pekerjaan'];
                $email = $_POST['exampleInputEmail1'];
                $phone = $_POST['inputPhone1'];
                $id = $_SESSION['id'];

                $edit_query = mysqli_query($con,"UPDATE users SET jenisKelamin='$gender',nomorTelpon='$phone',namaUser='$username', emailUser='$email', pekerjaan='$pekerjaan', pendidikanTerakhir='$pendidikan', status='status'WHERE Id=$id ") or die("error occurred");

                if($edit_query){
                    echo "<div class='message'>
                    <p>Profile berhasil di update!</p>
                </div> <br>";
              echo "<a href='editProfile.php'><button class='btn btn-primary'>Kembali ke setting profile</button>";
       
                }
               }else{
                ?>
                        <form method="POST">
                            <!-- Form Group (username)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="inputUsername">Nama Lengkap</label>
                                <input class="form-control" id="inputUsername" name="userN" type="text" placeholder="Enter your username" required value="<?php echo $r_name?> ">

                            </div>
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (first name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputFirstName">Jenis Kelamin</label>
                                    <select name="gender" class="form-select" aria-r_gender="Default select example">
                                      <option  <?php if($r_gender == ''){ echo 'selected'; }?>></option>
                                      <option value="Perempuan" <?php if($r_gender == 'Perempuan'){ echo 'selected'; } ?>>Perempuan</option>
                                      <option value="Laki-laki" <?php if($r_gender == 'Laki-laki'){ echo 'selected'; } ?>>Laki-laki</option>
                                    </select>
                                </div>
                                <!-- Form Group (last name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputLastName">Status</label>
                                    <select name="status" class="form-select" aria-label="Default select example">

                                      <option value="Belum kawin" <?php if($r_status == 'Belum kawin'){ echo 'selected'; } ?> >Belum kawin</option>
                                      <option value="Kawin" <?php if($r_status == 'Kawin'){ echo 'selected'; } ?>>Kawin</option>
                                      <option value="Kawin memiliki anak" <?php if($r_status == 'Kawin memiliki anak'){ echo 'selected'; } ?>>Kawin memiliki anak</option>
                                    </select>
                                  </div>
                            </div>
                            <!-- Form Row        -->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (organization name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputOrgName">Pendidikan terakhir</label>
                                    <select name="jenjang-pendidikan"class="form-select" aria-label="Default select example" >
                                    <option  <?php if($r_pendidikan == ''){ echo 'selected'; }?>></option>
                                    <option value="S3" <?php if($r_pendidikan == 'S3'){ echo 'selected'; } ?>>S3</option>
                                    <option value="S2" <?php if($r_pendidikan == 'S2'){ echo 'selected'; } ?>>S2</option>
                                    <option value="S1" <?php if($r_pendidikan == 'S1'){ echo 'selected'; } ?>>S1</option>
                                    <option value="Diploma" <?php if($r_pendidikan == 'Diploma'){ echo 'selected'; } ?>>Diploma</option>
                                    <option value="SMK/MAK" <?php if($r_pendidikan == 'SMK/MAK'){ echo 'selected'; } ?>>SMK/MAK</option>
                                    <option value="SMA/MA" <?php if($r_pendidikan == 'SMA/MA'){ echo 'selected'; } ?>>SMA/MA</option>
                                    <option value="SMP/MTS" <?php if($r_pendidikan == 'SMP/MTS'){ echo 'selected'; } ?>>SMP/MTS</option>
                                    <option value="SD/MI" <?php if($r_pendidikan == 'SD/MI'){ echo 'selected'; } ?>>SD/MI</option>
                                    </select>
                                </div>
                                <!-- Form Group (location)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputLocation">Pekerjaan</label>
                                    <select name="pekerjaan" class="form-select" aria-label="Default select example">
                                      <option  <?php if($r_pekerjaan == ''){ echo 'selected'; }?>></option>
                                      <option value="Mahasiswa"  <?php if($r_pekerjaan == 'Lainnya'){ echo 'selected'; } ?>>Mahasiswa</option>
                                      <option value="Karyawan"  <?php if($r_pekerjaan == 'Karyawan'){ echo 'selected'; } ?>>Karyawan</option>
                                      <option value="Lainnya"  <?php if($r_pekerjaan == 'Lainnya'){ echo 'selected'; } ?>>Lainnya</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Form Group (email address)-->
                            <div class="mb-3">
                                
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control" name="exampleInputEmail1" aria-describedby="emailHelp" required value=<?php echo $r_email;?>>
                              
                            </div>
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (phone number)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputPhone">Phone number</label>
                                    <input class="form-control" name="inputPhone1" class="inputPhone1" type="tel" placeholder="Enter your phone number" value="<?php echo $r_phone;?>">
                                </div>
                                <!-- Form Group (birthday)-->
                                
                            </div>
                            <!-- Save changes button-->
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="../js/editprofile.js"></script>
</body>
</html>