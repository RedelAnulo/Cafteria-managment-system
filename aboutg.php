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
            <h4> Group Member</h4>
            <ul>
                <li> Fikraddis Geletaw</li>
                <li> Alebachew Biyazn</li>
                <li> Redela Anulo</li>
            </ul>


        </div>
        <div class="col3">
            <h2 class="title">Contact us...</h2>
            <hr class="line">
            <p>HAWASSA,Ethiopa</p>
            <p>Telephone: +251916400538</p>
            <p>E-mail:<a href="http://barisosafaydukalea@gmail.com" style="color:gray;">hueduet@gmail.com</a></p>
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