<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="dstyle.css">
</head>
<body>

  <div class="container">
    <h1 style="padding-bottom:30px;">All products</
    h1>
    <?php
              include 'productDBconn.php';
              $model1 = new Model1();
              $id = $_REQUEST['id'];
              $row = $model1->edit($id);
 
              if (isset($_POST['update'])) {
                if (isset($_POST['name']) && isset($_POST['price'])) {
                     
                    $data['id'] = $id;
                    $data['name'] = $_POST['name'];
                    $data['price'] = $_POST['price'];
 
                    $update = $model1->update($data);
 
                    if($update){
                      echo "<script>alert('Product has been updated!');</script>";
                      echo "<script>window.location.href = 'products.php';</script>";
                    }else{
                      echo "<script>alert('Update FAILED try again!');</script>";
                      echo "<script>window.location.href = 'products.php';</script>";
                    }
 
                  }else{
                    echo "<script>alert('Is empty!');</script>";
                    header("Location: productEdit.php'?id=$id");
                  }
                }
          ?>
       <form action="" method="post">
      <label for="name">Name</label>
      <input type="text" id="name" value="<?php echo $row['name']; ?>" name="name" required>
      <label for="price">Price</label>
      <input type="price" id="price" value="<?php echo $row['price']; ?>" name="price" required>

            </select><br><br>
    

      <button type="submit" name="update">Edit Product</button>
    </form>
    
  </div>
</body>
</html>
