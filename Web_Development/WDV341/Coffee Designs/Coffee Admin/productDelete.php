<?php

    session_start();

   if( isset( $_GET['coffeeProductID'] ) ) {

        $inCoffeeProductID = $_GET['coffeeProductID'];      //pull ID from GET parameter into a variable

   }
   else {
        header('Location: displayProducts.php');      //basically a PHP redirect
   }


try {
    include 'connectPDO.php';	//connects to the database

    $stmt = $conn->prepare("DELETE FROM coffee_product_insert WHERE coffee_product_id=:coffeeProductID");

    $stmt->bindParam(':coffeeProductID', $inCoffeeProductID);

    $stmt->execute();

    //create a confirmation message

}

catch(PDOException $e) {
    //database problem has occurred
}

catch(Exception $e) {
    //something else broke
}


?>
<!DOCTYPE html>
<html lang="en">
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
        h1 {
            color: #fa6690;
            text-align: center;
        }

        .returnButton {
            margin: 0 auto;
            width: 12%;
        }
    </style>

    <title>Delete Coffee Designs Product</title>
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

<h1>You have successfully deleted a product</h1>
<br />
<br />

<div class="returnButton">
    <a href="displayProducts.php" class="btn btn-color" role="button">Return to Product Info</a>

    <br />
    <br />
    <br />

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