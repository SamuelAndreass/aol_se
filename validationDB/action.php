<?php
include("config.php");
// Start the session


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
            echo json_encode(['status' => 'success']);
          } else {
              // The password is incorrect. Show an error message.
              echo json_encode(['status' => 'error', 'message' => 'Incorrect password.']);
              
          }
      } else {
          // The user does not exist. Show an error message.
          echo json_encode(['status' => 'error', 'message' => 'No user found with that phone number.']);
      }

    // Close the connection
    $con->close();
}
?>