<?php
								
								if (isset($_POST['submitt'])){
									require('dbcon.php');
									session_start();
								$password = $_POST['pass'];
								$uid=$_SESSION['username'];
								
								$sql="UPDATE `manager` SET `password`='$password' WHERE username = '$uid'";
								$result=mysqli_query($conn, $sql);
	                      // $sql = "UPDATE manager SET Password = '$pass' WHERE User_id = '".$_SESSION['UId']."'";
						   //$sql="UPDATE `transfer` SET `Remark` = 'Approved' WHERE ID='$pid'";
								if($result){
						echo ("<SCRIPT LANGUAGE='JavaScript'>
							window.alert('Your password is Reset successfully!');
							window.location.href='index.php';
							

							</SCRIPT>");
	}	
							else{
						 die(mysql_error());
								}
									
							}	?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Change Password</title>
  
  
  
      <link rel="stylesheet" href="cs/style.css">
<link rel="stylesheet" href="css/icons.css" type="text/css" />

  
</head>

<body>

  	

      <form class="login-form" action="newpassreset.php" method="post">        
  <h2>Change Password</h2>
		<p>
			<label for="Email" class="floatLabel">New Password</label>
			<input id="pass" name="pass" type="password" required>
		</p>
		<p>
			
		</p>
		<p>
			<input type="submit" value="Submit" name="submitt" id="submit">
		</p>
	</form>

  





</body>

</html>
