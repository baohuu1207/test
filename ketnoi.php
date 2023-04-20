<?php
    $host = 'localhost'; //Tên server, nếu dùng hosting free thì cần thay đổi
    $dbname = 'demo'; //Đây là tên của Database
    $username = 'root'; //Tên sử dụng Database
    $password = '';//Mật khẩu của tên sử dụng Database

    // Create connection
    $conn = new mysqli($host, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>
