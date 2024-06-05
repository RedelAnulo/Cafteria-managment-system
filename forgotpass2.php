<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Forgot Password</title>
  
  
  
      <link rel="stylesheet" href="cs/style.css">
<link rel="stylesheet" href="css/icons.css" type="text/css" />

  
</head>

<body>

  	

      <form class="login-form" action="fpasswd2.php" method="post">        
  <h2>Security Question</h2>
		<p>
			<label for="Email" class="floatLabel">Question</label>
			<input id="Email" name="que" type="text"  value="<?php echo $q;?>" required readonly>
			
		</p>
		<p>
			<label for="answer" class="floatLabel">Answer</label>
			<input id="Email" name="ans" type="text" required>
		</p>
		<p>
			<input type="submit" value="Submit" name="submit" id="submit">
		</p>
	</form>

  





</body>

</html>
