<!DOCTYPE html>
<html>
<head>
	<title>Admin: Post Info</title>
    <title>Admin: Post Info</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="http://stackpatch.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
    <h1>Admin Check Post Information</h1>
	<a href="adminhomepage.php">Back to home page</a>
    <div class='login-box'>
    <div class="col-md-6 login-right">
	<h1>Delete Post</h1>
    <form action="deletepost.php" method="POST">
        <label>Enter postid to delete</label>
        <input type="text" name="id"><br>
        <button type="submit" name="submit">Delete </button>
    </form>
    </div></div>
	<?php
		session_start();
		$conn = mysqli_connect("localhost", "root", "",'account');
		if(!$conn){
			die("Connection failed: " . mysqli_connect_error());
		}
		
		

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
            print("<tr><th>postid</th><th>title</th><th>desciption</th><th style=\"text-align: center\">username</th>
              <th>Item photo</th><th>Post create time</th></tr>");
                      while($row = mysqli_fetch_assoc($result)){
                          print("<tr><td>" . $row['postid'] . "</td><td>" . $row['title'] . "</td><td>"
                          . $row['description'] . "</td><td>" . $row['username'] . "</td><td>
                          <img src='".$row['item_photo']."' id='display_image'></td><td>"
                          . $row['create_time'] . "</td></tr>");
                      }
            print("</table>");
                  
          }
              
          mysqli_close($conn);
        ?>
	
</body>
</html>