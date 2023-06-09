<?php
require("../models/getModel.php");
$trinhdo__Get_All = $trinhdo->trinhdo__Get_All();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liệt kê danh sách trình độ</title>
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

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
                    <h1>Danh sách trình độ</h1>
                    <!-- Button to Open the Modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                        Thêm trình độ mới
                    </button>


                    <table class="table table-dark table-hover">
                        <thead>
                            <tr>
                                <th>ID trình độ</th>
                                <th>Mã trình độ</th>
                                <th>Tên trình độ</th>
                                <th>Mô tả</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($trinhdo__Get_All as $item) : ?>
                                <tr>
                                    <td><?php echo $item->id_trinhdo; ?></td>
                                    <td><?php echo $item->ma_trinhdo; ?></td>
                                    <td><?php echo $item->tentrinhdo; ?></td>
                                    <td><?php echo $item->mota; ?></td>
                                    <td>
                                        <a href="?req=suatrinhdo&id_trinhdo=<?php echo $item->id_trinhdo; ?>" class="btn btn-primary">Sửa</a>
                                        <a onclick="return confirm('Bạn có muốn xóa trình độ này không');" href="./quanly/trinhdo/trinhdoAct.php?req=delete&id_trinhdo=<?php echo $item->id_trinhdo; ?>" class="btn btn-danger">Xóa</a>
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
                            <form action="./quanly/trinhdo/trinhdoAct.php?req=add" method="post">

                                <div class="form-group">
                                    <label for="ma_trinhdo">Mã trình độ</label>
                                    <input type="text" class="form-control" name="ma_trinhdo" id="ma_trinhdo">
                                </div>
                                <div class="form-group">
                                    <label for="tentrinhdo">Tên trình độ</label>
                                    <input type="text" class="form-control" name="tentrinhdo" id="tentrinhdo">
                                </div>
                                <div class="form-group">
                                    <label for="mota">Mô tả</label>
                                    <input type="text" class="form-control" name="mota" id="mota">
                                </div>
                                <button class="btn btn-success">Thêm trình dộ</button>
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