<?php

	session_start();


	include 'connectPDO.php';			//connects to the database

	try {
		$stmt = $conn->prepare("SELECT coffee_product_id,coffee_product_name,coffee_product_price,coffee_product_quantity FROM coffee_product_insert");	
		$stmt->execute();
	}

	catch(PODException $e) {
		$message = "There has been a problem. The system administrator has been contacted. Please try again later.";
	
		error_log($e->getMessage());
		error_log(var_dump(debug_backtrace()));	
	
		header('Location: files/505_error_response_page.php');
	}
?>

<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">

    <link rel="stylesheet" href="../coffeeDesignCSS.css">

    <style>
        #tableContainer {
            margin: 0 auto;
            width: 45%;
            padding: 1%;
        }

        .returnButton {
            margin: 0 auto;
            width: 12%;
        }
    </style>

<title>View Product Info</title>
</head>

<body>

    <section id="top">
    </section>

    <div class="jumbotron jumbotron-fluid">
        <p class="header">Coffee Designs</p>
        <p class="subhead">It's a clay thing</p>
    </div>
    <br />
    <br />

    <table id="tableContainer" class="table table-bordered">
        <thead>    
            <tr>
		        <th>ID</th>
		        <th>Name</th>
		        <th>Price</th>
		        <th>Quantity</th>
<?php 
	while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
	{
		echo "<tr>";
			echo "<td>" . $row['coffee_product_id'] . "</td>";
			echo "<td>" . $row['coffee_product_name'] . "</td>";	
			echo "<td>" . $row['coffee_product_price'] . "</td>";
			echo "<td>" . $row['coffee_product_quantity'] . "</td>";		
		echo "</tr>";
	}
?>
        </thead>
    </table>
    <br />
    <br />

    <div class="returnButton">
        <a href="coffeeAdminPage.php" class="btn btn-color" role="button">Return to Admin Page</a>
    </div>
    <br />
    <br />


    <footer class="footer">
        <div class="containerFooter">
            <p class="text">Coffee Designs <br /> 1234 Coffee Dr <br /> 515-123-4567</p>
        </div>
    </footer>

</body>
</html>