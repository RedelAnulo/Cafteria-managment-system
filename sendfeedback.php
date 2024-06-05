<?php 
session_start();
if (!isset($_SESSION['username'])) {
header('location:logout.php');
}
?>
<?php
 
 
	 $db=mysqli_connect("localhost","root","","cms");
	$tt= "SELECT count(id) as total FROM  `feedback` where reading=0";
	$result=mysqli_query($db,$tt);
	$values=mysqli_fetch_array($result);
	$nposttt=$values["total"];

 

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

<center><h1>  Cafeteria Mangement System For HAWASSA university</h1>
 </center>
<br>

<b><a href=" logout.php" style="color: yellow; float: right;padding-right: 3%;padding-top:-5% ;">Logout</a><a
                href="student.php" style="color: yellow; float: right;padding-right: 1%;padding-top:-5% ;"> login as
                (<span style="color: red;cursor:none; "><?php echo $_SESSION['username'] ;?></span>)
                &nbsp;&nbsp;&nbsp;</a></b>
        </div>


        <div id="sidemenu">
            <ul type="none">
                <li><a href="student.php"><i class="icon-home"> </i> &nbsp; Home </a></li>

                <li><a href="changepasswordstudent.php"> <i class="icon-key"> </i> &nbsp;Change Password</a></li>

                <li><a href="logout.php"> <i class="icon-off"> </i> &nbsp;Logout</a></li>



            </ul>
        </div>

        <div class="form">
            <center>
                <h2>Send feedback</h2>

                <form action="sendfeedback.php" method="post">
                    <?php
$msg="";
   if(isset($_POST['upload'])){

$db=mysqli_connect("localhost","root","","cms");

$name=$_POST['name'];
$email=$_POST['email'];
$id=$_POST['id'];
$message=$_POST['message'];




$sql="insert into feedback (`id`, `name`, `email`, `message`) values ('$id','$name','$email','$message')";
if(mysqli_query($db,$sql)){
   
  }
		echo '<h1 align="center"><b><i> Successfully sent!</i></b></h1>';
        echo "<script>window.location='student.php';</script>";

}
else{

  $msg="there was a problem to save";
}



?>
                    <input type="text" placeholder="ID" name="id" pattern="[0-9]{4,10}" required />
                    <input type="text" placeholder="Name" name="name" required />
                    <input type="text" placeholder="email" name="email" pattern="[a-zA-Z]+" required />
                    <input type="text" placeholder="message" name="message" pattern="[a-zA-Z]+" required />
                    <input type="submit" name="upload" value="send">
                </form>
            </center>
        </div>

        </div>


        </div>

    </body>

</html>