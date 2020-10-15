<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
/*     if($_SERVER['REQUEST_METHOD'] == 'POST'){

} */
$fieldError = '';
if ( isset( $_POST['submit'] ) ) {
    $numOne = $_POST['numOne'];
    $numTwo = $_POST['numTwo'];
    if ( empty( $numOne ) || empty( $numTwo ) ) {
        $fieldError = "Field must not be empty";
    } else {
        function add( $x, $y ) {
            echo $x + $y;
        }
        add( $numOne, $numTwo );
    }

}

?>
    <form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ) ?>" method="post" enctype="multipart/form-data">
        <p>Enter number one <br>
        <input type="number" name="numOne">
        </p>
         <p>Enter number two <br>
        <input type="number" name="numTwo">
        </p>
        <p style="color:red"><?php echo $fieldError??""; ?></p>
        <button type="submit" name="submit">Submit</button>
        <!-- <input type="submit" name="submit" value="Submit"> -->
    </form>

</body>
</html>