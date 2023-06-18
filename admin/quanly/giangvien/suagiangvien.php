<?php
//lay id can sua
$id_giangvien = $_GET['id_giangvien'];
require("../models/getModel.php");
$giangvien__Get_By_Id = $giangvien->giangvien__Get_By_Id($id_giangvien);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sửa giảng viên</title>
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
            <h1>Sửa thông tin giảng viên</h1>
            <form action="./quanly/giangvien/giangvienAct.php?req=update" method="post">
                <input type="hidden" name="id_giangvien" value="<?php echo $id_giangvien; ?>" id="">
                <div class="form-group">
                    <label for="ma_giangvien">Mã giảng viên</label>
                    <input type="text" class="form-control" name="ma_giangvien" id="ma_giangvien"
                           value="<?php echo $giangvien__Get_By_Id->ma_giangvien ?>">
                </div>
                <div class="form-group">
                    <label for="tengiangvien">Tên giảng viên</label>
                    <input type="text" class="form-control" name="tengiangvien" id="tengiangvien"
                           value="<?php echo $giangvien__Get_By_Id->tengiangvien ?>">
                </div>
                <div class="form-group">
                    <label for="gioitinh">Giới tính</label><br>
                    <input type="radio" name="gioitinh" id="nam" value="1" <?=$giangvien__Get_By_Id->gioitinh == 1 ? "checked" : ""?>>
                    <label for="nam">Nam</label>
                    <input type="radio" name="gioitinh" id="nu" value="0" <?=$giangvien__Get_By_Id->gioitinh == 0 ? "checked" : ""?>>
                    <label for="nu">Nữ</label>
                </div>
                <div class="form-group">
                    <label for="ngaysinh">Ngày sinh</label>
                    <input type="date" class="form-control" name="ngaysinh" id="ngaysinh"
                           value="<?php echo $giangvien__Get_By_Id->ngaysinh ?>">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" id="email"
                           value="<?php echo $giangvien__Get_By_Id->email ?>">
                </div>
                <div class="form-group">
                    <label for="diachithuongtru">Địa chỉ thường trú</label>
                    <input type="text" class="form-control" name="diachithuongtru" id="diachithuongtru"
                           value="<?php echo $giangvien__Get_By_Id->diachithuongtru ?>">
                </div>
                <div class="form-group">
                    <label for="diachilienlac">Địa chỉ liên lạc</label>
                    <input type="text" class="form-control" name="diachilienlac" id="diachilienlac"
                           value="<?php echo $giangvien__Get_By_Id->diachilienlac ?>">
                </div>
                <div class="form-group">
                    <label for="sdt1">Số điện thoại 1</label>
                    <input type="text" class="form-control" name="sdt1" id="sdt1"
                           value="<?php echo $giangvien__Get_By_Id->sdt1 ?>">
                </div>
                <div class="form-group">
                    <label for="sdt2">Số điện thoại 2</label>
                    <input type="text" class="form-control" name="sdt2" id="sdt2"
                           value="<?php echo $giangvien__Get_By_Id->sdt2 ?>">
                </div>
                <div class="form-group">
                    <label for="id_donvi">Id đơn vị</label>
                    <input type="text" class="form-control" name="id_donvi" id="id_donvi"
                           value="<?php echo $giangvien__Get_By_Id->id_donvi ?>">
                </div>
                <div class="form-group">
                    <label for="id_trinhdo">Id trình độ</label>
                    <input type="text" class="form-control" name="id_trinhdo" id="id_trinhdo"
                           value="<?php echo $giangvien__Get_By_Id->id_trinhdo ?>">
                </div>
                
                
                <button class="btn btn-info">Cập nhật thông tin</button>
            </form>

        </div>

    </body>
</html>
