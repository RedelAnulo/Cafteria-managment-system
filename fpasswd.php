              <?php
if(isset($_POST['submit'])){
    $uid=$_POST['username'];
		
require('dbcon.php');

     $sql="select * from manager where username='$uid'";
    $result=mysqli_query($conn, $sql);
    $num=mysqli_num_rows($result) or die(mysqli_error($conn));
      if($num>0){
		   session_start();
		   $_SESSION['username']=$uid;
			// $_SESSION['uname']=$uname;
             $qry="select quetion from manager where username='".$uid."'";
             $results = mysqli_query($conn, $qry) or die(mysqli_error($conn));
			 $res=mysqli_fetch_array($results);
			 $q=$res['quetion'];
		include('forgotpass2.php');
  }else{
    ?>
  <?php // echo "<div class='alert alert-danger' style='width:300px;'><b>&nbsp;&nbsp;&nbsp;&nbsp;You Entered invalid Username  </b></div>";
  echo '<script language="javascript">alert("You Entered invalid Username");window:location=\'forgot.php\';</script>';
}}
?>