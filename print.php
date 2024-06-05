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
        <title>Manager</title>
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
        <script type="text/javascript">
        function printlayer(layer) {
            var generator = window.open("", "name");
            var layertext = document.getElementById(layer);
            generator.document.write(layertext.innerHTML);
            generator.document.close();
            generator.print();
            generator.close();
        }
        </script>
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
                <a href="manager.php" style="color: yellow; float: right; padding-right: 1%; padding-top: -5%;">login as
                    (<span style="color: red; cursor: none;"><?php echo $_SESSION['username']; ?></span>)
                    &nbsp;&nbsp;&nbsp;</a>
            </b>
        </div>
        <div id="sidemenu">
            <ul type="none">
                <li><a href="viewsudent.php"><i class="icon-home"></i> &nbsp; Home</a></li>
                <li><a href="changepassword.php"><i class="icon-key"></i> &nbsp; Change Password</a></li>
                <li><a href="logout.php"><i class="icon-off"></i> &nbsp; Logout</a></li>
            </ul>
        </div>
        <div id="data">
            <br>
            <center>
                <div class="printer" id="div-id-name">
                    <fieldset>
                        <fieldset>
                            <h2>
                                <center><u>HAWASSA UNIVERSITY</u></center>
                            </h2>
                            <h4>Tel: +251912366655</h4>
                            <h4>Fax: +251 25 666 4660</h4>
                            <h4>Student Identification Card</h4>
                            <?php
                            require('dbcon.php');
                            $id = $_POST['id'];
                            $result = mysqli_query($conn, "SELECT * FROM `student` WHERE id ='$id'");
                            $numrows = mysqli_num_rows($result);
                            if ($numrows == 0) {
                                echo "<h2>Sorry, Entered id no is not exist.</h2>";
                            } else {
                                echo '<div class="table-responsive">';
                                echo '<table class="table table-striped table-bordered table-hover">';
                                while ($row = mysqli_fetch_array($result)) {
                                    $image = $row['image'];
                                    $firstname = $row['firstname'];
                                    $midlename = $row['midlename'];
                                    $lastname = $row['lastname'];
                                    $departement = $row['Deapartement'];
                                    echo '<tr><td><img src="'.$image.'" alt="Student Image" /></td></tr>';
                                    echo '<tr><td>Name: '.$firstname.' '.$midlename.' '.$lastname.'</td></tr>';
                                    echo '<tr><td>Department: '.$departement.'</td></tr>';
                                    echo '<tr><td>ID No: '.$row['id'].'</td></tr>';
                                }
                                echo '</table>';
                                echo '</div>';
                            }
                            ?>
                        </fieldset>
                    </fieldset>
                </div>
                <a href="#" id="print" name="print" onclick="javascript:printlayer('div-id-name')"><input type="button"
                        value="print" style="margin-left: 35%;"></a>
            </center>
        </div>
    </body>

</html>