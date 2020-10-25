<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<?php
session_start();
if ( isset( $_POST['submit'] ) ) {

    $name = $_POST['name'];

    $_SESSION['username'] = $name;
    $_SESSION['id'] = 123;
    header('Location:profile.php');

}
?>
    <form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ) ?>" method="post">
       <p> <input type="text" name="name" value="tayeba"></p>
        <p>
            <input type="submit" name="submit" value="Login">
        </p>
    </form>

</body>
</html>