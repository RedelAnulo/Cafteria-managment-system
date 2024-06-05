<?php 
session_start();
if (!isset($_SESSION['username'])) {
header('location:logout.php');
}
?>
<html>

    <head>
        // <title>ticker </title>
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



        <div id="header">
            <center>
                <h1> Cafeteria Mangement System For HAWASSA University</h1>
            </center>
            <br>

            <b><a href=" logout.php"
                    style="color: yellow; float: right;padding-right: 3%;padding-top:-5% ;">Logout</a><a
                    href="ticker.php" style="color: yellow; float: right;padding-right: 1%;padding-top:-5% ;"> login as
                    (<span style="color: red;cursor:none; "><?php echo $_SESSION['username'] ;?></span>)
                    &nbsp;&nbsp;&nbsp;</a></b>
        </div>


        <div id="sidemenu">
            <ul type="none">
                <li><a href=" ticker.php"><i class="icon-home"> </i> &nbsp; Home </a></li>

                <li><a href="changepasswordmanager.php"> <i class="icon-key"> </i> &nbsp;Change Password</a></li>

                <li><a href="logout.php"> <i class="icon-off"> </i> &nbsp;Logout</a></li>



            </ul>
        </div>


        <div id="data">
            <br>
            <center>
                <h2>STUDENT INFORMATION</h2>
            </center>
            <?php
			 require('dbcon.php');
								


								
								$result = mysqli_query($conn, "SELECT * FROM `student` ");
								
								$numrows= mysqli_num_rows($result);
                           if ($numrows == 0)
                        {
                        echo "<p>There is no item information</p>";
		                 }?>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>id</th>

                            <th>firstname</th>
                            <th>midlename</th>
                            <th>lastname</th>
                            <th>sex</th>
                            <th>age</th>
                            <th>departement</th>
                            <th>year</th>
                            <th>telphone</th>
                            <th>image</th>
                            <th>status</th>
                            <th>
                                <stron </tr>
                    </thead>
                    <tbody>
                        <?php $i=1;
                           while($row = mysqli_fetch_array($result))
								  {
								  		$id=$row['id'];
								 echo '<tr>';
									echo '<td>'.$row['id'].'</td>';
									echo '<td>'.$row['firstname'].'</td>';
									echo '<td>'.$row['midlename'].'</td>';
									echo '<td>'.$row['lastname'].'</td>';	
									echo '<td>'.$row['sex'].'</td>';
									echo '<td>'.$row['age'].'</td>';
									echo '<td>'.$row['departement'].'</td>';
									echo '<td>'.$row['year'].'</td>';
									echo '<td>'.$row['telphone'].'</td>';
									echo '<td>'.$row['image'].'</td>';
									echo '<td>'.$row['status'].'</td>';
									echo '<td>';
									      $i++;	
        							 ?>

                        <?php

                          echo "</td> </tr>";
								  }
								  
	                    
                          ?>



                    </tbody>
                </table>

            </div>


    </body>

</html>