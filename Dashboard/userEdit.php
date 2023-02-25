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
    <h1 style="padding-bottom:30px;">All users</
    h1>
    <?php
              include 'config.php';
              $model = new Model();
              $id = $_REQUEST['id'];
              $row = $model->edit($id);
 
              if (isset($_POST['update'])) {
                
                if (isset($_POST['name']) && isset($_POST['email'])  && isset($_POST['password']) && isset($_POST['user_type'])) {
                     
                    $data['id'] = $id;
                    $data['name'] = $_POST['name'];
                    $data['email'] = $_POST['email'];
                    $data['password'] = $_POST['password'];
                    $data['user_type'] = $_POST['user_type'];
 
                    $update = $model->update($data);
 
                    if($update){
                      echo "<script>alert('User has been updated!');</script>";
                      echo "<script>window.location.href = 'userDashboard.php';</script>";
                    }else{
                      echo "<script>alert('Update FAILED try again!');</script>";
                      echo "<script>window.location.href = 'userDashboard.php';</script>";
                    }
 
                  }else{
                    echo "<script>alert('Is empty!');</script>";
                    header("Location: userEdit.php'?id=$id");

                  }
                }
          ?>
       <form action="" method="post">
      <label for="name">Name</label>
      <input type="text" id="name" value="<?php echo $row['name']; ?>" name="name" required>
      <label for="email">Email</label>
      <input type="email" id="email" value="<?php echo $row['email']; ?>" name="email" required>
      <label for="password">Password</label>
      <input type="password" id="password" value="<?php echo $row['password']; ?>" name="password" required>
      <select name="user_type"  value="<?php echo $row['user_type']; ?>" required>
                    <option value="user" name="user">user</option>
                    <option value="admin" name ="admin">admin</option>
            </select><br><br>
    

      <button type="submit" name="update">Edit User</button>
    </form>
    
  </div>
</body>
</html>
