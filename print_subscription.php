<!DOCTYPE html>
<html lang="en">

<head>
   <?php include "head.php"?>
    <title>Linking Your Print Subscription for Free Access to Time.com</title>
    <style>
        body {
            width: 100vw;
            padding: 0;
            margin: 0;
        }

        a {
            text-decoration: none;
        }

        .header {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 8vh;
            border-bottom: 1px solid rgba(0, 0, 0, 0.2);
        }

        .navbar {
            display: flex;
            width: 100%;
            height: 6vh;
            justify-content: space-between;
            padding-top: 2%;
        }

        .navbar .navlist {
            margin-left: 95px;
        }

        .navbar ul {
            list-style: none;
            display: flex;
        }

        .navbar a {
            color: #e90606;
            text-decoration: none;
            font-size: 17px;
        }

        .navbar a:hover {
            text-decoration: underline;
        }

        .navbar .bx {
            font-size: 20px;
        }

        .navbar .search {
            border: 1px solid black;
            display: flex;
            justify-content: space-around;
            align-items: center;
            width: 15%;
            height: 90%;
            border-radius: 15px;
        }

        .navbar .search input {
            border: none;
        }

        ::placeholder {
            font-size: 17px;
        }

        .main {
            width: 90%;
            padding-top: 5%;
            display: flex;
        }

        .main .sidebar {
            margin-left: 100px;
            width: 30%;
            height: 500px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .sidebar span {
            width: 100%;
            margin-left: 80px;
            font-size: 20px;
        }


        .main .sidebar ul {
            height: 100%;
            list-style: none;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
        }

        .main .sidebar ul li {
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 5px;
            width: 80%;
            height: 20%;
            transition: 0.5s;
        }

        .main .sidebar li a {
            color: black;
        }

        .main .sidebar li:hover {
            background: #e90606;
        }

        .main .sidebar li:hover>a {
            color: white;
        }

        .help {
            position: fixed;
            bottom: 0;
            right: 0;
        }

        .help button {
            cursor: pointer;
            background: #e90606;
            color: white;
            border: none;
            font-size: 20px;
            width: 150px;
            height: 50px;
        }

        .help_open {
            position: fixed;
            bottom: 3px;
            right: 3px;
            width: 300px;
            height: 150px;
            background: pink;   
        }

        .help_open .bx-minus {
            position: absolute;
            right: 0;
            top: 0;
        }

        .help_open .bx-minus:hover {
            transform: scale(1.5);
        }

        .help_open .tab {
            background: #e90606;
            color: white;
            height: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 20px;
        }

        .help_open .btm {
            display: flex;
            justify-content: center;
        }

        .help_open input {
            border: none;
        }

        .help_open .bx-search {
            background: white;
        }

        .main .content {
            width: 53%;
            height: 500px;
        }

        .content img {
            width: 100%;
            margin: 20px 0 20px 0
        }

        .content a {
            color: #e90606;
        }

        .content a:hover {
            text-decoration: underline;
        }

        .content hr {
            margin: 30px 0 30px 0;
        }

        .content .btns {
            width: 100%;
            height: 150px;
            text-align: center;
            display: flex;
            justify-content: space-around;
            flex-direction: column;
        }

        .content .btns button {
            width: 100px;
            height: 30px;
            border: none;
            background: white;
            border-radius: 3px;
            border: 1px solid #e90606;
            color: #e90606;
            cursor: pointer;
            transition: 0.5s;
        }

        .content .btns button:hover {
            background: #e90606;
            color: white;
        }

        .content ul {
            list-style: none;
        }

        .content .bottom {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
        }

        .content .bottom img {
            width: 10%;
        }

        .bottom ul {
            width: 100%;
            display: flex;
            justify-content: space-between;
        }

        .bottom ul li a {
            color: lightsteelblue;
        }

        .bottom ul li:hover {
            text-decoration: underline;
        }

        .content .strip {
            color: lightsteelblue;
        }
    </style>
</head>

<body>
    <div class="help">
        <button><i class='bx bx-help-circle'></i>Help</button>
    </div>
    <div class="help_open">
        <div class="tab">
            <span>Help</span>
            <span><i class='bx bx-minus'></i></span>
        </div>
        <div class="btm">
            <i class='bx bx-search'></i>
            <span><input type="search" placeholder="Search"></span>
        </div>
    </div>

    <div class="header">
        <a href="index.php"><img src="images/logo.svg"></a>
    </div>
    <div class="navbar">
        <div class="navlist">
            <ul>
                <li><a href="#">TIME Help Center</a></li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li><a href="#">TIME Help Topics</a></li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li><a href="#">Subscription Management</a></li>
            </ul>
        </div>
        <div class="search">
            <i class='bx bx-search'></i>
            <input type="search" placeholder="Search">
        </div>
    </div>
    <div class="main">
        <div class="sidebar">
            <span>Articles in this section</span>
            <ul>
                <li><a href="#">About a TIME Cryptocurrency Digital Subscription</a></li>
                <li><a href="#">Recent Magazine Covers</a></li>
                <li><a href="#">Print Magazine Delivery</a></li>
                <li><a href="#">Linking Your Print Subscription for Free Access to TIME.com</a></li>
                <li><a href="#">Finding Your Print Subscription Account Number</a></li>
                <li><a href="#">TIME.com Access for Apple News and Amazon Kindle Subscribers</a></li>
                <li><a href="#">Newsletter Readers & Limited TIME.com Access</a></li>
                <li><a href="#">Viewing Digital Issues of TIME</a></li>
            </ul>
        </div>
        <div class="content">
            <h1>Linking Your Print Subscription for Free Access to TIME.com</h1>
            <div>
                <span>10 months ago</span>
                <span>Updated</span>
            </div>
            <span><strong>Unlimited access to TIME.com is included in all print subscriptions.</strong></span>
            <p>
                <span>We encourage all print subscribers to link their print and digital accounts; this allows you
                    uninterrupted access to</span>
                <span><a href="#">TIME.com</a></span>
                <span>Otherwise, you will receive messages asking you to subscribe to continue reading. For more
                    information, read</span>
                <span><a href="#">the announcement from TIME CEO & Editor in Chief, Edward Felsenthal.</a></span>
            </p>
            <span>Here's how to link your accounts:</span>
            <ol>
                <li>
                    <span>Go</span> <span>here</span> <span>to create your account if you have not done so already.
                    </span>
                </li>
                <li>
                    <span>To link your print subscription, you'll need your account number. You can find your account
                        number on the mailing label of your magazine. It is the 10 digits directly above your name
                        following #TIM. You can also look up your account number in</span> <span>Manage Account</span>
                    <span>using your mailing address. For recent subscribers, your print subscription number is also
                        included in your confirmation email sent immediately after you subscribe. </span>
                </li>
                <li><span>You can create an account two ways: Sign in via your Google or Facebook account or with your
                        email address and a new password.If using your email address, it is preferred that you create
                        your account using the same email address associated with your print subscription. </span></li>

            </ol>
            <img src="images/ 1.png">
            <div>
                <span>If you have registered and logged in on</span> <span><a href="#">TIME.com</a></span><span>,you can
                    link your print subscription in</span> <span><a href="#">My Account.</a></span>
            </div>
            <img src="images/2.png">
            <span><strong>If you are having trouble linking your print subscription, please review the instructions
                    below based
                    on the problem you are encountering:</strong></span>
            <ol>
                <li><strong>I have a subscription but am unable to link it:</strong>Check to make sure your account
                    number is correct and that your subscription is active before you link it. If you are still having
                    issues, contact customer care <span><a href="#">here.</a></span></li>
                <li><strong>I linked my print subscription but it no longer appears to be linked:</strong>If your
                    subscription has expired, it will no longer be linked to your digital account. You can renew your
                    print subscription <a href="#">here.</a>Once you have an active subscription, you can link it to
                    your digital account to access your benefits.</li>
            </ol>
            <span>If you are located outside of the US/Canada, please visit our <strong>Global Help Centre</strong>for
                assistance. </span>
            <hr>
            <div class="btns">
                <span>Was this article helpful?</span>
                <div>
                    <button>Yes</button>
                    <span><button>No</button></span>
                </div>
                <span>32 out of 54 found this helpful</span>
            </div>
            <hr>
            <div>
                <div>
                    <span><strong>Recently viewed articles</strong></span>
                    <ul>
                        <li><a href="#">Print Magazine Delivery</a></li>
                    </ul>
                </div>
                <div>
                    <span><strong>Related Articles</strong></span>
                    <ul>
                        <li><a href="#">Finding Your Print Subscription Account Number</a></li>
                        <li><a href="#">Reaching Customer Care</a></li>
                        <li><a href="#">Viewing Digital Issues of TIME</a></li>
                        <li><a href="#">Managing Your Account</a></li>
                        <li><a href="#">Recent Magazine Covers</a></li>
                    </ul>
                </div>
            </div>

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
            <span class="strip">© 2021 TIME USA, LLC. All Rights Reserved. Use of this site constitutes acceptance of
                our</span>
            <div class="links">
                <span><a href="#">Terms of Service</a>,</span>
                <span><a href="#">Privacy Policy</a><a href="#">(Your California Privacy Rights)</a></span>
                <span>and</span>
                <span><a href="#">Do Not Sell My Personal Information</a></span>
            </div>
        </div>
    </div>
</body>


<script>
    $(document).ready(function(){
        $('.help_open').hide();
  $(".bx-minus").click(function(){
    $(".help_open").hide();
  });
  $(".help").click(function(){
    $(".help_open").show();
  });
});
</script>
</html>