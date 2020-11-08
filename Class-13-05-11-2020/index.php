<?php
include "connection.php";
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/toastr.min.css">
    <title>PHP-CRUD</title>
  </head>
  <body>

    <div class="container">
        <div class="bg-primary text-white text-center pt-3 pb-3">
            <h3>PHP CRUD</h3>
        </div>
        <div class="row mt-3 mb-3 ">
          <div class="col-sm-6">
          <h2>Users List</h2>
          </div>
          <div class="col-sm-6 text-right">
            <a href="create.php" class="btn btn-success">Add New</a>
          </div>
        </div>

      <div class="row">
        <div class="col-12">
          <?php 
            // if(isset($_GET['msg'])){
            //   $msg = $_GET['msg'];             
            // }
          ?>
          <!-- <h5 class="text-success"><?php// echo $msg??""; ?></h5> -->
            <table class="table table-bordered">
            <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $select = "SELECT * FROM users ORDER BY id DESC";
                $result = mysqli_query( $conn, $select );
                if ( mysqli_num_rows( $result ) > 0 ) {
                    $i=1;
                    while ( $row = mysqli_fetch_assoc( $result ) ) {?>
                        <tr>
                          <td><?php echo $i++; ?></td>
                          <td><?php echo $row['name']; ?></td>
                          <td><?php echo $row['email']; ?></td>
                          <td><?php echo $row['phone']; ?></td>
                          <td>
                            <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm">Edit</a>
                            <a onclick="return confirm('Are sure to delete?')" href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                          </td>
                        </tr>
                    <?php }
                    }
                    ?>

            </tbody>
            </table>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="assets/js/toastr.min.js"></script>
    <script>
    $(function(){
      <?php          
        if(isset($_SESSION['toastr']))
        {
            echo 'toastr.'.$_SESSION['toastr']['type'].'("'.$_SESSION['toastr']['message'].'", "'.$_SESSION['toastr']['title'].'")';
            unset($_SESSION['toastr']);
            session_destroy();
        }
        ?>          
    });
</script> 
  </body>
</html>