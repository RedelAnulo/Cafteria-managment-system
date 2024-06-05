<?php 
session_start();
if (!isset($_SESSION['username'])) {
header('location:logout.php');
}
?>
<?php
 
 
	 $db=mysqli_connect("localhost","root","","cms");
	$tt= "SELECT count(id) as total FROM  adminnews where reading=0";
	$result=mysqli_query($db,$tt);
	$values=mysqli_fetch_array($result);
	$npost=$values["total"];

 

?>




<html>

    <head>
        <title>manager </title>
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

<center><h1>  Cafeteria Mangement System For HAWASSA University</h1>
 </center>
<br>

<b><a href=" logout.php" style="color: yellow; float: right;padding-right: 3%;padding-top:-5% ;">Logout</a><a
                href="preventive_officer.php" style="color: yellow; float: right;padding-right: 1%;padding-top:-5% ;">
                login as (<span style="color: red;cursor:none; "><?php echo $_SESSION['username'] ;?></span>)
                &nbsp;&nbsp;&nbsp;</a></b>
        </div>


        <div id="sidemenu">
            <ul type="none">
                <li><a href="viewpostnews.php"><i class="icon-home"> </i> &nbsp; Home </a></li>

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

                <form action="updatednewssubmit.php?id=<?php echo $id ?>" name="myForm" method="post">
                    <?php
			 require('dbcon.php');
			$result = mysqli_query($conn, "SELECT * FROM news where id='$id' ")or die(mysql_error());

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
                                            <td><strong>Date:</strong></td>
                                            <td><input type="text" class="form-control" name="fname"
                                                    oninvalid="this.setCustomValidity('Enter valid Date .......')"
                                                    value="<?php echo $row['dates'];?>"></td>
                                        </tr>


                                        <tr>
                                            <td><strong>Title:</strong> </td>
                                            <td><input type="text" class="form-control" name="lname"
                                                    pattern="[a-zA-Z0-9]+"
                                                    oninvalid="this.setCustomValidity('Enter valid Title title  can be characters or number.......')"
                                                    value="<?php echo $row['title'];?>"></td>
                                        </tr>

                                        <tr>
                                            <td><strong>Body:</strong></td>
                                            <td><textarea class="form-control" name="uname"
                                                    oninvalid="this.setCustomValidity('Enter Valid Body body can be characters or number.......')"
                                                    rows="12"> <?php echo $row['body'];?></textarea> </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <center><input type="submit" value="Update" style="margin-left: 120%">
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