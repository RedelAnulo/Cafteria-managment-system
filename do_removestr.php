<?php
session_start();

if (!isset($_SESSION['username'])) {
  header('location:logout.php');
  exit; // Exit script after redirect
}

// Include connection file
require('connection.php');

?>

<!DOCTYPE html>
<html>

    <head>
        <title>Manager</title>
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
                <a href="manager.php" style="color: yellow;">Logged in as (<?php echo $_SESSION['username']; ?>)</a>
            </b>
        </div>

        <div id="sidemenu">
            <ul type="none">
                <li><a href="manager.php"><i class="icon-home"> </i> &nbsp; Home </a></li>
                <li><a href="createacc.php"><i class="icon-user"> </i>&nbsp; Create Account </a></li>
                <li><a href="search_update.php"><i class="icon-edit"> </i>&nbsp; Update Account</a></li>
                <li><a href="activateacc.php"> <i class="icon-check"> </i>&nbsp; Activate </a></li>
                <li><a href="deactivateacc.php"><i class="icon-remove"> </i> &nbsp; Deactivate</a></li>
                <li><a href="postnews.php"><i class="icon-bell"> </i> &nbsp; Post News</a></li>
                <li><a href="viewfeedback.php"><i class="icon-comment"> </i> &nbsp; View Feedback</a></li>
                <li><a href="viewdevacc.php"><i class="icon-comment-alt"> </i> &nbsp; View Deactivate Account</a></li>
                <li><a href="changepassword.php"> <i class="icon-key"> </i> &nbsp;Change Password</a></li>
                <li style="background-color: #ccc"><a href="managepost.php" style="color: black;"> <i
                            class="icon-desktop"> </i> &nbsp;Manage Post</a></li>
                <li><a href="logout.php"> <i class="icon-off"> </i> &nbsp;Logout</a></li>
            </ul>
        </div>

        <div id="data">
            <?php
  if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Cast to integer for safety

    $stmt = $conn->prepare("DELETE FROM managernews WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
      echo "<h2>Removed Successfully</h2>";
    } else {
      echo "<h2>Error removing news: " . $conn->error . "</h2>";
    }

    $stmt->close();
  }

  $conn->close();
  ?>
        </div>

    </body>

</html>