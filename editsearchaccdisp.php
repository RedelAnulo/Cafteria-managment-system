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


        th {
            background-color: #4CAF50;
            color: white;
        }
        </style>
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
                <li "><a href=" createacc.php"><i class="icon-user"> </i>&nbsp; Create Account </a></li>
                <li style="background-color: #ccc;"><a href="search_update.php" style="color: black;"><i
                            class="icon-edit"> </i>&nbsp; Update Account </a></li>
                <li><a href="activateacc.php"> <i class="icon-check"> </i>&nbsp; Activate </a></li>
                <li><a href="deactivateacc.php"><i class="icon-remove"> </i> &nbsp; Deactivate</a></li>
                <li><a href="postnews.php"><i class="icon-bell"> </i> &nbsp; Post News</a></li>
                <li><a href="viewfeedback.php"><i class="icon-comment"> </i> &nbsp; View Feedback</a></li>
                <li><a href="viewdevacc.php"><i class="icon-comment-alt"> </i> &nbsp; View Deactivate Account</a></li>
                <li><a href="changepassword.php"> <i class="icon-key"> </i> &nbsp;Change Password</a></li>
                <li><a href="managepost.php"> <i class="icon-desktop"> </i> &nbsp;Manage Post</a></li>
                <li><a href="logout.php"> <i class="icon-off"> </i> &nbsp;Logout</a></li>



            </ul>
        </div>


        <div id="data">
            <br>
            <div class="form">
                <center>
                    <h3 style="font-family:time New Roman">Update information Below!</h3>
                </center>



                <form action="updatedacountsubmit.php" name="myForm" method="post">
                    <?php
			 require('dbcon.php');
			$uid=$_GET['username'];
			$result = mysqli_query($conn, "SELECT * FROM manager WHERE username ='$uid'")or die(mysqli_error());

			while($row = mysqli_fetch_array($result))
  			{
				?>
                    <div class="col-lg-12">
                        <div class="well" style="margin-bottom:100px;">
                            <div class="table-responsive">
                                <!--<table class="table table-bordered table-hover">-->
                                <table class="table table-striped table-bordered table-hover">

                                    <center>

                                        <tr>
                                            <td><strong>First name:</strong></td>
                                            <td><input type="text" class="form-control" name="fname"
                                                    value="<?php echo $row['fname'];?>"></td>
                                        </tr>


                                        <tr>
                                            <td><strong>Last name:</strong> </td>
                                            <td><input type="text" class="form-control" name="lname"
                                                    value="<?php echo $row['lname'];?>"></td>
                                        </tr>

                                        <tr>
                                            <td><strong>Username:</strong></td>
                                            <td><input type="text" class="form-control" name="uname"
                                                    value="<?php echo $row['username'];?>"></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Password:</strong></td>
                                            <td><input type="text" class="form-control" name="pass"
                                                    value="<?php echo $row['password'];?>"></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Role:</strong></td>
                                            <td><select class="form-control" name="utype" required>
                                                    <option value="<?php echo $row['role'];?>">
                                                        <?php echo $row['role'];?></option>
                                                    <option value="ticker">ticker</option>
                                                    <option value="student">student</option>
                                                </select></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Phone:</strong></td>
                                            <td><input type="text" class="form-control" name="phone"
                                                    value="<?php echo $row['phone'];?>"></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Status:</strong></td>
                                            <td><select class="form-control" name="status" required>
                                                    <option value="<?php echo $row['status'];?>">
                                                        <?php echo $row['status'];?></option>
                                                    <option value="deactive">deactive</option>

                                                </select></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <center><input type="submit" value="Update" style="margin-left: 60%;" />
                                                </center>
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