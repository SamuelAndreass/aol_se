<?php
// Include yourdatabase configuration file
include("../html/config.php");

// Check if 'phone' is sent via POST
if (isset($_POST['phone']) && !empty($_POST['phone'])) {
    // Get the phone number from POST and sanitize it
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
  
    // Prepare a SQL query to check if the phone number exists in your database
    $query = "SELECT nomorTelpon FROM users WHERE nomorTelpon = '$phone'";
  
    // Execute the query
    $result = mysqli_query($con, $query);
  
    // Check if the query was successful
    if (!$result) {
      die('Error: ' . mysqli_error($con));
    }

  // Check if the phone number exists
  if (mysqli_num_rows($result) > 0) {
    // If the phone number exists, send a response
    echo "Phone already exists!";
    }
}
?>
