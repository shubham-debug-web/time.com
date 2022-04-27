<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "head.php";?>
    <style>
        body {
            padding: 0;
            margin: 0;
        }

        footer {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 5%;
        }

        .socialmedia {
            display: flex;
            width: 200px;
            justify-content: space-between;
            margin-top: 2%;
            margin-bottom: 2%;
        }

        .socialmedia .bx {
            color: #e90606;
            border: 1px solid #e90606;
            border-radius: 50%;
            font-size: 25px;
            padding: 5px;
            font-weight: 900;
        }

        .lists {
            width: 80%;
            justify-content: space-around;
            display: flex;
        }

        .lists ul {
            list-style: none;
        }

        ul li {
            padding: 7px;
        }

        a {
            text-decoration: none;
            color: #686c73;
            font-size: 12px;
        }

        hr {
            border: 1px solid #686c73;
            width: 100%;
        }
        .misc{
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .misc p{
            color: #686c73;
            font-size: 13px;
        }
        .misc p a{
            color: #78170f;
        }
    </style>
</head>

<body>
    <footer>
        <a href="index.php"><img src="images/logo.svg"></a>
        <div class="socialmedia">
            <a href="#"><i class='bx bxl-facebook'></i></a>
            <a href="#"><i class='bx bxl-instagram'></i></a>
            <a href="#"><i class='bx bxl-twitter'></i></a>
            <a href="#"><i class='bx bxl-pinterest-alt'></i></a>
        </div>
        <hr>
        <div class="lists">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">U.S.</a></li>
                <li><a href="#">Politics</a></li>
                <li><a href="#">World</a></li>
                <li><a href="#">Health</a></li>
                <li><a href="#">Personal Finance by NextAdvisor</a></li>
                <li><a href="#">Future of Work by Charter</a></li>
                <li><a href="#">Business</a></li>
                <li><a href="#">Tech</a></li>
            </ul>
            <ul>
                <li><a href="#">Entertainment</a></li>
                <li><a href="#">Ideas</a></li>
                <li><a href="#">Science</a></li>
                <li><a href="#">History</a></li>
                <li><a href="#">Newsfeed</a></li>
                <li><a href="#">Sports</a></li>
                <li><a href="#">Magazine</a></li>
                <li><a href="#">The TIME Vault</a></li>
                <li><a href="#">TIME For Kids</a></li>
            </ul>
            <ul>
                <li><a href="#">TIME Edge</a></li>
                <li><a href="#">Video</a></li>
                <li><a href="#">Masthead</a></li>
                <li><a href="#">Newsletter</a></li>
                <li><a href="#">Subscribe</a></li>
                <li><a href="#">Subscriber Benefits</a></li>
                <li><a href="#">Give a Gift</a></li>
                <li><a href="#">Shop the TIME Store</a></li>
                <li><a href="#">Careers</a></li>
            </ul>
            <ul>
                <li><a href="#">Press Room</a></li>
                <li><a href="#">U.S. & Canada Customer Care</a></li>
                <li><a href="#">Global Help Center</a></li>
                <li><a href="#">Contact the Editors</a></li>
                <li><a href="#">Reprints and Permissions</a></li>
                <li><a href="#">Site Map</a></li>
            </ul>
        </div>
        <hr>
        <div class="misc">
            <p>© 2022 TIME USA, LLC. All Rights Reserved. Use of this site constitutes acceptance of our <a href="#">
                    Terms of Service</a>,<a href="#"> Privacy Policy (Your California Privacy Rights)</a> and <a
                    href="#"> Do Not Sell My Personal Information</a>.</p>
            <p>TIME may receive compensation for some links to products and services on this website. Offers may be
                subject to change without notice.</p>
        </div>
    </footer>
</body>

</html>