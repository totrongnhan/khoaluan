<?php
//lay id can sua
$id_sinhvien = $_GET['id_sinhvien'];
require("../models/getModel.php");
$sinhvien__Get_By_Id = $sinhvien->sinhvien__Get_By_Id($id_sinhvien);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Thêm sinh viên</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <!-- jQuery library -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <div class="container">
            <h1>Sửa thông tin sinh viên</h1>
            <form action="./quanly/sinhvien/sinhvienAct.php?req=update" method="post">
                <input type="hidden" name="id_sinhvien" value="<?php echo $id_sinhvien; ?>" id="">
                <div class="form-group">
                    <label for="ma_sinhvien">Mã sinh viên</label>
                    <input type="text" class="form-control" name="ma_sinhvien" id="ma_sinhvien"
                           value="<?php echo $sinhvien__Get_By_Id->ma_sinhvien ?>">
                </div>
                <div class="form-group">
                    <label for="tensinhvien">Tên sinh viên</label>
                    <input type="text" class="form-control" name="tensinhvien" id="tensinhvien"
                           value="<?php echo $sinhvien__Get_By_Id->tensinhvien ?>">
                </div>
                <div class="form-group">
                    <label for="gioitinh">Giới tính</label><br>
                    <input type="radio" name="gioitinh" id="nam" value="1" <?=$sinhvien__Get_By_Id->gioitinh == 1 ? "checked" : ""?>>
                    <label for="nam">Nam</label>
                    <input type="radio" name="gioitinh" id="nu" value="0" <?=$sinhvien__Get_By_Id->gioitinh == 0 ? "checked" : ""?>>
                    <label for="nu">Nữ</label>
                </div>
                <div class="form-group">
                    <label for="ngaysinh">Ngày sinh</label>
                    <input type="date" class="form-control" name="ngaysinh" id="ngaysinh"
                           value="<?php echo $sinhvien__Get_By_Id->ngaysinh ?>">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" id="email"
                           value="<?php echo $sinhvien__Get_By_Id->email ?>">
                </div>
                <div class="form-group">
                    <label for="diachithuongtru">Địa chỉ thường trú</label>
                    <input type="text" class="form-control" name="diachithuongtru" id="diachithuongtru"
                           value="<?php echo $sinhvien__Get_By_Id->diachithuongtru ?>">
                </div>
                <div class="form-group">
                    <label for="diachilienlac">Địa chỉ liên lạc</label>
                    <input type="text" class="form-control" name="diachilienlac" id="diachilienlac"
                           value="<?php echo $sinhvien__Get_By_Id->diachilienlac ?>">
                </div>
                <div class="form-group">
                    <label for="sdt1">Số điện thoại 1</label>
                    <input type="text" class="form-control" name="sdt1" id="sdt1"
                           value="<?php echo $sinhvien__Get_By_Id->sdt1 ?>">
                </div>
                <div class="form-group">
                    <label for="sdt2">Số điện thoại 2</label>
                    <input type="text" class="form-control" name="sdt2" id="sdt2"
                           value="<?php echo $sinhvien__Get_By_Id->sdt2 ?>">
                </div>
                <div class="form-group">
                    <label for="id_lophoc">Id lớp học</label>
                    <input type="text" class="form-control" name="id_lophoc" id="id_lophoc"
                           value="<?php echo $sinhvien__Get_By_Id->id_lophoc ?>">
                </div>
                
                
                <button class="btn btn-info">Cập nhật thông tin</button>
            </form>

        </div>

    </body>
</html>
