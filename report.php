<?php 
session_start();
if (!isset($_SESSION['username'])) {
header('location:logout.php');
}
?>
<?php 
require "dbcon.php";
?>
<?php
 
 
     $db=mysqli_connect("localhost","root","","cms");
    $tt= "SELECT id as total FROM  managernews where reading=1";
    $result=mysqli_query($db,$tt);
    //$values=mysqli_fetch_array($result);
//    $npost=$values["total"];

 

?>
<?php
 
 
     $db=mysqli_connect("localhost","root","","cms");
    $tt= "SELECT id as total FROM  `student` where status='cafeteria'";
    $result=mysqli_query($db,$tt);
    //$values=mysqli_fetch_array($result);
    //$npostt=$values["total"];

 

?>



<html>

    <head>
        <title>manager </title>
        <link rel="stylesheet" type="text/css" href="styles/style_admin.css">
        <link rel="stylesheet" href="css/icons.css" type="text/css" />
        <style type="text/css">
        table {
            border-collapse: collapse;
            width: 85%;
        }

        th,
        td {
            text-align: left;
            padding: 2px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;

        }

        th {
            background-color: #4CAF50;
            color: white;
        }
        </style>
        <script type="text/javascript">
        function printlayer(Layer) {
            var generator = window.open(",'name',");
            var layertext = document.getElementById(Layer);
            generator.document.write(layertext.innerHTML.replace("print me "));
            generator.document.close();
            generator.print();
            generator.close();
        }
        </script>
    </head>


    <body>



        <div id="header" style="position: fixed;width: 100%; height:18%; ">

            <center>
                <h1> Cafeteria Mangement System For HAWASSA University</h1>
            </center>
            <br>

            <b><a href="logout.php" style="color: yellow; float: right;padding-right: 3%;padding-top:-9% ;">Logout</a><a
                    href="manager.php" style="color: yellow; float: right;padding-right: 1%;padding-top:-5% ;"> login as
                    (<span style="color: red;cursor:none; "><?php echo $_SESSION['username'] ;?></span>)
                    &nbsp;&nbsp;&nbsp;</a></b>
        </div>


        <div id="sidemenu" style="position: fixed;margin-top: 9%;">
            <ul type="none">
                <li><a href="manager.php"><i class="icon-home"> </i> &nbsp; Home </a></li>

                <li><a href="changepasswordprv.php"> <i class="icon-key"> </i> &nbsp;Change Password</a></li>

                <li><a href="logout.php"> <i class="icon-off"> </i> &nbsp;Logout</a></li>



            </ul>
        </div>
        <div id="data" style="margin-bottom: :5%; ">
            <br><br><br><br><br><br><br><br>
            <div class="printer" id="div-id-name">
                <fieldset>
                    <fieldset>
                        <center>
                            <table>
                                <tr>
                                    <td colspan="2">
                                        <h2>
                                            <center> <u> CAFETERIA MANAGEMENT SYSTEM OF HAWASSA UNIVERSITY</u></center>
                                            <br>
                                        </h2>
                                        <h4>Tel:- +251912366655<br><br>
                                    </td>

                                    <td><br><br><br>
                                        <h4>Fax:- +251 25 666 4660</h4>
                                    </td>

                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <h4>Cafterial system of university HAWASSA</h4>
                                    </td>

                                    <td>
                                        <h4>P.O.Box:- 31 HAWASSA Ethiopia</h4>
                                    </td>

                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <h3 style="text-align: center;">These are total number sudent</h3>
                                    </td>
                                </tr>
                                <tr bgcolor="#008B8B">
                                    <th>Cafteria</th>
                                    <th>Non-Cafteria</th>
                                    <th>Total</th>
                                </tr>
                                <tr>
                                    <td><?php
            $sql="SELECT * FROM `student`where status='cafeteria' ";
            $result=mysqli_query($conn, $sql);
            $num1=mysqli_num_rows($result);
            echo $num1;
            ?></td>
                                    <td><?php
            $sql="SELECT * FROM `student`where status='noncafeteria' ";
            $result=mysqli_query($conn, $sql);
            $num2=mysqli_num_rows($result);
            echo $num2;?></td>
                                    <td><?php echo $num1 + $num2 ?></td>

                                </tr>


                                <tr>
                                    <td colspan="3">
                                        <h3 style="text-align: center;">These are total number of Odered Item </h3>
                                    </td>
                                </tr>
                                <tr bgcolor="#008B8B">
                                    <th>item</th>
                                    <th>ordered_item</th>
                                    <th>Total</th>
                                </tr>

                                <tr>
                                    <td><?php
            $sql="SELECT * FROM `item` ";
            $result=mysqli_query($conn, $sql);
            //$num2=mysqli_num_rows($result);
            echo $num1;?></td>


                                    <td><?php
            $sql="SELECT * FROM `ordered_item` ";
            $result=mysqli_query($conn, $sql);
            //$num2=mysqli_num_rows($result);
            echo $num2;?></td>
                                    <td><?php echo $num1 + $num2 ?></td>

                                </tr>



                                <tr>
                                    <td colspan="3">
                                        <h3 style="text-align: center;">These are total number Account </h3>
                                    </td>
                                </tr>
                                <tr bgcolor="#008B8B">
                                    <th>Active</th>
                                    <th>Deactive</th>
                                    <th>Total</th>
                                </tr>

                                <tr>
                                    <td><?php
            $sql="SELECT * FROM `manager` where status='active' ";
            $result=mysqli_query($conn, $sql);
            $num1=mysqli_num_rows($result);
            echo $num1;
            ?></td>
                                    <td><?php
            $sql="SELECT * FROM `manager` where status='deactive' ";
            $result=mysqli_query($conn, $sql);
            $num2=mysqli_num_rows($result);
            echo $num2;?></td>
                                    <td><?php echo $num1 + $num2 ?></td>

                                </tr>




                            </table>
                            <table width="70%;">
                                <tr>
                                    <td colspan="5">
                                        <h3 style="text-align: center;">These are total employee information </h3>
                                    </td>
                                </tr>
                                <tr bgcolor="#008B8B">
                                    <th> No</th>

                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Role</th>
                                    <th>Phone</th>

                                </tr>
                                <?php
