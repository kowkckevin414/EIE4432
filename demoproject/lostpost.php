<?php
session_start();
$conn = mysqli_connect("localhost", "root", "",'account');
$usernameemail = $_POST["usernameemail"];
$password = $_POST["password"];
?>

<!DOCTYPE html>
<head>
    <title>Create Post</title>
    <link rel="stylesheet" href="style.css">
</head>
  <body>
        <h1><?php echo $row["nickname"]; ?> What did you lost?</h1>
        
        <a href="lostprocess.php">Create</a><br>
        <a href="userhomepage.php">Back</a>
  </body>
</html>