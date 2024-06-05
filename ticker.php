<?php 
session_start();
if (!isset($_SESSION['username'])) {
header('location:logout.php');
}
?>
<html>

    <head>
        <title>ticker </title>
        <link rel="stylesheet" type="text/css" href="styles/style_admin.css">
        <link rel="stylesheet" href="css/icons.css" type="text/css" />
    </head>


    <body>



        <div id="header" ">

<center><h1> Cafeteria Mangement System For HAWASSA University</h1>
 </center>
<br>

<b><a href=" logout.php" style="color: yellow; float: right;padding-right: 3%;padding-top:-5% ;">Logout</a><a
                href="ticker.php" style="color: yellow; float: right;padding-right: 1%;padding-top:-5% ;"> login as
                (<span style="color: red;cursor:none; "><?php echo $_SESSION['username'] ;?></span>)
                &nbsp;&nbsp;&nbsp;</a></b>
        </div>


        <div id="sidemenu">
            <ul type="none">
                <li><a href="ticker.php"><i class="icon-home"> </i> &nbsp; Home </a></li>

                <li><a href="servestuent.php"><i class="icon-share-alt"> </i> &nbsp;Serve Student</a></li>
                <li><a href="viewstudenttk.php"><i class="icon-eye-open"> </i> &nbsp;View student Information</a></li>
                <li><a href="viewpostnewstk.php"><i class="icon-eye-open"> </i>&nbsp; View news </a></li>
                <li><a href="viewcommand1.php"> <i class="icon-eye-open"> </i> &nbsp;View command</a></li>



                <li><a href="changepasswordticker.php"> <i class="icon-key"> </i> &nbsp;Change Password</a></li>

                <li><a href="logout.php"> <i class="icon-off"> </i> &nbsp;Logout</a></li>



            </ul>
        </div>


        <div id="data">
            <br><br>
            <center>
                <center>
                    <h1>Welcome To Ticker Page</h1>
                </center>

                <p>Ticker is the employee which can sit near the door and Insert student Id int the system <br>to serve
                    differetiate student Cafeteria or Non-Cafeteria. </p>
        </div>


    </body>

</html>