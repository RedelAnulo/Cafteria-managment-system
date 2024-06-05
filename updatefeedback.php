<?php 
session_start();
if (!isset($_SESSION['username'])) {
header('location:logout.php');
}
?>
<html>

    <head>
        <title>Admin </title>
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
                <h1> Crime File Mangement System For HAWASSA Police Station</h1>
            </center>
            <br>

            <b><a href="logout.php" style="color: yellow; float: right;padding-right: 3%;padding-top:-5% ;">Logout</a><a
                    href="admin.php" style="color: yellow; float: right;padding-right: 1%;padding-top:-5% ;"> login as
                    (<span style="color: red;cursor:none; "><?php echo $_SESSION['username'] ;?></span>)
                    &nbsp;&nbsp;&nbsp;</a></b>
        </div>


        <div id="sidemenu">
            <ul type="none">
                <li><a href="admin.php"><i class="icon-home"> </i> &nbsp; Home </a></li>
                <li "><a href=" createacc.php"><i class="icon-user"> </i>&nbsp; Create Account </a></li>
                <li "><a href=" search_update.php"><i class="icon-edit"> </i>&nbsp; Update Accoount </a></li>
                <li><a href="activateacc.php"> <i class="icon-check"> </i>&nbsp; Activate </a></li>
                <li><a href="deactivateacc.php"><i class="icon-remove"> </i> &nbsp; Deactivate</a></li>
                <li><a href="postnews.php"><i class="icon-bell"> </i> &nbsp; Post News</a></li>
                <li><a href="viewfeedback.php"><i class="icon-comment"> </i> &nbsp; View Feedback</a></li>

                <li><a href="changepassword.php"> <i class="icon-key"> </i> &nbsp;Change Password</a></li>
                <li style="background-color: #ccc;><a href=" managepost.php" style="color: black;"> <i
                        class="icon-desktop"> </i> &nbsp;Manage Post</a></li>
                <li><a href="logout.php"> <i class="icon-off"> </i> &nbsp;Logout</a></li>



            </ul>
        </div>


        <div id="data">
            <br>
            <div class="form">
                <center>
                    <h3 style="font-family:time New Roman">Update information Below!</h3>
                </center>



                <form action="updatedfeedbacksubmit.php" name="myForm" method="post">
                    <?php
			 require('dbcon.php');
			$result = mysql_query("SELECT * FROM feedback ")or die(mysql_error());

			while($row = mysql_fetch_array($result))
  			{
				?>
                    <div class="col-lg-12">
                        <div class="well" style="margin-bottom:100px;">
                            <div class="table-responsive">
                                <!--<table class="table table-bordered table-hover">-->
                                <table class="table table-striped table-bordered table-hover">

                                    <center>

                                        <tr>
                                            <td><strong>Name:</strong></td>
                                            <td><input type="text" class="form-control" name="fname"
                                                    value="<?php echo $row['name'];?>"></td>
                                        </tr>


                                        <tr>
                                            <td><strong>Email:</strong> </td>
                                            <td><input type="text" class="form-control" name="lname"
                                                    value="<?php echo $row['email'];?>"></td>
                                        </tr>

                                        <tr>
                                            <td><strong>Message:</strong></td>
                                            <td><input type="text" class="form-control" name="uname"
                                                    value="<?php echo $row['message'];?>"></td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <center><input type="submit" value="Update" /></center>
                                            </td>
                                        </tr>
                                </table>
                </form>
                <?php }?>
            </div>
        </div>


        </div>


    </body>

</html>