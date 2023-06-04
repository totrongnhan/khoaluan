<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Thêm</title>
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
            <h1>Form</h1>
            <form action="themsinhvien.php" method="post">
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
                    <label for="ma_sv">Giới tính</label>
                    Nam<input type="radio" class="form-control" name="gioitinh" id="gioitinh"
                              value="<?php echo $row['ma_sv'] ?>">
                    Nữ<input type="radio" class="form-control" name="gioitinh" id="gioitinh"
                             value="<?php echo $row['ma_sv'] ?>">
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
                    <label for="std1">Số điện thoại 1</label>
                    <input type="tel" class="form-control" name="std1" id="std1"
                           value="<?php echo $row['std1'] ?>">
                </div>
                <div class="form-group">
                    <label for="sdt2">Số điện thoại 2</label>
                    <input type="tel" class="form-control" name="sdt2" id="sdt2"
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
                <button class="btn btn-success">Thêm trình độ</button>
            </form>

        </div>

    </body>
</html>