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
    <style>
    table {
        border-collapse: collapse;
        width: 95%;
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
                <li "><a href=" manager.php"><i class="icon-home"> </i> &nbsp; Home </a></li>
                <li><a href="createacc.php"><i class="icon-user"> </i>&nbsp; Create Account </a></li>
                <li><a href="search_update.php"><i class="icon-edit"> </i>&nbsp; Update Accoount </a></li>
                <li style="background-color: #ccc"><a href="activateacc.php" style="color: black;"> <i
                            class="icon-check"> </i>&nbsp; Activate </a></li>
                <li><a href="deactivateacc.php"><i class="icon-remove"> </i> &nbsp; Deactivate</a></li>
                <li><a href="postnews.php"><i class="icon-bell"> </i> &nbsp; Post News</a></li>
                <li><a href="viewfeedback.php"><i class="icon-comment"> </i> &nbsp; View Feedback</a></li>
                <li><a href="viewdevacc.php"><i class="icon-comment-alt"> </i> &nbsp; View Deactivate Account</a></li>
                <li><a href="changepasswordmanager.php"> <i class="icon-key"> </i> &nbsp;Change Password</a></li>
                <li><a href="managepost.php"> <i class="icon-desktop"> </i> &nbsp;Manage Post</a></li>
                <li><a href="logout.php"> <i class="icon-off"> </i> &nbsp;Logout</a></li>



            </ul>
        </div>


        <div id="data">
            <br>
            <center>
                <h2>Activate Account</h2>
            </center>

            <?php
			 require('dbcon.php');
								


								
								$result = mysqli_query($conn, "SELECT * FROM `manager` WHERE `status`='deactive'");
								
								$numrows= mysqli_num_rows($result);
                           if ($numrows == 0)
                        {
                        echo "<p>There is no manager information</p>";
		                 }?>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>

                            <th>Fname</th>
                            <th>Lname</th>
                            <th>Username</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1;
                           while($row = mysqli_fetch_array($result))
								  {
								 echo '<tr>';
									echo '<td>'.$i.'</td>';
									echo '<td>'.$row['fname'].'</td>';
									echo '<td>'.$row['lname'].'</td>';
									echo '<td>'.$row['username'].'</td>';
									echo '<td>'.$row['role'].'</td>';
									echo '<td>';
										$i++;
        							 ?>

                        <a onclick="return confirm('Do u want to active?')"
                            href="do_reactivate.php?username=<?=$row['username']?>"><strong
                                style="color: red">Active</strong></a>
                        <?php

                          echo "</td> </tr>";
								  }
								  
	                    
                          ?>


                    </tbody>
                </table>

            </div>


    </body>

</html>