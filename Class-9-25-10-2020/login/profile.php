<?php 
session_start();
if(!isset($_SESSION['username']) && empty($_SESSION['username'])){
    header( 'Location:index.php' );
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile page</title>
</head>
<body>
    <h1>Welcome <?php echo $_SESSION['username'];?></h1>

    <a href="logout.php">Logout</a>
</body>
</html>