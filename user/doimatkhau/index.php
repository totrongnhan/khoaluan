<?php
    session_start();
    require "../../models/getModel.php";
    $id_taikhoan=$_SESSION['user']->id_taikhoan;
    $taikhoan__Get_By_Id=$taikhoan->taikhoan__Get_By_Id($id_taikhoan);
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đổi mk</title>
    <link rel="shortcut icon" href="../../assets/img/logotaydo.png">
    <link rel="stylesheet" href="../../assets/vendor/bootstrap/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="../../assets/vendor/boxicons/css/boxicons.min.css" type="text/css" />
    <link rel="stylesheet" href="../../assets/css/login.css" type="text/css" />

</head>

<body>
    <main class="form-login">
        <form action="./action.php?req=change" method="post">
            <h1 class="text-center">Đổi mật khẩu</h1>

            <br>
            <input type="hidden" class="form-control" id="id_taikhoan" name="id_taikhoan" readonly
                value="<?=$taikhoan__Get_By_Id->id_taikhoan?>">
            <div class="form-floating mb-1">
                <input type="email" class="form-control" id="email" name="email" readonly
                    value="<?=$taikhoan__Get_By_Id->email?>">
                <label for="email">Email</label>
            </div>
            <div class="form-floating mb-1">
                <input type="password" class="form-control" id="matkhau" name="matkhau" required>
                <label for="matkhau">Password</label>
            </div>
            <button class="w-100 btn btn-success" type="submit">Login</button>
        </form>
    </main>

    <script src="../../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../../assets/vendor/sweetalert2@11.js"></script>
    <script src="../../assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <?php
        if (isset($_GET['status']) && $_GET['status'] == "fail") {
            echo "<script> Swal.fire('Đăng nhập thất bại!', 'Thông tin đăng nhập không đúng hoặc đã bị khóa!', 'error');  </script>";
        }
        ?>
</body>

</html>