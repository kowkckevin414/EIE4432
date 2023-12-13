<!DOCTYPE html>
<html>
<head>
    <title>Pending Post Info</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="http://stackpatch.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
    <h1>Check Pending Posts</h1>
	<a href="http://localhost/web/demoproject/userhomepage.php"><h2>Back to home page</h2></a>
    
	<?php
		session_start();
		$conn = mysqli_connect("localhost", "root", "",'account');
		if(!$conn){
			die("Connection failed: " . mysqli_connect_error());
		}
		
		

          $SQLQuery = "SELECT * FROM post";
          $result = mysqli_query($conn, $SQLQuery);
          $rowNum = "SELECT * FROM post WHERE status='pending'";
          $rowNumResult = mysqli_query($conn, $rowNum);
          if(!$result){
            die("Could not sucessfully run query.");
          }
          if(mysqli_num_rows($result) == 0){
            print "No records were found with query $userQUery";
          } else{
            
            print("<table border = '1'>");
            print("<tr><th>postid</th><th>title</th><th>Status</th><th>desciption</th><th style=\"text-align: center\">username</th>
              <th>Item photo</th><th>Post create time</th></tr>");
                      while($row = mysqli_fetch_assoc($rowNumResult)){
                          print("<tr><td>" . $row['postid'] . "</td><td>" . $row['title'] . "</td><td>" . $row['status'] . "</td><td>"
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