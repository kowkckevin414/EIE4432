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
  $newpassword= $_POST["newpassword"];
  $confirmnewpassword = $_POST["confirmnewpassword"];

  $result = mysqli_query($conn, "SELECT * FROM account WHERE username = '$username'");
  $row = mysqli_fetch_assoc($result);

  $post_image_name = $_FILES['itemImg']['name'];
  $target_dir = "image/";
  $target_file = $target_dir . basename($_FILES["itemImg"]["name"]);
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  move_uploaded_file($_FILES["itemImg"]["tmp_name"], $target_file);
  $itemImg = $target_dir . $post_image_name;

  $empty_image= "image/";
  $empty_newpassword ="";

  
  if($_POST["password"] == $row['password']){
    if($itemImg == $empty_image){
        mysqli_query($conn,"UPDATE account set nickname='".$_POST["nickname"]."',
        gender='" .$_POST["gender"] ."',
        brithday='". $_POST["brithday"] ."' WHERE username = '".$_POST["username"]."'");
    }
    else{    
    
        mysqli_query($conn,"UPDATE account set nickname='".$_POST["nickname"]."',
        gender='" .$_POST["gender"] ."',
        brithday='". $_POST["brithday"] ."',
        image_input= '". $itemImg ."' WHERE username = '".$_POST["username"]."'");
    }
    
    if($newpassword == $empty_newpassword ){
    }
    else{
        if($newpassword == $confirmnewpassword){
            mysqli_query($conn,"UPDATE account set 
            password='". $_POST["newpassword"] ."' WHERE username = '".$_POST["username"]."'");
          }
          else{
            echo
            "<script> alert('New Password Does Not Match');
            window.location.href='http://localhost/web/demoproject/userhomepage.php'; 
            </script>";
          }
    }

    echo
    "<script> alert('Edit Sucessful');
    window.location.href='http://localhost/web/demoproject/userhomepage.php'; 
    </script>";
  }
  else{
    echo
    "<script> alert('Wrong Password');
    window.location.href='http://localhost/web/demoproject/userhomepage.php'; 
    </script>";
  }
}
?>

<!-- window.location.href='http://localhost/web/demoproject/userhomepage.php'; -->
