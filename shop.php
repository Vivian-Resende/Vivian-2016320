<?php

ini_set('display_startup_errors',1); 
ini_set('display_errors',1);
error_reporting(-1);

session_start();
require "connect.php";

?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewpoint" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/jquery.mobile-1.4.5.css">
<link rel="stylesheet" href="app.css">
<script src="camera.js"></script>
<script src="js/jquery.js"></script>
<script type="text/javascript">
$(document).on('mobileinit', function(){
    $.mobile.defaultPageTransition = 'slide';
});
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
    <h2>WELCOME <?php echo $_SESSION['shop'];
?>
</h2>

            
    <form method="POST" id="userDonation" action="discounts.php">
    <label for="shopName"> Shop Name:</label>
    <input type="text" name="shop_name" id="shop_name" value="">
    <label for="shop_id"> Shop ID:</label>
    <input type="number" name="shop_id" id="shop_id" value="">
    <label for="username"> Customer name:</label>
    <input type="text" name="customer" id="customer" value="">
    <label for="customer_id"> Customer ID:</label>
    <input type="number" name="user_id" id="user_id" value="">
    <label for="points"> Points:</label>
    <input type="number" name="item_points" id="item_points" value="">   
    <label for="discount"> Discount:</label>
    <input type="number" name="discount_given" id="discount_given" value="">
    <input type="submit"  value="Add" name="shop"/>
</form>

<input type="button" value="Check discounts gives" class="ui-btn" id="btnDiscounts" 
onClick="document.location.href='shop.php#discount'" />
        <a href="#qrcode"  class="ui-btn">Scan QR Code</a>
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
        <p>Camara to scan QR Code.</p>
        
    </div><!-- /content -->

    <div data-role="footer" data-position="fixed">
        <h4>2020 Contact us: 01 800 720 6035</h4>
    </div><!-- /footer -->
</div><!-- /page -->



<!-- Start of third page -->
<div data-role="page" id="discount">
    
    <div data-role="header">
        <a href="#menu"  data-direction="reverse" class="ui-btn">Back</a>
        <h1>Discounts given</h1>
    </div><!-- /header -->

    <div role="main" class="ui-content">
     

        <?php

$sql = "select * from shops";
if($result = mysqli_query($connection, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
              
                echo "<th>customer</th>";
                echo "<th>date_added</th>";
                echo "<th>discount_given</th>";
               
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
               
                echo "<td>" . $row['customer'] . "</td>";
                echo "<td>" . $row['date_added'] . "</td>";
                echo "<td>" . $row['discount_given'] . "</td>";
               
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
}
 
// Close connection
mysqli_close($connection);
?>

        
    </div><!-- /content -->

    <div data-role="footer" data-position="fixed">
        <h4>2020 Contact us: 01 800 720 6035</h4>
    </div><!-- /footer -->
</div><!-- /page -->


</body>
</html>


