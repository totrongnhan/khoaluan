        <link href="../css.css" rel="stylesheet" type="text/css"/>
        <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
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
                                <th>Email</th>
                                <th>Mật khẩu</th>
                                <th>Mô tả</th>
                                <th>Id phân nhóm</th>
                                <th>Id phân quyền</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
//ketnoi
                            require_once './mod/config.php';
//cau lenh
                            $lietke_sql = "SELECT * FROM taikhoan order by tentaikhoan, email, matkhau, mota, id_phannhom, id_phanquyen";
//thuc thi cau lenh
                            mysqli_query($conn, $lietke_sql);
                            $result = mysqli_query($conn, $lietke_sql);
//duyet qua result va in ra
                            while ($r = mysqli_fetch_assoc($result)) {
                                ?>
                                <tr>
                                    <td><?php echo $r['id_taikhoan']; ?></td>                                       
                                    <td><?php echo $r['tentaikhoan']; ?></td>
                                    <td><?php echo $r['email']; ?></td>
                                    <td><?php echo $r['matkhau']; ?></td>
                                    <td><?php echo $r['mota']; ?></td>
                                    <td><?php echo $r['id_phannhom']; ?></td>
                                    <td><?php echo $r['id_phanquyen']; ?></td>
                                    <td><a href="suataikhoan.php?sid=<?php echo $r['id_taikhoan']; ?>"  class="btn btn-primary">Sửa</a> 
                                        <a onclick="return confirm('Bạn có muốn xóa trình độ này không');" href="xoataikhoan.php?sid=<?php echo $r['id_taikhoan']; ?>" class="btn btn-danger">Xóa</a></td>
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
                            <h4 class="modal-title">Thêm tài khoản</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <form action="themtaikhoan.php" method="post">
                                <div class="form-group">
                                    <label for="tentaikhoan">Tên tài khoản</label>
                                    <input type="text" class="form-control" name="tentaikhoan" id="tentaikhoan">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" name="email" id="email">
                                </div>
                                <div class="form-group">
                                    <label for="matkhau">Mật khẩu</label>
                                    <input type="text" class="form-control" name="matkhau" id="matkhau">
                                </div>
                                <div class="form-group">
                                    <label for="mota">Mô tả</label>
                                    <input type="text" class="form-control" name="mota" id="mota">
                                </div>
                                <div class="form-group">
                                    <label for="id_phannhom">Id phân nhóm</label>
                                    <input type="text" class="form-control" name="id_phannhom" id="id_phannhom">
                                </div>
                                <div class="form-group">
                                    <label for="id_phanquyen">Id phân quyền</label>
                                    <input type="text" class="form-control" name="id_phanquyen" id="id_phanquyen">
                                </div>
                                <button class="btn btn-success">Thêm tài khoản</button>
                            </form>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
                        </div>

                    </div>
                </div>
            </div>

    
        