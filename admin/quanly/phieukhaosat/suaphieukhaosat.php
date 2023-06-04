<?php
//lay id can sua
$id_phieu = $_GET['id_phieu'];
require("../models/getModel.php");
$phieukhaosat__Get_By_Id = $phieukhaosat->phieukhaosat__Get_By_Id($id_phieu);
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sửa câu hỏi</title>
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
            <h1>Sửa thông tin phiếu khảo sát</h1>
            <form action="./quanly/phieukhaosat/phieukhaosatAct.php?req=update" method="post">
                <input type="hidden" name="id_phieu" value="<?php echo $id_phieu; ?>" id="">
                <div class="form-group">
                    <label for="id_apdung">Id áp dụng</label>
                    <input type="text" class="form-control" name="id_apdung" id="id_apdung"
                           value="<?php echo $phieukhaosat__Get_By_Id->id_apdung ?>">
                </div>
                
                <div class="form-group">
                    <label for="id_doituong">Id đối tượng</label>
                    <input type="text" class="form-control" name="id_doituong" id="id_doituong"
                           value="<?php echo $phieukhaosat__Get_By_Id->id_doituong ?>">
                </div>
                
                <div class="form-group">
                    <label for="ketqua">Kết quả</label>
                    <input type="text" class="form-control" name="ketqua" id="ketqua"
                           value="<?php echo $phieukhaosat__Get_By_Id->ketqua ?>">
                </div>

                <div class="form-group">
                    <label for="ngaythuchien">Ngày thực hiện</label>
                    <input type="text" class="form-control" name="ngaythuchien" id="ngaythuchien"
                           value="<?php echo $phieukhaosat__Get_By_Id->ngaythuchien ?>">
                </div>

                <button class="btn btn-info">Cập nhật thông tin</button>
            </form>

        </div>

    </body>

</html>

