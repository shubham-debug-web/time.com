<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "head.php"; ?>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap');

        body {
            width: 100vw;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto Slab', sans-serif;
        }
        .nav{
            width: 100%;
            height: 50px;
            display: flex;
            justify-content: space-around;
            align-items: center;
            border-bottom: 1px solid black;
            position:fixed;
            top: 0;
            background: white;
            margin-bottom: 200px;
        }
        .menu .bx{
            font-size: 25px;
            cursor: pointer;
        }
        .spotlight{
            transition: opacity 500ms;
        }
        .spotlight a{
            text-decoration: none;
            color:black;
            font-size: 16px;
        }
        .spotlight a:hover{
            color: #e90606;
        }
        .btn {
            padding: 5px;
            letter-spacing: 2px;
            border-radius: 4px;
            border: none;
            font-weight: 900;
            font-size: 17px;
            cursor: pointer;
        }
        .btn1 {
            color: #e90606;
            background: white;
        }
        .btn2 {
            background: #e90606;
            color: white;
        }
        .search .bx{
            font-size: 20px;
            cursor: pointer;
        }
        .shade {
            position: absolute;
            z-index: -1;
            width: 100%;
            height: 100vh;
            transition: 0.3s;
        }

        .menucont {
            width: 20%;
            height: 100%;
            background: white;
            overflow: scroll;
            margin-left: -20%;
            transition: margin 0.3s;
        }

        .menucont li {
            padding-bottom: 8%;
        }

        .menucont span {
            font-size: 18px;
            font-weight: 900;
        }

        .shadeshow {
            z-index: 1;
            background: rgba(0, 0, 0, 0.5);
        }

        .mleft {
            margin-left: 0;
        }

        .menucont hr {
            width: 80%;
        }

        .menucont ul {
            font-size: 15px;
            list-style: none;
        }

        .menucont ul li a {
            color: black;
            text-decoration: none;
        }

        .menucont ul li a:hover {
            color: #e90606;
        }

        .wspot {
            opacity: 0;
        }

        .menucont .bottom {
            display: flex;
            flex-direction: column;
        }

        .menucont .bottom .bx {
            border: 2px solid #e90606;
            padding: 5px;
            color: #e90606;
            border-radius: 50%;
        }

    </style>
</head>

<body>
    <header>
        <section class="nav">   
            <div class="menu">
                <i class='bx bx-menu'></i>
            </div>
            <div class="logo">
                <a href="index.php"><img src="images/logo.svg"></a>
            </div>
            <div class="spotlight">
                <a href="#"><strong>SPOTLIGHT STORY </strong><span class="story">HOW SOUTH KOREA'S NEXT PRESIDENT
                        CAPITALIZED ON ANTI-FEMINIST BACKLASH</span></a>
            </div>
            <div class="buttons">
                <a href="sign_in.php"><button class="btn1 btn">SIGN IN</button></a>
                <a href="#"><button class="btn2 btn">SUBSCRIBE</button></a>
            </div>
            <div class="search">
                <div class="searchcont">
                    <i class="bx bx-search"></i>
                    <input style="display: none;" type="search">
                </div>
            </div>
        </section>
    </header>
    <div class="shade">
        <div class="menucont">
            <div class="list">
                <ul>
                    <span>SECTIONS</span>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">U.S.</a></li>
                    <li><a href="#">Politics</a></li>
                    <li><a href="#">World</a></li>
                    <li><a href="#">Health</a></li>
                    <li><a href="#">Climate</a></li>
                    <li><a href="#">Personal Finance by NextAdvisor</a></li>
                    <li><a href="#">Future of Work by Charter</a></li>
                    <li><a href="#">Business</a></li>
                    <li><a href="#">Tech</a></li>
                    <li><a href="#">Entertainment</a></li>
                    <li><a href="#">Ideas</a></li>
                    <li><a href="#">Science</a></li>
                    <li><a href="#">History</a></li>
                    <li><a href="#">Sports</a></li>
                    <li><a href="#">Magazine</a></li>
                    <li><a href="#">TIME 2030</a></li>
                    <li><a href="#">Video</a></li>
                    <li><a href="#">TIME100 Talks</a></li>
                    <li><a href="#">TIMEPieces</a></li>
                    <li><a href="#">The TIME Vault</a></li>
                    <li><a href="#">TIME for Kids</a></li>
                    <li><a href="#">TIME Edge</a></li>
                    <li><a href="#">Red Border:Branded Content by TIME</a></li>
                </ul>
                <hr>
                <ul>
                    <span>JOIN US</span>
                    <li><a href="#">Newsletter</a></li>
                    <li><a href="#">Subscribe</a></li>
                    <li><a href="#">Subscriber Benefits</a></li>
                    <li><a href="#">Give a Gift</a></li>
                    <li><a href="#">Shop the TIME Store</a></li>
                    <li><a href="#">Connect Wallet</a></li>
                </ul>
                <hr>
            </div>
            <div class="bottom">
                <span>CONNECT WITH US</span>
                <div>
                    <a href="#"><i class='bx bxl-facebook-circle'></i></a>
                    <a href="#"><i class='bx bxl-instagram'></i></a>
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                    <a href="#"><i class='bx bxl-pinterest'></i></a>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="script.js"></script>
</html>