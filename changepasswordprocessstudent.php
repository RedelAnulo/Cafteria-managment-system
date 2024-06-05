
<?php
session_start();
include("connection.php");


	if(isset($_POST['submit']))
		{

			$oldpassword=$_POST['old'];
			$newpassword=$_POST['new'];
			$confrimpassword=$_POST['confirm'];
			if(empty($oldpassword)||empty($newpassword)||empty($confrimpassword))
			{
				$_SESSION['passwordchangeerror']="Please enter all the required information";
				header("location:changepasswordstudent.php");
				
			}
elseif($newpassword!=$confrimpassword){
$_SESSION['passwordchangeerror']="password donot match";
				header("location:changepasswordstudent.php");
			


}
			else{
				     
			$sql="update manager set password = '".$newpassword."' where username='".$_SESSION['username']."' && password = '".$oldpassword."'";
						
					if($result=$conn->query($sql))
					{
						
						$_SESSION['passwordchangeerror']="Password changed  successfully";
						header("location:changepasswordstudent.php");
					}
					else
					{
						
					$_SESSION['passwordchangeerror']="Password not changed. Please enter correct old password.";	
				    header("location:changepasswordstudent.php");
					}
		}
		}
		else{
		header("location:changepasswordstudent.php");
			}
		?>


