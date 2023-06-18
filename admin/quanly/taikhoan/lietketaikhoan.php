<?php
require("../models/getModel.php");
$taikhoan__Get_All = $taikhoan->taikhoan__Get_All();
$phannhom__Get_All = $phannhom->phannhom__Get_All();
$phanquyen__Get_All = $phanquyen->phanquyen__Get_All();
$taikhoan__Get_check = $taikhoan->taikhoan__Get_check();
$taikhoan__Get_checkgv = $taikhoan->taikhoan__Get_checkgv();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Liệt kê danh sách tài khoản</title>
        <!--        <link href="../css.css" rel="stylesheet" type="text/css"/>-->
        <!-- Latest compiled and minified CSS -->
        <!--        <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>-->
        <!-- Latest compiled and minified CSS -->
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
                        
                    </ul>
                </div>
            </nav>
            <div style="margin-left: auto" class="container-fluid">
                <div class="container">
                    <h1>Danh sách tài khoản</h1>
                    <!-- Button to Open the Modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                        Thêm tài khoản mới
                    </button>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal2">
                        Thêm tài khoản gv mới
                    </button>

                    <table class="table table-dark table-hover">
                        <thead>
                            <tr>
                                <th>Id tài khoản</th>
                                <th>Tên tài khoản</th>                                
                                <th>Email</th>
                                <th>Mật khẩu</th>
                                <th>Mô tả</th>
                                <th>Tên phân nhóm</th>
                                <th>Tên phân quyền</th>
                                <th>Id người dùng</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($taikhoan__Get_All as $item): ?>
                                <tr>
                                    <td><?php echo $item->id_taikhoan; ?></td>
                                    <td><?php echo $item->tentaikhoan; ?></td>
                                    <td><?php echo $item->email; ?></td>
                                    <td><?php echo $item->matkhau; ?></td>
                                    <td><?php echo $item->mota; ?></td>
                                    <td>
                                            <?php
                                            $tenphannhom = '';
                                            foreach ($phannhom__Get_All as $phannhomitem) {
                                                if ($phannhomitem->id_phannhom == $item->id_phannhom) {
                                                    $tenphannhom = $phannhomitem->tenphannhom;
                                                    break;
                                                }
                                            }
                                            echo $tenphannhom
                                            ?>
                                        </td>
                                    <td>
                                            <?php
                                            $tenphanquyen = '';
                                            foreach ($phanquyen__Get_All as $phanquyenitem) {
                                                if ($phanquyenitem->id_phanquyen == $item->id_phanquyen) {
                                                    $tenphanquyen = $phanquyenitem->tenphanquyen;
                                                    break;
                                                }
                                            }
                                            echo $tenphanquyen
                                            ?>
                                        </td>
                                    <td><?php echo $item->id_nguoidung; ?></td>
                                    <td>
                                        <a href="./quanly/taikhoan/taikhoanAct.php?req=reset&id_taikhoan=<?php echo $item->id_taikhoan; ?>&email=<?php echo $item->email; ?>" class="btn btn-warning">Đổi mật khẩu</a>
                                        <a href="?req=suataikhoan&id_taikhoan=<?php echo $item->id_taikhoan; ?>" class="btn btn-primary">Sửa</a>
                                        <a onclick="return confirm('Bạn có muốn xóa tài khoản này không');" href="./quanly/taikhoan/taikhoanAct.php?req=delete&id_taikhoan=<?php echo $item->id_taikhoan; ?>" class="btn btn-danger">Xóa</a>
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
                            <h4 class="modal-title">Thêm tài khoản</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <form action="./quanly/taikhoan/taikhoanAct.php?req=add" method="post">

                                <div class="form-group">
                                    <label for="tentaikhoan">Tên tài khoản</label>
                                    <input type="text" class="form-control" name="tentaikhoan" id="tentaikhoan"
                                           value="">
                                </div>


                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" name="email" id="email">

                                </div>
                                <div class="form-group">
                                    <label for="matkhau">Mật khẩu</label>
                                    <input type="password" class="form-control" name="matkhau" id="matkhau"
                                           value="">
                                </div>
                                <div class="form-group">
                                    <label for="mota">Mô tả</label>
                                    <input type="text" class="form-control" name="mota" id="mota"
                                           value="">
                                </div>

                                <div class="form-group">
                                    <label for="id_phannhom">ID phân nhóm</label>
                                    <select class="form-control" name="id_phannhom" id="id_phannhom">
                                        <?php foreach ($phannhom__Get_All as $item): ?>
                                            <option value="<?= $item->id_phannhom ?>"><?= $item->tenphannhom ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="id_phanquyen">ID phân quyền</label>
                                    <select class="form-control" name="id_phanquyen" id="id_phanquyen">
                                        <?php foreach ($phanquyen__Get_All as $item): ?>
                                            <option value="<?= $item->id_phanquyen ?>"><?= $item->tenphanquyen ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="id_nguoidung">ID người dùng</label>
                                    <select class="form-control" name="id_nguoidung" id="id_nguoidung">
                                        <?php foreach ($taikhoan__Get_check as $item): ?>
                                            <option value="<?= $item->id_sinhvien ?>"><?= $item->tensinhvien ?></option>
                                        <?php endforeach ?>
                                    </select>
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
            <!-- Bảng thêm tài khoản thứ nhất -->


            <!-- Bảng thêm tài khoản giảng viên -->
            <div class="modal" id="myModal2">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Thêm tài khoản giảng viên</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <form action="./quanly/taikhoan/taikhoanAct.php?req=add" method="post">

                                <div class="form-group">
                                    <label for="tentaikhoan">Tên tài khoản</label>
                                    <input type="text" class="form-control" name="tentaikhoan" id="tentaikhoan"
                                           value="">
                                </div>


                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" name="email" id="email">

                                </div>
                                <div class="form-group">
                                    <label for="matkhau">Mật khẩu</label>
                                    <input type="password" class="form-control" name="matkhau" id="matkhau"
                                           value="">
                                </div>
                                <div class="form-group">
                                    <label for="mota">Mô tả</label>
                                    <input type="text" class="form-control" name="mota" id="mota"
                                           value="">
                                </div>

                                <div class="form-group">
                                    <label for="id_phannhom">ID phân nhóm</label>
                                    <select class="form-control" name="id_phannhom" id="id_phannhom">
                                        <?php foreach ($phannhom__Get_All as $item): ?>
                                            <option value="<?= $item->id_phannhom ?>"><?= $item->tenphannhom ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="id_phanquyen">ID phân quyền</label>
                                    <select class="form-control" name="id_phanquyen" id="id_phanquyen">
                                        <?php foreach ($phanquyen__Get_All as $item): ?>
                                            <option value="<?= $item->id_phanquyen ?>"><?= $item->tenphanquyen ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="id_nguoidung">ID người dùng</label>
                                    <select class="form-control" name="id_nguoidung" id="id_nguoidung">
                                        <?php foreach ($taikhoan__Get_checkgv as $item): ?>
                                            <option value="<?= $item->id_giangvien ?>"><?= $item->tengiangvien ?></option>
                                        <?php endforeach ?>
                                    </select>
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