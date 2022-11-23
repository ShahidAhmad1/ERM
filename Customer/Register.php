<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include '../_dbconnect.php';
    $Customer_name = $_POST["Customer_name"];
    $Customer_email = $_POST["Customer_email"];
    $Customer_psw = $_POST["Customer_psw"];
    $Customer_psw_repeat = $_POST["Customer_psw_repeat"];
    $Customer_Country = $_POST["Customer_Country"];
    $Customer_State = $_POST["Customer_State"];
    $Customer_District = $_POST["Customer_District"];
    $Customer_Address = $_POST["Customer_Address"];
    $Customer_Number  = $_POST["Customer_Number"];
    $Customer_Pincode = $_POST["Customer_Pincode"];
    $existSql = "SELECT * FROM customer_registration WHERE Customer_name = '$Customer_name'";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);
    if ($numExistRows > 0) {
        echo "Username Already Exists";
    } else {

        if ($Customer_psw == $Customer_psw_repeat) {
            $hash = password_hash($Customer_psw, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `customer_registration` (`Customer_name`,`Customer_email`,`Customer_psw`,`Customer_Country`,`Customer_State`,`Customer_District`,`Customer_Address`,`Customer_Number`,`Customer_Pincode`,`D&T`) VALUES ('$Customer_name','$Customer_email','$hash','$Customer_Country','$Customer_State','$Customer_District','$Customer_Address','$Customer_Number','$Customer_Pincode',current_timestamp())";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo 'Your account is now created and you can login . <a href="/ERM/Customer_Login.php">Login</a>';
            }
        } else {
            echo "Passwords do not match";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Registration Page</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>


<body class="body_style">
    <form method="post">

        <h1>Register</h1>
        <label for="Username">Username:</label>
        <input class="Customer_input_style" type="text" id="Customer_name" name="Customer_name" required>
        <label for="email">Email</label>
        <input class="Customer_input_style" type="email" placeholder="EnterEmail" name="Customer_email" id="Customer_email" required>

        <label for="psw">Password</label>
        <input class="Customer_input_style" type="password" placeholder="Enter Password" name="Customer_psw" id="Customer_psw" required>

        <label for="psw-repeat">Repeat Password</label>
        <input class="Customer_input_style" type="password" placeholder="Repeat Password" name="Customer_psw_repeat" id="Customer_psw_repeat" required>

        <label for="Country">Country</label>
        <input class="Customer_input_style" type="text" placeholder="Country" name="Customer_Country" id="Customer_Country" required>

        <label for="State">State</label>
        <input class="Customer_input_style" type="text" id="Customer_State" name="Customer_State" required>

        <label for="District">District:</label>
        <input class="Customer_input_style" type="text" id="Customer_District" name="Customer_District" required>

        <label for="Address">Address</label>
        <input class="Customer_input_style" type="text" id="Customer_Address" name="Customer_Address" required><br>

        <label for="Contact number">Contact number:</label>
        <input class="Customer_input_style" type="tel" id="Customer_Number" name="Customer_Number" required>

        <label for="Pin Code">Pin Code:</label>
        <input class="Customer_input_style" type="number" id="Customer_Pincode" name="Customer_Pincode" required>
        <button type="submit">Register</button>
    </form>

</body>

</html>