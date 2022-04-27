<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "head.php";   
    include "config.php";
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    ?>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap');
        *{
            font-family: 'Noto Sans', sans-serif;
        }
        body {
            width: 100vw;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto Slab', sans-serif;

        }
        a {
            text-decoration: none;
        }

        .nav1 {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 50px;
            width: 100%;
            border-bottom: 1px solid black;
        }

        .nav1 a {
            color: #e90606;
            font-size: 18px;
            font-weight: 900;
        }

        .nav1 .bx {
            font-size: 18px;
        }

        .nav1 .three {
            height: 100%;
            width: 20%;
            display: flex;
            align-items: center;
            justify-content: space-around;
        }

        .nav1 .three a {
            width: 49%;
            height: 50%;
        }

        .nav1 .three button {
            padding: 5px;
            letter-spacing: 2px;
            border: none;
            border-radius: 4px;
            font-weight: 900;
            font-size: 17px;
            cursor: pointer;
        }

        .three .btn1 {
            color: #e90606;
            background: white;
        }

        .three .btn2 {
            background: #e90606;
            color: white;
        }

        .nav2 {
            height: 50px;
            width: 100%;
            border-bottom: 1px solid black;
            display: flex;
            align-items: center;
            
        }

        .nav2 a {
            color: black;
        }

        .nav2 a:hover {
            color: #e90606;
        }

        .nav2 .menu {
            width: 25%;
            float: left;
        }

        .search {
            width: 20%;
            display: inline-block;
        }

        .search .searchcont {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: right;
        }

        .search input {
            width: 250px;
        }

        .spotlight {
            width: 54%;
            transition: opacity 500ms;
            display: inline-block;
            font-size: 16px;
        }

        .spotlight div {
            height: 100%;
        }

        .nav2 .bx {
            font-size: 25px;
            cursor: pointer;
            transition: 0.3s;
        }

        .shade {
            position: absolute;
            z-index: -1;
            width: 100%;
            height: 600px;
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

        .body {
            width: 100%;
            display: flex;
            justify-content: center;
            margin-top: 4%;
            margin-bottom: 10%;
        }

        .body .right {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-left: 8%;
            width: 15%;
        }

        .body .right .feed {
            display: flex;
            margin-bottom: 5%;
        }

        .right .feedindex {
            font-weight: 900;
            font-size: 25px;
            margin-right: 4%;
            text-decoration: underline #e90606;
        }

        .body .right .feed .feedindex ::after {
            content: "";
            border-bottom: 3px solid #e90606;
            left: 0;
            position: absolute;
            bottom: 4px;
            width: 14px;
        }

        .right .feedtitle a {
            font-weight: 900;
            font-size: 17px;
            color: #e90606;
        }

        .right .feedtext:hover {
            color: #e90606;
        }

        .right .heading {
            font-weight: 900;
            font-size: 20px;
        }

        .body .left {
            height: 700px;
            width: 62%;
        }

        .left .tiles {
            display: flex;
            justify-content: space-between;
            width: 100%;
        }

        .tiles .tile {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            width: 31%;
            height: 320px;
        }

        .tile img {
            height: 100%;
            width: 100%;
        }

        .tile .imgtag {
            color: black;
            font-weight: 900;
        }

        .tile .imgtag:hover {
            color: #e90606;
        }

        .left .frame {
            width: 100%;
            height: 400px;
            margin-bottom: 4%;
            display: flex;
            background: pink;
        }

        .frame img {
            width: 66%;
        }

        .frame .innerleft {
            width: 50%;
            position: relative;
            color: white;
            padding: 6px;
            background: rgba(0, 0, 0, .9);
        }

        .innerleft .frametitle {
            color: white;
        }

        .innerleft .frametime {
            color: #e90606;
        }

        .innerleft .imgcredit {
            height: 30px;
            width: 50px;
            position: absolute;
            background: black;
            color: white;
            bottom: 0;
            right: 0;
        }

        .showcase {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .showcase .heading {
            font-size: 40px;
            font-weight: 900;
            letter-spacing: 1px;
        }

        .showcase .slides {
            width: 100%;
            display: flex;
            justify-content: space-around;
        }

        .showcase .slide {
            width: 19%;
            height: 500px;
            position: relative;
            background: pink;
            cursor: pointer;
            transition: 0.5s;
        }

        .slide:hover {
            transform: scale(1.1);
        }

        .slide .data {
            width: 60%;
            position: absolute;
            left: 5%;
            bottom: 5%;
            display: flex;
            color: white;
            flex-direction: column;
        }

        .data .tag {
            background: #b92318;
            font-weight: 700;
            padding: 4px;
            letter-spacing: 2px;
        }

        .data .headline {
            height: 5%;
        }

        .corona {
            width: 85%;
            height: 300px;
            margin-left: 8%;
            display: flex;
            justify-content: space-between;
        }

        .corona .one {
            width: 30%;
            height: 50%;
        }

        .corona .two {
            height: 100%;
            width: 30%;
            display: flex;
            justify-content: space-between;
        }

        .two .map {
            width: 40%;
            height: 55%;
        }

        .map h3 {
            width: 170px;
            text-align: center;
        }

        .corona .two .map-item {
            border: 1px solid black;
            border-radius: 50%;
            position: relative;
            width: 170px;
            height: 170px;
        }

        .two .map-item .bx {
            position: absolute;
            font-size: 30px;
            bottom: -7%;
            background: white;
            color: #e90606;
        }

        .two .map-item a {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .two .map-item img {
            width: 70%;
            height: 70%;
        }

        .corona .three {
            height: 50%;
            width: 30%;
        }

        .three .topic-section {
            line-height: 2rem;
            font-size: 1.1rem;
            letter-spacing: 1px;
            color: #e90606;
            text-decoration: underline #e90606;
        }

        .three .topic {
            display: flex;
            align-items: center;
            justify-content: space-around;
        }

        .three .topic img {
            height: 7%;
            width: 7%;
        }

        .corona table {
            border-collapse: collapse;
            margin: 0 auto;
            max-width: 360px;
            width: 100%;
            height: 70%;
            border-spacing: 0;
            display: table;
            border-color: grey;
        }

        .corona tbody {
            display: table-row-group;
            vertical-align: middle;
        }

        .corona .table-row {
            border-bottom: 1px solid #f0f1f2;
        }

        .corona .table-head {
            background: #f0f1f2;
        }

        .grid {
            margin-left: 8%;
            width: 86%;
            display: flex;
            justify-content: space-around;
            margin-bottom: 13%;
        }

        .grid .item {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            width: 24%;
            height: 300px;
        }

        .item img {
            width: 100%;
        }

        .item .itemtitle {
            color: black;
        }

        .item .itemtitle:hover {
            color: #e90606;
        }

        .video {
            width: 100%;
            height: 700px;
            display: flex;
            justify-content: space-around;
            background: #121212;
            color: white;
            padding-bottom: 30px;
        }

        .video .left {
            width: 65%;
        }

        .video .left .title {
            color: white;
            font-weight: 900;
            letter-spacing: 2px;
            font-size: 20px;
        }

        .video .videocontainer {
            width: 80%;
            height: 400px;
        }

        .videocontainer video {
            width: 100%;
            height: 100%;
            background: #121212;
            object-fit: cover;
        }

        .video .left .info {
            display: flex;
            width: 90%;
        }

        .video .left .info .leftinfo {
            width: 47%;
            font-size: 20px;
        }

        .leftinfo .videodate {
            font-size: 15px;
            color: #ebebeb;
        }

        .video .left .info .rightinfo {
            width: 40%;
        }

        .video .right {
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            margin-left: -25%;
            padding-top: 4%;
            width: 30%;
        }

        .video .right .videotile {
            width: 100%;
            height: 18%;
        }

        .videotile .videoicon {
            float: left;
            width: 220px;
            height: 120px;
            margin-right: 5%;
            position: relative;
        }

        .cover {
            width: 220px;
            height: 120px;
            margin-right: 5%;
            position: absolute;
            border: 1px solid white;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            z-index: -1;
            background: rgba(0, 0, 0, 0.8);
        }

        .cover .bx {
            font-size: 35px;
        }

        .videoicon .bx {
            position: absolute;
            bottom: 0;
            left: 0;
            font-size: 35px;
        }

        .videoicon img {
            width: 100%;
            height: 100%;
        }

        .videoinfo {
            float: right;
            width: 40%;
        }

        .videoinfo p {
            margin: 0;
        }

        .videoinfo .date {
            color: #f0f1f2;
        }

        .content {
            height: 850px;
            width: 86%;
            margin-left: 8%;
            display: flex;
            margin-top: 3%;
            margin-bottom: 5%;
            justify-content: space-between;
        }

        .content .left {
            height: 60%;
            width: 70%;
            border-top: 1px solid black;
        }

        .content .left h2 {
            font-size: 30px;
            font-weight: 900;
        }

        .content .left .boxes {
            width: 100%;
        }

        .boxes .box {
            margin: 1%;
            display: inline-table;
            width: 47%;
            height: 10%;
        }

        .box .title a {
            color: #e90606;
            font-size: 25px;
            font-weight: 600;
        }

        .box a {
            color: black;
        }

        .content .right {
            padding: 2%;
            height: 100%;
            width: 22%;
            background: #f0f1f2;
        }

        .content .right a {
            color: black;
            font-weight: 900;
            font-size: 17px;
        }

        .content .right a:hover {
            color: #e90606;
        }

        .content .right ul {
            list-style: none;
            width: 85%;
        }

        .content .right ul li {
            padding-bottom: 8%;
        }

        .content .right .date {
            color: gray;
        }

        .content .right ul .heading {
            display: block;
            text-align: center;
            padding-bottom: 9%;
        }

        .content .right ul span {
            display: block;
        }

        .ad {
            margin-top: 9%;
            width: 100%;
            height: 500px;
            background: url(images/bg.svg);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .ad .left {
            width: 30%;
            height: 95%;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            align-items: center;
        }

        .ad .left p {
            font-size: 20px;
            font-weight: 900;
        }

        .ad .left .btn {
            background: #e90606;
            color: white;
            padding: 10px;
            padding-left: 70px;
            padding-right: 70px;
        }

        .ad .bx {
            background: #e90606;
            border-radius: 50%;
            color: white;
            font-weight: 900;
        }

        .ad .left p a {
            color: #e90606;
        }

        .ad .left ul {
            list-style: none;
        }

        .ad .left ul li {
            padding: 10px;
        }

        .ad .right {
            width: 50%;
            height: 100%;
        }

        .ad .right img {
            height: 100%;
            width: 100%;
        }

        .explore {
            width: 100%;
            height: 700px;
            text-align: center;
        }

        .explore .grid {
            display: flex;
            justify-content: space-between;
            width: 100%;
            margin-left: 0;
        }

        .explore img:hover {
            transform: scale(1.005);
            transition: transform .35s cubic-bezier(.165, .84, .44, 1);
        }

        .explore img {
            height: 550px;
            width: 285px;
        }

        .aero {
            width: 100%;
            height: 300px;
        }

        .news {
            width: 86%;
            height: 700px;
            margin-left: 8%;
        }

        .news .heading {
            font-size: 20px;
            color: black;
            font-weight: 900;
            letter-spacing: 2px;
        }

        .news .container {
            display: flex;
        }

        .news .left {
            width: 55%;
            height: 650px;
        }

        .news .left img {
            width: 100%;
            height: 60%;
        }

        .news .left h3 {
            color: black;
            font-size: 35px;
            font-weight: 900;
        }

        .news .left h3:hover {
            color: #e90606;
        }

        .news .left p {
            color: black;
        }

        .news .right {
            width: 45%;
            height: 650px;
            display: flex;
            flex-wrap: wrap;
        }

        .news .right .box {
            width: 45%;
            height: 50%;
            margin: 2%;
            margin-top: 0;
        }

        .news .right .box img {
            width: 100%;
            height: 50%;
        }

        .news .right .box h3:hover {
            color: #e90606;
        }

        .news1 {
            width: 86%;
            height: 700px;
            margin-left: 8%;
        }

        .news1 .heading {
            font-size: 20px;
            color: black;
            font-weight: 900;
            letter-spacing: 2px;
        }

        .news1 .container {
            display: flex;
        }

        .news1 .left {
            width: 55%;
            height: 650px;
        }

        .news1 .left img {
            width: 100%;
            height: 60%;
        }

        .news1 .left h3 {
            color: black;
            font-size: 35px;
            font-weight: 900;
        }

        .news1 .left h3:hover {
            color: #e90606;
        }

        .news1 .left p {
            color: black;
        }

        .news1 .right {
            width: 45%;
            height: 650px;
            display: flex;
            flex-wrap: wrap;
        }

        .news1 .right .box {
            width: 45%;
            height: 50%;
            margin-left: 2%;
            margin-top: 0;
        }

        .news1 .right .box img {
            width: 100%;
            height: 50%;
        }

        .news1 .right .box h3:hover {
            color: #e90606;
        }
        .slideshow{
            width: 86%;
            margin-left: 8%;
            height: 400px;
        }
        .slideshow h2{
            font-size: 30px;
            font-weight: 900;
        }
        .slideshow .box{
            height: 90%;
            width: 300px;
            flex-shrink: 0;
            margin-right:2% ;
        }
        .slideshow .box img{
            width: 100%;
            height: 100%;
        }
        .slideshow .box p:hover{
            color: #e90606;
        }
        .slideshow .slides{
            width: 100%;
            display: flex;
            flex-wrap: nowrap;
            overflow: auto;
        }
        ::-webkit-scrollbar {
           display: none;
        }
        .aero{
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }
        .aero .bg{
            background-color: #f0f1f2;
            height: 100px;
            width: 900px;
        }
        .aero .box{
            position: absolute;
            display: flex;
            align-items: center;
            justify-content:center;
            border: 1px solid  black;
            height: 150px;
            width: 860px;
        }
        .aero .box a{
            background: #e90606;
            padding: 10px;
            color: white;
            border-radius: 25px;
            font-weight: 900;
            transition: 0.5s;
            margin-left: 20px;
        }
        .aero .box a:hover{
            background: white;
            color: #e90606;
        }
        .aero .plane{
            background: #f0f1f2;
            position: absolute;
            height: 55px;
            width: 25px;
            left: 19%;
            border-top:1px solid black;
            border-bottom:1px solid black;
        }
        .plane img{
            position: absolute;
            left: -26px;
            top: -2px;
        }
        .audio {
            width: 100%;
            height: 500px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-around;
        }

        .audio .audiocontainer {
            border: 1px solid black;
            width: 600px;
            height: 250px;
            padding: 20px;
        }
        .audiocontainer img{
            width: 100px;
            margin-right: 30px;
        }
        .audiocontainer .heading{
            display: flex;
            align-items: center;
        }
        .audiocontainer audio{
            background: transparent;
            width: 100%;
            margin-top: 30px;
        }
        .audio h1{
            font-size: 50px;
            margin-bottom: 0;
        }
        .audiocontainer .share{
            width: 100%;
        }
        .audiocontainer .share{
            margin-top: 30px;
            display: flex;
            justify-content: space-between;
        }
        .audiocontainer .share .bx{
            padding-right: 10px;
            font-size: 20px;
        }
        .audiocontainer .share .bx-podcast:hover{
            color: purple;
        }
        .audiocontainer .share .bxl-amazon:hover{
            color: lightblue;
        }
        .audiocontainer .share .bxl-spotify:hover{
            color: lightgreen;
        }
    </style>
</head>

<body>

    <header>
        <section class="nav1">
            <div class="one">
                <a href="sign_in_page.html">Sign Up for Our letter</a>
                <span><i class='bx bx-chevrons-right' style='color:#e90606'></i></span>
            </div>
            <div class="two">
                <a href="adminlogin.php"><img src="images/logo.svg"></a>
            </div>
            <div class="three">
                <a href="sign_in.php"><button class="btn1">SIGN IN</button></a>
                <a href="#"><button class="btn2">SUBSCRIBE</button></a>
            </div>
        </section>
        <section class="nav2">
            <div class="menu">
                <i class='bx bx-menu'></i>
            </div>
            <div class="spotlight">
                <a href="#"><strong>SPOTLIGHT STORY </strong><span class="story">HOW SOUTH KOREA'S NEXT PRESIDENT
                        CAPITALIZED ON ANTI-FEMINIST BACKLASH</span></a>

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
                    <?php
                        $data111 = mysqli_query($conn,'select distinct category from article');
                        while($row = mysqli_fetch_assoc($data111)){
                            echo "<li><a href='article.php?cat={$row['category']}'>{$row['category']}</a></li>";
                        }
                    ?>
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

    <div class="body">
        <div class="left">
            <div class="frame">
                <div class="innerleft">
                    <a class="frametitle" href="#">
                        <h1>A Year After the Spa Shootings, Assians Fear More Than Physical Attacks</h1>
                    </a>
                    <p class="frametime">MARCH 16, 2022 • 6:30 AM EDT</p>
                    <p>Asian Americans increasingly are subject to verbal harassment</p>
                </div>
                <img class="frameimg" src="images/3.jpg">
                <!-- <span class="imgcredit">Emanuel Hahn for TIME</span> -->
            </div>
            <div class="tiles">
                <div class="tile">
                    <a href="#"><img src="images/4.jpg"></a>
                    <div>
                        <a class="imgtag" href="#">Mothers Return to Ukraine to Rescue Their Children</a>
                        <p>MARCH 16, 2022 • 3:44 PM EDT</p>
                    </div>
                </div>
                <div class="tile">
                    <a href="#"><img src="images/6.jpg"></a>
                    <div>
                        <a class="imgtag" href="#">Mothers Return to Ukraine to Rescue Their Children</a>
                        <p>MARCH 16, 2022 • 3:44 PM EDT</p>
                    </div>
                </div>
                <div class="tile">
                    <a href="#"><img src="images/5.jpg"></a>
                    <div>
                        <a class="imgtag" href="#">Mothers Return to Ukraine to Rescue Their Children</a>
                        <p>MARCH 16, 2022 • 3:44 PM EDT</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="right">
            <span class="heading">MOST POPULAR</span>
            <div class="feed">
                <div class="feedindex">
                    1
                </div>
                <div class="feedcont">
                    <span class="feedtitle"><a href="#">POLITICS</a></span>
                    <div class="feedtext">
                        How China's Response to Russia's Invasion of Ukraine Could Upend the World Order
                    </div>
                </div>
            </div>
            <div class="feed">
                <div class="feedindex">
                    2
                </div>
                <div class="feedcont">
                    <span class="feedtitle"><a href="#">WORLD</a></span>
                    <div class="feedtext">
                        How China's Response to Russia's Invasion of Ukraine Could Upend the World Order
                    </div>
                </div>
            </div>
            <div class="feed">
                <div class="feedindex">
                    3
                </div>
                <div class="feedcont">
                    <span class="feedtitle"><a href="#">WORLD</a></span>
                    <div class="feedtext">
                        How China's Response to Russia's Invasion of Ukraine Could Upend the World Order
                    </div>
                </div>
            </div>
            <div class="feed">
                <div class="feedindex">
                    4
                </div>
                <div class="feedcont">
                    <span class="feedtitle"><a href="#">HEALTH</a></span>
                    <div class="feedtext">
                        How China's Response to Russia's Invasion of Ukraine Could Upend the World Order
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="showcase">
        <h2 class="heading">YOU SHOULD KNOW</h2>
        <div class="slides">
            <div class="slide"
                style="background: linear-gradient(to top, #000, transparent 50%),url(images/7.jpg); background-size: cover; background-position: center;">
                <div class="data">
                    <span class="tag">CONGRESS</span>
                    <h3 class="headline">After Zelensky's Speech, Lawmakers Weigh What to Do Next</h3>
                    <span class="byline">Abby Vesoulis</span>
                </div>
            </div>
            <div class="slide"
                style="background: linear-gradient(to top, #000, transparent 50%),url(images/8.jpg); background-size: cover; background-position: center;">
                <div class="data">
                    <span class="tag">CONGRESS</span>
                    <h3 class="headline">After Zelensky's Speech, Lawmakers Weigh What to Do Next</h3>
                    <span class="byline">Abby Vesoulis</span>
                </div>
            </div>
            <div class="slide"
                style="background: linear-gradient(to top, #000, transparent 50%),url(images/9.jpeg); background-size: cover; background-position: center;">
                <div class="data">
                    <span class="tag">CONGRESS</span>
                    <h3 class="headline">After Zelensky's Speech, Lawmakers Weigh What to Do Next</h3>
                    <span class="byline">Abby Vesoulis</span>
                </div>
            </div>
            <div class="slide"
                style="background: linear-gradient(to top, #000, transparent 50%),url(images/10.jpg); background-size: cover; background-position: center;">
                <div class="data">
                    <span class="tag">CONGRESS</span>
                    <h3 class="headline">After Zelensky's Speech, Lawmakers Weigh What to Do Next</h3>
                    <span class="byline">Abby Vesoulis</span>
                </div>
            </div>
            <div class="slide"
                style="background: linear-gradient(to top, #000, transparent 50%),url(images/11.jpeg); background-size: cover; background-position: center;">
                <div class="data">
                    <span class="tag">CONGRESS</span>
                    <h3 class="headline">After Zelensky's Speech, Lawmakers Weigh What to Do Next</h3>
                    <span class="byline">Abby Vesoulis</span>
                </div>
            </div>
        </div>
    </div>
    <hr style="width: 80%; margin-top: 5%; margin-bottom: 5%;">

    <div class="corona">
        <div class="one">
            <table>
                <h2>CORONAVIRUS IN-DEPTH</h2>
                <tbody>
                    <tr class="table-head">
                        <th>
                        <td>U.S.▸</td>
                        </th>
                        <th>
                        <td>Total</td>
                        </th>
                        <th>
                        <td>14-day Trend</td>
                        </th>
                    </tr>
                    <tr class="table-row">
                        <th>
                        <td>Cases</td>
                        </th>
                        <th>
                        <td>79,631,708</td>
                        </th>
                        <th>
                        <td>-50.3%<i class='bx bxs-down-arrow'></i></td>
                        </th>
                    </tr>
                    <tr class="table-row">
                        <th>
                        <td>Deaths</td>
                        </th>
                        <th>
                        <td>968,329</td>
                        </th>
                        <th>
                        <td>-35.8%<i class='bx bxs-down-arrow'></i></td>
                        </th>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="two">
            <div class="map">
                <div class="map-item">
                    <a href="#"><img src="images/map1.png"><i class='bx bx-chevrons-up'></i></a>

                </div>
                <h3>U.S. Hotspots</h3>
            </div>
            <div class="map">
                <div class="map-item">
                    <a href="#"><img src="images/map2.png"><i class='bx bx-chevrons-up'></i></a>
                </div>
                <h3>Global Hotspots</h3>
            </div>
        </div>
        <div class="three">
            <table>
                <h2 class="topic">
                    <img src="images/arrow.svg">
                    <a href="#" class="topic-section">Subscribe to The Coronavirus Brief</a>
                </h2>
                <tbody>
                    <tr class="table-head">
                        <th>
                        <td>Global ▸</td>
                        </th>
                        <th>
                        <td>Total</td>
                        </th>
                        <th>
                        <td>14-day Trend</td>
                        </th>
                    </tr>
                    <tr class="table-row">
                        <th>
                        <td>Cases</td>
                        </th>
                        <th>
                        <td>463,893,057</td>
                        </th>
                        <th>
                        <td>+5.5%<i class='bx bxs-up-arrow'></i></td>
                        </th>
                    </tr>
                    <tr class="table-row">
                        <th>
                        <td>Deaths</td>
                        </th>
                        <th>
                        <td>6,058,277</td>
                        </th>
                        <th>
                        <td>-29.6%<i class='bx bxs-down-arrow'></i></td>
                        </th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="grid">
        <div class="item">
            <a href="#"><img src="images/g1.jpg"></a>
            <a class="itemtitle" href="#">
                <h3>Lessons From America's Most Recent Covid-19 Vaccine Converts</h3>
            </a>
        </div>
        <div class="item">
            <a href="#"><img src="images/g2.jpg"></a>
            <a class="itemtitle" href="#">
                <h3>Lessons From America's Most Recent Covid-19 Vaccine Converts</h3>
            </a>
        </div>
        <div class="item">
            <a href="#"><img src="images/g3.jpg"></a>
            <a class="itemtitle" href="#">
                <h3>Lessons From America's Most Recent Covid-19 Vaccine Converts</h3>
            </a>
        </div>
        <div class="item">
            <a href="#"><img src="images/g4.jpg"></a>
            <a class="itemtitle" href="#">
                <h3>Lessons From America's Most Recent Covid-19 Vaccine Converts</h3>
            </a>
        </div>
    </div>

    <div class="video">
        <div class="left">
            <a href="#" class="title">
                <h1>VIDEO<i class='bx bx-chevron-right'></i></h1>
            </a>
            <div class="videocontainer">
                <video controls>
                    <source src="v1.mp4" type="video/mp4">

                </video>
            </div>
            <div class="info">
                <div class="leftinfo">
                    <h3 class="videotitle">Why Russians Are Fleeing By Train for Europe</h3>
                    <p class="videodate">Mar 16, 2022 | 6:21</p>
                </div>
                <div class="rightinfo">
                    <p>With more than 30 countries banning flights that originate in Russia from their airspace, the
                        only options for reaching Europe are over land. A handful of buslines offer service to Finland
                        or Estonia, but the Allegro train from Saint Petersburg...</p>
                </div>
            </div>
        </div>
        <div class="right">
            <h2>WATCH NEXT</h2>
            <div class="videotile" data-src="v1.mp4" data-name="Why Russians Are Fleeing By Train for Europe"
                data-description="Vitalik Buterin on the transformative power of Ethereum."
                data-date-and-duration="Mar 16, 2022<span class='divider'> | </span>2:40">
                <div class="cover" style="z-index: 1;">
                    <i class='bx bx-play' style='color:#ffffff'></i>
                    <span>NOW PLAYING</span>
                </div>
                <div class="videoicon">
                    <img src="images/tile1.jpg"><i class='bx bx-play' style='color:#ffffff'></i>
                </div>
                <div class="videoinfo">
                    <p class="title">Why Russians Are Fleeing By Train for Europe</p>
                    <p class="date">Mar 16, 2022 | 2:40</p>
                </div>
            </div>
            <div class="videotile" data-src="v2.mp4" data-name="Why Russians Are Fleeing By Train for Europe"
                data-description="With more than 30 countries banning flights that originate in Russia from their airspace, the only options for reaching Europe are over land. A handful of buslines offer service to Finland or Estonia, but the Allegro train from Saint Petersburg to Helsinki, which currently runs twice a day and seats 350 passengers, is the only remaining option by rail. A few days after the war in Ukraine began, those trains began selling out."
                data-date-and-duration="Mar 16, 2022<span class='divider'> | </span>6:21">
                <div class="cover">
                    <i class='bx bx-play' style='color:#ffffff'></i>
                    <span>NOW PLAYING</span>
                </div>
                <div class="videoicon">
                    <img src="images/tile2.jpg"><i class='bx bx-play' style='color:#ffffff'></i>
                </div>
                <div class="videoinfo">
                    <p class="title">Why Russians Are Fleeing By Train for Europe</p>
                    <p class="date">Mar 16, 2022 | 6:21</p>
                </div>
            </div>
            <div class="videotile" data-src="v1.mp4" data-name="Ukraine: A Glossary of Terms"
                data-description="When it comes to learning about the conflict in Ukraine, there are a lot of terms that get thrown around. Here are a few you should know."
                data-date-and-duration="Mar 15, 2022<span class='divider'> | </span>5:41">
                <div class="cover">
                    <i class='bx bx-play' style='color:#ffffff'></i>
                    <span>NOW PLAYING</span>
                </div>
                <div class="videoicon">
                    <img src="images/tile3.jpg"><i class='bx bx-play' style='color:#ffffff'></i>
                </div>
                <div class="videoinfo">
                    <p class="title">Ukraine: A Glossary of Terms</p>
                    <p class="date">Mar 15, 2022 | 5:41</p>
                </div>
            </div>
            <div class="videotile" data-description="" data-src="v2.mp4"
                data-name="Powerful 7.3 Magnitude Earthquake Hits North Japan"
                data-date-and-duration="Mar 16, 2022<span class='divider'> | </span>1:16">
                <div class="cover">
                    <i class='bx bx-play' style='color:#ffffff'></i>
                    <span>NOW PLAYING</span>
                </div>
                <div class="videoicon">
                    <img src="images/tile4.jpg"><i class='bx bx-play' style='color:#ffffff'></i>
                </div>
                <div class="videoinfo">
                    <p class="title">Powerful 7.3 Magnitude Earthquake Hits North Japan</p>
                    <p class="date">Mar 16, 2022 | 1:16</p>
                </div>
            </div>
        </div>
    </div>

    <div class="features">
        <div class="content">
            <div class="left">
                <h2>FEATURED VOICES</h2>
                <div class="boxes">
                    <div class="box">
                        <h3 class="title"><a href="#">Sebastian Junger</a></h3>
                        <h3><a href="#">Brent Renaud's Death Reminds Us of the High Costs of Pursuing the Truth</a></h3>
                    </div>
                    <div class="box">
                        <h3 class="title"><a href="#">Ian Bremmer</a></h3>
                        <h3><a href="#">Will China Try to Stop Russia's War in Ukraine? </a></h3>
                    </div>
                    <div class="box">
                        <h3 class="title"><a href="#">Kristen Arnett</a></h3>
                        <h3><a href="#">I Know the Harm Florida's Don't Say Gay Bill Can Do</a></h3>
                    </div>
                    <div class="box">
                        <h3 class="title"><a href="#">Lawrence H. Summers</a></h3>
                        <h3><a href="#">The Fed Must Do Much More to Fight Inflation—And Fast</a></h3>
                    </div>
                    <div class="box">
                        <h3 class="title"><a href="#">David Miliband</a></h3>
                        <h3><a href="#">Ukraine Must Be the Last War of the Age of Impunity</a></h3>
                    </div>
                    <div class="box">
                        <h3 class="title"><a href="#">Rebekah Taussig</a></h3>
                        <h3><a href="#">How to Stay Grounded in the Uncertainty of the Pandemic</a></h3>
                    </div>
                </div>
            </div>
            <div class="right">
                <ul>
                    <span class="heading">LATEST STORIES</span>
                    <li>
                        <a href="#">School Boards: Where America's Societal Battles Are Being Waged</a>
                        <span class="date">MARCH 23, 2022 • 6:00 AM EDT</span>
                    </li>
                    <li>
                        <a href="#">China Eastern Crash: Plane Dived at Nearly the Speed of Sound</a>
                        <span class="date">MARCH 23, 2022 • 1:16 AM EDT</span>
                    </li>
                    <li>
                        <a href="#">Hillary Clinton Tests Positive for COVID-19</a>
                        <span class="date">MARCH 23, 2022 • 12:50 AM EDT</span>
                    </li>
                    <li>
                        <a href="#">Republicans Accuse Ketanji Brown Jackson of Being Weak on Crime</a>
                        <span class="date">MARCH 22, 2022 • 9:01 PM EDT</span>
                    </li>
                    <li>
                        <a href="#">Judge Ends Lengthy Conservatorship for Actor Amanda Bynes</a>
                        <span class="date">MARCH 22, 2022 • 5:09 PM EDT</span>
                    </li>
                    <li>
                        <a href="#">The Moment that Changed Colonial-Indigenous Relations Forever</a>
                        <span class="date">MARCH 22, 2022 • 4:33 PM EDT</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="ad">
        <div class="left">
            <div style="width: 70%;">
                <p>Subscribe now to get unlimited access to <a href="#">TIME.com</a> and more!</p>
                <ul>
                    <li>
                        <i class='bx bx-check'></i>
                        <span>TIME Digital Magazine</span>
                    </li>
                    <li>
                        <i class='bx bx-check'></i>
                        <span>Inside TIME Newsletter, emailed twice weekly</span>
                    </li>
                    <li>
                        <i class='bx bx-check'></i>
                        <span>Discounts at the TIME Cover Store</span>
                    </li>
                </ul>
            </div>
            <div>
                <a class="btn" href="#">SUBSCRIBE NOW</a>
            </div>
        </div>
        <div class="right">
            <a href="#">
                <img src="images/ad.webp">
            </a>
        </div>
    </div>

    <div class="audio">
        <h1>LISTEN TO TODAY'S TOP STORIES</h1>
        <div class="audiocontainer">
            <div class="heading">
                <img src="images/audio.webp">
                <div>
                    <p>TIME'S THE BRIEF</p>
                    <p>Ukrainian Museums Are Racing to Save Artifacts That Tell the Country's Story</p>
                </div>
            </div>
            <audio controls muted>
                <source src="1.mp3" type="audio/mp3">
            </audio>
            <hr>
            <div class="share">
                <div>
                    <a href="#">
                        <span>SpokenLayer</span>
                        <span></span>
                    </a>
                </div>
                <div>
                    <a href="#"><i class='bx bx-podcast'></i></a>
                    <a href="#"><i class='bx bxl-spotify'></i></a>
                    <a href="#"><i class='bx bxl-amazon'></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="explore">
        <h1>EXPLORE MORE</h1>
        <div class="grid">
            <div><a href="#"><img src="images/e1.webp"></a></div>
            <div><a href="#"><img src="images/e2.webp"></a></div>
            <div><a href="#"><img src="images/e3.webp"></a></div>
            <div><a href="#"><img src="images/e4.webp"></a></div>
            <div><a href="#"><img src="images/e5.webp"></a></div>
        </div>
    </div>

    <div class="aero">
        <div class="bg"></div>
        <div class="box">
            <span style="color: #e90606; font-weight:900;">Get The Brief newsletter. </span><span> Sign up to receive the top stories you need to know right now.</span>
            <span><a href="#">SIGN UP NOW</a></span>
        </div>
        <div class="plane"><img src="images/aeroplane.svg"></div>
    </div>

    <div class="news">
        <hr>
        <a class="heading" href="#">
            <h2>UKRAINE UNDER ATTACK <i class='bx bx-chevron-right'></i></h2>
        </a>
        <div class="container">
            <div class="left">
                <a href="#">
                    <img src="images/n1.webp">
                    <h3>Mothers Return to Ukraine to Rescue Their Children</h3>
                    <p>As millions of Ukrainians flee the fighting, a smaller contingent is rushing into the line of
                        fire: mothers hoping to reunite with their children</p>
                </a>
            </div>
            <div class="right">
                <div class="box">
                    <a href="#">
                        <img src="images/n2.webp">
                        <h3>Chernobyl Experts Say Russia Could Set Off a Nuclear Disaster</h3>
                    </a>
                </div>
                <div class="box">
                    <a href="#">
                        <img src="images/n3.webp">
                        <h3>Moldova's Prime Minister on Russia and Staying Neutral</h3>
                    </a>
                </div>
                <div class="box">
                    <a href="#">
                        <img src="images/n4.webp">
                        <h3>Why Russians Are Fleeing By Train for Europe</h3>
                    </a>
                </div>
                <div class="box">
                    <a href="#">
                        <img src="images/n5.webp">
                        <h3>How Volodymyr Zelensky United the World</h3>
                    </a>
                </div>
            </div>
        </div>

    </div>

    <div class="news1">
        <hr>
        <a class="heading" href="#">
            <h2>THE 46TH PRESIDENT <i class='bx bx-chevron-right'></i></h2>
        </a>
        <div class="container">
            <div class="left">
                <a href="#">
                    <img src="images/n6.webp">
                    <h3>Biden's Criminal-Justice Report Card</h3>
                    <p>Joe Biden made many campaign promises about criminal-justice reform. Turning them into reality
                        has been difficult</p>
                </a>
            </div>
            <div class="right">
                <div class="box">
                    <a href="#">
                        <img src="images/n7.webp">
                        <h3>A Surge of Ukrainians at the US-Mexico Border</h3>
                    </a>
                </div>
                <div class="box">
                    <a href="#">
                        <img src="images/n8.webp">
                        <h3>Why President Biden Banned Russian Oil</h3>
                    </a>
                </div>
                <div class="box">
                    <a href="#">
                        <img src="images/n9.webp">
                        <h3>Abortion Rights Activists Say Biden Must Do More</h3>
                    </a>
                </div>
                <div class="box">
                    <a href="#">
                        <img src="images/n10.webp">
                        <h3>Biden Nominates Ketanji Brown Jackson to SCOTUS. What Happens Next?</h3>
                    </a>
                </div>
            </div>
        </div>

    </div>

    <div class="slideshow">
        <hr>
        <h2>RACE IN AMERICA</h2>
        <div class="slides">
            <div class="box">
                <a href="#">
                    <img src="images/s1.webp">
                    <p>What Happened to No-Knock Warrants Since Breonna Taylor</p>
                </a>
            </div>
            <div class="box">
                <a href="#">
                    <img src="images/s2.webp">
                    <p>A Year After the Spa Shootings, Asians Fear More Than Physical Attacks</p>
                </a>
            </div>
            <div class="box">
                <a href="#">
                    <img src="images/s3.webp">
                    <p>What the Black Future Looks Like, According to Experts</p>
                </a>
            </div>
            <div class="box">
                <a href="#">
                    <img src="images/s4.webp">
                    <p>Black Families Rejecting White-Washed History Turn to Homeschooling</p>
                </a>
            </div>
            <div class="box">
                <a href="#">
                    <img src="images/s5.webp">
                    <p>Haitian Migrant Mirard Joseph Tells His Story</p>
                </a>
            </div>
        </div>
    </div>

    <div class="slideshow">
        <hr>
        <h2>MONEY, INNOVATION & LEADERSHIP</h2>
        <div class="slides">
            <div class="box">
                <a href="#">
                    <img src="images/s6.webp">
                    <p>I Spent 80 Minutes Inside Vitalik Buterin's Brain. Here's What I Learned</p>
                </a>
            </div>
            <div class="box">
                <a href="#">
                    <img src="images/s7.webp">
                    <p>The Killing of a CRST Trucker Highlights Problems in the Industry</p>
                </a>
            </div>
            <div class="box">
                <a href="#">
                    <img src="images/s8.webp">
                    <p>How the Ukraine-Russia Conflict Will Raise the Price of Snack Foods</p>
                </a>
            </div>
            <div class="box">
                <a href="#">
                    <img src="images/s9.webp">
                    <p>Return to the Office? Not in This Housing Market</p>
                </a>
            </div>
        </div>
    </div>

    <div class="slideshow">
        <hr>
        <h2>FUTURE OF WORK BY CHARTER <i class='bx bx-chevron-right'></i></h2>
        <div class="slides">
            <div class="box">
                <a href="#">
                    <img src="images/s10.webp">
                    <p>Abbott Elementary Returns With Lessons for Our Own Workplaces</p>
                </a>
            </div>
            <div class="box">
                <a href="#">
                    <img src="images/s11.webp">
                    <p>New Research Explains What Triggers Corporate Action on Social Issues</p>
                </a>
            </div>
            <div class="box">
                <a href="#">
                    <img src="images/s12.webp">
                    <p>How to Make Hybrid Work for Everyone</p>
                </a>
            </div>
            <div class="box">
                <a href="#">
                    <img src="images/s13.webp">
                    <p>A Wish List From Workers as Offices Reopen</p>
                </a>
            </div>
        </div>
    </div>

    <div class="slideshow">
        <hr>
        <h2>PERSONAL FINANCE BY NEXTADVISOR <i class='bx bx-chevron-right'></i></h2>
        <div class="slides">
            <div class="box">
                <a href="#">
                    <img src="images/s14.webp">
                    <p>5 Creative Ways to Make a Winning Home Offer</p>
                </a>
            </div>
            <div class="box">
                <a href="#">
                    <img src="images/s15.webp">
                    <p>The Future of Cryptocurrency: 5 Experts' Predictions</p>
                </a>
            </div>
            <div class="box">
                <a href="#">
                    <img src="images/s16.webp">
                    <p>There's More Time to Repay Student Loans. Here's How to Take Advantage</p>
                </a>
            </div>
            <div class="box">
                <a href="#">
                    <img src="images/s17.webp">
                    <p>How Investors Can Get In On Crypto Without Actually Buying Any</p>
                </a>
            </div>
        </div>
    </div>

    <div class="slideshow">
        <hr>
        <h2>CLIMATE IS EVERYTHING <i class='bx bx-chevron-right'></i></h2>
        <div class="slides">
            <div class="box">
                <a href="#">
                    <img src="images/s18.webp">
                    <p>The Sunrise Movement Rethinks Approach to Creating Change</p>
                </a>
            </div>
            <div class="box">
                <a href="#">
                    <img src="images/s19.webp">
                    <p>Russia's War Could Cause Environmental Disasters in Ukraine</p>
                </a>
            </div>
            <div class="box">
                <a href="#">
                    <img src="images/s20.webp">
                    <p>A California City's Road-Usage Fee Back-Fired. Here's Why It Matters</p>
                </a>
            </div>
            <div class="box">
                <a href="#">
                    <img src="images/s21.webp">
                    <p>Climate Change Will Mean More Expensive Grocery Bills For Everyone: IPCC Report</p>
                </a>
            </div>
        </div>
    </div>
    
    <?php
    include "mainfooter.php";
    ?>
</body>

<script src="script.js"></script>
</html>