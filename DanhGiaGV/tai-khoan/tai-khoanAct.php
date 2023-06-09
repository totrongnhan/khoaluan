<?php
//userAct
session_start();
require("../../models/getModel.php");

// ...

if (isset($_GET["req"])) {
    switch ($_GET["req"]) {
        // ...
        
        case "change":
            // Lấy dữ liệu từ form
            $id_taikhoan = $_POST['id_taikhoan'];
            $matkhau = $_POST['matkhau'];
            $password_new = $_POST['password_new'];
            $password_confirm = $_POST['password_confirm'];

            // Gọi hàm kiểm tra đăng nhập từ cls
            $loginResult = $taikhoan->taikhoan__Check_Login($email, $matkhau);

            if ($loginResult != 0) {
                // Kiểm tra xem mật khẩu hiện tại có khớp hay không
                if ($loginResult->matkhau == $matkhau) {
                    // Kiểm tra xem mật khẩu mới và xác nhận mật khẩu có khớp nhau hay không
                    if ($password_new == $password_confirm) {
                        // Gọi hàm đổi mật khẩu từ cls
                        $changePasswordResult = $taikhoan->taikhoan__Change_Password($id_taikhoan, $password_new);

                        if ($changePasswordResult) {
                            // Mật khẩu đã được thay đổi thành công
                            header('Location: ../../index.php?req=doimk&status=success');
                            exit();
                        } else {
                            // Thất bại khi thay đổi mật khẩu
                            header('Location: ../../index.php?req=doimk&status=fail');
                            exit();
                        }
                    } else {
                        // Mật khẩu mới và xác nhận mật khẩu không khớp nhau
                        header('Location: ../../index.php?req=doimk&status=mismatch');
                        exit();
                    }
                } else {
                    // Mật khẩu hiện tại không khớp
                    header('Location: ../../index.php?req=doimk&status=incorrect');
                    exit();
                }
            } else {
                // Người dùng không tồn tại hoặc thông tin đăng nhập không đúng
                header('Location: ../../index.php?req=doimk&status=invalid');
                exit();
            }
            break;
        
        // ...
    }
}
?>


