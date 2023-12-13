<!DOCTYPE html>
<head>
    <title>User Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="http://stackpatch.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

</head>
<body>
<center><img   src="image/confusion.gif" style="width:150px;height:150px;"></center>
<div class="container">
      <div class="login-box">
        <div class="row">
        <div class="col">
        <div class="col-md-6 login-ayy">
            <h2>Forget Your Password ?</h2>
            <form action ="renewpw.php" method= "post">
                <div class="form-group">
                    <label>Username/Email</label>
                    <input type="text" name="usernameemail" placeholder= "Enter Your Username/Email" class="form-control" required>
                    </div>
                <div class="form-group">
                    <label>New Password</label>
                    <input type="password" name="password" placeholder= "Enter Your Password" class="form-control" required>
                    </div>
                <div class="form-group">
                    <label>Confirm New Password</label>
                    <input type="password" name="confirmpassword" placeholder= "Confirm Your New Password" class="form-control" required>
                    </div>
                    <button type="submit" name="submit"> Complete </button><br>
                    <a href = "login.php">Back to Login Page</a><br>
                    <a href = "registration.php">Register a new account ?</a>
            </form>
        </div>    
        </div>
</body>
</html>