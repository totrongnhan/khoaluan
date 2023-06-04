<?php
//lay id can sua
$id_cauhoi = $_GET['id_cauhoi'];
require("../models/getModel.php");
$cauhoi__Get_By_Id = $cauhoi->cauhoi__Get_By_Id($id_cauhoi);
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
        <h1>Sửa thông tin câu hỏi</h1>
        <form action="./quanly/cauhoi/cauhoiAct.php?req=update" method="post">
            <input type="hidden" name="id_cauhoi" value="<?php echo $id_cauhoi; ?>" id="">
            <div class="form-group">
                <label for="tencauhoi">Tên câu hỏi</label>
                <input type="text" class="form-control" name="tencauhoi" id="tencauhoi"
                    value="<?php echo $cauhoi__Get_By_Id->tencauhoi ?>">
            </div>
            <div class="form-group">
                <label for="mota">Mô tả</label>
                <input type="text" class="form-control" name="mota" id="mota"
                    value="<?php echo $cauhoi__Get_By_Id->mota ?>">
            </div>
            <div class="form-group">
                <label for="thutu">Thứ tự</label>
                <input type="text" class="form-control" name="thutu" id="thutu"
                    value="<?php echo $cauhoi__Get_By_Id->thutu ?>">
            </div>
            <div class="form-group">
                <label for="id_nhom">ID nhóm câu hỏi</label>
                <input type="text" class="form-control" name="id_nhom" id="id_nhom"
                    value="<?php echo $cauhoi__Get_By_Id->id_nhom ?>">
            </div>
            <div class="form-group">
                <label for="is_text">Is text</label>
                <input type="text" class="form-control" name="is_text" id="is_text"
                    value="<?php echo $cauhoi__Get_By_Id->is_text ?>">
            </div>
            <button class="btn btn-info">Cập nhật thông tin</button>
        </form>

    </div>

</body>

</html>