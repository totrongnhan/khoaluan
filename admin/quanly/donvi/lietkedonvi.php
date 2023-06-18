<?php
require("../models/getModel.php");
$donvi__Get_All = $donvi->donvi__Get_All();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liệt kê danh sách đơn vị</title>
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
                    <h1>Danh sách đơn vị</h1>
                    <!-- Button to Open the Modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                        Thêm đơn vị mới
                    </button>


                    <table class="table table-dark table-hover">
                        <thead>
                            <tr>
                                <th>ID đơn vị</th>
                                <th>Mã đơn vị</th>
                                <th>Tên đơn vị</th>
                                <th>Mô tả</th>
                                <th>Thuộc khoa</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($donvi__Get_All as $item) : ?>
                                <tr>
                                    <td><?php echo $item->id_donvi; ?></td>
                                    <td><?php echo $item->ma_donvi; ?></td>
                                    <td><?php echo $item->tendonvi; ?></td>
                                    <td><?php echo $item->mota; ?></td>
                                    <td><?php echo $item->is_khoa; ?></td>
                                    <td>
                                        <a href="?req=suadonvi&id_donvi=<?php echo $item->id_donvi; ?>" class="btn btn-primary">Sửa</a>
                                        <a onclick="return confirm('Bạn có muốn xóa đơn vị này không');" href="./quanly/donvi/donviAct.php?req=delete&id_donvi=<?php echo $item->id_donvi; ?>" class="btn btn-danger">Xóa</a>
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
                            <form action="./quanly/donvi/donviAct.php?req=add" method="post">

                                <div class="form-group">
                                    <label for="ma_donvi">Mã đơn vị</label>
                                    <input type="text" class="form-control" name="ma_donvi" id="ma_donvi">
                                </div>
                                <div class="form-group">
                                    <label for="tendonvi">Tên đơn vị</label>
                                    <input type="text" class="form-control" name="tendonvi" id="tendonvi">
                                </div>
                                <div class="form-group">
                                    <label for="mota">Mô tả</label>
                                    <input type="text" class="form-control" name="mota" id="mota">
                                </div>
                                 <div class="form-group">
                                    <label for="is_khoa">Thuộc khoa</label>
                                    Thuộc<input type="radio" name="is_khoa" value="1" checked="true" >
                                    Không<input type="radio" name="is_khoa" value="0" >
                                </div>
                                <button class="btn btn-success">Thêm đơn vị</button>
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