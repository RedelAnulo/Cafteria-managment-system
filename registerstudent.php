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

                <li><a href="manager.php"><i class="icon-home"> </i> &nbsp; Home </a></li>
                <li><a href="viewstudent.php"><i class="icon-desktop"> </i> &nbsp; Manage Student</a></li>


                <li><a href="changepassword.php"> <i class="icon-key"> </i> &nbsp;Change Password</a></li>
                <li><a href="logout.php"> <i class="icon-off"> </i> &nbsp;Logout</a></li>

            </ul>
        </div>

        <div id="data">
            <br><br>
            <div class="form">
                <center>
                    <h2>Register Student</h2>
                    <a href="registerstudent.php">
                        <h4 style="text-align: right;color: green;">Manage</h4>
                    </a>

                    <form action="registerstudent.php" method="post" enctype="multipart/form-data">
                        <?php
$msg="";
   if(isset($_POST['upload'])){
   $target="student/".basename($_FILES['image']['name']);
$db=mysqli_connect("localhost","root","","cms");
$firstname=$_POST['firstname'];
$midlename=$_POST['midlename'];
$lastname=$_POST['lastname'];
$sex=$_POST['sex'];
$age=$_POST['age'];
$departement=$_POST['departement'];
$year=$_POST['year'];
$telphone=$_POST['telphone'];
$status=$_POST['status'];
$image=$_FILES['image']['name'];


$sql="insert into student values ('$id','$firstname', '$midlename', '$lastname','$sex','$age','$departement','$year', '$telphone', '$status', '$image')";
mysqli_query($db,$sql);

  if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
        echo '<h1 align="center"><b><i> Successfully registered!</i></b></h1>';
        echo "<script>window.location='viewstudent.php';</script>";

}
else{

  $msg="there was a problem to register";
}
}


?>


                        <input type="text" placeholder="FirstName" name="firstname" pattern="[a-zA-Z]+" required
                            oninvalid="this.setCustomValidity('Enter Valid Name name must be characters ......')" />
                        <input type="text" placeholder="MidleName" name="midlename" pattern="[a-zA-Z]+" required
                            oninvalid="this.setCustomValidity('Enter Valid Name name must be characters ......')" />

                        <input type="text" placeholder="LastName" name="lastname" pattern="[a-zA-Z]+" required
                            oninvalid="this.setCustomValidity('Enter Valid Name name must be characters ......')" />
                        <select name="sex" style="height:38px" required>
                            <option>male</option>
                            <option>female</option>
                        </select>
                        <input type="Number" name="age" max="99" min="18"
                            oninvalid="this.setCustomValidity('Enter Valid age  must be between 18 and 99 ......')"
                            placeholder="age" style="height:38px" required pattern="[0-9]{2}">

                        <input type="text" placeholder="Departement" name="departement" pattern="[a-zA-Z]+" required />
                        <input type="Number" name="year" max="7" min="1"
                            oninvalid="this.setCustomValidity('Enter Valid age  must be between 1 and 7 ......')"
                            placeholder="year" style="height:38px" required pattern="[0-9]{2}">
                        <input type="text" name="telphone" placeholder="PhoneNo" required
                            pattern="[+][2][5][1][9][0-9]{8}" />
                        <select name="status" style="height:38px" required>
                            <option>Cafeteria</option>
                            <option>NonCafeteria</option>
                        </select>

                        <input type="file" name="image" id="fileToUpload" required>

                        <input type="submit" name="upload" value="Register">
                    </form>
                </center>
            </div>

        </div>


        </div>


    </body>

</html>
must be characters ......')" />
<input type="text" placeholder="LastName" name="lname" pattern="[a-zA-Z]+" required
    oninvalid="this.setCustomValidity('Enter Valid Name name must be characters ......')" />
<select name="sex" style="height:38px" required>
    <option>male</option>
    <option>female</option>
</select>
<input type="Number" name="age" max="99" min="18"
    oninvalid="this.setCustomValidity('Enter Valid age  must be between 18 and 99 ......')" placeholder="age"
    style="height:38px" required pattern="[0-9]{2}">
<input list="Job" name="ctype" placeholder="crimetype">
<datalist id="Job">
    <option value="Govermental">
    <option value="Private">
    <option value="Student">
    <option value="Farmer">


</datalist>
<input type="file" name="image" id="fileToUpload" required>

<input type="submit" name="upload" value="upload">
</form>
</center>
</div>

</div>


</div>


</body>

</html>iv>


</div>


</body>

</html>html>