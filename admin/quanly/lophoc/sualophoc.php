<?php
//lay id can sua
$id_lophoc = $_GET['id_lophoc'];
require("../models/getModel.php");
$lophoc__Get_By_Id = $lophoc->lophoc__Get_By_Id($id_lophoc);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Thêm lớp học</title>
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
            <h1>Sửa thông tin lớp học</h1>
            <form action="./quanly/lophoc/lophocAct.php?req=update" method="post">               
                <input type="hidden" name="id_lophoc" value="<?php echo $id_lophoc; ?>" id="">
                <div class="form-group">
                    <label for="tenlophoc">Tên lớp học</label>
                    <input type="text" class="form-control" name="tenlophoc" id="tenlophoc"
                           value="<?php echo $lophoc__Get_By_Id->tenlophoc ?>">
                </div>
                <div class="form-group">
                    <label for="mota">Mô tả</label>
                    <input type="text" class="form-control" name="mota" id="mota"
                           value="<?php echo $lophoc__Get_By_Id->mota ?>">
                </div>
                <div class="form-group">
                    <label for="id_nganhhoc">Id_ngành học</label>
                    <input type="text" class="form-control" name="id_nganhhoc" id="id_nganhhoc"
                           value="<?php echo $lophoc__Get_By_Id->id_nganhhoc?>">
                </div>
                <div class="form-group">
                    <label for="id_khoahoc">Id_khóa học</label>
                    <input type="text" class="form-control" name="id_khoahoc" id="id_khoahoc"
                           value="<?php echo $lophoc__Get_By_Id->id_khoahoc ?>">
                </div>
                <button class="btn btn-info">Cập nhật thông tin</button>
            </form>

        </div>

    </body>
</html>
