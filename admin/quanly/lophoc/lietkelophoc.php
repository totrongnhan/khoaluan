<?php
require("../models/getModel.php");
$lophoc__Get_All = $lophoc->lophoc__Get_All();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Liệt kê danh sách lớp học</title>
        <link href="../../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../css.css" rel="stylesheet" type="text/css"/>
        <!-- Latest compiled and minified CSS -->

        <!-- jQuery library -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <div>
                <!-- Content -->
                <div id="content">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <a href="#"><i class="zmdi zmdi-notifications text-danger"></i>
                                    </a>
                                </li>
                                <li><a href="..index.php">Trang Chủ</a></li>
                            </ul>
                        </div>
                    </nav>
                    <div class="container-fluid">
                        <div class="container">
                            <h1>Danh sách lớp học</h1>
                            <!-- Button to Open the Modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                Thêm lớp học mới
                            </button>


                            <table class="table table-dark table-hover">
                                <thead>
                                    <tr>
                                        <th>Id lớp học</th>
                                        <th>Tên lớp học</th>
                                        <th>Mô tả</th>
                                        <th>Id ngành học</th>
                                        <th>Id khóa học</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($lophoc__Get_All as $item): ?>
                                        <tr>
                                            <td><?php echo $item->id_lophoc; ?></td>
                                            <td><?php echo $item->tenlophoc; ?></td>
                                            <td><?php echo $item->mota; ?></td>
                                            <td><?php echo $item->id_nganhhoc; ?></td>
                                            <td><?php echo $item->id_khoahoc; ?></td>
                                            <td>
                                                <a href="?req=sualophoc&id_lophoc=<?php echo $item->id_lophoc; ?>" class="btn btn-primary">Sửa</a>
                                                <a onclick="return confirm('Bạn có muốn xóa khóa học này không');" href="./quanly/lophoc/lophocAct.php?req=delete&id_lophoc=<?php echo $item->id_lophoc; ?>" class="btn btn-danger">Xóa</a>
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
                                <div class="modal-body">
                                    <form action="./quanly/lophoc/lophocAct.php?req=add" method="post">
                                        <div class="form-group">
                                            <label for="tenlophoc">Tên lớp học</label>
                                            <input type="text" class="form-control" name="tenlophoc" id="tenlophoc">
                                        </div>
                                        <div class="form-group">
                                            <label for="mota">Mô tả</label>
                                            <input type="text" class="form-control" name="mota" id="mota">
                                        </div>
                                        <div class="form-group">
                                            <label for="id_nganhhoc">ID ngành học</label>
                                            <input type="text" class="form-control" name="id_nganhhoc" id="id_nganhhoc">
                                        </div>                                       
                                        <div class="form-group">
                                            <label for="id_khoahoc">ID khóa học</label>
                                            <input type="text" class="form-control" name="id_khoahoc" id="id_khoahoc">
                                        </div>
                                        <button class="btn btn-success">Thêm lớp học</button>
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