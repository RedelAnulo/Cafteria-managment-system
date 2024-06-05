<?php
             require('dbcon.php');
		     if(isset($_POST['submit'])){
			 session_start();
			 $sq=$_POST["que"];
			 $ans=$_POST["ans"];
             $qry="select * from manager where quetion='".$sq."' and answer='".$ans."' and username='".$_SESSION['username']."'";
            $results = mysqli_query($conn, $qry);
			 $resul=mysqli_num_rows($results);
			 $res=mysqli_fetch_array($results);
			 if(($resul>0)){

			   //echo '<script language="javascript">;window:location=\'newpassreset.php\';</script>';
			   include('newpassreset.php');
			 }
			 else{
				//echo '<script language="javascript">alert("Sorry your answer is incorrect")</script>';
			 echo ("<SCRIPT LANGUAGE='JavaScript'>
							window.alert('Sorry your answer is incorrect!');
							window.location.href='index.php';
							

							</SCRIPT>");
			 }
			 
		 }
		  ?>