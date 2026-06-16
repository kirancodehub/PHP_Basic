<?php include_once("form.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Bank Management System</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>

<body>

<center>
    <h1>Bank Management System</h1>
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

            <li><a href="?page=show_account_form">Show Account Information</a></li>

            <li><a href="?page=withdraw_form">Withdraw</a></li>

            <li><a href="?page=deposit_form">Deposit</a></li>

        </ul>
    </div>

    <div class="right">

        <h2>About Our Bank</h2>

        <p>
            The Bank Management System is a web-based application developed in PHP and MySQL that helps manage banking operations efficiently. It allows users to create bank accounts, deposit money, withdraw money, and view account details. The system maintains customer information and transaction records in a database, ensuring secure and organized data management.
        </p>
        <p> This system is designed to automate basic banking tasks, reduce manual work, and provide quick access to customer account information. Through a user-friendly interface, customers and bank staff can perform transactions easily while maintaining accurate account balances. </p> 

        <?php
        
        if(isset($_GET['msg']))
        {
            echo "<h3 style='color:green;'>" . $_GET['msg'] . "</h3>";
        }

        $obj = new forms();
        
        $page = isset($_GET['page']) ? $_GET['page'] : '';
        
        if ($page == "withdraw_form") {
            $obj->set_method("POST");
            $obj->set_action("process.php");
            $obj->withdraw_form();
        }
        elseif ($page == "deposit_form") {
            $obj->set_method("POST");
            $obj->set_action("process.php");
            $obj->deposit_form();
        }
        elseif($page=="show_account_form")
        {
            $obj->set_method("POST");
            $obj->set_action("process.php");
            $obj->show_account_form();
        }
        else {
            echo "<h2>Welcome to Bank Management System</h2>";
        }
        
        ?>

    </div>

</div>

<footer style="text-align:center; padding:10px; background:#222; color:white;">
    <p>© 2026 Hospital Management System. All Rights Reserved.</p>
</footer>

</body>
</html>