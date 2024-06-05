<?php 
session_start();
if (!isset($_SESSION['username'])) {
header('location:logout.php');
}
?>
<html>

    <head>
        <title>storekeeper </title>
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
                href="storekeeper.php" style="color: yellow; float: right;padding-right: 1%;padding-top:-5% ;"> login as
                (<span style="color: red;cursor:none; "><?php echo $_SESSION['username'] ;?></span>)
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
                <h2>Ordered Item</h2>
            </center>
            <?php
             require('dbcon.php');
                                


                                
                                $result = mysqli_query($conn, "SELECT * FROM `ordered_item` ");
                                
                                $numrows= mysqli_num_rows($result);
                           if ($numrows == 0)
                        {
                        echo "<p>There is no ordered item information</p>";
                         }?>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ordered item id</th>
                            <th>item id</th>
                            <th>ordered dates</th>
                            <th>ordered itemtype</th>
                            <th>ordered itemname</th>
                            <th>ordered quantity</th>


                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1;
                           while($row = mysqli_fetch_array($result))
                                  {
                                        //   $id=$row['id'];
                                 echo '<tr>';
                                    echo '<td>'.$row['ordered_item_id'].'</td>';
                                    echo '<td>'.$row['item_id'].'</td>';
                                    echo '<td>'.$row['ordered_dates'].'</td>';
                                    echo '<td>'.$row['ordered_itemtype'].'</td>';
                                    echo '<td>'.$row['ordered_itemname'].'</td>';
                                    echo '<td>'.$row['ordered_quantity'].'</td>';
                                    
                                        
                                        }
                                     ?>







                    </tbody>
                </table>

            </div>


    </body>

</html>>