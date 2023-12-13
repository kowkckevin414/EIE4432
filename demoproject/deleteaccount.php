<?php
session_start();
$conn = mysqli_connect("localhost", "root", "",'account');

if(isset($_POST["submit"])){

    $id = $_POST['id'];
    $query = "DELETE FROM account WHERE username='$id'";
    $query_run = mysqli_query($conn, $query);
  
    echo
    "<script> alert('Delete User $id Successful'); 
    window.location.href='http://localhost/web/demoproject/ShowALLmemberinfo.php';
    </script>";
    
}
?>