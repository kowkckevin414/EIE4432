<!DOCTYPE html>
<html>
<head>
	<title>Admin: Member Info</title>
    
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Admin Check Member Information</h1>
	<a href="adminhomepage.php">Back to home page</a>
	<div class='login-box'>
    <div class="col-md-6 login-right">
	<h1>Delete User's Account</h1>
    <form action="deleteaccount.php" method="POST">
        <label>Enter Username to delete</label>
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
		
		$SQLQuery = "SELECT * FROM account";
		$result = mysqli_query($conn, $SQLQuery);
		$rowNum = "SELECT COUNT(username) FROM account ";
		$rowNumResult = mysqli_query($conn, $rowNum);
		if(!$result){
			die("Could not sucessfully run query.");
		}
		if(mysqli_num_rows($result) == 0){
			print "No records were found with query $userQUery";
		} else{
			print("<p>There are " . mysqli_fetch_assoc($rowNumResult)['COUNT(username)'] . " Users as follows: </p>");
			print("<table border = '1'>");
			print("<tr><th>Usernaem</th><th>password</th><th>nickname</th><th style=\"text-align: center\">Email</th>
				<th>Gender</th><th>Brithday</th><th>Icon</th></tr>");
                while($row = mysqli_fetch_assoc($result)){
                    print("<tr><td>" . $row['username'] . "</td><td>" . $row['password'] . "</td><td>"
                    . $row['nickname'] . "</td><td>" . $row['email'] . "</td><td>" . $row['gender'] . "</td><td>"
                    . $row['brithday'] . "</td><td>
                    <img src='".$row['image_input']."' id='display_image'></td></tr>");
                }
			print("</table>");
            
		}
        
		mysqli_close($conn);
	?>
	
</body>
</html>