require('dbcon.php');    
$result=mysqli_query($conn, "select * from  manager ");

        $numrows= mysqli_num_rows($result);
            if ($numrows == 0)
                        {
                        echo "<h3>Their is no employe</h3>";
                         }else{
?>
                                <?php
$i=1;
while($row = mysqli_fetch_array($result))
{
echo '<tr>';
echo '<td>'.$i.'</td>';
echo '<td>'.$row['fname'].'</td>';
echo '<td>'.$row['lname'].'</td>';
echo '<td>'.$row['role'].'</td>';
echo '<td>'.$row['phone'].'</td>';

$i++;
?>

                                <?php

                      echo "</tr>";
                         }
                         }
                          ?>

                            </table>
                            <table>
                                <tr>
                                    <td colspan="7">
                                        <h3 style="text-align: center;">These are Student Information </h3>
                                    </td>
                                </tr>
                                <tr bgcolor="#008B8B">
                                    <th> Id</th>

                                    <th>First Name</th>
                                    <th>Midle Name</th>
                                    <th>Last Name</th>

                                    <th>Sex</th>
                                    <th>Age</th>
                                    <th>Departement</th>
                                    <th>year</th>
                                    <th>Phone</th>
                                    <th>Photo</th>
                                    <th>Use</th>
                                </tr>
                                <?php
require('dbcon.php');    
$result=mysqli_query($conn, "select * from  student ");

        $numrows= mysqli_num_rows($result);
            if ($numrows == 0)
                        {
                        echo "<h3>Their is no student</h3>";
                         }else{
?>
                                <?php
$i=1;
while($row = mysqli_fetch_array($result))
{
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
$i++;
?>

                                <?php

                      echo "</tr>";
                         }
                         }
                          ?>

                            </table>
                            <table>
                                <tr>
                                    <td colspan="7">
                                        <h3 style="text-align: center;">These are total Item information </h3>
                                    </td>
                                </tr>
                                <tr bgcolor="#008B8B">
                                    <th> Id</th>
                                    <th>dates</th>
                                    <th>Item Types</th>
                                    <th>Item Name</th>
                                    <th> Quantity</th>


                                </tr>
                                <?php
require('dbcon.php');    
$result=mysqli_query($conn, "select * from  item ");

        $numrows= mysqli_num_rows($result);
            if ($numrows == 0)
                        {
                        echo "<h3>Their is no item</h3>";
                         }else{
?>
                                <?php
$i=1;
while($row = mysqli_fetch_array($result))
{
echo '<tr>';

echo '<td>'.$row['id'].'</td>';
                                    echo '<td>'.$row['dates'].'</td>';
                                    echo '<td>'.$row['itemtype'].'</td>';
                                    echo '<td>'.$row['itemname'].'</td>';
                                    echo '<td>'.$row['quantity'].'</td>';    
                                    
$i++;
?>

                                <?php

                      echo "</tr>";
                         }
                         }
                          ?>

                            </table>
                            <table>
                                <tr>
                                    <br><br>
                                    <td colspan="2">
                                        <h4>Genertared by Cafeteria manager <br>Name:____________________________</h4>
                                    </td>
                                    <td>
                                        <h4>Cafeteria manager Signture____________ Date:________________</h4>
                                    </td>
                                </tr>

                            </table>
                    </fieldset>
                </fieldset>
            </div>
            <a href="#" id="print" name="print" onclick="javascript:printlayer('div-id-name')"><input type="submit"
                    value="print" style="margin-left: 35%;"></a>
            </center>
        </div>
    </body>

</html>