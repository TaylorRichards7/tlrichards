<?php

require 'connectPDO.php';

if( isset($_POST['loginSubmit']) )
{
    $coffee_user_name = $_POST['coffee_user_name'];
    $coffee_user_password = $_POST['coffee_user_password'];

    $cust = "customer";
    $admin = "administrator";

    $query = "select * from coffee_designs_user where coffee_user_name='$coffee_user_name' And coffee_user_password='$coffee_user_password' And coffee_user_type='$cust'";

    $run_cust=mysql_query($query);


    $query_admin = "select * from coffee_designs_user where coffee_user_name='$coffee_user_name' And coffee_user_password='$coffee_user_password' And coffee_user_type='$admin'";

    $run_admin = mysql_query($query_admin);

    if( mysql_num_rows($run_cust==1) )
    {
        echo "<script>window.open('coffeeDesignShop.html','_self')</script>";
    }
    else if( mysql_num_rows($run_admin==1) )
    {
        echo "<script>window.open('Coffee User/homeCoffeeDesign.html','_self')</script>";
    }
    else
    {
        echo "<script>alert('Username or Password is invalid')</script>";
    }
}
?>