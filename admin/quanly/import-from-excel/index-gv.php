<?php
require("../models/getModel.php");
$sinhvien__Get_All = $sinhvien->sinhvien__Get_All();
?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Quản lý Demo</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Quản lý sinh viên</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <form class="row form" action="./quanly/import-from-excel/action.php?req=import" method="post"
              enctype="multipart/form-data">
            <div class="col-12">
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Import</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
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
                    <h3 class="card-title">Danh sách</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                    <a href="./quanly/import-from-excel/action.php?req=export" class="btn btn-danger float-right">Xuất file excel</a>

                </div>
                <!-- /.card-header -->

                <div class="card-body">

                    <table id="tablejs" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>id sinhvien</th>
                                <th>mã sinh vien</th>
                                <th>ten sv</th>
                                <th>gioitinh</th>
                                <th>ngaysinh</th>
                                <th>email</th>
                                <th>dctt</th>
                                <th>dcll</th>
                                <th>sdt1</th>
                                <th>sdt2</th>
                                <th>id lop</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $num = 0; ?>
                            <?php foreach ($sinhvien__Get_All as $item): ?>
                                <tr>
                                    <td><?= ++$num ?></td>
                                    <td><?= $item->id_sinhvien ?></td>
                                    <td><?= $item->ma_sinhvien ?></td>
                                    <td><?= $item->tensinhvien ?></td>
                                    <td><?= $item->gioitinh ?></td>
                                    <td><?= $item->ngaysinh ?></td>
                                    <td><?= $item->email ?></td>
                                    <td><?= $item->diachithuongtru ?></td>
                                    <td><?= $item->diachilienlac ?></td>
                                    <td><?= $item->sdt1 ?></td>
                                    <td><?= $item->sdt2 ?></td>
                                    <td><?= $item->id_lophoc ?></td>
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