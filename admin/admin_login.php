<?php
  require_once '../load.php';

  $ip = $_SERVER['REMOTE_ADDR'];   //

  if(isset($_POST['submit'])){
    //trim-->cuts out extra space
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if(!empty($username) && !empty($password)){
      //log user in 
      $message = login($username, $password, $ip);
    }else {
      $message = 'Please fill out the required field';
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login Page</title>
</head>
<body>
  <h2>Login Page</h2>
  <?php echo !empty($message)? $message: ''; ?>
  <!-- use POST method , so no info is revealed -->
  <form action="admin_login.php" method="POST">
    <label for="usernamw">Username:</label>
    <input type="text" name="username" id="username" value="">

    <label for="password">Password:</label>
    <input type="password" name="password" id="password" value="">

    <button name="submit">Submit</button>
  </form>
</body>
</html>