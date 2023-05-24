<?php
//lay id can sua
$id_sv = $_GET['sid'];
//ket noi
require_once '../mod/config.php';
//cau lenh sql de thong tin ve khoa hoc co id = $id_sv
$sua_sql = "SELECT * FROM sinhvien WHERE id_sv=$id_sv";

$result = mysqli_query($conn, $sua_sql);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Thêm sinh viên</title>
        <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

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
            <form action="updatesinhvien.php" method="post">
                <input type="hidden" name="sid" value="<?php echo $id_sv; ?>" id="">
                <div class="form-group">
                    <label for="ma_sv">Mã sinh viên</label>
                    <input type="text" class="form-control" name="ma_sv" id="ma_sv"
                           value="<?php echo $row['ma_sv'] ?>">
                </div>
                <div class="form-group">
                    <label for="ten_sv">Tên sinh viên</label>
                    <input type="text" class="form-control" name="ten_sv" id="ten_sv"
                           value="<?php echo $row['ten_sv'] ?>">
                </div>
                <div class="form-group">
                    <label for="gioitinh">Giới tính</label><br>
                    <input type="radio" name="gioitinh" id="nam" value="1">
                    <label for="nam">Nam</label>
                    <input type="radio" name="gioitinh" id="nu" value="0">
                    <label for="nu">Nữ</label>
                </div>
                <div class="form-group">
                    <label for="ngaysinh">Ngày sinh</label>
                    <input type="date" class="form-control" name="ngaysinh" id="ngaysinh"
                           value="<?php echo $row['ngaysinh'] ?>">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" id="email"
                           value="<?php echo $row['email'] ?>">
                </div>
                <div class="form-group">
                    <label for="diachithuongtru">Địa chỉ thường trú</label>
                    <input type="text" class="form-control" name="diachithuongtru" id="diachithuongtru"
                           value="<?php echo $row['diachithuongtru'] ?>">
                </div>
                <div class="form-group">
                    <label for="diachilienlac">Địa chỉ liên lạc</label>
                    <input type="text" class="form-control" name="diachilienlac" id="diachilienlac"
                           value="<?php echo $row['diachilienlac'] ?>">
                </div>
                <div class="form-group">
                    <label for="sdt1">Số điện thoại 1</label>
                    <input type="text" class="form-control" name="sdt1" id="sdt1"
                           value="<?php echo $row['sdt1'] ?>">
                </div>
                <div class="form-group">
                    <label for="sdt2">Số điện thoại 2</label>
                    <input type="text" class="form-control" name="sdt2" id="sdt2"
                           value="<?php echo $row['sdt2'] ?>">
                </div>
                <div class="form-group">
                    <label for="id_lophoc">Id lớp học</label>
                    <input type="text" class="form-control" name="id_lophoc" id="id_lophoc"
                           value="<?php echo $row['ma_sv'] ?>">
                </div>
                <div class="form-group">
                    <label for="id_taikhoan">Id tài khoản</label>
                    <input type="text" class="form-control" name="id_taikhoan" id="id_taikhoan"
                           value="<?php echo $row['id_taikhoan'] ?>">
                </div>
                <button class="btn btn-info">Cập nhật thông tin</button>
            </form>

        </div>

    </body>
</html>
