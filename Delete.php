<?php
session_start();

if (!isset($_SESSION['username'])) {
  header('location:logout.php');
  exit; // Exit script after redirect
}
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

            <b style="float: right;">
                <a href="logout.php" style="color: yellow; padding-right: 10px;">Logout</a>
                <a href="storekeeper.php" style="color: yellow;">Logged in as (<?php echo $_SESSION['username']; ?>)</a>
            </b>
        </div>

        <div id="sidemenu">
            <ul type="none">
                <li><a href="storekeeper.php"><i class="icon-home"> </i> &nbsp; Home </a></li>
                <li><a href="changepasswordstorekeeper.php"> <i class="icon-key"> </i> &nbsp;Change Password</a></li>
                <li><a href="logout.php"> <i class="icon-off"> </i> &nbsp;Logout</a></li>
            </ul>
        </div>

        <div id="data">
            <?php
  if (isset($_GET['ordered_item_id'])) {
    $ordered_item_id = intval($_GET['ordered_item_id']); // Cast to integer for safety

    $stmt = $conn->prepare("DELETE FROM ordered_item WHERE ordered_item_id = ?");
    $stmt->bind_param("i", $ordered_item_id);

    if ($stmt->execute()) {
      echo "<h2>Ordered Item Deleted Successfully</h2>";
    } else {
      echo "<h2>Error deleting ordered item: " . $conn->error . "</h2>";
    }

    $stmt->close();
  }

  $conn->close();
  ?>
        </div>


    </body>

</html>