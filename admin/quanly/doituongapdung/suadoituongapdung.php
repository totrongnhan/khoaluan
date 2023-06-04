<?php
//lay id can sua
$id_apdung = $_GET['id_apdung'];
require("../models/getModel.php");
$doituongapdung__Get_By_Id = $doituongapdung->doituongapdung__Get_By_Id($id_apdung);
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
        <form action="./quanly/doituongapdung/doituongapdungAct.php?req=update" method="post">
            <input type="hidden" name="id_apdung" value="<?php echo $id_apdung; ?>" id="">
            <div class="form-group">
                <label for="id_dot">ID đợt khảo sát</label>
                <input type="text" class="form-control" name="id_dot" id="id_dot"
                    value="<?php echo $doituongapdung__Get_By_Id->id_dot ?>">
            </div>
            <div class="form-group">
                <label for="id_tenkhaosat">ID tên khảo sát</label>
                <input type="text" class="form-control" name="id_tenkhaosat" id="id_tenkhaosat"
                    value="<?php echo $doituongapdung__Get_By_Id->id_tenkhaosat ?>">
            </div>
            <div class="form-group">
                <label for="id_phannhom">ID phân nhóm</label>
                <input type="text" class="form-control" name="id_phannhom" id="id_phannhom"
                    value="<?php echo $doituongapdung__Get_By_Id->id_phannhom ?>">
            </div>
            
            <button class="btn btn-info">Cập nhật thông tin</button>
        </form>

    </div>

</body>

</html>