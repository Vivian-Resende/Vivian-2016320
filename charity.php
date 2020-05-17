<?php

ini_set('display_startup_errors',1); 
ini_set('display_errors',1);
error_reporting(-1);

session_start();

?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewpoint" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/jquery.mobile-1.4.5.css">
<script src="js/jquery.js"></script>
<script type="text/javascript">

</script>
<script src="js/jquery.mobile-1.4.5.js"></script>

</head>
<body>
<!-- Start of first page -->
<div data-role="page" id="menu">

	<div data-role="header">
		<h1>Donation App</h1>
    </div><!-- /header -->
    <img src="donate.png" alt="code"> 
    <div role="main" class="ui-content">
        <h2>WELCOME <?php echo $_SESSION['charity'];
?>

</h2>

<form method="POST" id="userDonation" action="donation.php">
<label for="charityName"> Donation place name:</label>
<input type="text" name="charity_name" id="charity_name" value="">
<label for="charity_id"> Donation place ID:</label>
<input type="number" name="charity_id" id="charity_id" value="">
<label for="user_id"> User ID:</label>
<input type="number" name="user_id" id="user_id" value="">
<label for="points"> Points:</label>
<input type="number" name="points" id="points" value="">
<label for="textarea"> Description of donation:</label>
<textarea cols="40" rows= "8" name="item_description" id="textarea"></textarea>
<label for="customername"> Customer name:</label>
<input type="text" name="customer" id="customer" value="">

<input type="submit"  value="Add" name="charity"/>
</form>
         <a href="#qrcode" class="ui-btn">Scan QR Code</a>
         <a href="logout.php" class="ui-btn">Logout</a>
    </div><!-- /content -->
    
<div data-role="footer" data-position="fixed" >
    <h4>2020 Contact us: 01 800 720 6035</h4>
</div><!-- /footer -->
</div><!-- /page -->





<!-- Start of second page -->
<div data-role="page" id="qrcode">
    
    <div data-role="header">
        <a href="#menu"  data-direction="reverse" class="ui-btn">Back</a>
        <h1>QR Code</h1>
    </div><!-- /header -->

    <div role="main" class="ui-content">
        <p>Camera to scan QR Code.</p>
        
    </div><!-- /content -->

    <div data-role="footer" data-position="fixed">
        <h4>2020 Contact us: 01 800 720 6035</h4>
    </div><!-- /footer -->
</div><!-- /page -->


 
</body>
</html>