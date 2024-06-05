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



        <div id="header">

            <center>
                <h1> Cafeteria Mangement System For HAWASSA University</h1>
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
                <li><a href="createacc.php"><i class="icon-user"> </i>&nbsp; Create Account </a></li>
                <li><a href="search_update.php"><i class="icon-edit"> </i>&nbsp; Update Accoount </a></li>
                <li><a href="activateacc.php"> <i class="icon-check"> </i>&nbsp; Activate </a></li>
                <li><a href="deactivateacc.php"><i class="icon-remove"> </i> &nbsp; Deactivate</a></li>
                <li><a href="postnews.php"><i class="icon-bell"> </i> &nbsp; Post News</a></li>
                <li><a href="viewfeedback.php"><i class="icon-comment"> </i> &nbsp; View Feedback</a></li>
                <li><a href="viewdevacc.php"><i class="icon-comment-alt"> </i> &nbsp; View Deactivate Account</a></li>
                <li style="background-color: #ccc; "><a href="changepassword.php" style="color: black;"> <i
                            class="icon-key"> </i> &nbsp;Change Password</a></li>
                <li><a href="managepost.php"> <i class="icon-desktop"> </i> &nbsp;Manage Post</a></li>
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
                    <form action="changepasswordprocess.php" method="post">



                        <input type="password" placeholder=" Old Password" name="old" pattern="[a-zA-Z0-9]{4,10}"
                            required
                            oninvalid="this.setCustomValidity('Enter valid Password password can be characters or number with length 4 upto 10 .......')" />
                        <input type="password" placeholder="New Password" name="new" pattern="[a-zA-Z0-9]{4,10}"
                            required
                            oninvalid="this.setCustomValidity('Enter valid Password password can be characters or number with length 4 upto 10 .......')" />
                        <input type="password" placeholder="Confirm Password" name="confirm" pattern="[a-zA-Z0-9]{4,10}"
                            required
                            oninvalid="this.setCustomValidity('Enter valid Password password can be characters or number with length 4 upto 10 .......')" />

                        <input type="submit" name="submit" value="change">

                    </form>
                </center>
            </div>

        </div>


        </div>


    </body>

</html>