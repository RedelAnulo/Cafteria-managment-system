<?php 
session_start();
if (!isset($_SESSION['username'])) {
header('location:logout.php');
}
?>



<html>

    <head>
        <title>ticker </title>
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

<center><h1> Cafeteria Mangement System For HAWASSA University</h1>
 </center>
<br>

<b><a href=" logout.php" style="color: yellow; float: right;padding-right: 3%;padding-top:-5% ;">Logout</a><a
                href="ticker.php" style="color: yellow; float: right;padding-right: 1%;padding-top:-5% ;"> login as
                (<span style="color: red;cursor:none; "><?php echo $_SESSION['username'] ;?></span>)
                &nbsp;&nbsp;&nbsp;</a></b>
        </div>


        <div id="sidemenu">
            <ul type="none">
                <li "><a href=" ticker.php"><i class="icon-home"> </i> &nbsp; Home </a></li>


                <li><a href="changepasswordticker.php"> <i class="icon-key"> </i> &nbsp;Change Password</a></li>

                <li><a href="logout.php"> <i class="icon-off"> </i> &nbsp;Logout</a></li>



            </ul>
        </div>



        <div id="data">
            <br>
            <center>
                <h2>INSERT STUDENT ID NO..</h2>
            </center>
            <div class="form">
                <center>
                    <form action="search_to_update_dispinfo.php" method="post">
                        <input type="int" placeholder="Id_Card" name="id" pattern="[0-9]{4,10}" required />
                        <input type="submit" name="submit" value="Search">
                </center>
                </form>
            </div>

        </div>




    </body>

</html>
div>

</div>




</body>

</html>>

</html>/html>