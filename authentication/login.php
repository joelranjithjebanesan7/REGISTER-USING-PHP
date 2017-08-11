<?php
    session_start();
    $db = mysqli_connect("localhost", "root","","authentication");
    if (isset($_POST['login_btn'])){
        session_start();
      $email = mysql_real_escape_string($_POST['email']);
      $password = mysql_real_escape_string($_POST['password']);
  $password = md5($password);
  $sql ="SELECT * FROM users WHERE username='$username' AND password='$password'";
  $result = mysqli_query($db, $sql);
  if (mysqli_num_rows($result)==1){
    $_SESSION['message'] = "You are now logged in";
$_SESSION['username'] = $username;
header("locaiion: home.php");
  }else {
    $_SESSION['message'] = "Username/Password combination incorrect";
  }
    }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Register, login and logout user php mysql</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>
  <body>
    <div class="header">
      <h1>Register, login and logout user php mysql</h1>
    </div>
    <form method="post" action="login.php">
      <table>
        <tr>
                   <td>Email:</td>
          <td><input type="email" name="email" class="textInput" /></td>
        </tr>
        <tr>
          <td>Password:</td>
          <td><input type="password" name="password" class="textInput" /></td>
        </tr>

        <tr>
          <td></td>
          <td><input type="submit" name="login_btn" value="Login" /></td>
        </tr>
      </table>
    </form>

  </body>
</html>
