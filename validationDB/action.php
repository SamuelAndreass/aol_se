<?php
include("../page/config.php");
// Start the session
$rr=  '';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the phone and password from the form


    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $pwd = isset($_POST['pwd']) ? $_POST['pwd'] : '';

    // Query the database to find the user
    $sql = "SELECT * FROM users WHERE nomorTelpon = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param('s', $phone);
    $stmt->execute();
    $result = $stmt->get_result();
    
    // Check if the user exists and the password is correct
    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        if ($pwd === $user['userPassword']) {
            // The password is correct. Authenticate the user.
            $_SESSION['user'] = $user;
            
            echo '<script>
            alert("berhasil login");
            window.location.href = "../page/menu.php";
            </script>';
            $error = false;
          } else {
              // The password is incorrect. Show an error message.
              $_SESSION['rr'] = 'Password atau nomor handphone tidak sesuai';
              echo '<style>
              #em {
                  color: black;
                  font-size: 13px;
                  padding: 15px;
                  display: block;
              }
              #emw {
                  
                  border-color: #ff818266;
                  margin-bottom: 20px;
                  border-radius: 6px;
                  background-color: #ffebe9;
                  display: block;
              }
          </style>';
          $error = true;
          }
      } else {
        $_SESSION['rr'] = 'Password atau nomor handphone tidak sesuai';
        echo '<style>
        #em {
            color: black;
            font-size: 13px;
            padding: 15px;
            display: block;
        }
        #emw {
            display: block;
            border-color: #ff818266;
            margin-bottom: 20px;
            border-radius: 6px;
            background-color: #ffebe9;
        }
    </style>';
    $error = true;
    header('Content-Type: application/json');
      echo json_encode(['error' => $error]);
      }
      
    // Close the connection
    $con->close();
}
?>

