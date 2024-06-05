<?php


session_start();
	
?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Contact</title>
        <link rel="icon" href="p.png">
        <link rel="stylesheet" href="style.css" type="text/css" />
        <link rel="stylesheet" href="css/icons.css" type="text/css" />
        <style>
        a:hover {
            text-decoration: underline;
            color: yellow;
        }

        .loginlink a:hover {
            text-decoration: none;
        }

        .dot {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 100%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .activee {
            background-color: #717171;
        }
        </style>
    </head>

    <body class="body">
        < <div id="topnav">
            <li class="active"><a href="index.php" style="color:yellow;margin-right;font-size: 30px " ;><b>CAFETERIA
                        MANAGEMENT SYSTEM FOR HAWASSA UNIVERSITY</b></a></li>
            <ul>
                <li><a href="index.php" style="color:yellow;margin-right;font-size: 30px " ;><b>Home</b></a></li>
                <li><a href="aboutus.php" style="color:red;margin-right;font-size: 30px " ;>About</a></li>
                <li><a href="contact.php" style="color:red;margin-right;font-size: 30px " ;>Contact</a></li>


            </ul>
            </div>
            <div id="sid1" style="">

                <div class="loginlink">
                    <a> Main Event</a>
                </div>
                <div class="content">
                    <ul class="menu">
                        <a href="news.php" style="color:blue;margin-right;font-size: 18px " ;><span> <i
                                    class="icon-globe"></i> What's New? </span></a> <br><br>

                        <a href="help.php" style="color:blue;margin-right;font-size: 18px " ;><span> <i
                                    class="icon-question-sign"></i> Help </span></a> <br><br>

                    </ul>
                </div>
            </div>

            <?php
                        $Today = date('y:m:d');
                        $new = date('l, F d, Y', strtotime($Today));
                        echo $new;
                        ?>
            <div id="sid1" style="float: right;margin-left: 30%;">
                <div class="loginlink">
                    <a> Login</a>


                </div>
                <div class="content">

                    <?php 
					   if(isset($_SESSION['loginerror']))
					   { ?>
                    <p style="color: red; font-size: 14px;"> <?php echo  $_SESSION['loginerror']; ?></p>

                    <?php
				                    unset($_SESSION['loginerror']);
					   }
					 ?>

                    <form action="loginprocess.php" method="post">
                        <P>ROLE</P>
                        <select name="role" required>Role
                            <option VALUE="manager">manager</option>
                            <option>student </option>
                            <option>storekeeper </option>
                            <option>ticker</option>
                        </select>
                        <p>Username</p>
                        <input type="text" name="username" maxlength="50" required><br>
                        <p>Password</p>
                        <input type="password" name="password" required><br>
                        <input type="submit" name="submit" value="Sign in"> <br>
                        <a href="forgot.php" style="color:blue; font-size: 15px; padding-left: 20px; " ;> <i
                                class="icon-unlock"></i> Forgot Password</a>
                    </form>

                </div>
            </div>



            <div id="homebar1">
                <center>
                    <h2 style="color:#000">Location</h2>

                    <b>
                        <p> HAWASSA, Azezo,peasa,near to ruth hotel</p>
                        <p><span>Telephone:</span>+251912366655</p>
                        <p><span>FAX:</span>+91-79-66050101</p>
                        <p>E-mail: <a href="gmail.com/hueduet@gmail.com" style="color:gray;">hueduet@gmail.com</a></p>
                    </b>
                </center>
                <center>
                    <h3><span>Follow us</span></h3>
                    <ul class="social_icons">
                        <li><a href="http://www.facebook.com/"><img src="facebook.png" class="social"></a></li>
                        <li><a href="http://www.twitter.com/"><img src="twitter.png" class="social"></a></li>
                    </ul>
                </center>

                <div id="homebar2">
                    <h2>
                        <span>Get in touch</span>
                    </h2>
                    <form method="post" action="">
                        <?php
						include("connection.php");
 if(isset($_POST['send']))
 {

$sql="INSERT INTO feedback (name,email, message)
VALUES
('$_POST[name]','$_POST[email]','$_POST[comment]')";

$result = mysqli_query($conn,$sql);
    
    // check if mysql query successful

    if($result)
    {
        echo 'message is send';
		echo "<script>window.location='index.php';</script>";

    }
else  {
	       echo 'message is not send';

}}
    
  
    
    //mysqli_free_result($result);


?>
                        <div class="c5">
                            <label>Name</label>
                            <br>
                            <input type="text" name="name" pattern="[a-zA-Z]+\s[a-zA-Z]+$" required
                                oninvalid="this.setCustomValidity('Enter Valid Full Name name must be characters......')">
                            <br>
                            <br>
                        </div>
                        <div class="c6">
                            <label>E-mail address</label>
                            <br>
                            <input type="text" name="email" pattern="[a-zA-Z0-9]+@[a-zA-Z]+\.com" required
                                oninvalid="this.setCustomValidity('Enter Valid Email Address Formate......')">
                            <br>
                            <br>
                        </div>
                        <label style="margin-left: 20px">Message</label>
                        <br>
                        <textarea name="comment" rows="9" pattern="[a-zA-Z0-9]+" required></textarea>
                        <br>
                        <br>
                        <input type="submit" style="font-size:12px;margin-left: 10px" name="send" value="SUBMIT"
                            id="send">

                    </form>

                </div>
            </div>


            <div id="footer">
                <div class="col1">

                </div>
                <div class="col2">
                    <h2 class="title">
                        <img src="facebook.png" class="icon">Let Us Be Friends
                    </h2>
                    <hr class="line">
                    <p>We are always active</p>
                    <a href="http://www.facebook.com">Facebook</a>
                </div>
                <div class="col3">
                    <h2 class="title">Contact</h2>
                    <hr class="line">
                    <p>HAWASSA,Ethiopa</p>
                    <p>Telephone: +251912366655</p>
                    <p>E-mail:<a href="http://hueduet@gmail.com" style="color:gray;">hueduet@gmail.com</a></p>
                </div>
                <div class="col4">
                    <h2 class="title">Link</h2>
                    <hr class="line">
                    <p>
                        <a href="index.php" style="color:gray;">Home|</a>



                        <a href="aboutus.php" style="color:gray;">About |</a>
                        <a href="contact.php" style="color:gray;">Contact</a>
                    </p>
                </div>


                <p>Copyright &copy; 2019-All Rights Reserved </p>
            </div>
            </div>
    </body>

</html>