<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Liệt kê danh sách lớp học</title>
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
        <div class="form-group">
            <label for="id_nganhhoc">ID ngành học</label>
            <select class="form-control" name="id_nganhhoc" id="id_nganhhoc">
                <?php foreach ($nganhhoc__Get_All as $id_nganhhoc): ?>
                    <option value="<?php echo $id_nganhhoc->id_nganhhoc; ?>"><?php echo $id_nganhhoc->tennganhhoc; ?></option>
                <?php endforeach; ?>
            </select>
        </div>



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
            <div class="container">
                <h1>Danh sách lớp học</h1>
                <!-- Button to Open the Modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                    Thêm lớp học mới
                </button>

                <table class="table table-dark table-hover">
                    <thead>
                        <tr>
                            <th>Id lớp học</th>
                            <th>Tên lớp học</th>
                            <th>Mô tả</th>
                            <th>Id ngành học</th>
                            <th>Id khóa học</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
//ketnoi
                        require_once '../mod/config.php';
//cau lenh
                        $lietke_sql = "SELECT * FROM lophoc order by tenlophoc, mota, id_nganhhoc, id_khoahoc";
//thuc thi cau lenh
                        mysqli_query($conn, $lietke_sql);
                        $result = mysqli_query($conn, $lietke_sql);
//duyet qua result va in ra
                        while ($r = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr>
                                <td><?php echo $r['id_lophoc']; ?></td>
                                <td><?php echo $r['tenlophoc']; ?></td>
                                <td><?php echo $r['mota']; ?></td>
                                <td><?php echo $r['id_nganhhoc']; ?></td>
                                <td><?php echo $r['id_khoahoc']; ?></td>
                                <td><a href="sualophoc.php?sid=<?php echo $r['id_lophoc']; ?>"  class="btn btn-primary">Sửa</a> 
                                    <a onclick="return confirm('Bạn có muốn xóa trình độ này không');" href="xoalophoc.php?sid=<?php echo $r['id_lophoc']; ?>" class="btn btn-danger">Xóa</a></td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <?php
        $nganhhoc_sql = "SELECT * FROM nganhhoc ";
        mysqli_query($conn, $lietke_sql);
        $res = mysqli_query($conn, $nganhhoc_sql);
        ?>

        <!-- The Modal -->
        <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Thêm lớp học</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form action="themlophoc.php" method="post">
                            <div class="form-group">
                                <label for="tenlophoc">Tên lớp học</label>
                                <input type="text" class="form-control" name="tenlophoc" id="tenlophoc">
                            </div>
                            <div class="form-group">
                                <label for="mota">Mô tả</label>
                                <input type="text" class="form-control" name="mota" id="mota">
                            </div>
                            <div class="form-group">
                                <label for="id_nganhhoc">Id ngành học</label>
                                <select name="id_nganhhoc" id="id_nganhhoc" class="form-select">
<?php while (($item = mysqli_fetch_assoc($res))): ?>
                                        <option value="<?= $item['id_nganhhoc'] ?>"><?= $item['tennganhhoc'] ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="id_khoahoc">ID khóa học</label>
                                <input type="text" class="form-control" name="id_khoahoc" id="id_khoahoc">
                            </div>
                            <button class="btn btn-success">Thêm lớp học</button>
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