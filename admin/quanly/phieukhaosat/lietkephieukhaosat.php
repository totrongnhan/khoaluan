<?php
require("../models/getModel.php");
$phieukhaosat__Get_All = $phieukhaosat->phieukhaosat__Get_All();
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
                            
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                    <div class="container">
                        <h1>Danh sách phiếu khảo sát</h1>
                        <!-- Button to Open the Modal -->
<!--                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                            Thêm phiếu khảo sát mới
                        </button>-->


                        <table class="table table-dark table-hover" id="tablejs">
                            <thead>
                                <tr>
                                    <th>Id phiếu khảo sát</th>
                                    <th>Id áp dụng</th>
                                    <th>Id đối tượng</th>                                   
                                    <th>Kết quả</th>
                                    <th>Ngày thực hiện</th>
                                    <th>Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($phieukhaosat__Get_All as $item): ?>
                                    <tr>
                                        <td><?php echo $item->id_phieu; ?></td>
                                        <td><?php echo $item->id_apdung; ?></td>
                                        <td><?php echo $item->id_doituong; ?></td>
                                        <td><?php echo $item->ketqua; ?></td>
                                        <td><?php echo $item->ngaythuchien; ?></td>
                                        <td>
                                            <a href="?req=suaphieukhaosat&id_phieu=<?php echo $item->id_phieu; ?>" class="btn btn-primary">Sửa</a>
                                            <a onclick="return confirm('Bạn có muốn xóa phiếu khảo sát này không');" href="./quanly/phieukhaosat/phieukhaosatAct.php?req=delete&id_phieu=<?php echo $item->id_phieu; ?>" class="btn btn-danger">Xóa</a>
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
                                <form action="./quanly/phieukhaosat/phieukhaosatAct.php?req=add" method="post">
                                    <div class="form-group">
                                        <label for="id_apdung">Id áp dụng</label>
                                        <input type="text" class="form-control" name="id_apdung" id="id_apdung">
                                    </div>
                                    <div class="form-group">
                                        
                                        <label for="id_doituong">Id đối tượng</label>
                                        <input type="text" class="form-control" name="id_doituong" id="id_doituong">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="ketqua">Kết quả</label>
                                        <input type="text" class="form-control" name="ketqua" id="ketqua">
                                    </div>

                                    <div class="form-group">
                                        <label for="ngaythuchien">Ngày thực hiện</label>
                                        <input type="datetime-local" class="form-control" name="ngaythuchien" id="ngaythuchien">
                                    </div>

                                   


                                    <button class="btn btn-success">Thêm phiếu khảo sát</button>
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
