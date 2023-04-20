<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <?php
            if(isset($_POST['dangnhap'])){
                $conn = new mysqli("localhost", "root", "", "demo");
                $username = $_POST['txtUsername'];
                $password = md5($_POST['txtPassword']);
                $query = "SELECT * FROM member WHERE username='$username' AND password='$password'";
                $result = $conn->query($query);

                $row = $result->fetch_assoc();
                if ($row) {
                    // Đăng nhập thành công, đưa người dùng tới trang chủ
                    session_start();
                    $_SESSION['username'] = $username;
                    header("Location: trangchu.php");
                } else {
                    // Thông báo lỗi và đưa người dùng trở lại trang đăng nhập
                    echo "Thông tin đăng nhập không chính xác. Vui lòng kiểm tra lại.";
                }
            }
            
        ?>
        <form action='dangnhap.php?do=login' method='POST'>
            <table cellpadding='0' cellspacing='0' border='1'>
                <tr>
                    <td>
                        Tên đăng nhập :
                    </td>
                    <td>
                        <input type='text' name='txtUsername' />
                    </td>
                </tr>
                <tr>
                    <td>
                        Mật khẩu :
                    </td>
                    <td>
                        <input type='password' name='txtPassword' />
                    </td>
                </tr>
            </table>
            <input type='submit' name="dangnhap" value='Đăng nhập' />
            <a href='dangky.php' title='Đăng ký'>Đăng ký</a>
        </form>
    </body>
</html>