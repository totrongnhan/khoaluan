<?php
//lay id can sua
$id_taikhoan = $_GET['id_taikhoan'];
require("../models/getModel.php");
$taikhoan__Get_By_Id = $taikhoan->taikhoan__Get_By_Id($id_taikhoan);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Thêm tài khoản</title>
        <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <div class="container">
            <h1>Sửa thông tin tài khoản</h1>
            <form action="./quanly/taikhoan/taikhoanAct.php?req=update" method="post">
                <input type="hidden" name="id_taikhoan" value="<?php echo $id_taikhoan; ?>" id="">
                <div class="form-group">
                    <label for="tentaikhoan">Tên tài khoản</label>
                    <input type="text" class="form-control" name="tentaikhoan" id="tentaikhoan"
                           value="<?php echo $taikhoan__Get_By_Id->tentaikhoan ?>">
                           </div>


                           <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email"
                           value="<?php echo $taikhoan__Get_By_Id->email ?>">

                           </div>
                           <div class="form-group">
                    <label for="matkhau">Mật khẩu</label>
                    <input type="password" class="form-control" name="matkhau" id="matkhau"
                           value="<?php echo $taikhoan__Get_By_Id->matkhau ?>">
                           </div>
                           <div class="form-group">
                    <label for="mota">Mô tả</label>
                    <input type="text" class="form-control" name="mota" id="mota"
                           value="<?php echo $taikhoan__Get_By_Id->mota ?>">
                           </div>

                           <div class="form-group">
                    <label for="id_phannhom">Id phân nhóm</label>
                    <input type="text" class="form-control" name="id_phannhom" id="id_phannhom"
                           value="<?php echo $taikhoan__Get_By_Id->id_phannhom ?>">

                           </div>
                           <div class="form-group">
                    <label for="id_phanquyen">Id phân quyền</label>
                    <input type="text" class="form-control" name="id_phanquyen" id="id_phanquyen"
                           value="<?php echo $taikhoan__Get_By_Id->id_phanquyen ?>">

                           </div>
                           <button class="btn btn-info">Cập nhật thông tin</button>
                    </form>

                </div>

                </body>
                </html>
