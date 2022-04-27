<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "head.php";
    ini_set('display_startup_errors', 1);
    ini_set('display_errors', 1);
    error_reporting(-1);
    ?>
    <title>Article</title>
    <style>
        * {
            font-family: 'Noto Sans', sans-serif;
        }

        .content {
            padding-top: 30px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .heading {
            width: 60%;
            text-align: center;
        }

        .subheading {
            width: 60%;
        }

        .banner {
            width: 60%;
            height: 500px;
        }

        .cat {
            margin-top: 30px;
        }

        .cat a {
            text-decoration: none;
            color: #e90606;
            font-size: 20px;
            font-weight: 900;
        }

        .data {
            width: 53%;
        }
    
        .author {
            color: #e90606;
            text-decoration: none;
        }
       
        .authorcont .bx {
            color: skyblue;
            font-size: 25px;
        }

        .more hr {
            width: 40%;
        }

        .more a {
            color: #e90606;
            font-size: 16px;
        }

        .read {
            display: flex;
            justify-content: space-between;
            width: 100%;
        }

        .read img {
            width: 50%;
            height: 200px;
        }

        .grid {
            display: flex;
            justify-content: space-between;
        }

        .box {
            display: flex;
            flex-direction: column;
            width: 40%;
        }

        .grid img {
            width: 90%;
        }

        .box :nth-child(3) {
            width: 90%;
        }
    </style>
</head>

<body>
    <?php include "mainheader.php";
    include "config.php";
    if (!isset($_GET['id'])) $_GET['id'] = 1;
    $data = mysqli_fetch_assoc(mysqli_query($conn, "select * from article where sno={$_GET['id']}")); ?>
    <div class="content">

        <div class="cat">
            <a href="#"><?php echo $data['category']; ?></a>
            <a href="#"><?php echo $data['subcategory']; ?></a>
        </div>
        <h1 class="heading"><?php echo $data['heading']; ?></h1>
        <img class="banner" src="<?php echo $data['img']; ?>">
        <p class="subheading"><?php echo $data['subheading']; ?></p>
        <div class="data">
            <p class="authorcont">By<span><a class="author" href="#"><?php echo $data['providedby']; ?></a><i class='bx bxl-twitter'></i></span><span> <?php echo $data['uploaddate']; ?></span></p>
            <p class="para">
                <?php
                echo str_replace("\r\n", "<br>", $data['content']);
                ?>
            </p>
            <div class="more">
                <div>
                    <h3>MORE MUST-READ STORIES FROM TIME</h3>
                    <hr>
                </div>
                <ul>
                    <li>The Man Behind Ethereum <a href="#">Is Worried About Crypto's Future</a></li>
                    <li>What We Learned During <a href="#">Ketanji Brown Jackson's Supreme Court Confirmation </a>Hearings</li>
                    <li>How<a href="#"> Telegram Became the Digital Battlefield </a>in the Russia-Ukraine War</li>
                    <li>Why You Still <a href="#">Can't Just Walk Into a Pharmacy</a> and Get a Prescription for a COVID-19 Pill</li>
                    <li>Column: 5 Ways to <a href="#"> Avert the Global Food Security Crisis</a></li>
                    <li><a href="#"> The Persistence of Atlanta,</a> TV's Greatest Surrealist Comedy</li>
                    <li>Exclusive: Romania's Prime Minister on <a href="#">How NATO Can Navigate</a> This 'Stark New Reality'</li>
                    <li><a href="#">States Could Let Parents Sue Big Tech</a> for Addicting Kids. Here's What That Really Means.</li>
                </ul>
            </div>
            <h3>READ MORE FROM TIME</h3>
            <div class="read">
                <img src="images/read.webp">
                <div style="padding-left:5px;">
                    <a href="#">BUSINESS</a>
                    <h4><a href="#">How TIME Chose the 100 Most Influential Companies of 2022</a></h4>
                    <p>The annual list highlights businesses making an extraordinary impact around the world</p>
                </div>
            </div>
            <hr>
            <div>
                <a href="#">IDEAS</a>
                <a href="#">
                    <h3>How Business Is Shaping Our Future</h3>
                </a>
            </div>
            <hr>
            <div class="grid">
                <div class="box">
                    <a href="#"><img src="images/s11.webp"></a>
                    <a href="#">IDEAS</a>
                    <a href="#">The Kashmir Files Marks India's Descent Into Darkness</a>
                </div>
                <div class="box">
                    <a href="#"><img src="images/s12.webp"></a>
                    <a href="#">IDEAS</a>
                    <a href="#">The Kashmir Files Marks India's Descent Into Darkness</a>
                </div>
                <div class="box">
                    <a href="#"><img src="images/s13.webp"></a>
                    <a href="#">IDEAS</a>
                    <a href="#">The Kashmir Files Marks India's Descent Into Darkness</a>
                </div>
            </div>
        </div>
    </div>
    <?php include "mainfooter.php"; ?>

</body>
<script>

</script>

</html>