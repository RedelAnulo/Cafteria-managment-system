<?php 
session_start();
if (!isset($_SESSION['username'])) {
header('location:logout.php');
}
?>

<html>

    <head>
        <title> storekeeper </title>
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

<center><h1>Cafeteria Mangement System For HAWASSA University</h1>
 </center>
<br>

<b><a href=" logout.php" style="color: yellow; float: right;padding-right: 3%;padding-top:-5% ;">Logout</a><a href=""
                style="color: yellow; float: right;padding-right: 1%;padding-top:-5% ;"> login as (<span
                    style="color: red;cursor:none; "><?php echo $_SESSION['username'] ;?></span>)
                &nbsp;&nbsp;&nbsp;</a></b>
        </div>


        <div id="sidemenu">
            <ul type="none">
                <li "><a href=" storekeeper.php"><i class="icon-home"> </i> &nbsp; Home </a></li>

                <li><a href="changepasswordstorekeeper.php"> <i class="icon-key"> </i> &nbsp;Change Password</a></li>
                <li><a href="logout.php"> <i class="icon-off"> </i> &nbsp;Logout</a></li>



            </ul>
        </div>


        <div id="data">
            <br>
            <center>
                <h2>View Post</h2>
            </center>
            <?php
             require('dbcon.php');
                                


                                
                                $result = mysqli_query($conn, "SELECT * FROM `managernews` ");
                                
                                $numrows= mysqli_num_rows($result);
                           if ($numrows == 0)
                        {
                        echo "<p>There is no Account information</p>";
                         }?>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Dates</th>

                            <th>Title</th>
                            <th>Body</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                           while($row = mysqli_fetch_array($result))
                                  {
                                 echo '<tr>';
                                    echo '<td>'.$row['dates'].'</td>';
                                    echo '<td>'.$row['title'].'</td>';
                                    echo '<td>'.$row['body'].'</td>';
                                    
                                        
                                     ?>


                        <?php

                          echo "</td> </tr>";
                                  }
                                  
                        
                          ?>
                        <?php
     $db=mysqli_connect("localhost","root","","cms");
    $tt= "SELECT count(id) as total FROM  managernews where reading=0";
    $result=mysqli_query($db,$tt);
    $values=mysqli_fetch_array($result);
    $npost=$values["total"];

 

?>



                        <?php
 $db=mysqli_connect("localhost","root","","cms");
 $sqli="update managernews set reading=1 where  reading=0";
 $update=mysqli_query($db,$sqli);
 

?>

            </div>


    </body>

</html>