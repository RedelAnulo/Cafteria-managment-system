<?php 
session_start();
if (!isset($_SESSION['username'])) {
    header('location:logout.php');
    exit();
}
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
            <b>
                <a href="logout.php"
                    style="color: yellow; float: right; padding-right: 3%; padding-top: -5%;">Logout</a>
                <a href="manager.php" style="color: yellow; float: right; padding-right: 1%; padding-top: -5%;">Login as
                    (<span style="color: red; cursor: none;"><?php echo $_SESSION['username']; ?></span>)
                </a>
            </b>
        </div>

        <div id="sidemenu">
            <ul>
                <li><a href="manager.php"><i class="icon-home"></i> &nbsp; Home</a></li>
                <li><a href="registerstudent.php"><i class="icon-bell"></i> &nbsp; Register Student</a></li>
                <li><a href="print1.php"><i class="icon-desktop"></i> &nbsp; Print Student Id Card</a></li>
                <li><a href="changepasswordmanager.php"><i class="icon-key"></i> &nbsp; Change Password</a></li>
                <li><a href="logout.php"><i class="icon-off"></i> &nbsp; Logout</a></li>
            </ul>
        </div>

        <div id="data">
            <br>
            <center>
                <h2>STUDENT INFORMATION</h2>
            </center>
            <table width="500px">
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
                        <th><strong style="color: yellow;"><b>Manage Student</strong></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                $db = mysqli_connect("localhost", "root", "", "cms");

                $sql = "SELECT * FROM student";
                $result = mysqli_query($db, $sql);
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['firstname']; ?></td>
                        <td><?php echo $row['midlename']; ?></td>
                        <td><?php echo $row['lastname']; ?></td>
                        <td><?php echo $row['sex']; ?></td>
                        <td><?php echo $row['age']; ?></td>
                        <td><?php echo $row['departement']; ?></td>
                        <td><?php echo $row['year']; ?></td>
                        <td><?php echo $row['telphone']; ?></td>
                        <td><?php echo "<img src='student/" . $row['image'] . "' alt='' width='150'>"; ?></td>
                        <td><?php echo $row['status']; ?></td>
                        <td>
                            <a href="updatestudent.php?id=<?php echo $row['id']; ?>"><strong
                                    style="color: green;">Update</strong></a>&nbsp;&nbsp;&nbsp;&nbsp;
                            <a onclick="return confirm('Do you want to remove?')"
                                href="do_remove.php?id=<?php echo $row['id']; ?>"><strong
                                    style="color: red;">Delete</strong></a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
    </body>

</html>