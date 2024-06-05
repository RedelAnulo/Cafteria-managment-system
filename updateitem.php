<?php 
session_start();
if (!isset($_SESSION['username'])) {
header('location:logout.php');
}
?>
<?php
 
 
     $db=mysqli_connect("localhost","root","","cfms");
    $tt= "SELECT count(id) as total FROM  adminnews where reading=0";
    $result=mysqli_query($db,$tt);
    $values=mysqli_fetch_array($result);
    $npost=$values["total"];

 

?>




<html>

    <head>
        <title>storekeeper </title>
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

<center><h1> Ccafeteria Mangement System For HAWASSA University</h1>
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

                <form action="updateitemsubmit.php?id=<?php echo $id ?>" name="myForm" method="post">
                    <?php
             require('dbcon.php');
            $result = mysqli_query($conn, "SELECT * FROM item where id='$id' ")or die(mysql_error());

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
                                            <td><input type="text" name="id" value="<?php echo $row['id'];?>"></td>
                                        </tr>

                                        <tr>
                                            <td><strong>Date:</strong></td>
                                            <td><input type="date" name="dates" value="<?php echo $row['dates'];?>">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><strong>ITEM TYPE:</strong> </td>
                                            <td><input type="text" name="itemtype"
                                                    value="<?php echo $row['itemtype'];?>"></td>
                                        </tr>

                                        <tr>
                                            <td><strong>ITEM NAME:</strong></td>
                                            <td><input type="text" name="itemname"
                                                    value="<?php echo $row['itemname'];?>"> </td>
                                        </tr>
                                        <td><strong>QUALITY:</strong></td>
                                        <td><input type="text" name="quantity" value="<?php echo $row['quantity'];?>">
                                        </td>
                                        </tr>

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