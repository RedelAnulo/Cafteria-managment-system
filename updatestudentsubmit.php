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


        th {
            background-color: #4CAF50;
            color: white;
        }
        </style>
    </head>


    <body>



        <div id="header">

            <center>
                <h1> Caferia Mangement System For HAWASSA Police University</h1>
            </center>
            <br>

            <b><a href="logout.php" style="color: yellow; float: right;padding-right: 3%;padding-top:-5% ;">Logout</a><a
                    href="manager.php" style="color: yellow; float: right;padding-right: 1%;padding-top:-5% ;"> login as
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
            <?php
			 require('connection.php');

?>
            <?php
		   
		  
		$firstname=$_POST['firstname'];
          $midlename=$_POST['midlename'];
        $lastname=$_POST['lastname'];
        $sex=$_POST['sex'];
        $age=$_POST['age'];
        $departement=$_POST['departement'];
        $year=$_POST['year'];
        $telphone=$_POST['telphone'];
         $image=$_POST['image'];
	
                 $id=$_GET['id'];
				 $sl= "UPDATE `student` SET firstname='".$firstname."',midlename='".$midlename."',lastname='".$lastname."',sex='".$sex."',age='".$age."',departement='".$departement."',year='".$year."',telphone='".$telphone."',image='".$image."'
					 WHERE id='".$id."'";

                $result=$conn->query($sl);

	if($result){
		echo '<h1 align="center"><b><i> Successfully Updated!</i></b></h1>';
	}
		else{
		echo "Failed to update records".$conn->error;
		}
		?>
        </div>
        </div>


        </div>

    </body>

</html>