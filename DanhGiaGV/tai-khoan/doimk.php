<?php
require("../../models/getModel.php");
$taikhoan__Get_All = $taikhoan->taikhoan__Get_All();

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Liệt kê danh sách tài khoản</title>
        <!--        <link href="../css.css" rel="stylesheet" type="text/css"/>-->
        <!-- Latest compiled and minified CSS -->
        <!--        <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>-->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>


    </head>
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
            <div style="margin-left: auto" class="container-fluid">
                <div class="container">
                    <h1>Danh sách tài khoản</h1>
                    <!-- Button to Open the Modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                        Thêm tài khoản mới
                    </button>

                    <table class="table table-dark table-hover">
                        <thead>
                            <tr>
                                <th>Id tài khoản</th>
                                <th>Tên tài khoản</th>                                
                                <th>Mật khẩu</th>                              
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($taikhoan__Get_All as $item): ?>
                                <tr>
                                    <td><?php echo $item->id_taikhoan; ?></td>
                                    <td><?php echo $item->tentaikhoan; ?></td>
                                    <td><?php echo $item->matkhau; ?></td>

                                    <td>
                                        <a href="./doimatkhau.php?id_taikhoan&matkhau=<?php echo $item->id_taikhoan; ?>&matkhau=<?php echo $item->matkhau; ?>" class="btn btn-warning">Đổi mật khẩu</a>

                                    </td>

                                <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>


            

    </body>
</html>