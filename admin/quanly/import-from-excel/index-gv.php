<?php
require("../models/getModel.php");
$giangvien__Get_All = $giangvien->giangvien__Get_All();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Import giảng viên</title>
    <!--        <link href="../css.css" rel="stylesheet" type="text/css"/>-->
    <!-- Latest compiled and minified CSS -->
    <!--        <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>-->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
    select#bootstrap-duallistbox-nonselected-list_id_doi_tuong\[\],
    select#bootstrap-duallistbox-nonselected-list_,
    select#bootstrap-duallistbox-selected-list_id_doi_tuong\[\],
    select#bootstrap-duallistbox-selected-list_ {
        display: block;
        width: 100%;
        height: calc(2.25rem + 2px);
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
        box-shadow: inset 0 0 0 transparent;
        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    }

    button.btn.moveall.btn-outline-secondary:before {
        content: 'Chưa chọn (Click chọn tất cả)';
    }

    button.btn.removeall.btn-outline-secondary:before {
        content: 'Đã chọn (Click bỏ chọn tất cả)';
    }
    </style>




<body>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Thêm giảng viên</h1>
                </div>
                <div class="col-sm-6">
                    
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <form class="row form" action="./quanly/import-from-excel/action-gv.php?req=import" method="post"
              enctype="multipart/form-data">
            <div class="col-12">
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Import giảng viên</h3>
                        <div class="card-tools">
                            
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Chọn file import <span class="color-crimson">(*)</span></label>
                            <input type="file" id="file" name="file" class="form-control" required>

                        </div>

                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <input type="submit" value="Import" class="btn btn-success float-right">
                    </div>
                </div>
                <!-- /.card -->
            </div>
        </form>

    </section>


    <section class="content" id="div_update">
    </section>

    <section class="content">
        <div class="col-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Danh sách giảng viên</h3>
                    <div class="card-tools">
<!--                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>-->
                    </div>
<!--                    <a href="./quanly/import-from-excel/action-gv.php?req=export" class="btn btn-danger float-right">Xuất file excel</a>-->

                </div>
                <!-- /.card-header -->

                <div class="card-body">

                    <table id="tablejs" class="table table-dark table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>id giảng viên</th>
                                <th>mã giảng viên</th>
                                <th>tên giảng viên</th>
                                <th>giới tính</th>
                                <th>ngày sinh</th>
                                <th>email</th>
                                <th>dctt</th>
                                <th>dcll</th>
                                <th>sdt1</th>
                                <th>sdt2</th>
                                <th>id đơn vị</th>
                                <th>id trình độ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $num = 0; ?>
                            <?php foreach ($giangvien__Get_All as $item): ?>
                                <tr>
                                    <td><?= ++$num ?></td>
                                    <td><?= $item->id_giangvien ?></td>
                                    <td><?= $item->ma_giangvien ?></td>
                                    <td><?= $item->tengiangvien ?></td>
                                    <td><?= $item->gioitinh ?></td>
                                    <td><?= $item->ngaysinh ?></td>
                                    <td><?= $item->email ?></td>
                                    <td><?= $item->diachithuongtru ?></td>
                                    <td><?= $item->diachilienlac ?></td>
                                    <td><?= $item->sdt1 ?></td>
                                    <td><?= $item->sdt2 ?></td>
                                    <td><?= $item->id_donvi ?></td>
                                    <td><?= $item->id_trinhdo ?></td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
    </section>

</div>


<!-- /.content-wrapper -->


<script>
    window.addEventListener("load", function () {
        $("#tablejs").DataTable({
            "responsive": true,
            "autoWidth": false,
            // "buttons": ["copy", "csv", "excel", "pdf", "print"]
        }).buttons().container().appendTo('#tablejs_wrapper .col-md-6:eq(0)');
    });

    function update_obj(id) {
        $.post('import-from-excel/update.php', {
            'id': id,
        }, function (data) {
            $('#div_update').html(data);
        });
    }
</script>
    </body>
    </html>