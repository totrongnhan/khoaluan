<?php
//lay id can sua
$id_donvi = $_GET['id_donvi'];
require("../models/getModel.php");
$donvi__Get_By_Id = $donvi->donvi__Get_By_Id($id_donvi);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa đơn vị</title>
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <h1>Sửa thông tin đơn vị</h1>
        <form action="./quanly/donvi/donviAct.php?req=update" method="post">
            <input type="hidden" name="id_donvi" value="<?php echo $id_donvi; ?>" id="">

            <div class="form-group">
                <label for="ma_donvi">Mã đơn vị</label>
                <input type="text" class="form-control" name="ma_donvi" id="ma_donvi" value="<?php echo $donvi__Get_By_Id->ma_donvi ?>">
            </div>
            <div class="form-group">
                <label for="tendonvi">Tên đơn vị</label>
                <input type="text" class="form-control" name="tendonvi" id="tendonvi" value="<?php echo $donvi__Get_By_Id->tendonvi ?>">
            </div>
            <div class="form-group">
                <label for="mota">Mô tả</label>
                <input type="text" class="form-control" name="mota" id="mota" value="<?php echo $donvi__Get_By_Id->mota ?>">
            </div>
            <div class="form-group">
                    <label for="is_khoa">Thuộc khoa</label><br>
                    <input type="radio" name="is_khoa" id="thuoc" value="1" <?=$donvi__Get_By_Id->is_khoa == 1 ? "checked" : ""?>>
                    <label for="thuoc">Thuộc</label>
                    <input type="radio" name="is_khoa" id="khong" value="0" <?=$donvi__Get_By_Id->is_khoa == 0 ? "checked" : ""?>>
                    <label for="khong">Không</label>
                </div>
            
            <button class="btn btn-info">Cập nhật thông tin</button>
        </form>

    </div>

</body>

</html>