<?php
    $con = mysqli_connect("localhost","root","", "aol_se");
    if (mysqli_connect_errno()) {
        die("Failed to connect to the database: " . mysqli_connect_error());
    }
?>