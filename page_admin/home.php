<?php 
  session_start();
  include("../page/config.php");
  if(!isset($_SESSION['role']) || $_SESSION['role'] != 'admin'){
    echo "<script>alert('forbbiden access to this page')
    document.location='../page/menu.php'</script>";
    
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>Kostify admin</title>
	    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
	    <!----css3---->
        <link rel="stylesheet" href="css/custom.css">
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
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<!--google fonts -->
	
	    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
	
	
	<!--google material icon-->
      <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">

  </head>
  <body>
  

<div class="wrapper">


        <div class="body-overlay"></div>
		
		<!-------------------------sidebar------------>
		     <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3><img src="img/images.png" class="img-fluid"/><span>Kostify</span></h3>
            </div>
            
            <ul class="list-unstyled components">
            <li class="dropdown">
                   <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" 
					class="dropdown-toggle">
					<i class="material-icons">dashboard</i>Dashboard</a>
                    <ul class="collapse list-unstyled menu" id="homeSubmenu1">
                        <li>
                            <a href="home.php">Manage Pencari Kos</a>
                        </li>
                        <li>
                            <a href="home2.php">Manage Pemilik Kos</a>
                        </li>
                      
                    </ul>
                </li>
            </ul>
    
        </nav>
	
		<!--------page-content---------------->
    <div id="content">
		   
		   <!--top--navbar----design--------->
		   
		   <div class="top-navbar">
		      <div class="xp-topbar">

                <!-- Start XP Row -->
                <div class="row"> 
                    <!-- Start XP Col -->
                    <div class="col-2 col-md-1 col-lg-1 order-2 order-md-1 align-self-center">
                        <div class="xp-menubar">
                               <span class="material-icons text-white">signal_cellular_alt
							   </span>
                         </div>
                    </div> 
                    <!-- End XP Col -->

                    <!-- Start XP Col -->
                    <div class="col-md-5 col-lg-3 order-3 order-md-2">
                       
                    </div>
                    <!-- End XP Col -->

                    <!-- Start XP Col -->
                    <div class="col-10 col-md-6 col-lg-8 order-1 order-md-3">
                        <div class="xp-profilebar text-right">
							            <nav class="navbar p-0">
                            <ul class="nav navbar-nav flex-row ml-auto">   
                              <li class="dropdown nav-item active">   
                              <li class="nav-item">
                                </li>
                              <li class="nav-item dropdown">
                                <a class="nav-link" href="#" data-toggle="dropdown">
								                  <img src="img/avatar1.png" style="width:40px; border-radius:50%;"/>
								                  <span class="xp-user-live"></span>
								                </a>
								                <ul class="dropdown-menu small-menu">
                                    
                                    <li>
                                        <a href="../page/menu.php" id="logout-link"><span class="material-icons">logout</span>Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>   
            </nav>
							
                        </div>
                    </div>
                    <!-- End XP Col -->
                    <!-- End XP Col -->

                </div> 
                <!-- End XP Row -->

            </div>
		     <div class="xp-breadcrumbbar text-center">
                <h4 class="page-title">Dashboard</h4>  
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Kostify admin page</li>
                  </ol>                
            </div>
			
		   </div>
		   
		   
		   

		   
		   
		   

			 
			 
<!--------main-content------------->
		   
<div class="main-content">
			  <div class="row">
			    
				<div class="col-md-12">
				<div class="table-wrapper">
    <div class="table-title">
      <div class="row">
        <div class="col-sm-6 p-0 d-flex justify-content-lg-start justify-content-center">
          <h2 class="ml-lg-2">Pencari kos</h2>
        </div>
        <div class="col-sm-6 p-0 d-flex justify-content-lg-end justify-content-center">
          <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal">
		  <i class="material-icons">&#xE147;</i> <span>Tambah akun</span></a>
         
        </div>
      </div>
    </div>
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th>
            <span class="custom-checkbox">
								ID
							</span>
          </th>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Password</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <!-- Edit Modal HTML -->
        <div id="addEmployeeModal" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <form method="POST" action="crudactionPencari.php">
                  <div class="modal-header">
                    <h4 class="modal-title">Tambah akun</h4>
                    
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  </div>
                  <div class="ratau" style="display: none;">
                  <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Error!</strong><div class="error-message"></div>
                  </div>
                  </div>
                  <div class="modal-body">
                    <div class="form-group">
                      <label>Name</label>
                      <input type="text" class="form-control" name="username" required>
                    </div>
                    <div class="form-group">
                      <label>Email</label>
                      <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="form-group">
                      <label>Phone</label>
                      <input type="text" class="form-control" name="phone" required></input>
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input type="password" class="form-control" name="password" required>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-success" name="submit" value="Add">

                  </div>
                  
                </form>

              </div>
            </div>
          </div>
        <tr>
          <?php 
         $q1 = "SELECT * FROM pencari_kos";
         $r = mysqli_query($con, $q1);
         while ($row = mysqli_fetch_assoc($r)):
          $id = $row['pencariID'];
          $user = $row['namaUser'];
          $email = $row['emailUser'];
          $pass = $row['userPassword'];
          $telp = $row['nomorTelpon'];
          ?>
          <tr>
          <td> <span class="custom-checkbox">
            <?php echo $row['pencariID'];?>
            </span></td>
          <td><?php echo $row['namaUser'];?></td>
          <td><?php echo $row['emailUser'];?></td>
          <td><?php echo $row['nomorTelpon'];?></td>
          <td><?php echo $row['userPassword'];?></td>
          
          
			       
         
			        
          <td><a href="#editEmployeeModal<?= $id?>" class="edit" data-toggle="modal" data-target="#editEmployeeModal<?= $id?>">
                <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
              <a href="#deleteEmployeeModal<?= $id?>" class="edit" data-toggle="modal" data-target="#deleteEmployeeModal<?= $id?>">
                <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a></td>
          </td>
          </tr>


         

        
        
      </tbody>
      
          <!-- Edit Modal HTML -->
            <div id="editEmployeeModal<?= $id?>" class="modal fade">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <form method="POST" action="crudactionPencari.php">
                      <div class="modal-header">
                        <h4 class="modal-title">Edit akun</h4>
                     
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      </div>
                      <div class="modal-body">
                        <div class="form-group">
                          <label>Name <?php echo $id?></label>
                          <input type="text" class="form-control" name="username1" value="<?php echo $user?>"required>
                        </div>
                        <div class="form-group">
                          <label>Email</label>
                          <input name="id" value="<?= $row['pencariID']?>" type="hidden"></input>
                          <input type="email" class="form-control" name="email1" value="<?php echo $email?>" required>
                        </div>
                        <div class="form-group">
                          <label>Phone</label>
                          
                          <input type="text" class="form-control" name="phone1" value="<?php echo $telp?>" required>
                        </div>
                        <div class="form-group">
                          <label>Password</label>
                          <input type="text" class="form-control" name="password1" value="<?php echo $pass?>"required>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-info" value="Save" name="submit21">
                      </div>
                    </form>
                    
                  </div>
                </div>
              </div>


            <!-- Delete Modal HTML -->
            <div id="deleteEmployeeModal<?= $id?>" class="modal fade">
              <div class="modal-dialog">
                <div class="modal-content">
                  <form method="POST" action="crudactionPencari.php">
                    <div class="modal-header">
                      <h4 class="modal-title">Hapus akun</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <input name="id" value="<?= $row['pencariID']?>" type="hidden"></input>
                    <div class="modal-body">
                      <p>Apakah anda yakin akan menghapus [<?php echo $user?>] dari database?</p>
                      <p class="text-warning" style="color:red !important;"><small>Perubahan yang dilakukan bersifat permanen.</small></p>
                    </div>
                    <div class="modal-footer">
                      <input type="button" class="btn btn-default" data-dismiss="modal" value="Batalkan">
                      <input type="submit" class="btn btn-danger" value="Ya, saya yakin!" name="submitdel">
                    </div>
                  </form>

                </div>
              </div>
              </div>
          </div>
  <?php endwhile;?>   
    </table>
  </div>
</div>

				
		   
			  </div>




			 <!---footer---->
			 
			 
		
      </div>
		
		<footer class="footer">
			    <div class="container-fluid">
				  <div class="footer-in">
                    <p class="mb-0">&copy 2020 Kostify - All Rights Reserved.</p>
                </div>
				</div>
			 </footer>
</div>
</div>


<!----------html code compleate----------->








  
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="js/jquery-3.3.1.slim.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/jquery-3.3.1.min.js"></script>
  
  
  <script type="text/javascript">
        
		$(document).ready(function(){
		  $(".xp-menubar").on('click',function(){
		    $('#sidebar').toggleClass('active');
			$('#content').toggleClass('active');
		  });
		  
		   $(".xp-menubar,.body-overlay").on('click',function(){
		     $('#sidebar,.body-overlay').toggleClass('show-nav');
		   });
		  
		});
		
    document.getElementById('logout-link').addEventListener('click', function(event) {
  event.preventDefault();  // Prevent the link from being followed immediately

    // Make a request to end_session.php
    fetch('end_session.php')
    .then(function() {
        // After the session has been ended, follow the link
        window.location.href = '../page/menu.php';
        alert("Berhasil melakukan logout");
    });
  });
</script>
  
  



  </body>
  
</html>