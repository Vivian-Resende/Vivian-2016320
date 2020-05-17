<?php

session_start();


?>





<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">



</head>
<body>
<div class="contain">
    <div class="row">
        <h2>WELCOME ADMIN <?php
            echo $_SESSION['admin']; ?> </h2>
    </div>
</div>
<table>
    <tr>
        <th>Id</th>
        <th>Username</th>
        <th>Password</th>
        <th>Email</th>
</tr>
<?php
include 'connect.php'; 
$query = "select * from login";
$result = mysqli_query($connection, $query);
while($row = mysqli_fetch_assoc($result)){
?>
           
                 <tr>
                    <td><?php echo $row['user_id'];?></td>
                    <td><?php echo $row['username'];?></td>
                    <td><?php echo $row['password'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['role'];?></td>
            
                <td>
                <a href="delete.php?del=<?php echo $row['user_id']; ?>" class="del_btn">Delete</a>

</td>           
</tr>
                <?php           
}   
?>
</table>
<form method="POST" id="userRegister" action="register.php" >
                <fieldset id="user">
                 <p><label for="cName"> Username: <input type="text" name="tName" id="cName" size="20" maxlength="30" placeholder="Full Name" required/> </p> 
                <p><label for="cPass">   Password: <input type="password" name="tPass" id="cPass" size="8" maxlength="8" placeholder="8 digits" required/></p> 
                <p><label for="cMail"> Email: <input type="email" name="tMail" id="cMail" size="20" maxlength="40" required/>  </p>
                </fieldset>
                <input type="submit" value="Send" name="register" /> 
            </form> 
            <input type="button" value="Customer Points" class="customerbutton" id="btnCustomer" 
onClick="document.location.href='customer_table.php'" />

<a href="logout.php" class="ui-btn">Logout</a>
</body>
</html>