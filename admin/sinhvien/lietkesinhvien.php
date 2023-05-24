<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Liệt kê danh sách sinh viên</title>
        <link href="../css.css" rel="stylesheet" type="text/css"/>
        <!-- Latest compiled and minified CSS -->
        <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <!-- jQuery library -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>


        <!-- Content -->
        <div id="content">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#"><i class="zmdi zmdi-notifications text-danger"></i>
                            </a>
                        </li>
                        <li><a href="../index.php">Trang Chủ</a></li>
                    </ul>
                </div>
            </nav>
            <div class="container-fluid">
                <div class="container">
                    <h1>Danh sách sinh viên</h1>
                    <!-- Button to Open the Modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                        Thêm sinh viên mới
                    </button>

                    <table class="table table-dark table-hover">
                        <thead>
                            <tr>
                                <th>Id sinh viên</th>
                                <th>Mã sinh viên</th>
                                <th>Tên sinh viên</th>
                                <th>Giới tính</th>
                                <th>Ngày sinh</th>
                                <th>Email</th>
                                <th>Địa chỉ thường trú</th>
                                <th>Địa chỉ liên lạc</th>
                                <th>Số điện thoại 1</th>
                                <th>Số điện thoại 2</th>
                                <th>Id lớp học</th>
                                <th>Id tài khoản</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
//ketnoi
                            require_once '../mod/config.php';
//cau lenh
                            $lietke_sql = "SELECT * FROM sinhvien order by ma_sv, ten_sv, gioitinh, ngaysinh, email, diachithuongtru, diachilienlac, sdt1, sdt2, id_lophoc, id_taikhoan";
//thuc thi cau lenh
                            mysqli_query($conn, $lietke_sql);
                            $result = mysqli_query($conn, $lietke_sql);
//duyet qua result va in ra
                            while ($r = mysqli_fetch_assoc($result)) {
                                ?>
                                <tr>
                                    <td><?php echo $r['id_sv']; ?></td>
                                    <td><?php echo $r['ma_sv']; ?></td>
                                    <td><?php echo $r['ten_sv']; ?></td>
                                    <td><?php echo $r['gioitinh']; ?></td>
                                    <td><?php echo $r['ngaysinh']; ?></td>
                                    <td><?php echo $r['email']; ?></td>
                                    <td><?php echo $r['diachithuongtru']; ?></td>
                                    <td><?php echo $r['diachilienlac']; ?></td>
                                    <td><?php echo $r['sdt1']; ?></td>
                                    <td><?php echo $r['sdt2']; ?></td>
                                    <td><?php echo $r['id_lophoc']; ?></td>
                                    <td><?php echo $r['id_taikhoan']; ?></td>
                                    <td><a href="suasinhvien.php?sid=<?php echo $r['id_sv']; ?>"  class="btn btn-primary">Sửa</a> 
                                        <a onclick="return confirm('Bạn có muốn xóa trình độ này không');" href="xoasinhvien.php?sid=<?php echo $r['id_sv']; ?>" class="btn btn-danger">Xóa</a></td>
                                </tr>

                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>


            <!-- The Modal -->
            <div class="modal" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Thêm sinh viên</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <form action="themsinhvien.php" method="post">
                                <div class="form-group">
                                    <label for="ma_sv">Mã sinh viên</label>
                                    <input type="text" class="form-control" name="ma_sv" id="ma_sv"
                                           value="">
                                </div>
                                <div class="form-group">
                                    <label for="ten_sv">Tên sinh viên</label>
                                    <input type="text" class="form-control" name="ten_sv" id="ten_sv"
                                           value="">
                                </div>
                                <div class="form-group">
                                    <label for="gioitinh">Giới tính</label>
                                    Nam<input type="radio" name="gioitinh" value="1" checked="true" >
                                    Nữ<input type="radio" name="gioitinh" value="0" >
                                    Khác<input type="radio" name="gioitinh" value="2" >
                                </div>
                                <div class="form-group">
                                    <label for="ngaysinh">Ngày sinh</label>
                                    <input type="date" class="form-control" name="ngaysinh" id="ngaysinh"
                                           value="">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" name="email" id="email"
                                           value="">
                                </div>
                                <div class="form-group">
                                    <label for="diachithuongtru">Địa chỉ thường trú</label>
                                    <input type="text" class="form-control" name="diachithuongtru" id="diachithuongtru"
                                           value="">
                                </div>
                                <div class="form-group">
                                    <label for="diachilienlac">Địa chỉ liên lạc</label>
                                    <input type="text" class="form-control" name="diachilienlac" id="diachilienlac"
                                           value="">
                                </div>
                                <div class="form-group">
                                    <label for="sdt1">Số điện thoại 1</label>
                                    <input type="text" class="form-control" name="sdt1" id="sdt1"
                                           value="">
                                </div>
                                <div class="form-group">
                                    <label for="sdt2">Số điện thoại 2</label>
                                    <input type="text" class="form-control" name="sdt2" id="sdt2"
                                           value="">
                                </div>
                                <div class="form-group">
                                    <label for="id_lophoc">Id lớp học</label>
                                    <input type="text" class="form-control" name="id_lophoc" id="id_lophoc"
                                           value="">
                                </div>
                                <div class="form-group">
                                    <label for="id_taikhoan">Id tài khoản</label>
                                    <input type="text" class="form-control" name="id_taikhoan" id="id_taikhoan"
                                           value="">
                                </div>
                                <button class="btn btn-success">Thêm tài khoản</button>
                            </form>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
                        </div>

                    </div>
                </div>
            </div>

    </body>
</html>