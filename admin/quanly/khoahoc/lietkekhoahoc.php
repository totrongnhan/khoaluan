<?php
require("../../../models/getModel.php");
$khoahoc__Get_All = $khoahoc->khoahoc__Get_All();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Liệt kê danh sách khóa học</title>
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
            <form action="./khoahocAct.php?req=add" method="post">
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
                            <h1>Danh sách khóa học</h1>
                            <!-- Button to Open the Modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                Thêm khóa học mới
                            </button>


                            <table class="table table-dark table-hover">
                                <thead>
                                    <tr>
                                        <th>Id khóa học</th>
                                        <th>Tên khóa học</th>
                                        <th>Mô tả</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($khoahoc__Get_All as $item): ?>




                                        <tr>
                                            <td><?php echo $item->id_khoahoc; ?></td>
                                            <td><?php echo $item->tenkhoahoc; ?></td>
                                            <td><?php echo $item->mota; ?></td>
                                            <td>
                                                <a href="?req=suakhoahoc&id_khoahoc<?php echo $item->id_khoahoc; ?>" class="btn btn-primary">Sửa</a>
                                                <a onclick="return confirm('Bạn có muốn xóa khóa học này không');" href="?req=delete&id_khoahoc=<?php echo $item->id_khoahoc; ?>" class="btn btn-danger">Xóa</a>
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
                                    <h4 class="modal-title">Thêm khóa học</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <form action="./khoahocAct.php?req=add" method="post">
                                        <div class="form-group">
                                            <label for="tenkhoahoc">Tên khóa học</label>
                                            <input type="text" class="form-control" name="tenkhoahoc" id="tenkhoahoc">
                                        </div>
                                        <div class="form-group">
                                            <label for="mota">Mô tả</label>
                                            <input type="text" class="form-control" name="mota" id="mota">
                                        </div>
                                        <button class="btn btn-success">Thêm khóa học</button>
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