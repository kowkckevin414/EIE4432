<html>
<head>
    <title>Admin Login</title>
</head>
<body>
<center><img   src="image/thor.gif" style="width:300px;height:300px;"></center>
    <div >
        <div >
        <div >
            <h2>Admin Login Here </h2>
            <form action ="adminhomepage.php" method= "post">
                <div class="form-group">
                    <label>Admin Username</label>
                    <input type="text" name="adminuser" placeholder= "Enter Admin Username" class="form-control" required>
                    </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" placeholder= "Enter Admin Password" class="form-control" required>
                    </div>
                    <button type="submit" name="submit" > Login </button>
                    <a href = "login.php">Back</a>
            </form>
        </div>    
        </div>
    </body>
</html>