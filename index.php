<?php
session_start();

?>



<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Homepage</title>
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

        body {
            position: relative;


        }
        </style>

    </head>

    <body class="body">
        <div id="header">





            <div id="topnav" style="position: relative;">
                <li class="active"><a href="index.php" style="color:yellow;margin-right;font-size: 30px " ;><b>CAFETERIA
                            MANAGEMENT SYSTEM FOR HAWASSA UNIVERSITY</b></a></li>
                <ul>
                    <li><a href="index.php" style="color:yellow;margin-right;font-size: 30px " ;><b>Home</b></a></li>
                    <li><a href="aboutus.php" style="color:red;margin-right;font-size: 30px " ;>About</a></li>
                    <li><a href="contact.php" style="color:red;margin-right;font-size: 30px " ;>Contact</a></li>

                </ul>
            </div>

            <div id="sid1" style="position: relative;">
                <div class="loginlink">
                    <a> Main Event</a>
                </div>
                <div class="content">
                    <ul class="menu">
                        <a href="news.php" style="color:blue;margin-right;font-size: 18px " ;><span> <i
                                    class="icon-globe"></i> What's New? </span></a> <br><br>
                        <a href="help.php" style="color:blue;margin-right;font-size: 18px " ;><span> <i
                                    class="icon-question-sign"></i> Help </span></a> <br><br>
                        <center>
                            <style type="color:red;"></style> <b>Today is</b><br>
                            <?php
                        $Today = date('y:m:d');
                        $new = date('l, F d, Y', strtotime($Today));
                        echo $new;
                        ?>

                    </ul>
                </div>
            </div>

            <div id="homebar1">
                <marquee>
                    <center><a href="index.php" style="color:red;margin-right;font-size: 20px " ;><b>WEL COME TO
                                CAFETERIA MANAGEMENT SYSTEM FOR HAWASSA UNIVERSITY</b></a></li>
                    </center>
                </marquee>
                <div id="homebar2">
                    <div class="col1">

                        <div class="cap">
                            <p style="color:#000">Vison</p>
                            <p>The HAWASSA University cafeterial Employeer was uses Cafeteria system improved that
                                simple to </p>
                        </div>
                    </div>
                    <div class="col2">

                        <div class="cap">
                            <p style="color:#000">Mission</p>
                            <p>
                                The HAWASSA Cafeteria is the cafeteria
                                provides traditional and nontraditional cafeteria and Cafeteria
                                services. The Cafeteria provides for the employeer simple uses id card of students, tick
                                and
                                information of student and facilities on university property.
                            </p>
                        </div>
                    </div>
                    <div class="col3">

                        <div class="cap">
                            <p style="color:#000">Values</p>
                            <p>
                                Employer of the HAWASSA Cafeteria is the cafeteria display integrity, honesty, and
                                fairness in our
                                interactions with the community and each other, by recognizing
                                and maintaining an ethical standard above reproach through open,
                                truthful and respectful communications, and by encouraging
                                external and internal partnerships.</p>
                        </div>
                    </div>

                </div>
                <div id="homebar2">
                    <h2>
                        <center>
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
        echo 'message is sent!';
        echo "<script>window.location='index.php';</script>";

    }
else  {
           echo 'message is not sent';

}}
    
  
    
    //mysqli_free_result($result);


?>
                        <div class="c5">
                            SEND FEEDBACK<br>
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
                        </div>
                        <label style="margin-left:20px">Message</label>
                        <input type="text" name="comment" required />
                        <br>
                        <input type="submit" style="font-size:12px;margin-left: 10px" name="send"
                            value="Submit Feedback" id="send">

                    </form>

                </div>
            </div>

            <div id="sid1" style="float: right;margin-left: 30%;">
                <div class="loginlink">
                    <a> Login</a>
                </div>
                <div class="content" style="position: relative;">

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
                        <input type="submit" name="submit" value="login"> <br>
                        <a href="forgot.php" style="color:blue; font-size: 15px; padding-left: 20px; " ;> <i
                                class="icon-unlock"></i> Forgot Password</a>
                    </form>

                </div>
            </div>







            <br>


            <div id="footer">

                <div class="col2">
                    <h2 class="title">
                        <img src="facebook.png" class="icon">Let Us Be Friends
                    </h2>
                    <hr class="line">
                    <p>We are always active</p>
                    <a href="http://www.facebook.com/hueduetcafteriasystem">Facebook</a>
                </div>
                <div class="col3">
                    <h2 class="title">Contact</h2>
                    <hr class="line">
                    <p>HAWASSA,Ethiopa</p>
                    <p>Telephone: +251912366655</p>
                    <p>E-mail:<a href="http://hueduetcafteriasystem@gmail.com"
                            style="color:gray;">hueduetuniversity@gmail.com</a></p>
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

                <div id="copyright">
                    <p>Copyright &copy; 2024-All Rights Reserved | Developed by <a href="aboutg.php"><b>Group
                                Members</b></a></p>
                </div>
            </div>
    </body>

</html>