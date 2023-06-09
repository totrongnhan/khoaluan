<?php
require("../models/getModel.php");
$cauhoi__Get_All = $cauhoi->cauhoi__Get_All();
$nhomcauhoi__Get_All = $nhomcauhoi->nhomcauhoi__Get_All();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Liệt kê danh sách</title>
        <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
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
                        <h1>Danh sách câu hỏi</h1>
                        <!-- Button to Open the Modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                            Thêm câu hỏi mới
                        </button>


                        <table class="table table-dark table-hover">
                            <thead>
                                <tr>
                                    <th>Id câu hỏi</th>
                                    <th>Tên câu hỏi</th>
                                    <th>Mô tả</th>
                                    <th>Thứ tự</th>
                                    <th>Tên nhóm</th>
                                    <th>Is text</th>
                                    <th>Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($cauhoi__Get_All as $item): ?>
                                    <tr>
                                        <td><?php echo $item->id_cauhoi; ?></td>
                                        <td><?php echo $item->tencauhoi; ?></td>
                                        <td><?php echo $item->mota; ?></td>
                                        <td><?php echo $item->thutu; ?></td>
                                        <td>
                                            <?php
                                            $tennhomcauhoi = '';
                                            foreach ($nhomcauhoi__Get_All as $nhomcauhoiitem) {
                                                if ($nhomcauhoiitem->id_nhomcauhoi == $item->id_nhom) {
                                                    $tennhomcauhoi = $nhomcauhoiitem->tennhomcauhoi;
                                                    break;
                                                }
                                            }
                                            echo $tennhomcauhoi;
                                            ?>
                                        </td>
                                        <td><?php echo $item->is_text; ?></td>
                                        <td>
                                            <a href="?req=suacauhoi&id_cauhoi=<?php echo $item->id_cauhoi; ?>" class="btn btn-primary">Sửa</a>
                                            <a onclick="return confirm('Bạn có muốn xóa câu hỏi này không');" href="./quanly/cauhoi/cauhoiAct.php?req=delete&id_cauhoi=<?php echo $item->id_cauhoi; ?>" class="btn btn-danger">Xóa</a>
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
                                <form action="./quanly/cauhoi/cauhoiAct.php?req=add" method="post">
                                    <div class="form-group">
                                        <label for="tencauhoi">Tên câu hỏi</label>
                                        <input type="text" class="form-control" name="tencauhoi" id="tencauhoi">
                                    </div>
                                    <div class="form-group">
                                        <label for="mota">Mô tả</label>
                                        <input type="text" class="form-control" name="mota" id="mota">
                                    </div>
                                    <div class="form-group">
                                        <label for="thutu">Thứ tự</label>
                                        <input type="text" class="form-control" name="thutu" id="thutu">
                                    </div>

                                    <div class="form-group">
                                        <label for="id_nhom">ID nhóm câu hỏi</label>
                                        <select class="form-control" name="id_nhom" id="id_nhom">
                                            <?php foreach ($nhomcauhoi__Get_All as $item): ?>
                                                <option value="<?= $item->id_nhomcauhoi ?>"><?= $item->tennhomcauhoi ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="is_text">Is text</label>
                                        <input type="text" class="form-control" name="is_text" id="is_text">
                                    </div>


                                    <button class="btn btn-success">Thêm câu hỏi</button>
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