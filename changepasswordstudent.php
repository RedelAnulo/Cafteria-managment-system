<?php 
session_start();
if (!isset($_SESSION['username'])) {
header('location:logout.php');
}
?>

<html>

    <head>
        <title>student </title>
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

<b><a href=" logout.php" style="color: yellow; float: right;padding-right: 3%;padding-top:-5% ;">Logout</a><a href=""
                style="color: yellow; float: right;padding-right: 1%;padding-top:-5% ;"> login as (<span
                    style="color: red;cursor:none; "><?php echo $_SESSION['username'] ;?></span>)
                &nbsp;&nbsp;&nbsp;</a></b>
        </div>


        <div id="sidemenu">
            <ul type="none">
                <li><a href="student.php"><i class="icon-home"> </i> &nbsp; Home </a></li>

                <li><a href="sendfeedback.php"> <i class="icon-external-link"> </i>&nbsp; send feedback </a></li>

                <li><a href="viewstudentinfo.php"><i class="icon-edit"> </i>&nbsp; view report </a></li>

                <li><a href="news.php"><i class="icon-bell"> </i> &nbsp; view News</a></li>



                <li style="background-color: #ccc;"><a href="changepasswordstudent.php" style="color: black;"> <i
                            class="icon-key"> </i> &nbsp;Change Password</a></li>
                <li><a href="logout.php"> <i class="icon-off"> </i> &nbsp;Logout</a></li>



            </ul>
        </div>


        <div id="data">
            <br><br>
            <div class="form">
                <center>
                    <h2>Change Password</h2>
                    <?php
if(isset($_SESSION['passwordchangeerror']))
{
echo $_SESSION['passwordchangeerror'];  
unset($_SESSION['passwordchangeerror']);    
}
?>
                    <form action="changepasswordprocessstudent.php" method="post">



                        <input type="password" placeholder=" Old Password" name="old" pattern="[a-zA-Z0-9]{4,10}"
                            required
                            oninvalid="this.setCustomValidity('Enter valid Password password can be characters or number with length 4 upto 10 .......')" />
                        <input type="password" placeholder="New Password" name="new" pattern="[a-zA-Z0-9]{4,10}"
                            required
                            oninvalid="this.setCustomValidity('Enter valid Password password can be characters or number with length 4 upto 10 .......')" />
                        <input type="password" placeholder="Confirm Password" name="confirm" pattern="[a-zA-Z0-9]{4,10}"
                            required
                            oninvalid="this.setCustomValidity('Enter valid Password password can be characters or number with length 4 upto 10 .......')" />

                        <input type="submit" name="submit" value="change">

                    </form>
                </center>
            </div>


        </div>


    </body>

</html>