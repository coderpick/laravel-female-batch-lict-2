<?php
include "connection.php";
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>PHP-CRUD</title>
</head>
<body>
    <?php
$nameErr = $emailErr = $phoneErr = "";
$name = $email = $phone = "";
if ( isset( $_POST['submit'] ) ) {
    $name = inputValidate( $_POST['name'] );
    $email = inputValidate( $_POST['email'] );
    $phone = inputValidate( $_POST['phone'] );
    if ( empty( $name ) ) {
        $nameErr = "Name field is required";
    } else {
        $name = $name;
    }
    if ( empty( $email ) ) {
        $emailErr = "Email field is required";
    } else {
        $email = $email;
    }
    if ( empty( $phone ) ) {
        $phoneErr = "Phone number field is required";
    } else {
        $phone = $phone;
    }
    if(empty($nameErr) || empty($emailErr) || empty($phoneErr)){

        $insert = "INSERT INTO users(name,email,phone)VALUES('$name','$email','$phone')";
        $result = mysqli_query($conn,$insert);
        if($result){
                session_start();
                $_SESSION['toastr'] = array(
                    'type'      => 'success', // or 'success' or 'info' or 'warning'
                    'message' => 'Data insert successfully',
                    'title'     => 'Data Save'
                );
            header("location:index.php");
        }else{
            die('Data insert failed').mysqli_connect_error();
        }


    }
}

function inputValidate( $data ) {
    $data = trim( $data );
    $data = stripslashes( $data );
    $data = htmlspecialchars( $data );
    return $data;
}
?>
    <div class="container">
        <div class="bg-primary text-white text-center pt-3 pb-3">
            <h3>PHP CRUD</h3>
        </div>
        <div class="row mt-3 mb-3">
          <div class="col-sm-6">
             <h2>Create new user</h2>
          </div>
          <div class="col-sm-6 text-right">
            <a href="index.php" class="btn btn-warning">Back</a>
          </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-10">
                <form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ) ?>" method="post">
                    <div class="form-group">
                        <label for='name'>Name</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Enter name">
                        <span class="help-block text-danger"><?php echo $nameErr ?? ""; ?></span>
                    </div>
                    <div class="form-group">
                        <label for='email'>Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Enter email">
                        <span class="help-block text-danger"><?php echo $emailErr ?? ""; ?></span>

                    </div>
                    <div class="form-group">
                        <label for='phone'>Phone</label>
                        <input type="number" name="phone" id="phone" class="form-control" placeholder="Enter phone number">
                        <span class="help-block text-danger"><?php echo $phoneErr ?? ""; ?></span>

                    </div>
                    <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>