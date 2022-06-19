<?php
include("Database.php");
 if (isset($_POST['login'])) {
    $user = $_POST['user'];
    $password = $_POST['password'];
    $dbquery = $db->query("SELECT username, password from user where username='$user' and password='$password'");
    if ($dbquery->num_rows > 0) {
       echo "successfully logged in";
    }else{
        echo "sorry, Username or password is incorrect";
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="user"><br>
        <input type="password" name="password"><br>
        <input type="submit" value="Login" name="login">
    </form>
</body>
</html>