<?php

require_once("database_settings.php");
require_once("database.php");

$db = new bank($hostname,$username,$password,$database);

if(isset($_POST['next']))
{
    $db->user_information(
        $_POST['name'],
        $_POST['email'],
        $_POST['account_no']
    );
}

if(isset($_POST['deposit']))
{
    $db->deposit(
        $_POST['account_no'],
        $_POST['deposit_amount']
    );
}


if(isset($_POST['withdraw']))
{
   /* echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    exit();*/

    $db->withdraw(
        $_POST['account_no'],
        $_POST['Withdraw']
    );
}

if(isset($_POST['show_info']))
{
    $db->show_user_account_information(
        $_POST['account_no']
    );
}

?>