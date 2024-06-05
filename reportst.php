<?php 
session_start();
if (!isset($_SESSION['username'])) {
    header('location:logout.php');
    exit();
}
?>
<?php 
require "dbcon.php";
?>
<?php
    $db = mysqli_connect("localhost", "root", "", "cms");

    // First query
    $tt = "SELECT COUNT(id) as total FROM managernews WHERE reading=0";
    $result = mysqli_query($db, $tt);
    // Uncomment if you want to use the result
    // $values = mysqli_fetch_array($result);
    // $npost = $values["total"];

    // Second query
    $tt = "SELECT COUNT(id) as total FROM student WHERE status='cafeteria'";
    $result = mysqli_query($db, $tt);
    // Uncomment if you want to use the result
    // $values = mysqli_fetch_array($result);
    // $npostt = $values["total"];
?>

<!DOCTYPE html>
<html>

    <head>
        <title>Storekeeper</title>
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
            var generator = window.open("", "name");
            var layertext = document.getElementById(Layer);
            generator.document.write(layertext.innerHTML.replace("print me "));
            generator.document.close();
            generator.print();
            generator.close();
        }
        </script>
    </head>

    <body>
        <div id="header" style="position: fixed; width: 100%; height: 18%;">
            <center>
                <h1>Cafeteria Management System For HAWASSA University</h1>
            </center>
            <br>
            <b>
                <a href="logout.php"
                    style="color: yellow; float: right; padding-right: 3%; padding-top: -9%;">Logout</a>
                <a href="storekeeper.php" style="color: yellow; float: right; padding-right: 1%; padding-top: -5%;">
                    Login as (<span style="color: red; cursor: none;"><?php echo $_SESSION['username']; ?></span>)
                </a>
            </b>
        </div>

        <div id="sidemenu" style="position: fixed; margin-top: 9%;">
            <ul>
                <li><a href="storekeeper.php"><i class="icon-home"></i> &nbsp; Home </a></li>
                <li><a href="changepasswordstorekeeper.php"><i class="icon-key"></i> &nbsp;Change Password</a></li>
                <li><a href="logout.php"><i class="icon-off"></i> &nbsp;Logout</a></li>
            </ul>
        </div>

        <div id="data" style="margin-bottom: 5%;">
            <br><br><br><br><br><br><br><br>
            <div class="printer" id="div-id-name">
                <fieldset>
                    <center>
                        <table>
                            <tr>
                                <td colspan="2">
                                    <h2>
                                        <center><u>CAFETERIA MANAGEMENT SYSTEM OF HAWASSA UNIVERSITY</u></center>
                                    </h2>
                                    <h4>Tel:- +251912366655<br><br></h4>
                                </td>
                                <td><br><br><br>
                                    <h4>Fax:- +251 25 666 4660</h4>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <h4>Cafeteria system of HAWASSA University</h4>
                                </td>
                                <td>
                                    <h4>P.O.Box:- 31 HAWASSA, Ethiopia</h4>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <h3 style="text-align: center;">These are total number of students</h3>
                                </td>
                            </tr>
                            <tr bgcolor="#008B8B">
                                <th>Cafeteria</th>
                                <th>Non-Cafeteria</th>
                                <th>Total</th>
                            </tr>
                            <tr>
                                <td><?php
                                $sql = "SELECT * FROM `student` WHERE status='cafeteria'";
                                $result = mysqli_query($conn, $sql);
                                $num1 = mysqli_num_rows($result);
                                echo $num1;
                            ?></td>
                                <td><?php
                                $sql = "SELECT * FROM `student` WHERE status='noncafeteria'";
                                $result = mysqli_query($conn, $sql);
                                $num2 = mysqli_num_rows($result);
                                echo $num2;
                            ?></td>
                                <td><?php echo $num1 + $num2; ?></td>
                            </tr>

                            <tr>
                                <td colspan="3">
                                    <h3 style="text-align: center;">These are total number of ordered items</h3>
                                </td>
                            </tr>
                            <tr bgcolor="#008B8B">
                                <th>Item</th>
                                <th>Ordered Item</th>
                                <th>Total</th>
                            </tr>
                            <tr>
                                <td><?php
                                $sql = "SELECT * FROM `item`";
                                $result = mysqli_query($conn, $sql);
                                $num1 = mysqli_num_rows($result);
                                echo $num1;
                            ?></td>
                                <td><?php
                                $sql = "SELECT * FROM `ordered_item`";
                                $result = mysqli_query($conn, $sql);
                                $num2 = mysqli_num_rows($result);
                                echo $num2;
                            ?></td>
                                <td><?php echo $num1 + $num2; ?></td>
                            </tr>
                        </table>

                        <table width="70%">
                            <tr>
                                <td colspan="5">
                                    <h3 style="text-align: center;">These are total employer information</h3>
                                </td>
                            </tr>
                            <tr bgcolor="#008B8B">
                                <th>No</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Role</th>
                                <th>Phone</th>
                            </tr>
                            <?php
                        $result = mysqli_query($conn, "SELECT * FROM manager");
                        $numrows = mysqli_num_rows($result);
                        if ($numrows == 0) {
                            echo "<h3>There is no employer</h3>";
                        } else {
                            $i = 1;
                            while ($row = mysqli_fetch_array($result)) {
                                echo '<tr>';
                                echo '<td>' . $i . '</td>';
                                echo '<td>' . $row['fname'] . '</td>';
                                echo '<td>' . $row['lname'] . '</td>';
                                echo '<td>' . $row['role'] . '</td>';
                                echo '<td>' . $row['phone'] . '</td>';
                                echo '</tr>';
                                $i++;
                            }
                        }
                        ?>
                        </table>

                        <table>
                            <tr>
                                <td colspan="7">
                                    <h3 style="text-align: center;">These are total item information</h3>
                                </td>
                            </tr>
                            <tr bgcolor="#008B8B">
                                <th>Id</th>
                                <th>Dates</th>
                                <th>Item Types</th>
                                <th>Item Name</th>
                                <th>Quantity</th>
                            </tr>
                            <?php
                        $result = mysqli_query($conn, "SELECT * FROM item");
                        $numrows = mysqli_num_rows($result);
                        if ($numrows == 0) {
                            echo "<h3>There is no item</h3>";
                        } else {
                            $i = 1;
                            while ($row = mysqli_fetch_array($result)) {
                                echo '<tr>';
                                echo '<td>' . $row['id'] . '</td>';
                                echo '<td>' . $row['dates'] . '</td>';
                                echo '<td>' . $row['itemtype'] . '</td>';
                                echo '<td>' . $row['itemname'] . '</td>';
                                echo '<td>' . $row['quantity'] . '</td>';
                                echo '</tr>';
                                $i++;
                            }
                        }
                        ?>
                        </table>

                        <table>
                            <tr>
                                <td colspan="7">
                                    <h3 style="text-align: center;">These are total ordered item information</h3>
                                </td>
                            </tr>
                            <tr bgcolor="#008B8B">
                                <th>Ordered Item Id</th>
                                <th>Item Id</th>
                                <th>Dates</th>
                                <th>Ordered Item Types</th>
                                <th>Ordered Item Name</th>
                                <th>Ordered Quantity</th>
                            </tr>
                            <?php
                        $result = mysqli_query($conn, "SELECT * FROM ordered_item");
                        $numrows = mysqli_num_rows($result);
                        if ($numrows == 0) {
                            echo "<h3>There is no ordered item!</h3>";
                        } else {
                            $i = 1;
                            while ($row = mysqli_fetch_array($result)) {
                                echo '<tr>';
                                echo '<td>' . $row['ordered_item_id'] . '</td>';
                                echo '<td>' . $row['item_id'] . '</td>';
                                echo '<td>' . $row['ordered_dates'] . '</td>';
                                echo '<td>' . $row['ordered_itemtype'] . '</td>';
                                echo '<td>' . $row['ordered_itemname'] . '</td>';
                                echo '<td>' . $row['ordered_quantity'] . '</td>';
                                echo '</tr>';
                                $i++;
                            }
                        }
                        ?>
                        </table>

                        <table>
                            <tr>
                                <br><br>
                                <td colspan="2">
                                    <h4>Generated by Storekeeper;<br>
                                        Store Keeper Name:_____________________________________________________</h4>
                                </td>
                                <td>
                                    <h4>Signature:___________ Date:_________________</h4>
                                </td>
                            </tr>
                        </table>
                </fieldset>
            </div>
            <a href="#" id="print" name="print" onclick="javascript:printlayer('div-id-name')">
                <input type="button" value="Print" style="margin-left: 35%;">
            </a>
            </center>
        </div>
    </body>

</html>