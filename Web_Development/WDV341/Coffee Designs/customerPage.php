<?php

session_start();

require 'connectPDO.php';

if( isset($_SESSION['coffee_user_type']=='customer') )
{
    $query= mysqli_query($conn,"SELECT * FROM `coffee_designs_user` WHERE `coffee_user_id`='".$_SESSION['coffee_user_id']."' AND  `role`='customer' ");
    $arr = mysqli_fetch_array($query);
    $num = mysqli_num_rows($query); 
    if( $num==1 )
    {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Customer Page Test</title>
</head>
    
<body>
    
    <h1>Hello there CUstomer</h1>
<?php   
    }
    else
    {
      header ("Location: loginPageTest.php");
      }
}   
else
      header ("Location: loginPageTest.php");
    
?>	
</body>
</html>