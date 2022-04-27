<?php

include "config.php";
if (isset($_POST["submit"])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, md5($_POST['pass']));

    $select = mysqli_query($conn, "select * from users where email='$email' and pass='$pass'")
        or die("query failed!");

    if (mysqli_num_rows($select) > 0) {
        $message = "Login Successfull!";
        $row = mysqli_fetch_assoc($select);
        $_SESSION['email'] = $row['email'];
        header('location:admin.php');
    } else {
        $message[] = "Login Failed!";
    }
}

if (isset($message)) {
    foreach ($message as $message) {
        echo '<div class="message" onclick="this.remove();">' . $message . '</div>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "head.php"; ?>
    <style>
        .message {
            position: sticky;
            top: 0;
            left: 0;
            right: 0;
            padding: 15px 10px;
            background-color: var(--white);
            text-align: center;
            z-index: 1000;
            box-shadow: var(--box-shadow);
            font-size: 20px;
            border-bottom: 1px solid black;
            cursor: pointer;
        }

        body {
            margin: 0;
            padding: 0;
        }

        .form {
            width: 100vw;
            height: 90vh;
            display: flex;
            justify-content: center;
        }

        .container {
            height: 100%;
            width: 40%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .container a {
            color: #e90606;
        }

        .container .social {
            display: flex;
            justify-content: space-around;
            height: 10%;
            width: 90%;
        }

        .container .social a {
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            height: 90%;
            width: 40%;
            border: 1px solid black;
            color: black;
            font-size: 20px;
            background: white;
        }

        .social a .bx {
            font-size: 25px;
        }

        .container .line {
            display: flex;
            width: 90%;
        }

        .line hr {
            width: 47%;
            border: 1px solid black;
        }

        .container input {
            width: 90%;
            height: 7%;
            background: #f0f1f2;
            border: 1px solid #000001;
            border-radius: 3px;
            margin-bottom: 20px;
        }

        .container .button {
            width: 91%;
            height: 8%;
            border-radius: 3px;
            background: #e90606;
            color: white;
            font-weight: 900;
            letter-spacing: 2px;
            border: none;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <?php include "header.php"; ?>
    <form method="POST">
        <div class="form">
            <div class="container">
                <h1>Login Admin TIME account.</h1>
                <input type="email" name="email" placeholder="Enter your email address" required>
                <input type="password" name="pass" placeholder="Enter your password" required>
                <input type="submit" name="submit" class="button" value="LOG IN">
                <p>Don't have an account? <a href="adminregister.php">REGISTER NOW</a></p>
            </div>
        </div>
    </form>
    <?php include "footer.php"; ?>
</body>

</html>