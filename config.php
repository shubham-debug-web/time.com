<?php
    $conn = mysqli_connect('127.0.0.1','root','12345678','time') or die('connection failed!');
    if ($conn -> connect_errno) {
        echo 'Failed to connect to MySQL: ' . $mysqli_connect_error;
        exit();
      }
?>