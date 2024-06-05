<?php
session_start();

?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>About US</title>
        <link rel="icon" href="p.png">
        <link rel="stylesheet" href="style.css" type="text/css" />
        <link rel="stylesheet" href="css/icons.css" type="text/css" />




        <div id="topnav" style="position: relative;">
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

            </div>
        </div>

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



        <?php
                        $Today = date('y:m:d');
                        $new = date('l, F d, Y', strtotime($Today));
                        echo $new;
                        ?>

        </div>
        <br>

        <div id="homebar1">
            <h3 style="color:#000">HAWASSA University</h3>
            <p>HAWASSA university is one of the most populated and historical towns of Ethiopia cities. In order to
                sustain peace and </p>
            <p>security of citizens living in this cities, establishing police station in such cities is crucial. The
                modern police station</p>
            <p> was established in Ethiopia during drug regime in 1974 in order to prevent crimes and sustain peace in
                the city and
                <p />
            <p>around the city</p><br>
            <h3 style="color:#000">HAWASSA cafeteria</h3>
            <p> There were five big departments under the station that are detection department, prevention department,
            </p>
            <p>traffic department , department of HRM and department of information and security service for all in
                sustainable</p>
            <p> way. Each department have its own responsibility detection department have a responsibility to
                investigate the </p>
            <p>crime after happing and if the suspected person commit the crime then the file send to court and if the
                suspected</p>
            <p> person not commit the investigator leave the case. Prevention department have responsibility to prevent
                against</p>
            <p> commitment of crime by creating awareness to society. Department of information and security
                responsibility to </p>
            <p>collect information after happened and give to detection department and prevent crime before happened
            </p>
            \
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
                <a href="http://www.facebook.com/hueduet">Facebook</a>
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


            <p>Copyright &copy; 2024-All Rights Reserved </p>
        </div>
        </div>
        </body>

</html>