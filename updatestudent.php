<?php 
session_start();
if (!isset($_SESSION['username'])) {
header('location:logout.php');
}
?>
<?php
 
 
	 $db=mysqli_connect("localhost","root","","cms");
	$tt= "SELECT count(id) as total FROM  student where status='cafeteria'";
	$result=mysqli_query($db,$tt);
	//$values=mysqli_fetch_array($result);
	//$npost=$values["total"];

 

?>




<html>

    <head>
        <title>maager </title>
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
                href="maager.php" style="color: yellow; float: right;padding-right: 1%;padding-top:-5% ;"> login as
                (<span style="color: red;cursor:none; "><?php echo $_SESSION['username'] ;?></span>)
                &nbsp;&nbsp;&nbsp;</a></b>
        </div>


        <div id="sidemenu">
            <ul type="none">
                <li><a href="viewstudent.php"><i class="icon-home"> </i> &nbsp; Home </a></li>

                <li><a href="logout.php"> <i class="icon-off"> </i> &nbsp;Logout</a></li>



            </ul>
        </div>


        <div id="data">
            <br>
            <div class="form">
                <center>
                    <h3 style="font-family:time New Roman">Update information Below!</h3>
                </center>

                <?php
 if (isset($_GET['id'])) {
 	$id=$_GET['id'];
 }
						      ?>

                <form action="updatestudentsubmit.php?id=<?php echo $id ?>" name="myForm" method="post">
                    <?php
			 require('dbcon.php');
			$result = mysqli_query($conn, "SELECT * FROM student where id='$id' ")or die(mysql_error());

			while($row = mysqli_fetch_array($result))
  			{
				?>
                    <div class="col-lg-12">
                        <div class="well" style="margin-bottom:100px;">
                            <div class="table-responsive">
                                <!--<table class="table table-bordered table-hover">-->
                                <table class="table table-striped table-bordered table-hover">

                                    <center>

                                        <tr>
                                            <td><strong>ID:</strong></td>
                                            <td><input type="int" name="id" value="<?php echo $row['id'];?>"></td>
                                        </tr>


                                        <tr>
                                            <td><strong>firstname:</strong> </td>
                                            <td><input type="text" name="firstname"
                                                    value="<?php echo $row['firstname'];?>"></td>
                                        </tr>

                                        <tr>
                                            <td><strong>midlename:</strong></td>
                                            <td><input type="text" name="midlename"
                                                    value="<?php echo $row['midlename'];?>"> </td>
                                        </tr>
                                        <td><strong>lastname:</strong></td>
                                        <td><input type="text" name="lastname" value="<?php echo $row['lastname'];?>">
                                        </td>
                                        </tr>
                                        <td><strong>sex:</strong> </td>
                                        <td><input type="text" name="sex" value="<?php echo $row['sex'];?>"></td>
                                        </tr>

                                        <tr>
                                            <td><strong>age:</strong></td>
                                            <td><input type="text" name="age" value="<?php echo $row['age'];?>"> </td>
                                        </tr>
                                        <td><strong>departement:</strong></td>
                                        <td><input type="text" name="departement"
                                                value="<?php echo $row['departement'];?>"></td>
                                        <td>
                                            <tr>
                                                <td><strong>year:</strong></td>
                                                <td><input type="text" name="year" value="<?php echo $row['year'];?>">
                                                </td>
                                            </tr>
                                        <td><strong>telphone:</strong></td>
                                        <td><input type="text" name="telphone" value="<?php echo $row['telphone'];?>">
                                        </td>
                                        <td>
                                            </tr>
                                        <td><strong>image:</strong></td>
                                        <td><input type="text" name="image" value="<?php echo $row['image'];?>"></td>
                                        <td><br>
                                            <center><input type="submit" value="Update" style="margin-left: -320%">
                                            </center>
                                        </td>
                                        </tr>
                                </table>
                </form>
                <?php }?>
            </div>
        </div>


        </div>

    </body>

</html>