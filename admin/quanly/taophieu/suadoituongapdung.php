<?php
//lay id can sua
$id_apdung = $_GET['id'];
require("../models/getModel.php");
$doituongapdung__Get_By_Id = $doituongapdung->doituongapdung__Get_By_Id($id_apdung);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm đối tượng áp dụng</title>
</head>

<body>
    <div style="margin-left: 230px; margin-right: auto; background-color: beige;">
        <h1>Sửa thông tin áp dụng</h1>
        <form action="./quanly/doituongapdung/doituongapdungAct.php?req=update" method="post">
            <input type="hidden" name="id_apdung" value="<?php echo $id_apdung; ?>" id="">
            <div class="form-group">
                <label for="id_dot">ID Đợt </label>
                <input type="text" class="form-control" name="id_dot" id="id_dot"
                    value="<?php echo $doituongapdung__Get_By_Id->id_dot ?>">
            </div>
            <div class="form-group">
                <label for="id_mauphieu">ID Mẫu phiếu</label>
                <input type="text" class="form-control" name="id_mauphieu" id="id_mauphieu"
                    value="<?php echo $doituongapdung__Get_By_Id->id_mauphieu ?>">
            </div>
            <div class="form-group">
                <label for="id_Phan_Nhom">ID Phân nhóm</label>
                <input type="text" class="form-control" name="id_Phan_Nhom" id="id_Phan_Nhom"
                    value="<?php echo $doituongapdung__Get_By_Id->id_Phan_Nhom ?>">
            </div>
            <button class="btn btn-info">Cập nhật thông tin</button>
        </form>

    </div>

</body>

</html>