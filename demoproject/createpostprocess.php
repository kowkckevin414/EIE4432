<?php
$conn = mysqli_connect("localhost", "root", "",'account');

if(isset($_POST["submit"])){
  $username = $_POST["username"];
  $title = $_POST["title"];
  $description = $_POST["description"];
  date_default_timezone_set("Asia/Hong_Kong");
  $date = date('Y-m-d H:i:s');
  $post_image_name = $_FILES['itemImg']['name'];
  $target_dir = "image/";
  $target_file = $target_dir . basename($_FILES["itemImg"]["name"]);
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  move_uploaded_file($_FILES["itemImg"]["tmp_name"], $target_file);
  $itemImg = $target_dir . $post_image_name;

  "<script> alert('[$rowNum]'); 
  </script>";
  $query = "INSERT INTO post(title, description, item_photo, username, create_time)VALUES('$title','$description','$itemImg','$username','$date')";
  mysqli_query($conn, $query);
  echo
  "<script> alert('Post Successful'); 
  window.location.href='http://localhost/web/demoproject/userhomepage.php';
  </script>";
  
}
?>