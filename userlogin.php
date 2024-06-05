
<?php
session_start();
?>

<!DOCTYPE HTML>
<html>
<head><meta name="viewport" content="width=device-width"/>
<title>Login Page </title>
<!-- STYLES & JQUERY 
================================================== -->
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/icons.css"/>
<link rel="stylesheet" type="text/css" href="css/skinblue.css"/><!-- Change skin color here -->
<link rel="stylesheet" type="text/css" href="css/responsive.css"/>
<link rel="stylesheet" type="text/css" href="css/registrationicon.css"/>
<script src="js/jquery-1.9.0.min.js"></script><!-- scripts at the bottom of the document -->
</head>
<style>
.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
  opacity: 1;
  transition: opacity 0.6s;
  margin-bottom: 15px;
  font-size: 16px;
}
.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>
<body   style="  background-image:  url('images/yourimage.jpg');  
 background-repeat: no-repeat;
 width: 100%;">
<!-- TOP LOGO & MENU
================================================== -->
<div class="grid"  >

</div>


<!-- HEADER
================================================== -->
<div class="undermenuarea">

</div>
<!-- CONTENT
================================================== -->
<div class="grid" style="background-color: white; border-radius: 20px; width: 45%; margin-top: 120px;">
		
		<div class="row space-top" >
			<!-- CONTACT FORM -->
			<div class="c8 space-top" style="width: 100%; padding-left: 10%;" >
				<h1 class="maintitle">
				<span><i class="icon-user"></i> &nbsp;You can login to your account</span>
				</h1>
				<div class="wrapcontact">
					<?php 
					   if(isset($_SESSION['loginerror']))
					   { ?>
					<div class="alert">
  <span class="closebtn">&times;</span>  
<i class="icon-warning-sign" ></i> <?php echo  $_SESSION['loginerror']; ?></div>
   								
					   				<?php
				                    unset($_SESSION['loginerror']);
					   }
					 ?>
					<form method="post" action="userloginprocess.php" id="contactform">
						<div class="form">



  <div class="FormIcon IconBig">
      <input type="text" title="Please enter your Username" required="" placeholder="Username..." name="username" "
      oninvalid="this.setCustomValidity('Enter your username here ')"
            oninput="this.setCustomValidity('')"   > <i class="icon-user" aria-hidden="true" ></i>
            </div>

        <div class="FormIcon IconBig">
      <input type="password" title="Please enter your password" required="" placeholder="Password..." name="password" "
      oninvalid="this.setCustomValidity('Enter your password here ')"
            oninput="this.setCustomValidity('')">  <i class="icon-lock" aria-hidden="true" ></i>
            </div>


    


							<button style=" width: 100%; font-size: 20px; ">
								<i class="icon-signin">&nbsp; Sign In </i>
							</button>	
								<br><br>		
							<button style=" width: 100%; font-size: 20px; " onclick="reset()">
								<i class="icon-remove" >&nbsp; Cancel </i>
							</button>
							  <p> If you haven't account &nbsp;&nbsp;<a href="#" style="font-size: 20px;" > <i class="icon-user"></i> click here</a>. <br> Back to home <a href="#" style="font-size: 20px;" ><i class="icon-home"></i> click here</a>.</p>  

							</form>
						</div>
					
				</div>
			</div>

		
		</div>
</div><!-- end grid -->

<!-- FOOTER
================================================== -->
<div id="wrapfooter">

</div>

<!-- JAVASCRIPTS
================================================== -->
<!-- all -->
<script src="js/modernizr-latest.js"></script>

<!-- menu & scroll to top -->
<script src="js/common.js"></script>

<!-- slider -->
<script src="js/jquery.cslider.js"></script>

<!-- cycle -->
<script src="js/jquery.cycle.js"></script>

<!-- carousel items -->
<script src="js/jquery.carouFredSel-6.0.3-packed.js"></script>

<!-- twitter -->
<script src="js/jquery.tweet.js"></script>

<!-- Call Showcase - change 4 from min:4 and max:4 to the number of items you want visible -->
<script type="text/javascript">
$(window).load(function(){			
			$('#recent-projects').carouFredSel({
				responsive: true,
				width: '100%',
				auto: true,
				circular	: true,
				infinite	: false,
				prev : {
					button		: "#car_prev",
					key			: "left",
						},
				next : {
					button		: "#car_next",
					key			: "right",
							},
				swipe: {
					onMouse: true,
					onTouch: true
					},
				scroll : 2000,
				items: {
					visible: {
						min: 4,
						max: 4
					}
				}
			});
		});	
</script>

<!-- Call opacity on hover images from carousel-->
<script type="text/javascript">
$(document).ready(function(){
    $("img.imgOpa").hover(function() {
      $(this).stop().animate({opacity: "0.6"}, 'slow');
    },
    function() {
      $(this).stop().animate({opacity: "1.0"}, 'slow');
    });
  });
</script>

<script>
var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
  close[i].onclick = function(){
    var div = this.parentElement;
    div.style.opacity = "0";
    setTimeout(function(){ div.style.display = "none"; }, 600);
  }
}
</script>
</body>
</html>