<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload</title>
</head>
<body>
<?php
$errorMsg = '';
if ( isset( $_POST['submit'] ) ) {
    if ( $_FILES['image']['error'] > 0 ) {
        $errorMsg = "Please select image first";
    } else {
        //Simple image upload
        /* $uploadDir = 'uploads/';
        $name     = $_FILES['image']['name'];
        $tmpName  = $_FILES['image']['tmp_name'];
        $fileSize = $_FILES['image']['size'];
        $fileType = $_FILES['image']['type'];
        move_uploaded_file($tmpName,$uploadDir.$name);
        echo "Image uploaded successfully"; */

        //image upload with validation
        $fileName = $_FILES['image']['name'];
        $fileSize = $_FILES['image']['size'];
        $fileTmpName = $_FILES['image']['tmp_name'];
        $fileType = $_FILES['image']['type'];

        $permited = array( 'jpg', 'jpeg', 'png', 'gif' );
        $div      = explode( ".", $fileName );

        $file_ext = strtolower( end( $div ) );
        $unique_image = substr( md5( time() ), 0, 8 ) . '.' . $file_ext;

        $uploaded_image = "uploads/" . $unique_image;

        if ( empty( $fileName ) ) {
            echo "<span style='color:red'>Please Select any Image !</span>";
        } elseif ( $fileSize > 1048567 ) {
            echo "<span style='color:red'>Image Size should be less then 1MB!
				</span>";
        } elseif ( in_array( $file_ext, $permited ) === false ) {
            echo "<span style='color:red'>You can upload only:-". implode( ', ', $permited ) . "</span>";
        } else {
            move_uploaded_file( $fileTmpName, $uploaded_image );

            echo "<span style='color:green'>File upload successfully</span>";

        }
    }

}
?>
    <form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ) ?>" method="post" enctype="multipart/form-data">
       <p> <input type="file" name="image"></p>
       <p style="color:red"><?php echo $errorMsg ?? ""; ?></p>
        <p>
            <input type="submit" name="submit" value="Upload Image">
        </p>
    </form>

</body>
</html>
