<?php
//lay id can sua
$id_namhoc = $_GET['id_namhoc'];
require("../models/getModel.php");
$namhoc__Get_By_Id = $namhoc->namhoc__Get_By_Id($id_namhoc);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa năm học</title>
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
        <h1>Sửa thông tin năm học</h1>
        <form action="./quanly/namhoc/namhocAct.php?req=update" method="post">
            <input type="hidden" name="id_namhoc" value="<?php echo $id_namhoc; ?>" id="">
            <div class="form-group">
                <label for="tennamhoc">Tên năm học</label>
                <input type="text" class="form-control" name="tennamhoc" id="tennamhoc" 
                       value="<?php echo $namhoc__Get_By_Id->tennamhoc ?>">
            </div>
            <div class="form-group">
                <label for="mota">Mô tả</label>
                <input type="text" class="form-control" name="mota" id="mota" 
                       value="<?php echo $namhoc__Get_By_Id->mota ?>">
            </div>
            <button class="btn btn-info">Cập nhật thông tin</button>
        </form>

    </div>

</body>

</html>