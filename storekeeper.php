<?php 
session_start();
if (!isset($_SESSION['username'])) {
header('location:logout.php');
}
?>
<?php
 
 
     $db=mysqli_connect("localhost","root","","cms");
    $tt= "SELECT count(id) as total FROM  managernews where reading=0";
    $result=mysqli_query($db,$tt);
    $values=mysqli_fetch_array($result);
    $npost=$values["total"];

 

?>
<?php
 
 
     $db=mysqli_connect("localhost","root","","cms");
    $tt= "SELECT count(id) as total FROM  `command` where reading=0";
    $result=mysqli_query($db,$tt);
    $values=mysqli_fetch_array($result);
    $npostt=$values["total"];

 

?>



<html>

    <head>
        <title>storekeeper </title>
        <link rel="stylesheet" type="text/css" href="styles/style_admin.css">
        <link rel="stylesheet" href="css/icons.css" type="text/css" />
    </head>


    <body>



        <div id="header" ">

<center><h1> Cafeteria Mangement System For HAWASSA University</h1>
 </center>
<br>

<b><a href=" logout.php" style="color: yellow; float: right;padding-right: 3%;padding-top:-5% ;">Logout</a><a
                href="storekeeper.php" style="color: yellow; float: right;padding-right: 1%;padding-top:-5% ;"> login as
                (<span style="color: red;cursor:none; "><?php echo $_SESSION['username'] ;?></span>)
                &nbsp;&nbsp;&nbsp;</a></b>
        </div>


        <div id="sidemenu">
            <ul type="none">
                <li style="background-color: #ccc; "><a href="storekeeper.php" style="color: black;"><i
                            class="icon-home"> </i> &nbsp; Home </a></li>
                <li><a href="item.php"><i class="icon-edit"> </i>&nbsp; Register Item </a></li>
                <li><a href="viewpostnewssk.php"><i class="icon-eye-open"> </i>&nbsp; View Post( <?php echo $npost; ?>)
                    </a></li>
                <li><a href="reportst.php"> <i class="icon-book"> </i>&nbsp; Generete Report </a></li>
                <li><a href="viewitem.php"><i class="icon-comments-alt"> </i>&nbsp; View Register Item
                        (<?php echo $npostt ?>) </a></li>


                <li><a href="manageitem.php"> <i class="icon-desktop"> </i> &nbsp;Manage item</a></li>
                <li><a href="Sendordered.php"> <i class="icon-external-link"> </i> &nbsp; Send Ordered Item</a></li>
                <li><a href="Viewordered.php"> <i class="icon-eye-open"> </i> &nbsp; View Ordered Item</a></li>
                <li><a href="changepasswordstorekeeper.php"> <i class="icon-key"> </i> &nbsp;Change Password</a></li>

                <li><a href="logout.php"> <i class="icon-off"> </i> &nbsp;Logout</a></li>



            </ul>
        </div>


        <div id="data">
            <br><br>
            <center><img src="admin.png">
                <center>
                    <h1>Welcome To Store Keeper Page</h1>
                </center>

                <p>Store keeper is aperson who can manage store and <br>Preprare item for food cookery employee at the
                    cafeteria kitchen.</p>
                <>
        </div>


    </body>

</html>