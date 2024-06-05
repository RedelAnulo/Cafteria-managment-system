<?php 
session_start();
if (!isset($_SESSION['username'])) {
header('location:logout.php');
}
?>
<html>

    <head>
        <title>MANNAGER </title>
        <link rel="stylesheet" type="text/css" href="styles/style_admin.css">
        <link rel="stylesheet" href="css/icons.css" type="text/css" />
        <style>
        table {
            border-collapse: collapse;
            width: 85%;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
        }


        th {
            background-color: #4CAF50;
            color: white;
        }
        </style>
    </head>


    <body>



        <div id="header">

            <center>
                <h1> Caferteria Mangement System For HAWASSA Umiversity</h1>
            </center>
            <br>

            <b><a href="logout.php" style="color: yellow; float: right;padding-right: 3%;padding-top:-5% ;">Logout</a><a
                    href="manager.php" style="color: yellow; float: right;padding-right: 1%;padding-top:-5% ;"> login as
                    (<span style="color: red;cursor:none; "><?php echo $_SESSION['username'] ;?></span>)
                    &nbsp;&nbsp;&nbsp;</a></b>
        </div>


        <div id="sidemenu">
            <ul type="none">
                <li><a href="manager.php"><i class="icon-home"> </i> &nbsp; Home </a></li>

                <li><a href="changepassrdmanager.php"> <i class="icon-key"> </i> &nbsp;Change Password</a></li>

                <li><a href="logout.php"> <i class="icon-off"> </i> &nbsp;Logout</a></li>



            </ul>
        </div>


        <div id="data">
            <br>
            <?php
			 require('dbcon.php');

?>
            <?php
		$fn=$_POST["fname"];
		$ln=$_POST["lname"];
		$uname=$_POST["uname"];
		$pass=md5($_POST["pass"]);
		$utype=$_POST["utype"];
		$phone=$_POST["phone"];
		$status=$_POST["status"];
	if(mysqli_query($conn, "UPDATE manager SET  fname='$fn',lname='$ln',username='$uname',
	password='$pass',role='$utype',phone='$phone',status='$status'
	 WHERE username='$uname'")){
		echo '<h1 align="center"><b><i>Your manager Successfully Updated!</i></b></h1>';
	}
		else{
		echo "Failed to update new records".mysqli_error($con); 
		}
		?>
        </div>
        </div>


        </div>


    </body>

</html>