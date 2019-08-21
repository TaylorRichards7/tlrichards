<?php
    session_start();

    //this affects the content of the $_SESSION variable(e)
    $_SESSION['validUser'] = "";
    session_unset('validUser');     //unsets the variable


    session_destroy();  //destroys the current session and all related session info

    header('Location: coffeeDesignHome.html');   //redirects the sign on page or the home page
?>