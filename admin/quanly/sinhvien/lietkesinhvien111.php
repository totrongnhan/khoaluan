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
        <!--        <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        
                 jQuery library 
                <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
        
                 Popper JS 
                <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        
                 Latest compiled JavaScript 
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>-->

        <!-- Js Files -->
        <script src="../../../assets/vendor/jquery/jquery.min.js" type="text/javascript"></script>
    <!--    <script src="../assets/vendor/jquery/jquery.min.js"></script>-->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
                integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
                integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


        <script src="../assets/theme/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="../assets/theme/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="../assets/theme/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
        <script src="../assets/theme/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
        <script src="../assets/theme/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
        <script src="../assets/theme/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
        <script src="../assets/theme/plugins/jszip/jszip.min.js"></script>
        <script src="../assets/theme/plugins/pdfmake/pdfmake.min.js"></script>
        <script src="../assets/theme/plugins/pdfmake/vfs_fonts.js"></script>
        <script src="../assets/theme/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
        <script src="../assets/theme/plugins/datatables-buttons/js/buttons.print.min.js"></script>
        <script src="../assets/theme/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

        <script src="../assets/vendor/sweetalert2@11.js"></script>
        <!-- Bootstrap4 Duallistbox -->
        <script src="../assets/theme/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
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

                    <section class="content" id="div_update">
                    </section>


                    <section class="content">
                        <div class="col-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Danh sách</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                    <!--                    <a href="./quanly/import-from-excel/action.php?req=export" class="btn btn-danger float-right">Xuất file excel</a>-->

                                </div>
                                <!-- /.card-header -->

                                <div class="card-body">

                                    <table id="tablejs" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>id sinhvien</th>
                                                <th>Mã sinh viên</th>
                                                <th>Tên sinh viên</th>
                                                <th>Giới tính</th>
                                                <th>Ngày sinh</th>
                                                <th>email</th>
                                                <th>dctt</th>
                                                <th>dcll</th>
                                                <th>sdt1</th>
                                                <th>sdt2</th>
                                                <th>Tên lớp học</th>
                                                <th>Thao tác</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $num = 0; ?>
                                            <?php foreach ($sinhvien__Get_All as $item): ?>
                                                <tr>
                                                    <td><?= ++$num ?></td>
                                                    <td><?= $item->id_sinhvien ?></td>
                                                    <td><?= $item->ma_sinhvien ?></td>
                                                    <td><?= $item->tensinhvien ?></td>
                                                    <td><?= $item->gioitinh ?></td>
                                                    <td><?= $item->ngaysinh ?></td>
                                                    <td><?= $item->email ?></td>
                                                    <td><?= $item->diachithuongtru ?></td>
                                                    <td><?= $item->diachilienlac ?></td>
                                                    <td><?= $item->sdt1 ?></td>
                                                    <td><?= $item->sdt2 ?></td>
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
                                                </tr>
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