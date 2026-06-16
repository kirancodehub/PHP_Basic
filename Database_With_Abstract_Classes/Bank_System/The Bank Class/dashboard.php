
<?php 
include_once("form.php"); 
session_start();
if(!isset($_SESSION['users']))
{
    header("Location: index.php?msg=Please Search Account First");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>bank Management System</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>

<body>

<center>
    <h1>Bank Management System</h1>

	<h2>Welcome : <?php echo $_SESSION['users']['name'];?></h2>

    <h2><a href="logout.php">Logout</a></h2>

    
</center>

<div class="container">

    <div class="left">
        <h3>Bank Features</h3>
        <ul>
            <li>Savings Account facility</li>
            <li>Current/Checking Account facility</li>
            <li>Money deposit and withdrawal services</li>
            <li>Debit and Credit Card services</li>
            <li>Online Banking and Mobile Banking</li>
            <li>Fund Transfer services</li>
            <li>Personal, Home, and Business Loans</li>
            <li>Bill payment, cheque, and ATM services</li>
        </ul>
        <ul>
            <br><br>
    </div>

    <div class="right">

        <h2>About Our Bank</h2>

        <p>
            The Bank Management System is a web-based application developed in PHP and MySQL that helps manage banking operations efficiently. It allows users to create bank accounts, deposit money, withdraw money, and view account details. The system maintains customer information and transaction records in a database, ensuring secure and organized data management.
        </p>
        <p> This system is designed to automate basic banking tasks, reduce manual work, and provide quick access to customer account information. Through a user-friendly interface, customers and bank staff can perform transactions easily while maintaining accurate account balances. </p> 

        <?php

        if(!isset($_SESSION['users']))
        {
            die("No Data Found");
        }

        $show_info = new forms();
        $show_info->info();
        ?>
        
        
            </div>
        
        </div>
        
    <footer style="text-align:center; padding:10px; background:#222; color:white;">
        <p>© 2026 Hospital Management System. All Rights Reserved.</p>
    </footer>

</body>
</html>