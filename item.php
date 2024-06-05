<?php 
session_start();
if (!isset($_SESSION['username'])) {
header('location:logout.php');
}
?>


<html>

    <head>
        <title>item </title>
        <link rel="stylesheet" type="text/css" href="styles/style_admin.css">
        <link rel="stylesheet" href="css/icons.css" type="text/css" />
    </head>


    <body>



        <div id="header" ">

<center><h1> Crime File Mangement System For HAWASSA Police Station</h1>
 </center>
<br>

<b><a href=" logout.php" style="color: yellow; float: right;padding-right: 3%;padding-top:-5% ;">Logout</a><a
                href="storekeeper.php" style="color: yellow; float: right;padding-right: 1%;padding-top:-5% ;"> login as
                (<span style="color: red;cursor:none; "><?php echo $_SESSION['username'] ;?></span>)
                &nbsp;&nbsp;&nbsp;</a></b>
        </div>


        <div id="sidemenu">
            <ul type="none">
                <li><a href="storekeeper.php"><i class="icon-home"> </i> &nbsp; Home </a></li>





                <li><a href="changepassworditem.php"> <i class="icon-key"> </i> &nbsp;Change Password</a></li>

                <li><a href="logout.php"> <i class="icon-off"> </i> &nbsp;Logout</a></li>



            </ul>
        </div>


        <div id="data">
            <br><br>
            <div class="form">
                <center>
                    <h2>REGISTER ITEMS</h2>
                    <form action="" method="post">
                        <?php
						include("connection.php");
 if(isset($_POST['give']))
 {
$id=$_POST['id'];
$itemtype=$_POST['itemtype'];
$itemname=$_POST['itemname'];
$quantity=$_POST['quantity'];
$sql="INSERT INTO item (`id`,`itemtype`,`itemname`,`quantity`) VALUES ('$id','$itemtype','$itemname','$quantity')";

$result = mysqli_query($conn, $sql);
    
    // check if mysql query successful

    if($result)
    {
        echo ' item is registered succefuly...';
		echo "<script>window.location='storekeeper.php';</script>";

    }
}
    
  
    
    //mysqli_free_result($result);


?>
                        <input type="int" placeholder="id" name="id" pattern="[0-9]+" required />
                        <input type="text" placeholder="itemtype" name="itemtype" pattern="[a-zA-Z0-9]+" required />
                        <input type="text" placeholder="itemname" name="itemname" pattern="[a-zA-Z0-9]+" required />
                        <input type="text" placeholder="quantity" name="quantity" pattern="[a-zA-Z0-9]+" required />
                        <br>
                        <input type="submit" name="give" value="give">
                    </form>
                </center>
            </div>


        </div>


    </body>

</html>