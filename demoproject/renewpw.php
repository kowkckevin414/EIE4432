<?php
session_start();
$conn = mysqli_connect("localhost", "root", "",'account');

if(isset($_POST["submit"])){
  $username = $_POST["usernameemail"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];

  $result = mysqli_query($conn, "SELECT * FROM account WHERE username = '$username'");
  $row = mysqli_fetch_assoc($result);


    if($password == $confirmpassword){
        mysqli_query($conn,"UPDATE account set password='".$_POST["password"]."' WHERE email = '".$_POST["usernameemail"]."' OR username = '".$_POST["usernameemail"]."'");
      echo
      "<script> alert('Your Password has benn reseted'); 
      window.location.href='http://localhost/web/demoproject/login.php';
      </script>";
    }
    else{
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
  }
?>