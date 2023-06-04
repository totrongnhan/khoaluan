<?php
//lay id can sua
$id_nhomcauhoi = $_GET['id_nhomcauhoi'];
require("../models/getModel.php");
$nhomcauhoi__Get_By_Id = $nhomcauhoi->nhomcauhoi__Get_By_Id($id_nhomcauhoi);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa nhóm câu hỏi</title>
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
        <h1>Sửa thông tin nhóm  câu hỏi</h1>
        <form action="./quanly/nhomcauhoi/nhomcauhoiAct.php?req=update" method="post">
            <input type="hidden" name="id_nhomcauhoi" value="<?php echo $id_nhomcauhoi; ?>" id="">
            <div class="form-group">
                <label for="tennhomcauhoi">Tên nhóm câu hỏi</label>
                <input type="text" class="form-control" name="tennhomcauhoi" id="tennhomcauhoi"
                    value="<?php echo $nhomcauhoi__Get_By_Id->tennhomcauhoi ?>">
            </div>
            <div class="form-group">
                <label for="mota">Mô tả</label>
                <input type="text" class="form-control" name="mota" id="mota"
                    value="<?php echo $nhomcauhoi__Get_By_Id->mota ?>">
            </div>
            <div class="form-group">
                <label for="thutu">Thứ tự</label>
                <input type="text" class="form-control" name="thutu" id="thutu"
                    value="<?php echo $nhomcauhoi__Get_By_Id->thutu ?>">
            </div>
            <div class="form-group">
                <label for="id_tenkhaosat">ID tên khảo sát</label>
                <input type="text" class="form-control" name="id_tenkhaosat" id="id_tenkhaosat"
                    value="<?php echo $nhomcauhoi__Get_By_Id->id_tenkhaosat ?>">
            </div>
            <button class="btn btn-info">Cập nhật thông tin</button>
        </form>

    </div>

</body>

</html>
