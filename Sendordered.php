<?php 
session_start();
if (!isset($_SESSION['username'])) {
    header('location:logout.php');
    exit();
}
require('connection.php');
?>

<!DOCTYPE html>
<html>

    <head>
        <title>Store Keeper</title>
        <link rel="stylesheet" type="text/css" href="styles/style_admin.css">
        <link rel="stylesheet" href="css/icons.css" type="text/css" />
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
    </head>

    <body>
        <div id="header">
            <center>
                <h1>Cafeteria Management System For HAWASSA University</h1>
            </center>
            <br>
            <b>
                <a href="logout.php"
                    style="color: yellow; float: right; padding-right: 3%; padding-top: -5%;">Logout</a>
                <a href="storekeeper.php"
                    style="color: yellow; float: right; padding-right: 1%; padding-top: -5%;">login as (<span
                        style="color: red; cursor: none;"><?php echo $_SESSION['username']; ?></span>)
                    &nbsp;&nbsp;&nbsp;</a>
            </b>
        </div>
        <div id="sidemenu">
            <ul type="none">
                <li><a href="storekeeper.php"><i class="icon-home"></i> &nbsp; Home</a></li>
                <li><a href="changepasswordstorekeeper.php"><i class="icon-key"></i> &nbsp; Change Password</a></li>
                <li><a href="logout.php"><i class="icon-off"></i> &nbsp; Logout</a></li>
            </ul>
        </div>
        <div id="data">
            <?php
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $resultd = "SELECT * FROM `item` WHERE id = '$id'";
                $result = $conn->query($resultd);
                while ($row = $result->fetch_assoc()) {
                    $ordered_item_id = $row['ordered_item_id'];
                    $item_id = $row['item_id'];
                    $dates = $row['ordered_dates'];
                    $itemtype = $row['ordered_itemtype'];
                    $itemname = $row['ordered_itemname'];
                    $quantity = $row['ordered_quantity'];
                    $dd = "INSERT INTO ordered_item (ordered_item_id, item_id, ordered_dates, ordered_itemtype, ordered_itemname, ordered_quantity) 
                            VALUES ('$ordered_item_id', '$item_id', '$dates', '$itemtype', '$itemname', '$quantity')";
                    $resultfd = $conn->query($dd);
                    if ($resultfd) {
                        $deletes = "DELETE FROM item WHERE id = '$id'";
                        $resultf = $conn->query($deletes);
                        if ($resultf) {
                            echo '<h2 style="margin-top: 100px; text-align: center;">Send to order successfully</h2>';
                        }
                    }
                }
            }
            ?>
        </div>
    </body>

</html>