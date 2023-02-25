<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="dstyle.css">
</head>
<body>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">

    <ul class="nav-list">
        <li>
            <a href="userDashboard.php">
                <i class='bx bx-user'></i>
                Users
            </a>
            <br>
            <a href="products.php">
                <i class='bx bx-user'></i>
                Products
            </a>
            <br>
            <a href="./loginsystem/admin_page.php">
            <i class='bx bx-log-out' id="log_out" ></i>
            Log Out
            </a>    
        </li>
           
    </ul>
  </div>
</body>
</html>

  <div class="container">
    <h1>All users</h1>
        
    <table>
      <thead>
        <tr>
           <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Password</th>
          <th>User Type</th>
        </tr>
      </thead>
      <tbody>
      <?php
 
        include 'config.php';
        $model = new Model();
        $rows = $model->fetch();
        
        if(!empty($rows)){
          
        foreach($rows as $row){ 
       ?>
        <tr>
                
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['password']; ?></td>
                <td><?php echo $row['user_type']; ?></td>
                <td>
                  <a href="deleteBtn.php?id=<?php echo $row['id']; ?>" class="btn btn1">Delete</a>
                  <a href="userEdit.php?id=<?php echo $row['id']; ?>" class="btn btn2">Edit</a>
                </td>
              </tr>
              <?php
                } 
              }
              else{
                echo "There is no data!";
              }
            ?>
      </tbody>
    </table>
  </div>
</body>
</html>
