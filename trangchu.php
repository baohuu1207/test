<?php
session_start();

// Kiểm tra nếu chưa đăng nhập thì chuyển về trang đăng nhập
if (!isset($_SESSION['usex  rname']) || empty($_SESSION['username'])) {
    header("Location: dangnhap.php");
    exit;
}

// Nếu người dùng nhấn đăng xuất thì xóa hết session và đưa về trang đăng nhập
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: dangnhap.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Trang chủ</title>
</head>
<body>
    <h1>Xin chào <?php echo $_SESSION['username']; ?></h1>
    <a href="?logout">Đăng xuất</a>
</body>
</html>
