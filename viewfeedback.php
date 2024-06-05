<?php 
session_start();
if (!isset($_SESSION['username'])) {
header('location:logout.php');
}
?>
<html>

    <head>
        <title>manager </title>
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

        tr:nth-child(even) {
            background-color: #f2f2f2;

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
                <h1> Crime File Mangement System For HAWASSA Police Station</h1>
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

                <li><a href="changepassword.php"> <i class="icon-key"> </i> &nbsp;Change Password</a></li>

                <li><a href="logout.php"> <i class="icon-off"> </i> &nbsp;Logout</a></li>



            </ul>
        </div>


        <div id="data">
            <center>
                <h2>View Feedback</h2>
            </center>

            <table width="500px">
                <thead>
                    <tr>

                        <th>Name</th>
                        <th>Email</th>
                        <th>Message</th>

                </thead>
                <tbody>
                    <?php
  $db=mysqli_connect("localhost","root","","cms");

$sql="select * from feedback";
$result=mysqli_query($db,$sql);
while($row=mysqli_fetch_array($result)){
  ?>

                    <tr>

                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['email'];?></td>
                        <td><?php echo $row['message'];?></td>

                    </tr>

                    <?php

}


?>


                    <?php
	 $db=mysqli_connect("localhost","root","","cms");
	$tt= "SELECT count(id) as total FROM  feedback where reading=0";
	$result=mysqli_query($db,$tt);
	$values=mysqli_fetch_array($result);
	$npost=$values["total"];

 

?>



                    <?php
 $db=mysqli_connect("localhost","root","","cms");
 $sqli="update feedback set reading=1 where  reading=0";
 $update=mysqli_query($db,$sqli);
 

?>

                </tbody>
            </table>
        </div>

        </div>


        </div>


    </body>

</html>