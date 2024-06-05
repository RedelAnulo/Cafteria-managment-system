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
                <li><a href="manager.php"><i class="icon-home"> </i> &nbsp; Home </a></li>

                <li><a href="changepassword.php"> <i class="icon-key"> </i> &nbsp;Change Password</a></li>

                <li><a href="logout.php"> <i class="icon-off"> </i> &nbsp;Logout</a></li>



            </ul>
        </div>


        <div id="data">
            <br>
            <center>
                <h2>Update Account</h2>
            </center>
            <div class="form">
                <center>
                    <form action="search_to_update_disp.php" method="post">
                        <input type="text" placeholder="Username" name="username" pattern="[a-zA-Z0-9]+" required
                            oninvalid="this.setCustomValidity('Enter valid Username username  must be characters or number.......')" />
                        <input type="submit" name="submit" value="Search">
                </center>
                </form>
            </div>
        </div>


    </body>

</html>