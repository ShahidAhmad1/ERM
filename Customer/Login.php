<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include ('../_dbconnect.php');
    $Customer_name = $_POST["Customer_name"];
    $Customer_psw = $_POST["Customer_psw"];


    $sql = "Select * from  Customer_registration where Customer_name='$Customer_name'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        while ($row = mysqli_fetch_assoc($result)) {
            if (password_verify($Customer_psw, $row['Customer_psw'])) {
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['Customer_name'] = $Customer_name;
                header("location:Frontpage.php");
            } else {

                echo "Invalid Credentials";
            }
        }
    } else {

        echo "Invalid Credentials";
    }
    $conn->close();
}


?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ERM/CSS/Login.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <title> Customer Login Page</title>
</head>


<body>
    <section class="container forms">
        <div class="form login">
            <div class="form-content">
                <header><span class="header-span">Welcome!</span> <br> Login</header>
                <form method="post">
                    <div class="field input-field">
                        <input type="text" placeholder="User Name" class="input" id="Customer_name" name="Customer_name">
                    </div>

                    <div class="field input-field">
                        <input type="password" placeholder="Password" class="password" id="Customer_psw" name="Customer_psw">
                        <i class='bx bx-hide eye-icon'></i>
                    </div>

                    <!-- <div class="form-link">
                            <a href="#" class="forgot-pass">Forgot password?</a>
                        </div> -->

                    <div class="field button-field">
                        <button>Login</button>
                    </div>
                </form>

                <div class="form-link">
                    <span>Don't have an account? <a href="Register.php">Create New Account</a></span>
                </div>
            </div>

            <!-- <div class="line"></div> -->

            <!-- <div class="media-options">
                    <a href="#" class="field facebook">
                      <i class="fa-brands fa-facebook-f facebook-icon"></i>
                        <span>Login with Facebook</span>
                    </a>
                </div>

                <div class="media-options">
                    <a href="#" class="field google">
                        <img src="google.png" alt="" class="google-img">
                        <span>Login with Google</span>
                    </a> -->

    </section>
    <script src="../javascript.js"></script>
</body>

</html>