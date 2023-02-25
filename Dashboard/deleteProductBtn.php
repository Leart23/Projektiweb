<?php 
    include 'ProductDBconn.php';
    $model1 = new Model1();
    $id = $_REQUEST['id'];
    $delete = $model1->delete($id);
    
 
    if ($delete) {
        echo "<script>alert('Deleted!');</script>";
        echo "<script>window.location.href = 'product.php';</script>";
    }
    header('location:products.php');

 ?>