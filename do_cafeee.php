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
    </head>


    <body>



        <div id="header" ">

<center><h1> Cafeteria Mangement System For HAWASSA University</h1>
 </center>
<br>

<b><a href=" logout.php" style="color: yellow; float: right;padding-right: 3%;padding-top:-5% ;">Logout</a><a
                href="manager.php" style="color: yellow; float: right;padding-right: 1%;padding-top:-5% ;"> login as
                (<span style="color: red;cursor:none; "><?php echo $_SESSION['username'] ;?></span>)
                &nbsp;&nbsp;&nbsp;</a></b>
        </div>


        <div id="sidemenu">
            <ul type="none">
                <li "><a href=" caftria.php"><i class="icon-home"> </i> &nbsp; Home </a></li>

                <li><a href="changepasswordmanager.php"> <i class="icon-key"> </i> &nbsp;Change Password</a></li>
                <li><a href="logout.php"> <i class="icon-off"> </i> &nbsp;Logout</a></li>



            </ul>
        </div>


        <div id="data">
            <br>
            <?php
require('dbcon.php');
$deactivate=$_GET['username'];
$sql="UPDATE `student` SET `status` = 'cafeteria' WHERE username='$noncafeteria'";
if(mysqli_query($conn, $sql)){
?>
            <div style="position:absolute;left:30%;top:22%;">
                <?php echo "<h1 align='center'><b><i>1 student is start cafeteria!</i></b></h1>";?></div>
            <?php
    }
    
else{
    echo mysqli_error($conn);
}
?>
        </div>


    </body>

</html>
</body>

</html>