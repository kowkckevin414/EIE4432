<?php
session_start();
setcookie("username","", time()+(60*60*1));
setcookie("password","", time()+(60*60*1));

if(isset($_REQUEST['submit'])){
setcookie("username",$_POST['usernameemail'], time()+(60*60*1));
setcookie("password",$_POST['password'], time()+(60*60*1));
}
?>


<!DOCTYPE html>
<head>
    <title>User Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="http://stackpatch.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

</head>
<body>
<center><img   src="image/welcome.gif" style="width:300px;height:150px;"></center>
<div class="container">
      <div class="login-box">
        <div class="row">
        <div class="col">
        <div class="col-md-6 login-ayy">
            <h2>Login Here </h2>
            <form action ="userhomepage.php" method= "post">
                <div class="form-group">
                    <label>Username/Email</label>
                    <input type="text" name="usernameemail" placeholder= "Enter Your Username/Email" class="form-control" required>
                    </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" placeholder= "Enter Your Password" class="form-control" required>
                    </div>
                    <button type="submit" name="submit"> Login </button><br>
                    <a href = "forgetpassword.php">Forget Password and Renew it</a><br>
                    <a href = "registration.php">Create a new account</a><br>
                    <a href = "adminlogin.php">Admin Login</a>
            </form>
        </div>    
        </div>
</body>
</html>