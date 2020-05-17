<?php

ini_set('display_startup_errors',1); 
ini_set('display_errors',1);
error_reporting(-1);

session_start();
require('connect.php');

?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewpoint" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/jquery.mobile-1.4.5.css">
<link rel="stylesheet" href="app.css">
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
    <div data-role="header" >
        <h1>Donation App</h1>
    </div><!-- /header -->
    <img src="donate.png" alt="code"> 
    <div role="main" class="ui-content">
    <h2>WELCOME <?php echo $_SESSION['customer'];
?>
</h2>


<h1>Your total points: 100</h1>

<img src="qrcode.png" alt="code">


<input type="button" value="Check your donations" class="ui-btn" id="btnHome" 
onClick="document.location.href='customer.php#donation'" />
        
         <a href="#discount" class="ui-btn" >Check your discounts</a>
         <a href="logout.php" class="ui-btn">Logout</a>
    </div><!-- /content -->
  
  
   

    <div data-role="footer" data-position="fixed" >
        <h4>2020 Contact us: 01 800 720 6035</h4>
    </div><!-- /footer -->
</div><!-- /page -->



 <!-- Start of second page -->
 <div data-role="page" id="donation">
    
    <div data-role="header">
        <a href="#menu"  data-direction="reverse" class="ui-btn">Back</a>
        <h1>Donations and Points</h1>
    </div><!-- /header -->

    <div role="main" class="ui-content">
    <h2><?php echo $_SESSION['customer'];
?><h2>
       
        <?php

$sql = "select * from charity where user_id = 9";
if($result = mysqli_query($connection, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
               
                echo "<th>date_added</th>";
                echo "<th>item_description</th>";
                echo "<th>Item_points</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
               
                echo "<td>" . $row['date_added'] . "</td>";
                echo "<td>" . $row['item_description'] . "</td>";
                echo "<td>" . $row['Item_points'] . "</td>";
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



<!-- Start of third page -->
<div data-role="page" id="discount">
    
    <div data-role="header">
        <a href="#menu"  data-direction="reverse" class="ui-btn">Back</a>
        <h1>Discounts you can get with the points</h1>
    </div><!-- /header -->

    <div role="main" class="ui-content">

        <p>Tesco - 100 points get 10 euro discount.
        <br></br>
        TK Maxx - 50 points get 5 euro discount. 
        <br></br>
        Dunnes - 200 points get 20 euro discount.
        <br></br>

        All stores same points same disconts.
        Discounts given depends on how much points you accumulate.
        </p>

      
    </div><!-- /content -->

    <div data-role="footer" data-position="fixed">
        <h4>2020 Contact us: 01 800 720 6035</h4>
    </div><!-- /footer -->
</div><!-- /page -->

</body>
</html>