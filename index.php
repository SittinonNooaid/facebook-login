<?php

	session_start();
//=========== facebook ===========
	include_once('fb-config.php');
	include_once('fb-login.php');

?>

<!doctype html>
<html xmlns:fb="http://www.facebook.com/2008/fbml">
<link rel="stylesheet" type="text/css" href="css/style.css">
<head>
	<title>13570340</title>
</head>
<body> 
	<?php
		if(isset($_SESSION['facebook_access_token'])){
		?>
		<div class="box-info2">
			<h1>ข้อมูลรายละเอียด</h1>
			<div class="box-img">
			<img src="<?php echo $facebook_imgURL ; ?>" alt="">
			</div>
			<p>ชื่อ facebook :  <?php echo $facebook_name ; ?></p>
			<p>ชื่อจริง :  <?php echo $facebook_fname ; ?></p>
			<p>ชื่อสกุล :  <?php echo $facebook_lname ; ?></p>
			<p>เพศ :  <?php echo $facebook_gender ; ?></p>
			<p>email :  <?php echo $facebook_email ; ?></p>

			
        		<?php
        			echo '<a href="logout.php" class="myButton"> <button class="box-but"> Logout with Facebook  </button>  </a>';
        		?>
    		

		<?php
		}

	?>
	
<body>
</body>
</html>
