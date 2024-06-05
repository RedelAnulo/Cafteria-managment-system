<?php
session_start();
include("connection.php");


                  $username=$_POST['username'];
                  $password=$_POST['password'];
				  $role=$_POST['role'];
                  $pp=md5($password);

                   $_SESSION['username']=$username;
					$qur="SELECT * FROM manager where username='".$username."' && password='".$password."' && role='".$role."'&& status ='active'"  ;
					$result=mysqli_query($conn, $qur) or die ("failed".mysqli_error($conn));
				$row = mysqli_fetch_array($result);
						if($row)
						{
	
     if($row['role'] === 'manager' )
    {
				header ("location:manager.php");
    }  if($row['role'] === 'student')
    {
			    header ("location:student.php");
    }  if($row['role'] === 'storekeeper' ) 
    {
				header ("location:storekeeper.php");
				 }  if($row['role'] === 'ticker' ) 
    {
				header ("location:ticker.php");
    
    }
    
		}
							else{
								unset($_SESSION['username']);
									
								$_SESSION['loginerror']="Invalid Username and Password. ";

								header ("location:index.php");
							}

							
?>