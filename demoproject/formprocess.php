<?php
session_start();
$conn = mysqli_connect("localhost", "root", "",'account');

if(isset($_POST["submit"])){
  $username = $_POST["username"];
  $email = $_POST["email"];
  $nickname = $_POST["nickname"];
  $gender = $_POST["gender"];
  $brithday = $_POST["brithday"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];

  $post_image_name = $_FILES['itemImg']['name'];
  $target_dir = "image/";
  $target_file = $target_dir . basename($_FILES["itemImg"]["name"]);
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  move_uploaded_file($_FILES["itemImg"]["tmp_name"], $target_file);
  $itemImg = $target_dir . $post_image_name;


  $duplicate = mysqli_query($conn, "SELECT * FROM account WHERE username = '$username' OR email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }
  else{
    if($password == $confirmpassword){
      $query = "INSERT INTO account(username, password, nickname, email, gender, brithday, image_input)VALUES('$username','$password','$nickname','$email','$gender','$brithday','$itemImg')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful'); 
      window.location.href='http://localhost/web/demoproject/login.php';
      </script>";
    }
    else{
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
  }
}
?>