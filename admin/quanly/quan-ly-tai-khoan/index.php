<?php
    require "../models/getModel.php";
    $taikhoan__Get_All = $taikhoan->taikhoan__Get_All();
    $phannhom__Get_All = $phannhom->phannhom__Get_All();
    $lophoc__Get_All = $lophoc->lophoc__Get_All();
    $donvi__Get_All = $donvi->donvi__Get_All();


    /*  Phân nhóm:
        admin : 1
        gv : 2
        sv : 3
    */

    $phanquyen_admin =  0;
    $phanquyen_manager =  1;
    $phanquyen_gv =  2;
    $phanquyen_sv = 3;
    $id_lophoc_view = -2;

    $taikhoan__Get_All_Admin = $taikhoan->taikhoan__Get_All_Phan_Nhom(1);
    $taikhoan__Get_All_Gv = $taikhoan->taikhoan__Get_All_Phan_Nhom(2);
    $taikhoan__Get_All_Sv = $taikhoan->taikhoan__Get_All_Phan_Nhom(3);
    $taikhoan__Get_All_All = $taikhoan->taikhoan__Get_All();
    if(isset($_GET['view'])){
        $view = $_GET['view'];
        if($view == 'view_all'){
            $taikhoan__Get_All = $taikhoan->taikhoan__Get_All();
        }
        if($view == 'view_admin'){
            $taikhoan__Get_All = $taikhoan->taikhoan__Get_All_Phan_Nhom(1);
        }
       
        if($view == 'view_gv'){
            $taikhoan__Get_All = $taikhoan->taikhoan__Get_All_Phan_Nhom(2);
        }
            if($view == 'view_sv'){
            $taikhoan__Get_All = $taikhoan->taikhoan__Get_All_Phan_Nhom(3);
        }
        if(isset($_GET['id_lophoc_view'])){
            $id_lophoc_view = $_GET['id_lophoc_view'];
            $taikhoan__Get_All = $taikhoan->taikhoan__Get_All_Phan_Nhom_And_Lop($id_lophoc_view);
        }
    }
 ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liệt kê danh sách tài khoản</title>
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



</head>

