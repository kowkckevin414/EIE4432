

<!DOCTYPE html>
<head>
    <title>User Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
  <body>
    <div class="container">
        <div class="row">
        <div class="col-md-6">
            <h2>Register Here </h2>
            <form action ="formprocess.php" method= "post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" id="username" placeholder= "Enter Your Username" class="form-control" required>
                    </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" id="password" placeholder= "Enter Your Password" class="form-control" required >
                    </div>
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" name="confirmpassword" id="confirmpassword" placeholder= "Confirm Password" class="form-control" required >
                    </div>
                 <div class="form-group">
                    <label>Nick Name</label>
                    <input type="text" name="nickname" id="nickname" placeholder= "Enter Your Nick Name" class="form-control" required>
                    </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" id="email" placeholder= "Enter Your Email" class="form-control" required>
                    </div>
                <div class="form-group">
                    <label>Gender</label>
                    <select name="gender" id="gender">
                        <optgroup label ="Choose Your Gender">
                        <option value="Secret">Secret</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        </select>
                    </div>
                <div class="form-group" id=>
                    <label>Brithday</label>
                    <input type="date" name="brithday" id="brithday" class="form-control" required>
                    </div>
                <div class="form-group">
                    <label>Upload Your Icon Image</label>
                    <input type="file" name="itemImg" accept="image/png, image/jpg" onchange="loadFile(event)">
                    </div>
                    <div id="display_image"></div>
                    <script>
                       var image_input = document.getElementById("display_image")
                       var loadFile = function(event){
                        display_image.style.backgroundImage = "url("+URL.createObjectURL(event.target.files[0])+")";
                       }
                    </script>


                    <button type="submit" name="submit"> Register </button>
                    <button type="reset"> Reset </button><br>
                    <a href = "login.php">You have account already</a>
            </form>
        </div>    
        </div>
  </body>
</html>