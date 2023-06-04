-<?php
require("../models/getModel.php");
$dotkhaosat__Get_All = $dotkhaosat->dotkhaosat__Get_All();
$hocky__Get_All = $hocky->hocky__Get_All();
$phieukhaosat__Get_All = $phieukhaosat->phieukhaosat__Get_All();
$doituongapdung__Get_All = $doituongapdung->doituongapdung__Get_All()
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liệt kê danh sách đợt</title>
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
                        <li><a href="..index.php">Trang Chủ</a></li>
                    </ul>
                </div>
            </nav>
            <div class="container-fluid">
                <div class="container">
                    <h1>Danh sách đợt</h1>
                    <!-- Button to Open the Modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                        Thêm đợt mới
                    </button>


                    <table class="table table-dark table-hover">
                        <thead>
                            <tr>
                                <th>ID đợt</th>
                                <th>Tên đợt</th>
                                <th>Mô tả</th>
                                <th>TGBĐ</th>
                                <th>TGKT</th>
                                <th>ID học kỳ</th>
                                
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($dotkhaosat__Get_All as $item) : ?>
                                <tr>
                                    <td><?php echo $item->id_dot; ?></td>
                                    <td><?php echo $item->tendot; ?></td>
                                    <td><?php echo $item->mota; ?></td>
                                    <td><?php echo $item->thoigianbatdau; ?></td>
                                    <td><?php echo $item->thoigianketthuc; ?></td>
                                    <td><?php echo $item->id_hocky; ?></td>
                                    
                                    <td>
                                        <a href="?req=suadotkhaosat&id_dot=<?php echo $item->id_dot; ?>" class="btn btn-primary">Sửa</a>
                                        <a onclick="return confirm('Bạn có muốn xóa đợt này không');" href="./quanly/dotkhaosat/dotkhaosatAct.php?req=delete&id_dot=<?php echo $item->id_dot; ?>" class="btn btn-danger">Xóa</a>
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
                            <form action="./quanly/dotkhaosat/dotkhaosatAct.php?req=add" method="post">
                                <div class="form-group">
                                    <label for="tendot">Tên đợt</label>
                                    <input type="varchar" class="form-control" name="tendot" id="tendot">
                                </div>
                                <div class="form-group">
                                    <label for="mota">Mô tả</label>
                                    <input type="text" class="form-control" name="mota" id="mota">
                                </div>
                                <div class="form-group">
                                    <label for="thoigianbatdau">TGBĐ</label>
                                    <input type="datetime-local" class="form-control" name="thoigianbatdau" id="thoigianbatdau">
                                </div>
                                <div class="form-group">
                                    <label for="thoigianketthuc">TGKT</label>
                                    <input type="datetime-local" class="form-control" name="thoigianketthuc" id="thoigianketthuc">
                                </div>
                                <div class="form-group">
                                    <label for="id_hocky">ID học kỳ</label>
                                    <select class="form-control" name="id_hocky" id="id_hocky">
                                        <?php foreach ($hocky__Get_All as $item): ?>
                                            <option value="<?= $item->id_hocky ?>"><?= $item->tenhocky ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                
                                
                                <button class="btn btn-success">Thêm đợt</button>
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