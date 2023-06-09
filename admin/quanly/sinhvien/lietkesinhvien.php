<?php
require("../models/getModel.php");
$sinhvien__Get_All = $sinhvien->sinhvien__Get_All();
$lophoc__Get_All = $lophoc->lophoc__Get_All();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Liệt kê danh sách sinh viên</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <!-- Latest compiled and minified CSS -->
        <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

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
                                <th>Tên lớp học</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($sinhvien__Get_All as $item): ?>
                                <tr>
                                    <td><?php echo $item->id_sinhvien; ?></td>
                                    <td><?php echo $item->ma_sinhvien; ?></td>
                                    <td><?php echo $item->tensinhvien; ?></td>
                                    <td><?php echo $item->gioitinh; ?></td>
                                    <td><?php echo $item->ngaysinh; ?></td>
                                    <td><?php echo $item->email; ?></td>
                                    <td><?php echo $item->diachithuongtru; ?></td>
                                    <td><?php echo $item->diachilienlac; ?></td>
                                    <td><?php echo $item->sdt1; ?></td>
                                    <td><?php echo $item->sdt2; ?></td>
                                    <td>
                                        <?php
                                        $tenlophoc = '';
                                        foreach ($lophoc__Get_All as $lophocitem) {
                                            if ($lophocitem->id_lophoc == $item->id_lophoc) {
                                                $tenlophoc = $lophocitem->tenlophoc;
                                                break;
                                            }
                                        }
                                        echo $tenlophoc;
                                        ?>
                                    </td>
                                    <td>
                                        <a href="?req=suasinhvien&id_sinhvien=<?php echo $item->id_sinhvien; ?>" class="btn btn-primary">Sửa</a>
                                        <a onclick="return confirm('Bạn có muốn xóa sinh viên này không');" href="./quanly/sinhvien/sinhvienAct.php?req=delete&id_sinhvien=<?php echo $item->id_sinhvien; ?>" class="btn btn-danger">Xóa</a>
                                    </td>

                                <?php endforeach ?>
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
                            <form action="./quanly/sinhvien/sinhvienAct.php?req=add" method="post">
                                <div class="form-group">
                                    <label for="ma_sinhvien">Mã sinh viên</label>
                                    <input type="text" class="form-control" name="ma_sinhvien" id="ma_sinhvien"
                                           value="">
                                </div>
                                <div class="form-group">
                                    <label for="tensinhvien">Tên sinh viên</label>
                                    <input type="text" class="form-control" name="tensinhvien" id="tensinhvien"
                                           value="">
                                </div>
                                <div class="form-group">
                                    <label for="gioitinh">Giới tính</label>
                                    Nam<input type="radio" name="gioitinh" value="1" checked="true" >
                                    Nữ<input type="radio" name="gioitinh" value="0" >
                                </div>
                                <div class="form-group">
                                    <label for="ngaysinh">Ngày sinh</label>
                                    <input type="date" class="form-control" name="ngaysinh" id="ngaysinh">
                                           
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" name="email" id="email">
                                           
                                </div>
                                <div class="form-group">
                                    <label for="diachithuongtru">Địa chỉ thường trú</label>
                                    <input type="text" class="form-control" name="diachithuongtru" id="diachithuongtru">
                                           
                                </div>
                                <div class="form-group">
                                    <label for="diachilienlac">Địa chỉ liên lạc</label>
                                    <input type="text" class="form-control" name="diachilienlac" id="diachilienlac">
                                           
                                </div>
                                <div class="form-group">
                                    <label for="sdt1">Số điện thoại 1</label>
                                    <input type="text" class="form-control" name="sdt1" id="sdt1">
                                           
                                </div>
                                <div class="form-group">
                                    <label for="sdt2">Số điện thoại 2</label>
                                    <input type="text" class="form-control" name="sdt2" id="sdt2">
                                           
                                </div>
                                <div class="form-group">
                                        <label for="id_lophoc">ID lớp học</label>
                                        <select class="form-control" name="id_lophoc" id="id_lophoc">
                                            <?php foreach ($lophoc__Get_All as $item): ?>
                                                <option value="<?= $item->id_lophoc ?>"><?= $item->tenlophoc ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                               
                                <button class="btn btn-success">Thêm sinh viên</button>
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