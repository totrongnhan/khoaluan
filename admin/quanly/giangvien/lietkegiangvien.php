<?php
require("../models/getModel.php");
$giangvien__Get_All = $giangvien->giangvien__Get_All();
$trinhdo__Get_All = $trinhdo->trinhdo__Get_All();
$donvi__Get_All = $donvi->donvi__Get_All();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Liệt kê danh sách giảng viên</title>
        <link href="../css.css" rel="stylesheet" type="text/css"/>
        <!-- Latest compiled and minified CSS -->
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


        <!-- Content -->
        <div id="content">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#"><i class="zmdi zmdi-notifications text-danger"></i>
                            </a>
                        </li>
                        <li><a href="../../index.php">Trang Chủ</a></li>
                    </ul>
                </div>
            </nav>
            <div class="container-fluid">
                <div class="container">
                    <h1>Danh sách giảng viên</h1>
                    <!-- Button to Open the Modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                        Thêm giảng viên mới
                    </button>

                    <table class="table table-dark table-hover">
                        <thead>
                            <tr>
                                <th>Id giảng viên</th>
                                <th>Mã giảng viên</th>
                                <th>Tên giảng viên</th>
                                <th>Giới tính</th>
                                <th>Ngày sinh</th>
                                <th>Email</th>
                                <th>Địa chỉ thường trú</th>
                                <th>Địa chỉ liên lạc</th>
                                <th>Số điện thoại 1</th>
                                <th>Số điện thoại 2</th>
                                <th>Tên đơn vị</th>
                                <th>Tên trình độ</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($giangvien__Get_All as $item): ?>
                                <tr>
                                    <td><?php echo $item->id_giangvien; ?></td>
                                    <td><?php echo $item->ma_giangvien; ?></td>
                                    <td><?php echo $item->tengiangvien; ?></td>
                                    <td><?php echo $item->gioitinh; ?></td>
                                    <td><?php echo $item->ngaysinh; ?></td>
                                    <td><?php echo $item->email; ?></td>
                                    <td><?php echo $item->diachithuongtru; ?></td>
                                    <td><?php echo $item->diachilienlac; ?></td>
                                    <td><?php echo $item->sdt1; ?></td>
                                    <td><?php echo $item->sdt2; ?></td>
                                    <td>
                                        <?php
                                        $tendonvi = '';
                                        foreach ($donvi__Get_All as $donviitem) {
                                            if ($donviitem->id_donvi == $item->id_donvi) {
                                                $tendonvi = $donviitem->tendonvi;
                                                break;
                                            }
                                        }
                                        echo $tendonvi;
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        $tentrinhdo = '';
                                        foreach ($trinhdo__Get_All as $trinhdoitem) {
                                            if ($trinhdoitem->id_trinhdo == $item->id_trinhdo) {
                                                $tentrinhdo = $trinhdoitem->tentrinhdo;
                                                break;
                                            }
                                        }
                                        echo $tentrinhdo;
                                        ?>
                                    </td>
                                    <td>
                                        <a href="?req=suagiangvien&id_giangvien=<?php echo $item->id_giangvien; ?>" class="btn btn-primary">Sửa</a>
                                        <a onclick="return confirm('Bạn có muốn xóa giảng viên này không');" href="./quanly/giangvien/giangvienAct.php?req=delete&id_giangvien=<?php echo $item->id_giangvien; ?>" class="btn btn-danger">Xóa</a>
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
                            <h4 class="modal-title">Thêm giảng viên</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <form action="./quanly/giangvien/giangvienAct.php?req=add" method="post">
                                <div class="form-group">
                                    <label for="ma_giangvien">Mã giảng viên</label>
                                    <input type="text" class="form-control" name="ma_giangvien" id="ma_giangvien"
                                           value="">
                                </div>
                                <div class="form-group">
                                    <label for="tengiangvien">Tên giảng viên</label>
                                    <input type="text" class="form-control" name="tengiangvien" id="tengiangvien"
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
                                    <label for="id_donvi">ID đơn vị</label>
                                    <select class="form-control" name="id_donvi" id="id_donvi">
                                        <?php foreach ($donvi__Get_All as $item): ?>
                                            <option value="<?= $item->id_donvi ?>"><?= $item->tendonvi ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="id_trinhdo">ID trình độ</label>
                                    <select class="form-control" name="id_trinhdo" id="id_trinhdo">
                                        <?php foreach ($trinhdo__Get_All as $item): ?>
                                            <option value="<?= $item->id_trinhdo ?>"><?= $item->tentrinhdo ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>

                                <button class="btn btn-success">Thêm giảng viên</button>
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