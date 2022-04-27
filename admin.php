<?php
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);
include "config.php";
if (isset($_POST['submit'])) {
    $category =  $_POST['category'];
    $subcategory =  $_POST['subcategory'];
    $heading =  mysqli_real_escape_string($conn, $_POST['heading']);
    $subheading = mysqli_real_escape_string($conn, $_POST['subheading']);
    $providedby =  mysqli_real_escape_string($conn, $_POST['providedby']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);
    $date = $_POST['date'];


    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES['image']['name']);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    $check = getimagesize($_FILES['image']['tmp_name']);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        $uploadOk = 0;
    }
    if (file_exists($target_file)) {
        $uploadOk = 0;
    }
    if (
        $imageFileType != 'jpg' && $imageFileType != 'png' && $imageFileType != 'jpeg' && $imageFileType != 'gif'
        && $imageFileType != 'webp'
    ) {
        $uploadOk = 0;
    }

    if ($uploadOk) {
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
        $upload = mysqli_query($conn, "insert into article values(0,'$category','$subcategory','$heading','$subheading','$providedby',
    '$content','$date','$target_file')");
        header('Location:article.php');
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "head.php"; ?>
    <title>Admin Page</title>
    <style>
        * {
            font-family: 'Noto Sans', sans-serif;
        }

        form {
            height: 155vh;
            width: 100%;
            margin-left: 30%;
        }
        img {
            width: 100px;
            height: 100px;
        }
        .btn{
            background: #e90606;
            border:none;
            padding: 10px;
            border-radius: 13px;
            height: 39px;
            color: white;
            letter-spacing: 2px;
            font-size: 14px;
            transition: 0.3s;
            margin-left: -2%;
            cursor: pointer;
        }
        form div{
            width: 100%;
            height: 10%;
        }
        .btn:hover{
            background: lightgrey;
            color: #e90606;
        }
        span{
            width: 40%;
            display: block;
            margin: auto;
        }
        input,textarea{
            margin: auto;
            background: powderblue;
            display: block;
            width:45% ;
            height: 40%;
            border: none;
        }
       .ibox{
           width: 45%;
           display: flex;
       }
       .title{
           margin-left: 10%;
       }
    </style>
</head>

<body>
    <?php include "header.php"; ?>
    <form method="POST" enctype="multipart/form-data">
        <h1 class="title">Article Upload Form</h1>
        <div class="ibox">
            <span>Category:</span>
            <input list="categories" name="category" id="category" required>
            <datalist id="categories">
                <?php
                $table = mysqli_query($conn, "select distinct category from article");
                while ($row = mysqli_fetch_assoc($table)) {
                    echo "<option value={$row['category']}>";
                }
                ?>
            </datalist>
        </div>
        <div class="ibox">
            <span>Sub-Category:</span>
            <input list="subcategories" name="subcategory" id="subcategory" required>
            <datalist id="subcategories">
            </datalist>
        </div>
        <div class="ibox">
            <span>Article Heading:</span>
            <input type="text" name="heading" class="heading" placeholder="Enter text here..." required>
        </div>
        <div class="ibox">
            <span>Article Sub-Heading:</span>
            <input type="text" name="subheading" class="subheading" placeholder="Enter text here..." required>
        </div>
        <div class="ibox">
            <span>Article Author:</span>
            <input type="text" name="providedby" class="author" placeholder="Enter text here..." required>
        </div>
        <div class="ibox">
            <span>Article Content:</span>
            <textarea maxlength="10000" name="content" id="content" cols="40" rows="2" placeholder="Enter text here..." required></textarea>
        </div>
        <div class="ibox">
            <span>Upload Date:</span>
            <input type="date" name="date" class="date" required>
        </div>
        <div class="ibox">
            <span>Select Image:</span>
            <input type="file" class="img" id="image" name="image" onchange="previewFile(this);" required>
        </div>
        <img src="images/defaultimg.png" id="previewImg" style="margin-left: 29%;">
        <input type="submit" placeholder="Submit" name="submit" class="btn">
    </form>
    <?php include "footer.php"; ?>
</body>
<script>
    <?php
    $table2 = mysqli_query($conn, 'select distinct category, subcategory from article');
    $data = json_encode(mysqli_fetch_all($table2));
    echo "const data = $data;";
    ?>
    console.log(data);

    function previewFile(input) {
        var file = $("input[type=file]").get(0).files[0];

        if (file) {
            var reader = new FileReader();

            reader.onload = function() {
                $("#previewImg").attr("src", reader.result);
            }

            reader.readAsDataURL(file);
        }
    }
    $('#category').change(function() {
        let html = "";
        const category = $(this).val();
        
        let subcategories = [];
        data.find(function(value) {
            if (value[0] == category) subcategories.push(value[1]);
        });
        for (const subcategory of subcategories) {
            html += "<option value=" + subcategory + "></option>";
        }
        $('#subcategories').html(html);
    });
</script>

</html>