<body>
    <!-- Content Wrapper. Contains req content -->
    <div class="content-wrapper">
        <!-- Content Header (req header) -->
        <section class="content">
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Thêm mới</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Phân nhóm <span class="color-crimson">(*)</span></label>
                        <select class="form-control" name="id_phannhom" required onchange="location.href=this.value">
                            <?php if(isset($_GET['id_phannhom'])):?>
                            <?php $id_phannhom = $_GET['id_phannhom'];?>
                            <option value="<?=$id_phannhom?>">
                                <?=$phannhom->phannhom__Get_By_Id($id_phannhom)->tenphannhom?>
                            </option>
                            <?php foreach ($phannhom__Get_All as $item):?>
                            <?php if($item->id_phannhom != $id_phannhom):?>
                            <option value="?req=quan-ly-tai-khoan&id_phannhom=<?=$item->id_phannhom?>">
                                <?=$item->tenphannhom?>
                            </option>
                            <?php endif?>
                            <?php endforeach; ?>
                            <?php else:?>
                            <option value="">Chọn Phân nhóm</option>
                            <?php foreach ($phannhom__Get_All as $item):?>
                            <option value="?req=quan-ly-tai-khoan&id_phannhom=<?=$item->id_phannhom?>">
                                <?=$item->tenphannhom?>
                            </option>
                            <?php endforeach; ?>
                            <?php endif?>

                        </select>

                    </div>
                </div>

                <?php if(isset($_GET['id_phannhom'])):?>
                <?php $id_phannhom = $_GET['id_phannhom'];?>


                <!-- ADMIN -->
                <?php if($id_phannhom == 1):?>
                <form action="quanly/quan-ly-tai-khoan/action.php?req=add_admin" method="post"
                    enctype="multipart/form-data">
                    <input type="hidden" name="id_phannhom" value="<?=$id_phannhom?>">
                    <input type="hidden" name="id_phanquyen" value="<?=$phanquyen_admin?>">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Tên tài khoản <span class="color-crimson">(*)</span></label>
                            <input type="text" id="tentaikhoan" name="tentaikhoan" class="form-control" required
                                placeholder="Nhập tên tài khoản">
                        </div>
                        <div class="form-group">
                            <label for="">Email <span class="color-crimson">(*)</span></label>
                            <input type="email" id="email" name="email" class="form-control" required
                                placeholder="Nhập email">
                        </div>
                        <div class="form-group">
                            <label for="">Mật khẩu <span class="color-crimson">(*)</span></label>
                            <input type="password" id="matkhau" name="matkhau" class="form-control" required
                                placeholder="Nhập mật khẩu">
                        </div>
                    </div>
                    <div class="card-footer">
                        <input type="submit" value="Thêm mới" class="btn btn-success float-right">
                    </div>
                </form>
                <?php endif?>
                <!-- END ADMIN -->

                <!-- GIANGVIEN  -->
                <?php if($id_phannhom == 2):?>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Chọn đơn vị <span class="color-crimson">(*)</span></label>
                        <select class="form-control" name="id_donvi" required onchange="location.href=this.value">
                            <?php if(isset($_GET['id_donvi'])):?>
                            <?php $id_donvi = $_GET['id_donvi'];?>
                            <option value="<?=$id_donvi?>">
                                <?=$donvi->donvi__Get_By_Id($id_donvi)->tendonvi?>
                            </option>
                            <?php foreach ($donvi__Get_All as $item):?>
                            <?php if($item->id_donvi != $id_donvi):?>
                            <option
                                value="?req=quan-ly-tai-khoan&id_phannhom=<?=$id_phannhom?>&id_donvi=<?=$item->id_donvi?>">
                                <?=$item->tendonvi?>
                            </option>
                            <?php endif?>
                            <?php endforeach; ?>
                            <?php else:?>
                            <option value="">Chọn đơn vị</option>
                            <?php foreach ($donvi__Get_All as $item):?>
                            <option
                                value="?req=quan-ly-tai-khoan&id_phannhom=<?=$id_phannhom?>&id_donvi=<?=$item->id_donvi?>">
                                <?=$item->tendonvi?>
                            </option>
                            <?php endforeach; ?>
                            <?php endif?>

                        </select>
                    </div>
                </div>

                <?php if(isset($_GET['id_donvi'])):?>
                <?php 
                    $id_donvi = $_GET['id_donvi'];
                    $giangvien__Get_All_Not_Exits = $giangvien->giangvien__Get_All_Not_Exits($id_donvi);

                 ?>

                <form action="quanly/quan-ly-tai-khoan/action.php?req=add_gv" method="post"
                    enctype="multipart/form-data">
                    <input type="hidden" name="id_phannhom" value="<?=$id_phannhom?>">
                    <input type="hidden" name="id_phanquyen" value="<?=$phanquyen_gv?>">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Chọn giảng viên <span class="color-crimson">(*)</span></label>
                            <select class="duallistbox" multiple="multiple" name="id_nguoidung[]" required>
                                <?php foreach ($giangvien__Get_All_Not_Exits as $item):?>
                                <option value="<?=$item->id_giangvien?>">
                                    <?=$item->tengiangvien?>
                                </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="card-footer">
                        <input type="submit" value="Thêm mới" class="btn btn-success float-right">
                    </div>
                </form>
                <?php endif?>
                <?php endif?>
                <!-- END GIANGVIEN -->

                <!-- SINHVIEN -->
                <?php if($id_phannhom == 3):?>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Chọn lớp <span class="color-crimson">(*)</span></label>
                        <select class="form-control" name="id_lophoc" required onchange="location.href=this.value">
                            <?php if(isset($_GET['id_lophoc'])):?>
                            <?php $id_lophoc = $_GET['id_lophoc'];?>
                            <option value="<?=$id_lophoc?>">
                                <?=$lophoc->lophoc__Get_By_Id($id_lophoc)->tenlophoc?>
                            </option>
                            <?php foreach ($lophoc__Get_All as $item):?>
                            <?php if($item->id_lophoc != $id_lophoc):?>
                            <option
                                value="?req=quan-ly-tai-khoan&id_phannhom=<?=$id_phannhom?>&id_lophoc=<?=$item->id_lophoc?>">
                                <?=$item->tenlophoc?>
                            </option>
                            <?php endif?>
                            <?php endforeach; ?>
                            <?php else:?>
                            <option value="">Chọn Lớp</option>
                            <?php foreach ($lophoc__Get_All as $item):?>
                            <option
                                value="?req=quan-ly-tai-khoan&id_phannhom=<?=$id_phannhom?>&id_lophoc=<?=$item->id_lophoc?>">
                                <?=$item->tenlophoc?>
                            </option>
                            <?php endforeach; ?>
                            <?php endif?>

                        </select>
                    </div>
                </div>

                <?php if(isset($_GET['id_lophoc'])):?>
                <?php 
                    $id_lophoc = $_GET['id_lophoc'];
                    $sinhvien__Get_All_Not_Exits = $sinhvien->sinhvien__Get_All_Not_Exits($id_lophoc);

                 ?>

                <form action="quanly/quan-ly-tai-khoan/action.php?req=add_sv" method="post"
                    enctype="multipart/form-data">
                    <input type="hidden" name="id_phannhom" value="<?=$id_phannhom?>">
                    <input type="hidden" name="id_phanquyen" value="<?=$phanquyen_sv?>">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Chọn sinh viên <span class="color-crimson">(*)</span></label>
                            <select class="duallistbox" multiple="multiple" name="id_nguoidung[]" required>
                                <?php foreach ($sinhvien__Get_All_Not_Exits as $item):?>
                                <option value="<?=$item->id_sinhvien?>">
                                    <?=$item->tensinhvien?>
                                </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="card-footer">
                        <input type="submit" value="Thêm mới" class="btn btn-success float-right">
                    </div>
                </form>
                <?php endif?>
                <?php endif?>
                <!--END SINHVIEN -->



                <?php endif?>

            </div>
            <!-- /.card -->
        </section>

        <section class="content" id="div_update">
        </section>
        <hr>

        <section class="content">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Danh sách [</h3>
                    <a href="?req=quan-ly-tai-khoan&view=view_all" type="button" class="btn btn-tool">
                        Tất cả <?=count($taikhoan__Get_All_All)?>
                    </a> |
                    <a href="?req=quan-ly-tai-khoan&view=view_admin" type="button" class="btn btn-tool">
                        Admin <?=count($taikhoan__Get_All_Admin)?>
                    </a> |
                    <a href="?req=quan-ly-tai-khoan&view=view_sv" type="button" class="btn btn-tool">
                        Sinh viên <?=count($taikhoan__Get_All_Sv)?>
                    </a>|
                    <a href="?req=quan-ly-tai-khoan&view=view_gv" type="button" class="btn btn-tool">
                        Giảng viên <?=count($taikhoan__Get_All_Gv)?>
                    </a>]
                </div>

                <div class="card-header">

                    <?php if(isset($_GET['view'])):?>
                    <?php if($_GET['view'] == 'view_sv'):?>
                    <div class="form-group">
                        <label for="">Chọn lớp <span class="color-crimson">(*)</span></label>
                        <select class="form-control" name="id_lophoc" required onchange="location.href=this.value">
                            <option value="?req=quan-ly-tai-khoan&view=view_sv&id_lophoc">
                                Tất cả
                            </option>
                            <?php foreach ($lophoc__Get_All as $item):?>
                            <option value="?req=quan-ly-tai-khoan&view=view_sv&id_lophoc_view=<?=$item->id_lophoc?>"
                                <?=$item->id_lophoc == $id_lophoc_view ? "selected" : ""?>>
                                <?=$item->tenlophoc?>
                            </option>
                            <?php endforeach; ?>

                        </select>
                    </div>
                    <?php endif?>
                    <?php endif?>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="tablejs" class="table table-dark table-hover""
                        width="100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Email</th>
                                <th>Mật khẩu</th>
                                <th>Phân nhóm</th>
                                <th>Phân quyền</th>
                                <th>Đặt lại mật khẩu</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $num = 0;?>
                            <?php foreach($taikhoan__Get_All as $item):?>
                            <tr>
                                <td><?=++$num?></td>
                                <td><?=$item->email?></td>
                                <td><?=$item->matkhau?></td>
                                <td><?=$phannhom->phannhom__Get_By_Id($item->id_phannhom)->tenphannhom?></td>
                                <td><?=$phanquyen->phanquyen__Get_By_Id($item->id_phanquyen)->tenphanquyen?></td>

                                <td>
                                    <a href="#" type="button" class="btn  btn-danger"
                                        onclick="return confirm_sweet('quanly/quan-ly-tai-khoan/action.php?req=reset&id_taikhoan=<?=$item->id_taikhoan?>')">
                                        <i class="fas fa-user-cog"></i>
                                    </a>
                                </td>
                                <td>
                                    <a href="#" type="button" class="btn  btn-danger"
                                        onclick="return confirm_sweet('quanly/quan-ly-tai-khoan/action.php?req=delete&id_taikhoan=<?=$item->id_taikhoan?>')">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach?>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </section>

    </div>


    <!-- /.content-wrapper -->

    <script>
    window.addEventListener("load", function() {
//        $("#tablejs").DataTable({
//            "responsive": true,
//            "autoWidth": false,
//            "buttons": [{
//                    extend: 'excel',
//                    exportOptions: {
//                        columns: ':visible'
//                    }
//                },
//                'colvis'
//            ],
//            columnDefs: [{
//                visible: false
//            }]
//        }).buttons().container().appendTo('#tablejs_wrapper .col-md-6:eq(0)');
    });

    function update_obj(id_taikhoan) {
        $.post('quanly/quan-ly-tai-khoan/update.php', {
            'id_taikhoan': id_taikhoan,
        }, function(data) {
            $(".card.card-success").addClass('collapsed-card');
            $('#div_update').html(data);
        });
    }
    </script>

</body>

</html>