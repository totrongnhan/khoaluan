<?php
// Lấy thông tin tài khoản từ cơ sở dữ liệu dựa trên id_taikhoan
$id_taikhoan = $_GET['id_taikhoan'];
$matkhau = $_GET['matkhau'];
$matkhau = $_GET['matkhau'];
// Truy vấn cơ sở dữ liệu để lấy thông tin tài khoản
// ...
// $taikhoan = ...; // Kết quả truy vấn
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đổi mật khẩu</title>
    <!-- Thêm các tài nguyên CSS và JavaScript cần thiết -->
</head>
<body>
    <h1>Đổi mật khẩu</h1>
    <!-- Form đổi mật khẩu -->
    <form method="post" action="./tai-khoanAct.php?req=change">
        <input type="hidden" name="id_taikhoan" value="<?php echo $id_taikhoan; ?>">

        
        <label for="matkhau">Mật khẩu hiện tại:</label>
        <input type="password" name="matkhau" required><br>

        <label for="password_new">Mật khẩu mới:</label>
        <input type="password" name="password_new" required><br>

        <label for="password_confirm">Xác nhận mật khẩu mới:</label>
        <input type="password" name="password_confirm" required><br>

        <input type="submit" value="Đổi mật khẩu">
    </form>
</body>
</html>
