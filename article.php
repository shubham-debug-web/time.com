<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "head.php"; ?>
    <title>Article Title</title>
    <style>
        body {
            width: 100%;
        }
        *{
            font-family:'Noto Sans',sans-serif;
        }
        .content {
            width: 70%;
            height: 100%;
            margin-left: 10%;
            /* background: powderblue; */
        }

        .content a {
            color: black;
        }

        .firstarticle {
            padding: 20px;
        }
        .firstarticle h2 a{
            font-size: 40px;
        }
        .firstarticle img {
            width: 900px;
            height: 600px;
        }
        
        .firstarticle .articlesubcategory {
            font-size: 40px;
            margin-bottom: 0;
        }

        .content .links a {
            margin-right: 10px;
        }

        .content .headline {
            font-size: 35px;
        }

        .otherarticles {
            width: 100%;
            display: flex;
            justify-content: space-between;
            margin-bottom: 19%;
        }

        .otherarticles .box {
            width: 30%;
            height: 300px;
        }

        .otherarticles .box img {
            width: 100%;
            height: 65%;
        }

        .morearticles .box {
            width: 100%;
            height: 200px;
            display: flex;
        }

        .morearticles .moreinfo {
            margin-left: 3%;
            width: 50%;
            height: 90%;
        }

        .moreinfo h3 {
            margin: 0;
        }

        .moredate {
            color: #b92318;
        }

        .morearticles img {
            width: 100%;
            height: 90%;
        }

        .load {
            border: 1px solid black;
            padding: 10px;
            display: block;
            width: 200px;
            margin: auto;
            text-align: center;
        }

        .bottom .boxes {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .bottom h2 {
            font-size: 36px;
        }

        .bottom span {
            color: #b92318;
        }

        .boxes .box {
            width: 30%;
            height: 40%;
        }

        .box img {
            width: 100%;
            height: 80%;
        }
    </style>
</head>

<body>
    <?php
    include "mainheader.php";
    include "config.php";
    $table = mysqli_query($conn, "select * from article where category='{$_GET['cat']}'");
    $data = mysqli_fetch_assoc($table);
    ?>
    <div class="content">
        <div class="firstarticle">
            <h1 class="articlesubcategory">U.S.</h1>
            <div class="links">
                <a class="articletag" href="#">REMEMBRANCE</a>
                <a class="articletag" href="#">COVID-19</a>
                <a class="articletag" href="#">EDUCATION</a>
                <a class="articletag" href="#">CLIMATE CHANGE</a>
                <a class="articletag" href="#">LGBTQ</a>
            </div>
            <hr>
            <a href="content.php?id=<?php echo $data['sno']?>"><img src="<?php echo $data['img']; ?>" class="articleimg"></a>
            <h2 class="headline"><a href="content.php"><?php echo $data['heading'] ?></a></h2>
            <a class="provider" href="#"><?php echo $data['providedby'] ?></a>
        </div>
        <div class="otherarticles">
            <?php
            for ($i = 0; $i < mysqli_num_rows($table); $i++) {
                if ($i == 3) break;
                $data2 = mysqli_fetch_assoc($table);
                echo "
            <div class='box'>
                <a class='otherimg' href='content.php?id={$data2['sno']}'><img src='{$data2['img']}'></a>
                <a class='othertitle' href='#'>
                    <h2>{$data2['heading']}</h2>
                </a>
                <a class='otherprovider' href='#'><span>{$data2['providedby']}</span></a>
            </div>";
            }
            ?>
        </div>

        <div class="morearticles">
            <h2 class="more">More in <span>U.S.</span></h2>
            <hr>
            <div class="box">
                <a href="#">
                    <img src="images/6.jpg"></a>
                <a class="moreinfo" href="#">
                    <h3 class="moretitle">Why the SEC's New Climate Rules Could Divide Corporate America</h3>
                    <p class="moresubtitle">The fight over the SEC's climate rules illustrates an emerging fault line:
                        some companies are changing and others hanging on to old days.
                    </p>
                    <span class="moreprovider">By Justin Worland <span class="moredate">March 22,2022</span></span>
                </a>
            </div>
            <div class="box">
                <a href="#">
                    <img src="images/6.jpg"></a>

                <a class="moreinfo" href="#">
                    <h3 class="moretitle">Why the SEC's New Climate Rules Could Divide Corporate America</h3>
                    <p class="moresubtitle">The fight over the SEC's climate rules illustrates an emerging fault line:
                        some companies are changing and others hanging on to old days.
                    </p>
                    <span class="moreprovider">By Justin Worland <span class="moredate">March 22,2022</span></span>
                </a>
            </div>
            <div class="box">
                <a href="#">
                    <img src="images/6.jpg"></a>

                <a class="moreinfo" href="#">
                    <h3 class="moretitle">Why the SEC's New Climate Rules Could Divide Corporate America</h3>
                    <p class="moresubtitle">The fight over the SEC's climate rules illustrates an emerging fault line:
                        some companies are changing and others hanging on to old days.
                    </p>
                    <span class="moreprovider">By Justin Worland <span class="moredate">March 22,2022</span></span>
                </a>
            </div>
            <div class="box">
                <a href="#">
                    <img src="images/6.jpg"></a>

                <a class="moreinfo" href="#">
                    <h3 class="moretitle">Why the SEC's New Climate Rules Could Divide Corporate America</h3>
                    <p class="moresubtitle">The fight over the SEC's climate rules illustrates an emerging fault line:
                        some companies are changing and others hanging on to old days.
                    </p>
                    <span class="moreprovider">By Justin Worland <span class="moredate">March 22,2022</span></span>
                </a>
            </div>
            <div class="box">
                <a href="#">
                    <img src="images/6.jpg"></a>

                <a class="moreinfo" href="#">
                    <h3 class="moretitle">Why the SEC's New Climate Rules Could Divide Corporate America</h3>
                    <p class="moresubtitle">The fight over the SEC's climate rules illustrates an emerging fault line:
                        some companies are changing and others hanging on to old days.
                    </p>
                    <span class="moreprovider">By Justin Worland <span class="moredate">March 22,2022</span></span>
                </a>
            </div>
            <div class="box">
                <a href="#">
                    <img src="images/6.jpg"></a>

                <a class="moreinfo" href="#">
                    <h3 class="moretitle">Why the SEC's New Climate Rules Could Divide Corporate America</h3>
                    <p class="moresubtitle">The fight over the SEC's climate rules illustrates an emerging fault line:
                        some companies are changing and others hanging on to old days.
                    </p>
                    <span class="moreprovider">By Justin Worland <span class="moredate">March 22,2022</span></span>
                </a>
            </div>
            <div class="box">
                <a href="#">
                    <img src="images/6.jpg"></a>

                <a class="moreinfo" href="#">
                    <h3 class="moretitle">Why the SEC's New Climate Rules Could Divide Corporate America</h3>
                    <p class="moresubtitle">The fight over the SEC's climate rules illustrates an emerging fault line:
                        some companies are changing and others hanging on to old days.
                    </p>
                    <span class="moreprovider">By Justin Worland <span class="moredate">March 22,2022</span></span>
                </a>
            </div>
            <div class="box">
                <a href="#">
                    <img src="images/6.jpg"></a>

                <a class="moreinfo" href="#">
                    <h3 class="moretitle">Why the SEC's New Climate Rules Could Divide Corporate America</h3>
                    <p class="moresubtitle">The fight over the SEC's climate rules illustrates an emerging fault line:
                        some companies are changing and others hanging on to old days.
                    </p>
                    <span class="moreprovider">By Justin Worland <span class="moredate">March 22,2022</span></span>
                </a>
            </div>
            <div class="box">
                <a href="#">
                    <img src="images/6.jpg"></a>

                <a class="moreinfo" href="#">
                    <h3 class="moretitle">Why the SEC's New Climate Rules Could Divide Corporate America</h3>
                    <p class="moresubtitle">The fight over the SEC's climate rules illustrates an emerging fault line:
                        some companies are changing and others hanging on to old days.
                    </p>
                    <span class="moreprovider">By Justin Worland <span class="moredate">March 22,2022</span></span>
                </a>
            </div>
            <div class="box">
                <a href="#">
                    <img src="images/6.jpg"></a>

                <a class="moreinfo" href="#">
                    <h3 class="moretitle">Why the SEC's New Climate Rules Could Divide Corporate America</h3>
                    <p class="moresubtitle">The fight over the SEC's climate rules illustrates an emerging fault line:
                        some companies are changing and others hanging on to old days.
                    </p>
                    <span class="moreprovider">By Justin Worland <span class="moredate">March 22,2022</span></span>
                </a>
            </div>
            <div class="box">
                <a href="#">
                    <img src="images/6.jpg"></a>

                <a class="moreinfo" href="#">
                    <h3 class="moretitle">Why the SEC's New Climate Rules Could Divide Corporate America</h3>
                    <p class="moresubtitle">The fight over the SEC's climate rules illustrates an emerging fault line:
                        some companies are changing and others hanging on to old days.
                    </p>
                    <span class="moreprovider">By Justin Worland <span class="moredate">March 22,2022</span></span>
                </a>
            </div>
            <div class="box">
                <a href="#">
                    <img src="images/6.jpg"></a>

                <a class="moreinfo" href="#">
                    <h3 class="moretitle">Why the SEC's New Climate Rules Could Divide Corporate America</h3>
                    <p class="moresubtitle">The fight over the SEC's climate rules illustrates an emerging fault line:
                        some companies are changing and others hanging on to old days.
                    </p>
                    <span class="moreprovider">By Justin Worland <span class="moredate">March 22,2022</span></span>
                </a>
            </div>
        </div>

        <a href="#" class="load">LOAD MORE ARTICLES</a>

        <div class="bottom">
            <h2>More from <span>TIME</span></h2>
            <hr>
            <div class="boxes">
                <div class="box">
                    <a href="#">
                        <img src="images/s9.webp">
                        <h3>What It's Like Working at a DAO</h3>
                    </a>
                </div>
                <div class="box">
                    <a href="#">
                        <img src="images/s9.webp">
                        <h3>What It's Like Working at a DAO</h3>
                    </a>
                </div>
                <div class="box">
                    <a href="#">
                        <img src="images/s9.webp">
                        <h3>What It's Like Working at a DAO</h3>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?php include "mainfooter.php"; ?>
</body>

</html>