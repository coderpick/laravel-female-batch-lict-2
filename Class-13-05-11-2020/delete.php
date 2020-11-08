<?php
include "connection.php";
session_start();
if(isset($_GET['id']) && $_GET['id'] !=null ){
    $id    = trim($_GET['id']);
    $select = "DELETE FROM users WHERE id = $id";
    $result = mysqli_query( $conn, $select );
    if($result){
                $_SESSION['toastr'] = array(
                    'type'      => 'success', // or 'success' or 'info' or 'warning'
                    'message' => 'Data delete successfully',
                    'title'     => 'Data Delete'
                );
            header("location:index.php");
        }else{
            die('Data delete failed').mysqli_connect_error();
        }
    
}


?>