<?php
require("../models/getModel.php");
$doituongapdung__Get_All = $doituongapdung->doituongapdung__Get_All();
$tenkhaosat__Get_All = $tenkhaosat->tenkhaosat__Get_All();
$dotkhaosat__Get_All = $dotkhaosat->dotkhaosat__Get_All();
$phannhom__Get_All = $phannhom->phannhom__Get_All();
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Liệt kê danh sách đối tượng áp dụng</title>
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
                        <h1>Danh sách đối tượng áp dụng</h1>
                        <!-- Button to Open the Modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                            Thêm đối tượng áp dụng mới
                        </button>


                        <table class="table table-dark table-hover">
                            <thead>
                                <tr>
                                    <th>ID đối tượng áp dụng</th>
                                    <th>ID đợt khảo sát</th>
                                    <th>ID tên khảo sát</th>
                                    <th>ID phân nhóm</th>                               
                                    <th>Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($doituongapdung__Get_All as $item) : ?>
                                    <tr>
                                        <td><?php echo $item->id_apdung; ?></td>
                                        <td>
                                            <?php
                                            $tendot = '';
                                            foreach ($dotkhaosat__Get_All as $dotitem) {
                                                if ($dotitem->id_dot == $item->id_dot) {
                                                    $tendot = $dotitem->tendot;
                                                    echo $tendot;
                                                }
                                            }
                                            
                                            ?>
                                        </td>                                        
                                        <td>
                                            <?php
                                            $tenkhaosat0 = '';
                                            foreach ($tenkhaosat__Get_All as $tenkhaosatitem) {
                                                if ($tenkhaosatitem->id_tenkhaosat == $item->id_tenkhaosat) {
                                                    $tenkhaosat0 = $tenkhaosatitem->tenkhaosat0;
                                                   echo $tenkhaosat0;
                                                }
                                            }                                           
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                            $tenphannhom = '';
                                            foreach ($phannhom__Get_All as $phannhomitem) {
                                                if ($phannhomitem->id_phannhom == $item->id_phannhom) {
                                                    $tenphannhom = $phannhomitem->tenphannhom;
                                                    echo $tenphannhom;
                                                }
                                            }                                            
                                            ?>
                                        </td>
                                                                          
                                        <td>
                                            <a href="?req=suadoituongapdung&id_apdung=<?php echo $item->id_apdung; ?>" class="btn btn-primary">Sửa</a>
                                            <a onclick="return confirm('Bạn có muốn xóa đối tượng áp dụng này không');" href="./quanly/doituongapdung/doituongapdungAct.php?req=delete&id_apdung=<?php echo $item->id_apdung; ?>" class="btn btn-danger">Xóa</a>
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
                                <form action="./quanly/doituongapdung/doituongapdungAct.php?req=add" method="post">

                                    <div class="form-group">
                                        <label for="id_dot">ID đợt khảo sát</label>
                                        <select class="form-control" name="id_dot" id="id_dot">
                                            <?php foreach ($dotkhaosat__Get_All as $item): ?>
                                                <option value="<?= $item->id_dot ?>"><?= $item->tendot ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="id_tenkhaosat">ID tên khảo sát</label>
                                        <select class="form-control" name="id_tenkhaosat" id="id_tenkhaosat">
                                            <?php foreach ($tenkhaosat__Get_All as $item): ?>
                                                <option value="<?= $item->id_tenkhaosat ?>"><?= $item->tenkhaosat0 ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="id_phannhom">ID phân nhóm</label>
                                        <select class="form-control" name="id_phannhom" id="id_phannhom">
                                            <?php foreach ($phannhom__Get_All as $item): ?>
                                                <option value="<?= $item->id_phannhom ?>"><?= $item->tenphannhom ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>



                                    <button class="btn btn-success">Thêm đối tượng áp dụng</button>
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