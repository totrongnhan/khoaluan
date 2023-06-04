<?php
//lay id can sua
$id_dot = $_GET['id_dot'];
require("../models/getModel.php");
$dotkhaosat__Get_By_Id = $dotkhaosat->dotkhaosat__Get_By_Id($id_dot);
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sửa đợt</title>
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
            <h1>Sửa thông tin đợt khảo sát</h1>
            <form action="./quanly/dotkhaosat/dotkhaosatAct.php?req=update" method="post">
                <input type="hidden" name="id_dot" value="<?php echo $id_dot; ?>" id="">
                <input type="hidden" class="form-control" name="id_hocky" id="id_hocky">
                <input type="hidden" class="form-control" name="id_phieu" id="id_phieu">
                <input type="hidden" class="form-control" name="id_doituongapdung" id="id_doituongapdung">
                <div class="form-group">
                    <label for="tendot">Tên đợt ks</label>
                    <input type="text" class="form-control" name="tendot" id="tendot" value="<?php echo $dotkhaosat__Get_By_Id->tendot ?>">
                </div>
                <div class="form-group">
                    <label for="mota">Mô tả</label>
                    <input type="text" class="form-control" name="mota" id="mota" value="<?php echo $dotkhaosat__Get_By_Id->mota ?>">
                </div>
                <div class="form-group">
                    <label for="thoigianbatdau">TGBĐ</label>
                    <input type="text" class="form-control" name="thoigianbatdau" id="thoigianbatdau" value="<?php echo $dotkhaosat__Get_By_Id->thoigianbatdau ?>">
                </div>
                <div class="form-group">
                    <label for="thoigianketthuc">TGKT</label>
                    <input type="text" class="form-control" name="thoigianketthuc" id="thoigianketthuc" value="<?php echo $dotkhaosat__Get_By_Id->thoigianketthuc ?>">
                </div>
                <div class="form-group">
                    <label for="id_hocky">ID học kỳ</label>
                    <input type="text" class="form-control" name="id_hocky" id="id_hocky" value="<?php echo $dotkhaosat__Get_By_Id->id_hocky ?>">
                </div>

                <button class="btn btn-info">Cập nhật thông tin</button>
            </form>

        </div>

    </body>

</html>