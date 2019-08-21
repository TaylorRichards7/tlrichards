<?php

session_start();

require 'connectPDO.php';

$coffee_product_name = $_POST['coffee_product_name'];     //pull the value of the field
$coffee_product_price = $_POST['coffee_product_price'];
$coffee_product_quantity = $_POST['coffee_product_quantity'];

$sql = "INSERT INTO coffee_product_insert (coffee_product_name, coffee_product_price, coffee_product_quantity) VALUES (:coffeeProductName, :coffeeProductPrice, :coffeeProductQuantity)";

try {

    $stmt = $conn->prepare($sql);   //prepare the SQL statement

    $stmt->bindParam(':coffeeProductName', $coffee_product_name);  //bring placeholder to a value
    $stmt->bindParam(':coffeeProductPrice', $coffee_product_price);
    $stmt->bindParam(':coffeeProductQuantity', $coffee_product_quantity);

    $stmt->execute();       //process the SQL against the database
}
catch(PDOException $e)
	{
		$message = "There has been a problem. The system administrator has been contacted. Please try again later.";
	
		error_log($e->getMessage());
		error_log(var_dump(debug_backtrace()));		
			
		header('Location: files/505_error_response_page.php');	//sends control to a User friendly page					
	}


?>
<!DOCTYPE html>
<html>
<head>
<title>Insert Event</title>
</head>

<?php

    header('Location: coffeeAdminPage.php'); //sends user to admin page

?>

<body>
</body>
</html>