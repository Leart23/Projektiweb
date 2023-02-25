<?php 
    include 'config.php';
    $register = new Model();
    $id = $_REQUEST['id'];
    $delete = $register->delete($id);
    
 
    if ($delete) {     
        echo "<script>alert('Deleted!');</script>";
        echo "<script>window.location.href = 'userDashboard.php';</script>";
    }
    header('location:userdashboard.php');

 ?>