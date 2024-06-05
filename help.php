<?php
session_start();

?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Help</title>
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
        <div id="topnav">
            <li class="active"><a href="index.php" style="color:yellow;margin-right;font-size: 30px " ;><b>CAFETERIA
                        MANAGEMENT SYSTEM FOR HAWASSA UNIVERSITY</b></a></li>
            <ul>
                <li class="active"><a href="index.php" style="color:yellow;margin-right;font-size: 30px "
                        ;><b>Home</b></a></li>
                <li><a href="aboutus.php" style="color:yelow;margin-right;font-size: 30px " ;>About</a></li>
                <li><a href="contact.php" style="color:yellow;margin-right;font-size: 30px " ;>Contact</a></li>

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


        < </div>
            <div id="homebar1">
                <marquee>
                    <h4 style="color:Maroon">Cafeteria management of HAWASSA University</h3>
                </marquee>
                <ul>
                    <li>Manager(Admin) create account for Store keeper, Ticker, Student</li>
                    <li>Give The Username and password for user </li>
                    <li>User browse the localhost/cms/index.php</li>
                    <li>Login form diplay at the right side </li>
                    <li>The Employer & student Enter the correct username and password </li>
                    <li>After entered in to the system Cafteria can do the following
                        <ol>
                            <li>view profile</li>
                            <li>Manage activities case</li>
                            <li>Provide student & Item information</li>
                            <li>Post news</li>
                            <li>change password</li>
                            <li>Serve student cafeteria or Non cafeteria</li>
                            <li>And etc ...</li>
                        </ol>
                    </li>
                </ul>
                <div id="essay1"><br><br><br><br><br><br>
                    <p class="m_7" style="font-family:Time News Roman; font-size:16px;">
                    <h3>For other users</h3>
                    </p>
                    <p>There are three users allowed to login to the system. These are:</p>
                    <ol>
                        <li>Manager</li>
                        <li>Store Keeper</li>
                        <li>Ticker</li>
                        <li>Student</li>
                    </ol>
                    <h4 style="font-family:Time News Roman">To login in this system</h4>
                    <ul>
                        <li>Manager create account for all users</li>
                        <li>Give The Username and password for the users </li>
                        <li>The users login to the system by their username and password </li>
                        <li>Each user of the system have their own functions </li>
                    </ul>
                    <p>If any user if he forget his password their is button forget password click and fill form and
                        change his password</p>
                </div>
                <!-- <div id="sid11" >
    <a href="login.php">Login</a>
    <div class="content">
        <form action="login.php" method="post">
            <p>Username</p>
            <input type="text" name="sid-user" maxlength="50"><br>
            <p>Password</p>
            <input type="password" name="sid-pas"><br>
            <input type="submit" name="sidlog" value="Sign in" >
        </form>
</div>
    </div> --><br><br><br><br><br><br><br><br><br><br>


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

                <div id="copyright">
                    <p>Copyright &copy; 2019-All Rights Reserved | Developed by <a href="aboutg.php"><b>Group
                                Members</b></a></p>
                </div>
            </div>
    </body>

</html>