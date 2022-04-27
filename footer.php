<head>
    <?php include "head.php" ?>
    <style>
        body{
            width: 100%;
        }
        .bottom {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-around;
            width: 100%;
            height: 17vh;
        }

        .bottom img {
            width: 5%;
        }

        .bottom ul {
            list-style: none;
            display: flex;
            width: 70%;
            justify-content: space-between;
        }

        .bottom ul li a {
            font-size: 12px;
            color: #a3a5a9;
        }
        .links{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 10vh;
        }
    </style>
</head>

<body>
    <hr class="two">
    <div class="bottom">
        <img src="images/logo.svg">
        <ul>
            <li><a href="#">Help Center</a></li>
            <li><a href="#">FAQs</a></li>
            <li><a href="#">Terms of Services</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Your California Privacy Rights</a></li>
        </ul>
    </div>
    <hr class="two">
    <div class="links">
        <span class="strip">© 2021 TIME USA, LLC. All Rights Reserved. Use of this site constitutes acceptance of our</span>
        <span class="strip"><a href="#">Terms of Service</a>,
            <a href="#">Privacy Policy</a><a href="#">(Your California Privacy Rights)</a>
            and
            <a href="#">Do Not Sell My Personal Information</a></span>
    </div>
</body>

</html>