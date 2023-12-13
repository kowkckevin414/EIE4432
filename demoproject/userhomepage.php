<?php
session_start();
$conn = mysqli_connect("localhost", "root", "",'account');

if(isset($_POST["submit"])){
    $usernameemail = $_POST["usernameemail"];
    $password = $_POST["password"];
   


    $result = mysqli_query($conn, "SELECT * FROM account WHERE username = '$usernameemail' OR email = '$usernameemail'");
    $row = mysqli_fetch_assoc($result);
    $cookie_user = $row['username'];
    $cookie_pw = $row['password'];
    setcookie("username",$cookie_user, time()+(60*60*1));
    setcookie("password",$cookie_pw, time()+(60*60*1));
    
    if(mysqli_num_rows($result) > 0){
      if($password == $row['password']){
      }
      else{
        echo
        "<script> alert('Wrong Password'); 
        window.location.href='http://localhost/web/demoproject/login.php';
        </script>";
      }
    }
    else{
      echo
      "<script> alert('User Not Registered'); 
      window.location.href='http://localhost/web/demoproject/login.php';
      </script>";
}
}
else{
    $usernameemail = $_COOKIE["username"];
    $password = $_COOKIE["password"];
    $result = mysqli_query($conn, "SELECT * FROM account WHERE username = '$usernameemail' OR email = '$usernameemail'");
    $row = mysqli_fetch_assoc($result);
}

?>

<!DOCTYPE html>
<head>
    <title>Home Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="http://stackpatch.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
  <body>
    
      <h1>Welcome <?php echo $row["nickname"]; ?></h1>
      <img  src=<?php echo $row["image_input"]; ?> width = "150" height="150">
      <section id="button">
      <a href="#create">Create a Lost Item Post</a><br>
      <a href="usershowpendingpost.php">Show Pending Post</a><br>
      <a href="usershowcompletedpost.php">Show Completed Post</a><br>
      <a href="#edit">Edit Your Personal Information</a><br>
      <a href="#otherpost">Oldest Lost item post</a><br>
      <a href="#lastest">Lastest Lost item post</a>
      </section>
        <form action ="logoutprocess.php" method="POST">
        <button  name="logout">Logout</button>
        </form>
      <div class="container">
      <div class="login-box">
        <div class="row">
        <div class="col">
        <div class="col-md-6 login-left">
        <section id="create"></section>
         <h2>Create Your Lost Post</h2>
            <form action ="createpostprocess.php" method= "post"  enctype="multipart/form-data">
                <div class="form-group">
                    <label>Title</label><br>
                    <input type="text" name="title" placeholder= "Enter Your Lost Post Title" class="form-control" required>
                    </div>
                <div class="form-group">
                    <label>Description</label><br>
                    <input type="text" name="description" placeholder= "Detail" class="form-control" id="txtbox" required>
                    </div>
                    <div class="form-group">
                    <label>Your Username(unchangable)</label>
                    <input type="text" name="username" value=<?php echo $row["username"]; ?> readonly>
                    </div>
                    <div class="form-group">
                    <label>Upload Your Lost item Image</label><br>
                    <input type="file" name="itemImg" accept="image/png, image/jpg"  onchange="loadFile(event)"><br>
                    <img id="display_image"/>
                    <script>
                       var loadFile = function(event){
                        var image_input1 = document.getElementById("display_image")
                        display_image.style.backgroundImage = image_input.src = URL.createObjectURL(event.target.files[0]);
                       }
                      
                    </script>
                    </div>
                    
                    <button type="submit" name="submit"> Create Post </button>
                    <button type="reset"> Reset </button>
            </form>
        </div>
        <div class="col-md-6 login-right">
          <section id="edit"></section>
          <h2>Eidt Your Personal Information</h2>
          <form action ="edituserinfo.php" method= "post"  enctype="multipart/form-data">
                    <div class="form-group">
                    <label>Your Username(unchangable)</label>
                    <input type="text" name="username" value=<?php echo $row["username"]; ?> readonly>
                    </div>
                    <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" id="password" placeholder= "Enter Your Current Password" class="form-control" required >
                    </div>
                    <div class="form-group">
                    <label>Set New Password</label>
                    <input type="password" name="newpassword" id="password" placeholder= "(Optional)" class="form-control">
                    </div>
                <div class="form-group">
                    <label>Confirm New Password</label>
                    <input type="password" name="confirmnewpassword" id="confirmpassword" placeholder= "(Optional)" class="form-control">
                    </div>
                 <div class="form-group">
                    <label>Nick Name</label>
                    <input type="text" name="nickname" id="nickname" placeholder= "Enter Your Nick Name" class="form-control" value=<?php echo $row["nickname"]; ?> required>
                    </div>
                <div class="form-group">
                    <label>Email(unchangable)</label>
                    <input type="email" name="email" id="email" placeholder= "Enter Your Email" class="form-control" value=<?php echo $row["email"]; ?> readonly>
                    </div>
                <div class="form-group">
                    <label>Gender</label>
                    <select name="gender" id="gender" >
                        <?php
                            $selected = $row["gender"];
                        ?>
                        <optgroup label ="Choose Your Gender">
                        <option value="Secret" <?php if($selected == 'Secret'){echo("selected");}?>>Secret</option>
                        <option value="Male" <?php if($selected == 'Male'){echo("selected");}?>>Male</option>
                        <option value="Female" <?php if($selected == 'Female'){echo("selected");}?>>Female</option>
                        </select>
                    </div>
                <div class="form-group" id=>
                    <label>Brithday</label>
                    <input type="date" name="brithday" id="brithday" value=<?php echo $row["brithday"]; ?> class="form-control" required>
                    </div>
                <div class="form-group">
                    <label>Upload Your Icon Image</label>
                    <input type="file" name="itemImg" accept="image/png, image/jpg" value=<?php echo $row["image_input"]; ?> onchange="loadFile(event)">
                    </div>
                    <div id="display_image"></div>
                    <script>
                       var image_input = document.getElementById("display_image")
                       var loadFile = function(event){
                        display_image.style.backgroundImage = "url("+URL.createObjectURL(event.target.files[0])+")";
                       }
                    </script>
                  <button type="submit" name="submit"> Update Your Info </button>
                      </from>
        </div></div></div>

        <section id="otherpost"></section>
        <?php

          $SQLQuery = "SELECT * FROM post";
          $result = mysqli_query($conn, $SQLQuery);
          $rowNum = "SELECT COUNT(postid) FROM post ";
          $rowNumResult = mysqli_query($conn, $rowNum);
          if(!$result){
            die("Could not sucessfully run query.");
          }
          if(mysqli_num_rows($result) == 0){
            print "No records were found with query $userQUery";
          } else{
            print("<p>There are " . mysqli_fetch_assoc($rowNumResult)['COUNT(postid)'] . " Losing Posts: </p>");
            print("<table border = '1'>");
            print("<tr><th>postid</th><th>title</th><th>Status</th><th>desciption</th><th style=\"text-align: center\">username</th>
              <th>Item photo</th><th>Post create time</th></tr>");
                      while($row = mysqli_fetch_assoc($result)){
                          print("<tr><td>" . $row['postid'] . "</td><td>" . $row['title'] . "</td><td>" . $row['status'] . "</td><td>"
                          . $row['description'] . "</td><td>" . $row['username'] . "</td><td>
                          <img src='".$row['item_photo']."' id='display_image'></td><td>"
                          . $row['create_time'] . "</td></tr>");
                      }
            print("</table>");
                  
          }
              
          mysqli_close($conn);
        ?>
        <section id="lastest"></section>
  </body>
</html>

<?php
session_destroy();
?>