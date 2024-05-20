
<?php
// Include your database configuration file
include("../page/config.php");

// Check if 'email' is sent via POST
if (isset($_POST['email']) && !empty($_POST['email'])) {
    // Get the phone number from POST and sanitize it
    $mail = mysqli_real_escape_string($con, $_POST['email']);
  
    // Prepare a SQL query to check if the phone number exists in your database
    $query = "SELECT emailUser FROM users WHERE emailUser = '$mail'";
  
    // Execute the query
    $result = mysqli_query($con, $query);
  
    // Check if the query was successful
    if (!$result) {
      die('Error: ' . mysqli_error($con));
    }

  // Check if the email exists
  if (mysqli_num_rows($result) > 0) {
    // If the email exists, send a response
    echo "Email already exists";
  }
}

?>

