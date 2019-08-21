<?php
session_start();

include 'connectPDO.php';

if( isset($_POST['loginSubmit']) )
{
    if( !empty($_POST['coffee_user_name']) && !empty($_POST['coffee_user_password']) )
    {
        $coffee_user_name = $_POST['coffee_user_name'];
        $coffee_user_password = $_POST['coffee_user_password'];
        $stmt = $conn->prepare("SELECT * FROM coffee_designs_user WHERE coffee_user_name = '$coffee_user_name' AND coffee_user_password = '$coffee_user_password'");
        $stmt->execute();
    }
}

// require 'connectPDO.php';

// if( isset($_POST['loginSubmit']) )
// {
//     $coffee_user_name = $_POST['coffee_user_name'];
//     $coffee_user_password = $_POST['coffee_user_password'];

//     $cust = "customer";
//     $admin = "administrator";

//     $query = "select * from coffee_designs_user where coffee_user_name='$coffee_user_name' And coffee_user_password='$coffee_user_password' And coffee_user_type='$cust'";

//     $run_cust = mysqli_query($query);

//     $query_admin = "select * from coffee_designs_user where coffee_user_name='$coffee_user_name' And coffee_user_password='$coffee_user_password' And coffee_user_type='$admin'";

//     $run_admin = mysqli_query($query_admin);

//     if( mysqli_num_rows($run_cust==1) )
//     {
//         header('Location: coffeeDesignHome.html');
//     }
//     else if( mysqli_num_rows($run_admin==1) )
//     {
//         header('Location: Coffee Admin/coffeeAdminPage.html');
//     }
//     else
//     {
//         echo "<script>alert('Username or Password is invalid')</script>";
//     }
// }

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

    <title>Log In Test</title>

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
            color: black;
            font-style: bold;
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
    // if($validForm)
    // {
    //     header('Location: Coffee User/homeCoffeeDesign.html');
    // }
    // else
    // {
?>
<br />
<br />
<br />

 <!-- value="<?php echo $coffee_user_name; ?>"
 value="<?php echo $coffee_user_password ?>" -->

<div class="loginContainer">
    <div class="loginBackground">
        <h1>Please Enter Your Username and Password</h1>
        <form name="loginForm" method="post" onsubmit="return validatePhoneNumber();" action="loginPageTest.php">
            <div class="form-group">
                <label for="userName">Username: </label>
                <input type="text" name="coffee_user_name" id="coffee_user_name"><span id="errorName"><!--<?php echo $nameErrMsg; ?>--></span>
            </div>
            <div class="form-group">
                <label for="password">Password: </label>
                <input type="password" name="coffee_user_password" id="coffee_user_password" pattern="(?=.*\d)(?=.*[a-z]).{6,}"> <span id="errorName"><!--<?php echo $passErrMsg; ?>--></span><br /><span id="passwordMsg">*Password must include a lowercase letter, a number and be at least 6 characters long</span>
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
    // }
?>

</body>
</html>