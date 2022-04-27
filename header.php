<head>
    <?php include "head.php" ?>
    <style>
        body {
            padding: 0;
            margin: 0;
        }
        a{
            text-decoration: none;
            color: #e90606;
        }
        .top {
            height: 50px;
            border-bottom: 1px solid black;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .logo{
            height: 28px;
        }
    </style>
</head>

<body>
    <div class="top">
        <a href="index.php" style="padding-left: 20px;">HOME</a>
        <a class="logo" href="index.php"><img src="images/logo.svg"></a>
        <a href="sign_in.php" style="padding-right: 20px;">SIGN IN</a>
    </div>
</body>