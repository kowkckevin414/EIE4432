<?php
session_start();

if(isset($_POST["submit"])){
    $adminuser = $_POST["adminuser"];
    $password = $_POST["password"];
    $admin= 'admin';
    $pw = 'adminpass';

    if($adminuser== $admin){
      if($password == $pw){
        echo
        "<script> alert('Login Sucessful'); </script>";
      }
      else{
        echo
        "<script> alert('Wrong Password'); 
        window.location.href='http://localhost/web/demoproject/adminlogin.php';
        </script>";
      }
    }
    else{
      echo
      "<script> alert('If you are not admin, please use the normal user login'); 
      window.location.href='http://localhost/web/demoproject/adminlogin.php';
      </script>";
}
}
?>

<!DOCTYPE html>
<head>
    <title>Admin Home Page</title>
    <link rel="stylesheet" href="style.css">
</head>
  <body>
        <h1>Welcome Admin</h1>
        <a href="ShowAllmemberinfo.php">Show All User Info</a>
        <br>
        <a href="ShowAllPost.php">Show All Post</a>
        <br>
        <a href="ShowPendingPost.php">Show Pending Post</a>
        <br>
        <a href="ShowCompletedPost.php">Show Completed Post</a>
        <br>
        <a href="login.php">Logout</a>
    </form>  
  </body>
</html>