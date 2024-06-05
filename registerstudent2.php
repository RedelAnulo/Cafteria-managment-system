<?php 
session_start();
if (!isset($_SESSION['username'])) {
header('location:logout.php');
}
?>

<html>

    <head>
        <title>manager </title>
        <link rel="stylesheet" type="text/css" href="styles/style_admin.css">

        <link rel="stylesheet" href="css/icons.css" type="text/css" />
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
                <li "><a href=" manager.php"><i class="icon-home"> </i> &nbsp; Home </a></li>

                <li><a href="changepasswordmanager.php"> <i class="icon-key"> </i> &nbsp;Change Password</a></li>

                <li><a href="logout.php"> <i class="icon-off"> </i> &nbsp;Logout</a></li>



            </ul>
        </div>

        <div id="data">
            <br><br>
            <div class="form">
                <center>
                    <h>register item</h2>
                        <form action="registerstudent.php" method="post">
                            <?php
                        include("connection.php");
 if(isset($_POST['give']))
 {
$id=$_POST['id'];
$firstname=$_POST['firstname'];
$midlename=$_POST['midlename'];
$lastname=$_POST['lastname'];
$sex=$_POST['sex'];
$age=$_POST['age'];
$departement=$_POST['departement'];
$year=$_POST['year'];
$telphone=$_POST['telphone'];
$image=$_POST['image'];
$status=$_POST['status'];
$sql="INSERT INTO student (`id`,`firstname`,`midlename`,`lastname`,`sex`,`age`,`departement`,`year`,`telphone`,`image`,`status`) VALUES ('$id','$firstname','$midlename','$lastname','$sex','$age','$departement','$year','$telphone','$image','$status')";

$result = mysqli_query($conn, $sql);
    
    // check if mysql query successful

    if($result)
    {
        echo ' student is registered succefuly...';
        echo "<script>window.location='viewstudent.php';</script>";

    }
}
    
  
    
    //mysqli_free_result($result);


?>

                            <input type="text" placeholder="ID" name="id" required />
                            <input type="text" placeholder="Firstname" name="firstname" required />

                            <input type="text" placeholder="midleame" name="midlename" required />
                            <input type="text" placeholder="LastName" name="lastname" required />

                            <input type="text" placeholder="sex" name="sex" required />
                            <input type="text" placeholder="age" name="age" />
                            <input type="text" placeholder="departement" name="departement" required />
                            <input type="text" placeholder="year" name="year" pattern="[0-9]" required />
                            <input type="text" name="telphone" placeholder="PhoneNo" required
                                pattern="[+][2][5][1][9][0-9]{8}" />

                            <input type="file" name="image" />
                            <input type="text" placeholder="status" name="status" required />
                            <br>
                            <input type="submit" name="give" value="give">
                        </form>
                </center>
            </div>






        </div>


    </body>

</html>