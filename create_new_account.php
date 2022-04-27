<!DOCTYPE html>
<html lang="en">

<head>
   <?php include "head.php"?>
    <title>Create New Account</title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        .form {
            width: 100vw;
            height: 90vh;
            display: flex;
            justify-content: center;
            border-top: 1px solid rgba(0, 0, 0, 0.4);
        }

        .container {
            height: 100%;
            width: 40%;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            align-items: center;
        }

        .container a {
            color: #e90606;
        }

        .container h1 {
            text-align: center;
            padding: 0 30px 0 30px;
        }
        .container .social{
            display: flex;
            justify-content: space-around;
            height: 10%;
            width: 90%;
        }
        .container .social a{
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            height: 90%;
            width: 40%;
            border:1px solid black;
            color: black;
            font-size: 20px;
            background: white;
        }
        .social a .bx{
            font-size: 25px;
        }
        .container .line{
            display: flex;
            width: 90%;
        }
        .line hr{
            width: 47%;
            border:1px solid black;
        }
        .container input{
            width: 90%;
            height: 7%;
            background: #f0f1f2;
            border: 1px solid #000001;
            border-radius: 3px;
        }
        .container button{
            width: 91%;
            height: 8%;
            border-radius: 3px;
            background: #e90606;
            color: white;
            font-weight: 900;
            letter-spacing: 2px;
            border: none;
        }
        .container p{
            color: #a3a5a9;
        }
    </style>
</head>

<body>
    <?php include "header.php" ?>
    <div class="form">
        <div class="container">
            <div>
                <span>Already have a digital account?</span>
                <span><a href="sign_in.php">Sign in</a></span> |
                <span>Existing print subscriber?</span>
                <span><a href="print_subscription.php">Click here</a></span>
            </div>
            <h1>Create a free account to
                read this article.</h1>
            <div class="social">
                <a href="#"><i class='bx bxl-google' style="color: black;"></i>Use Google</a>
                <a href="#"><i class='bx bxl-facebook-circle' style="color: black;"></i>Use Facebook</a>
            </div>
            <div class="line">
                <hr> 
                OR
                <hr>
            </div>
            <input type="email" placeholder="Enter your email address" required>
            <input type="password" placeholder="Enter your password" required>
            <button>CREATE ACCOUNT</button>
            <div>
                <span>Want unlimited access?</span>
                <span><a href="#">Subscribe now</a></span>
            </div>
            <p>You can unsubscribe from emails at any time. By signing up you are agreeing to our</p>
            <div class="btm_line">
                <a href="#">Terms of Use</a>
                <span>and</span>
                <a href="#">Privacy Policy</a>
            </div>
        </div>
    </div>
    <?php include "footer.php" ?>
</body>

</html>