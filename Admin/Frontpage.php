<?php
session_start();
require_once('header.php');
require_once('sidebar.php');

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location:Login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin_Frontpage</title>
    <!-- <link rel="stylesheet" href="../CSS/style.css"> -->
</head>

<body class="body_style">
    <!-- <header>
        <div class="">
            <nav class="nav_bar">
                <ul>
                    <li class="li_style"><a class="anchor_style" href="/ERM/Admin/View_Technicians.php">View Technicians</a></li>
                    <li class="li_style"><a class="anchor_style" href="/ERM/Admin/View_Customers.php">View Customers</a></li>
                    <li class="li_style"><a class="anchor_style" href="/ERM/Admin/Logout.php">Logout</a></li>
                </ul>
            </nav>
        </div>
    </header> -->

    <div class="rest-section">
        <!-- <h1>Users</h1> -->

        <?php
    
        ?>
    </div>
</body>

</html>