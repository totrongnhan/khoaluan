<?php
require("../models/getModel.php");
$hocky__Get_All = $hocky->hocky__Get_All();
$namhoc__Get_All = $namhoc->namhoc__Get_All();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liệt kê danh sách học kỳ</title>
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
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
                        
                    </ul>
                </div>
            </nav>
            <div class="container-fluid">
                <div class="container">
                    <h1>Danh sách học kỳ</h1>
                    <!-- Button to Open the Modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                        Thêm học kỳ mới
                    </button>


                    <table class="table table-dark table-hover">
                        <thead>
                            <tr>
                                <th>ID học kỳ</th>
                                <th>Tên học kỳ</th>
                                <th>Mô tả</th>
                                <th>Tên năm học</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($hocky__Get_All as $item) : ?>
                            <tr>
                                <td><?php echo $item->id_hocky; ?></td>
                                <td><?php echo $item->tenhocky; ?></td>
                                <td><?php echo $item->mota; ?></td>
                                <td>
                                            <?php
                                            $tennamhoc = '';
                                            foreach ($namhoc__Get_All as $namhocitem) {
                                                if ($namhocitem->id_namhoc == $item->id_namhoc) {
                                                    $tennamhoc = $namhocitem->tennamhoc;
                                                    break;
                                                }
                                            }
                                            echo $tennamhoc;
                                            ?>
                                        </td>
                                <td>
                                    <a href="?req=suahocky&id_hocky=<?php echo $item->id_hocky; ?>"
                                        class="btn btn-primary">Sửa</a>
                                    <a onclick="return confirm('Bạn có muốn xóa học kỳ này không');"
                                        href="./quanly/hocky/hockyAct.php?req=delete&id_hocky=<?php echo $item->id_hocky; ?>"
                                        class="btn btn-danger">Xóa</a>
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
                            <form action="./quanly/hocky/hockyAct.php?req=add" method="post">
                                <div class="form-group">
                                    <label for="tenhocky">Tên học kỳ</label>
                                    <input type="text" class="form-control" name="tenhocky" id="tenhocky">
                                </div>
                                <div class="form-group">
                                    <label for="mota">Mô tả</label>
                                    <input type="text" class="form-control" name="mota" id="mota">
                                </div>
                                <div class="form-group">
                                        <label for="id_namhoc">ID năm học</label>
                                        <select class="form-control" name="id_namhoc" id="id_namhoc">
                                            <?php foreach ($namhoc__Get_All as $item): ?>
                                                <option value="<?= $item->id_namhoc ?>"><?= $item->tennamhoc ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                
                                <button class="btn btn-success">Thêm học kỳ</button>
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