<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Thêm</title>
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
            <h1>Form</h1>
            <form action="themkhoahoc.php" method="post">
                <div class="form-group">
                    <label for="tenkhoahoc">Tên khóa học</label>
                    <input type="text" class="form-control" name="tenkhoahoc" id="tenkhoahoc">
                </div>
                <div class="form-group">
                    <label for="mota">Mô tả</label>
                    <input type="text" class="form-control" name="mota" id="mota">
                </div>
                <button class="btn btn-success">Thêm khóa học</button>
            </form>

        </div>

    </body>
</html>