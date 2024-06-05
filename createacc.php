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



        <div id="header">

            <center>
                <h1> Cafeteria Mangement System For HAWASSA University</h1>
            </center>
            <br>

            <b><a href="logout.php" style="color: yellow; float: right;padding-right: 3%;padding-top:-5% ;">Logout</a><a
                    href="manager.php" style="color: yellow; float: right;padding-right: 1%;padding-top:-5% ;"> login as
                    (<span style="color: red;cursor:none; "><?php echo $_SESSION['username'] ;?></span>)
                    &nbsp;&nbsp;&nbsp;</a></b>
        </div>


        <div id="sidemenu">
            <ul type="none">
                <li><a href="manager.php"><i class="icon-home"> </i> &nbsp; Home </a></li>

                <li><a href="changepassword.php"> <i class="icon-key"> </i> &nbsp;Change Password</a></li>

                <li><a href="logout.php"> <i class="icon-off"> </i> &nbsp;Logout</a></li>



            </ul>
        </div>


        <div id="data">
            <br>
            <div class="form">
                <center>
                    <h2>Create Account</h2>
                    <form action="" method="post">
                        <?php
						include("connection.php");
 if(isset($_POST['submit']))
 {
 	
$ps = md5($_POST['password']);

$sql="INSERT INTO manager 
VALUES('$_POST[fname]','$_POST[lname]','$_POST[username]','$_POST[password]','$_POST[role]','$_POST[question]','$_POST[answer]','$_POST[phone]','$_POST[status]')";

$result = mysqli_query($conn,$sql);
    
    // check if mysql query successful

    if($result)
    {
        echo 'successful created';
       



		echo "<script>window.location='manager.php';</script>";

    }
else  {
	       echo 'not successful';

}}
    
  
    
    //mysqli_free_result($result);


?>
                        <input type="text" placeholder="First Name" name="fname" required pattern="[a-zA-Z]+"
                            oninvalid="this.setCustomValidity('Enter Valid Name name must be characters ......')" />
                        <input type="text" placeholder="Last Name" name="lname" required pattern="[a-zA-Z]+"
                            oninvalid="this.setCustomValidity('Enter Valid Name name must be characters ......')" />
                        <input type="text" placeholder="Username" name="username" required pattern="[a-zA-Z0-9]+"
                            oninvalid="this.setCustomValidity('Enter Valid Name name must be  characters or number ......')" />
                        <input type="password" placeholder="Password" name="password" pattern="[a-zA-Z0-9]{4,10}"
                            required
                            oninvalid="this.setCustomValidity('Enter Valid Password Password must be  characters or number with Minimum 4 Maximum 10......')" />
                        <select name="role" required>Role

                            <option>manager</option>
                            <option>student</option>
                            <option>storekeeper</option>
                            <option> ticker </option>
                        </select>
                        <select name="question" required>Question
                            <option>what is your father name?</option>
                            <option>what is your mother name?</option>
                            <option>what is your favorite?</option>
                            <option>when is your birthday?</option>

                        </select>
                        <input type="text" placeholder="Answer" name="answer" pattern="[a-zA-Z0-9]+" required />
                        <input placeholder="Phone" maxlength="13" name="phone" type="text" required
                            pattern="[+][2][5][1][9][0-9]{8}"
                            oninvalid="this.setCustomValidity('Enter valid phone number your phone number must be start with +2519 and followed by 8 digit.......')">

                        <select name="status" required>Status
                            <option>active</option>
                        </select>
                        <input type="submit" name="submit" value="create">
                    </form>
                </center>
            </div>

        </div>


        </div>


    </body>

</html>