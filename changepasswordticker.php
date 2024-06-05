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

<center><h1>Caferia Management system for HAWASSA university</h1>
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






                <li style="background-color: #ccc; "><a href="changepasswordticker.php" style="color: black;"> <i
                            class="icon-key"> </i> &nbsp;Change Password</a></li>

                <li><a href="logout.php"> <i class="icon-off"> </i> &nbsp;Logout</a></li>



            </ul>
        </div>

        <div id="data">
            <br><br>
            <div class="form">
                <center>
                    <h2>Change Password</h2>
                    <?php
if(isset($_SESSION['passwordchangeerror']))
{
echo $_SESSION['passwordchangeerror'];  
unset($_SESSION['passwordchangeerror']);    
}
?>
                    <form action="changepasswordprocessticker.php" method="post">



                        <input type="password" placeholder=" Old Password" name="old" pattern="[a-zA-Z0-9]{4,}"
                            required />
                        <input type="password" placeholder="New Password" name="new" pattern="[a-zA-Z0-9]{4,}"
                            required />
                        <input type="password" placeholder="Confirm Password" name="confirm" pattern="[a-zA-Z0-9]{4,}"
                            required />

                        <input type="submit" name="submit" value="change">

                    </form>
                </center>
            </div>


        </div>


    </body>

</html>