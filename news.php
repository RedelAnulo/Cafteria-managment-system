<?php
session_start();

?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>News</title>
        <link rel="icon" href="p.png">
        <link rel="stylesheet" href="style.css" type="text/css" />

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


        <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" activee", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " activee";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
        </script>
        </div>
        </div>
        <div id="homebar1">
            <h1>News</h1>
            <?php

include 'connection.php';



//write sql satement 
$sql = "SELECT body FROM news ";
$result = $conn->query($sql);

if ( $result->num_rows > 0 ){
		//get each row
		
	while($row = $result->fetch_assoc()){
		
		echo $row["body"]."<br>"."<br>";
	}
	
}else{
	echo "no result found";
} 
$conn->close();

?>
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
                <h2><a href="index.html" style="color:gray;margin-left: ">Crime File Mangement System For HAWASSA Police
                        Station</a></h1>
            </div>
            <div class="col2">
                <h2 class="title">
                    <img src="facebook.png" class="icon">Let Us Be Friends
                </h2>
                <hr class="line">
                <p>We are always active</p>
                <a href="http://www.facebook.com/hueduetpolicestation">Facebook</a>
            </div>
            <div class="col3">
                <h2 class="title">Contact</h2>
                <hr class="line">
                <p>HAWASSA,Ethiopa</p>
                <p>Telephone: +251912366655</p>
                <p>E-mail:<a href="http://hueduetpolicestation@gmail.com"
                        style="color:gray;">hueduetpolicestation@gmail.com</a></p>
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
                <p>Copyright &copy; 2019-All Rights Reserved | Developed by <a href="index.html"><b>Group
                            Members</b></a></p>
            </div>
        </div>
    </body>

</html>