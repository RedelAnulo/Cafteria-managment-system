<?php 
session_start();
if (!isset($_SESSION['username'])) {
header('location:logout.php');
}
?>
<?php 
require "connection.php";
?>
<?php
 
 
	 $db=mysqli_connect("localhost","root","","cms");
	$tt= "SELECT count(id) as total FROM  `appointement` where reading=0";
	$result=mysqli_query($db,$tt);
	$values=mysqli_fetch_array($result);
	$nposst=$values["total"];

 

?>
<?php
 $db=mysqli_connect("localhost","root","","cfms");
 $sqli="update `appointement` set reading=1 where  reading=0";
 $update=mysqli_query($db,$sqli);
 

?>




<html>

    <head>
        <title>Information and security Officer </title>
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



        <div id="header" ">

<center><h1> Crime File Mangement System For HAWASSA Police Station</h1>
 </center>
<br>

<b><a href=" logout.php" style="color: yellow; float: right;padding-right: 3%;padding-top:-5% ;">Logout</a><a
                href="informationsecurityofficer.php"
                style="color: yellow; float: right;padding-right: 1%;padding-top:-5% ;"> login as (<span
                    style="color: red;cursor:none; "><?php echo $_SESSION['username'] ;?></span>)
                &nbsp;&nbsp;&nbsp;</a></b>
        </div>


        <div id="sidemenu">
            <ul type="none">
                <li "><a href=" informationsecurityofficer.php"><i class="icon-home"> </i> &nbsp; Home </a></li>
                <li><a href="viewfirinfo.php"><i class="icon-comments-alt"> </i>&nbsp; View Register FIR </a></li>
                <li><a href="viewstatus.php"><i class="icon-check"> </i> &nbsp;View Status</a></li>

                <li><a href="sendevidence.php"><i class="icon-reply"> </i>&nbsp; Send Evidence Information </a></li>
                <li><a href="viewpostinfo.php"><i class="icon-edit"> </i>&nbsp; View Post </a></li>
                <li><a href="viewreport.php"> <i class="icon-bookmark"> </i>&nbsp; View Report </a></li>
                <li style="background-color: #ccc;"><a href="viewdecsion.php" style="color: black;"><i
                            class="icon-comments"> </i>&nbsp; View Decsion </a></li>


                <li><a href="changepasswordinfo.php"> <i class="icon-key"> </i> &nbsp;Change Password</a></li>

                <li><a href="logout.php"> <i class="icon-off"> </i> &nbsp;Logout</a></li>



            </ul>
        </div>



        <div id="data">
            <br>
            <center>
                <h2>View Decsion</h2>
            </center>
            <?php
$cid=$_GET['id'];
$sql = "SELECT * FROM `appointement` where id='$cid'";
            $result = $conn->query($sql);
              while($row = $result->fetch_assoc()){
            $decs=$row['decsion'];
if($decs!=0){

$db=mysqli_connect("localhost","root","","cfms");
 $sqli="update `appointement` set status=1 where  status=0";
 $update=mysqli_query($db,$sqli);

	    echo '<h1 align="center"><b><i> The Date is Send!</i></b></h1>';

}else{
	    echo '<h1 align="center"><b><i> The Desion is Empity!</i></b></h1>';

}}
?>

        </div>




    </body>

</html>