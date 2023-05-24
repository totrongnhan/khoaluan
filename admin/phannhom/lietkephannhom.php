<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Liệt kê danh sách phân nhóm</title>
        <link href="../css.css" rel="stylesheet" type="text/css"/>
        <!-- Latest compiled and minified CSS -->
        <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

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
                <div class="container-fluid">
                    <div class="container">
                        <h1>Danh sách phân nhóm</h1>
                        <!-- Button to Open the Modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                            Thêm phân nhóm mới
                        </button>

                        <table class="table table-dark table-hover">
                            <thead>
                                <tr>
                                    <th>Id phân nhóm</th>
                                    <th>Tên phân nhóm</th>
                                    <th>Mô tả</th>
                                    <th>Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
//ketnoi
                                require_once '../mod/config.php';
//cau lenh
                                $lietke_sql = "SELECT * FROM phannhom order by tenphannhom, mota";
//thuc thi cau lenh
                                mysqli_query($conn, $lietke_sql);
                                $result = mysqli_query($conn, $lietke_sql);
//duyet qua result va in ra
                                while ($r = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $r['id_phannhom']; ?></td>
                                        <td><?php echo $r['tenphannhom']; ?></td>
                                        <td><?php echo $r['mota']; ?></td>
                                        <td><a href="suaphannhom.php?sid=<?php echo $r['id_phannhom']; ?>"  class="btn btn-primary">Sửa</a> 
                                            <a onclick="return confirm('Bạn có muốn xóa trình độ này không');" href="xoaphannhom.php?sid=<?php echo $r['id_phannhom']; ?>" class="btn btn-danger">Xóa</a></td>
                                    </tr>

                                    <?php
                                }
                                ?>
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
                        <h4 class="modal-title">Thêm phân nhóm</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form action="themphannhom.php" method="post">
                            <div class="form-group">
                                <label for="tenphannhom">Tên phân nhóm</label>
                                <input type="text" class="form-control" name="tenphannhom" id="tenphannhom">
                            </div>
                            <div class="form-group">
                                <label for="mota">Mô tả</label>
                                <input type="text" class="form-control" name="mota" id="mota">
                            </div>
                            <button class="btn btn-success">Thêm phân nhóm</button>
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