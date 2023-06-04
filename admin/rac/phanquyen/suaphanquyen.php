<?php
//lay id can sua
$id_phanquyen = $_GET['sid'];
//ket noi
require_once '../mod/config.php';
//cau lenh sql de thong tin ve khoa hoc co id = $id_phanquyen
$sua_sql = "SELECT * FROM phanquyen WHERE id_phanquyen=$id_phanquyen";

$result = mysqli_query($conn, $sua_sql);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Thêm phân nhóm</title>
        <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <!-- jQuery library -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <div class="container">
            <h1>Sửa thông tin phân quyền</h1>
            <form action="updatephanquyen.php" method="post">
                <input type="hidden" name="sid" value="<?php echo $id_phanquyen; ?>" id="">
                <div class="form-group">
                    <label for="tenphanquyen">Tên phân quyền</label>
                    <input type="text" class="form-control" name="tenphanquyen" id="tenphanquyen"
                           value="<?php echo $row['tenphanquyen'] ?>">
                </div>
                <div class="form-group">
                    <label for="mota">Mô tả</label>
                    <input type="text" class="form-control" name="mota" id="mota"
                           value="<?php echo $row['mota'] ?>">
                </div>
                <button class="btn btn-info">Cập nhật thông tin</button>
            </form>

        </div>

    </body>
</html>
