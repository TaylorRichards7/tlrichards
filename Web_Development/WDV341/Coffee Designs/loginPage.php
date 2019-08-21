<?php
session_start();

if( !isset($_SESSION['validUser']) ) {
    // header('Location https://www.google.com');
}

    $coffee_user_name = "";
    $coffee_user_password = "";

    $nameErrMsg = "";
    $passErrMsg = "";

    $validForm = false;

    function validUserName() {
        global $coffee_user_name, $validForm, $nameErrMsg;
        $nameErrMsg = "";
        if($coffee_user_name=="")
        {
            $validForm = false;
            $nameErrMsg = "Please Enter Your Username";
        }
    }

    function validatePassword() {
        global $coffee_user_password, $validForm, $passErrMsg;
        $passErrorMsg = "";
        if($coffee_user_password=="") 
        {
            $validForm = false;
            $passErrMsg = "Please Enter Your Password";
        }
    }

    if( isset($_POST["loginSubmit"]) )
    {

        $coffee_user_name = $_POST['coffee_user_name'];
        $coffee_user_password = $_POST['coffee_user_password'];

        $validForm = true;

        validUserName();
        validatePassword();


        if($validForm) {
            require 'connectPDO.php';

            $coffee_user_name = $_POST['coffee_user_name'];
            $coffee_user_password = $_POST['coffee_user_password'];

            // $sql = "INSERT INTO coffee_designs_user (coffee_user_name, coffee_user_password) VALUES (:coffee_user_name, :coffee_user_password)";

            try 
            {
                $stmt = $stmt = $conn->prepare("SELECT * FROM coffee_designs_user WHERE coffee_user_name = '$coffee_user_name' AND coffee_user_password = '$coffee_user_password'");

                $stmt->bindParam(':coffee_user_name', $coffee_user_name);
                $stmt->bindParam(':coffee_user_password', $coffee_user_password);

                $stmt->execute();
            }

            catch (PDOException $e) {
                $message = "There has been a problem. The system administrator has been contacted. Please try again later.";
	
				error_log($e->getMessage());
				error_log(var_dump(debug_backtrace()));	
			
				header('Location: files/505_error_response_page.php');
            }
        }
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

    <title>Log In</title>

    <style>
        body{
            background-color: #dfbe9f;
            font-family: 'Dosis', sans-serif;
        }

        .loginContainer {
            display: flex;
            justify-content: center;
        }

        .loginBackground {
            background-color: #fec0cf;
            padding: 1.5%;
        }

        h1 {
            color: #603f20;
            text-align: center;
        }

        #passwordMsg {
            color: #fa6690;
            font-weight: bold;
        }

        #errorName {
            color: red;
            font-style: italic;
        }

        #phoneNumber {
            display: none;
        }

        .btn-color {
            background-color: #fc9cb7;
            color: white;
        }

        .buttonContainer {
            display: flex;
            justify-content: center;
        }
    </style>

    <script>
        function validatePhoneNumber() {
            if(!document.getElementById("coffee_phone_number").value) {
                return true;
            }
            else {
                return false;
            }
        }
</script>

</head>

<body>

<?php
    if($validForm)
    {
        header('Location: Coffee User/homeCoffeeDesign.html');
    }
    else
    {
?>
<br />
<br />
<br />

<div class="loginContainer">
    <div class="loginBackground">
        <h1>Please Enter Your Username and Password</h1>
        <form name="loginForm" method="post" onsubmit="return validatePhoneNumber();" action="loginPage.php">
            <div class="form-group">
                <label for="userName">Username: </label>
                <input type="text" name="coffee_user_name" id="coffee_user_name" value="<?php echo $coffee_user_name; ?>"><span id="errorName"><?php echo $nameErrMsg; ?></span>
            </div>
            <div class="form-group">
                <label for="password">Password: </label>
                <input type="password" name="coffee_user_password" id="coffee_user_password" pattern="(?=.*\d)(?=.*[a-z]).{6,}" value="<?php echo $coffee_user_password ?>"><span id="errorName"><?php echo $passErrMsg; ?></span><br /><span id="passwordMsg">*Password must include a lowercase letter, a number and be at least 6 characters long</span>
            </div>
            <div class="form-group" id="phoneNumber">
                <label for="phoneNumber">Phone Number: </label>
                <input type="text" name="coffee_phone_number" id="coffee_phone_number">
        </div>
        <div class="buttonContainer">
            <button type="submit" name="loginSubmit" id="loginSubmit" class="btn btn-color">Login</button>
        </div>
        </form>
    </div>
</div>

<?php 
    }
?>

</body>
</html>