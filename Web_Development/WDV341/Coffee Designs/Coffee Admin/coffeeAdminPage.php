<?php

    session_start();

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

    <title>Coffee Design Admin Page</title>

    <style>
        h1 {
            color: #fa6690;
            text-align: center;
        }

        h4 {
            color: #cc9766;
            text-align: center;
        }

        .adminContainer {
            margin: 0 auto;
            width: 50%;
            padding: 1%;
        }

        .buttonContainer {
            margin: 0 auto;
            width: 9.5%;
            padding: 1%;
        }

        .logoutContainer {
            margin: 0 auto;
            width: 4.7%;
        }

        a {
            color: white;
        }

        a:hover {
            color: #603f20;
            text-decoration: none;
        }
    </style>
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
    
    <h1>Thank You for logging in Administrator!</h1>
    <br />
    <div class="adminContainer">
        <h4>This page allows you to look at, insert and delete products for Coffee Designs. Coffee Designs inserts all product suggestions (unless they are truly bad) and then once a week we hold meetings to discuss which ones we are going to keep and send to the design stage and which ones we are going to delete and get rid of. This page also allows you to view our sales report so we can see how our company is doing and if there are any areas wee need to improve on.</h4>
    </div>
    <br />
    <br />

    <div class="buttonContainer">
        <a href="displayProducts.php" class="btn btn-color" role="button">View Products</a>
        <br />
        <br />

        <a href="insertProducts.html" class="btn btn-color" role="button">Insert Products</a>
        <br />
        <br />

        <a href="displayDeleteProducts.php" class="btn btn-color" role="button">Delete Products</a>
        <br />
        <br />

        <a href="SalesView.html" class="btn btn-color" role="button">Sales Report</a>
    </div>
        <br />
        <br />

    <div class="logoutContainer">
        <a href="../logoutPage.php" class="btn btn-color" role="button">Log Out</a>
    </div>

    <br />
    <br />
    <br />


    <div class="topButtonContainer">
        <a href="#top" class="btn btn-color" role="button">Go to top</a>
    </div>
    <br />


    <footer class="footer">
        <div class="containerFooter">
            <p class="text">Coffee Designs <br /> 1234 Coffee Dr <br /> 515-123-4567</p>
        </div>
    </footer>

</body>
</html>