<?php 
session_start();
if (!isset($_SESSION['username'])) {
header('location:logout.php');
}
?>


<html>

    <head>
        <title>store keeper </title>
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
                <li><a href="storekeeper.php"><i class="icon-home"> </i> &nbsp; Home </a></li>




                <li><a href="changepasswordstorekeeper.php"> <i class="icon-key"> </i> &nbsp;Change Password</a></li>

                <li><a href="logout.php"> <i class="icon-off"> </i> &nbsp;Logout</a></li>



            </ul>
        </div>


        <div id="data">
            <br><br>
            <div class="form">
                <center>
                    <h2>registitem</h2>
                    <form action="" method="post">
                        <?php
                        include("connection.php");
 if(isset($_POST['give']))
 {

$id=$_POST['id'];
$name=$_POST['name'];
$quantity=$_SESSION['username'];
$sql="INSERT INTO item (id,dates, itemtype,itemnane,quantity) 
VALUES ('$id','$dates','$itemtype','$itemname','$quantity')";

$result = mysqli_query($conn,$sql);
    
    // check if mysql query successful

    if($result)
    {
        echo 'Item is registered succefully!';
        echo "<script>window.location='storekeeper.php';</script>";

    }
else  {
           echo 'item is not registered!'.$result->mysqli_error();

}}
    
  
    
    //mysqli_free_result($result);


?>
                        <input type="text" placeholder="id" name="id" pattern="[a-zA-Z0-9]+" required />
                        <input type="date" placeholder="date" name="dates" required />
                        <input type="text" placeholder="itemtype" name="itemtype" pattern="[a-zA-Z0-9]+" required />
                        <input type="text" placeholder="itemname" name="itemname" pattern="[a-zA-Z0-9]+" required />
                        <textarea name="" rows="9" pattern="[a-zA-Z0-9]+" placeholder="quantity" required></textarea>
                        <br>
                        <input type="submit" name="Register" value="Register">
                    </form>
                </center>
            </div>


        </div>


    </body>

</html>ml>