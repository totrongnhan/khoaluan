
<?php
require("../../../models/getModel.php");
$nganhhoc__Get_All = $nganhhoc->nganhhoc__Get_All();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sửa ngành học</title>
        <link href="../../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <!-- jQuery library -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <div class="container">
            <h1>Sửa thông tin ngành học</h1>
            <form action="./nganhhocAct.php?req=update" method="post">
                <input type="hidden" name="id_nganhhoc" value="<?php echo $id_nganhhoc;?>" id="">
                <div class="form-group">
                    <label for="tennganhhoc">Tên ngành học</label>
                    <input type="text" class="form-control" name="tennganhhoc" id="tennganhhoc"  value="<?=$tennganhhoc['tennganhhoc']; ?>">
                </div>
                <div class="form-group">
                    <label for="mota">Mô tả</label>
                    <input type="text" class="form-control" name="mota" id="mota"  value="<?php echo $mota;?>">
                </div>
                <button class="btn btn-info">Cập nhật thông tin</button>
            </form>

        </div>

    </body>
</html>
