<?php 
    include('config.php');

    $conn = mysqli_connect(SERVER_NAME,USER_NAME,PASSWORD,DB_NAME);
    if (!$conn) {
        die('Database connection failed').mysqli_connect_error();
    }
 // Print host information
echo "Connect Successfully. Host info: " . mysqli_get_host_info($conn);

?>