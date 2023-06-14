 <?php
    require "../models/getModel.php";
    $taikhoan__Get_All = $taikhoan->taikhoan__Get_All();
    $phannhom__Get_All = $phannhom->phannhom__Get_All();
    $lophoc__Get_All = $lophoc->lophoc__Get_All();
    $donvi__Get_All = $donvi->donvi__Get_All();
    $taikhoan__Get_All_Admin = $taikhoan->taikhoan__Get_All_Phan_Nhom(0);
    $taikhoan__Get_All_Manager = $taikhoan->taikhoan__Get_All_Phan_Nhom(1);
    $taikhoan__Get_All_Sv = $taikhoan->taikhoan__Get_All_Phan_Nhom(3);
    $taikhoan__Get_All_Btdk = $taikhoan->taikhoan__Get_All_Phan_Nhom(3);
    $taikhoan__Get_All_Cvht = $taikhoan->taikhoan__Get_All_Phan_Nhom(4);
    $taikhoan__Get_All_All = $taikhoan->taikhoan__Get_All();
    if(isset($_GET['view'])){
        $view = $_GET['view'];
        if($view == 'view_all'){
            $taikhoan__Get_All = $taikhoan->taikhoan__Get_All();
        }
        if($view == 'view_admin'){
            $taikhoan__Get_All = $taikhoan->taikhoan__Get_All_Phan_Nhom(0);
        }
        if($view == 'view_manager'){
            $taikhoan__Get_All = $taikhoan->taikhoan__Get_All_Phan_Nhom(1);
        }
        if($view == 'view_sv'){
            $taikhoan__Get_All = $taikhoan->taikhoan__Get_All_Phan_Nhom(2);
        }
        if($view == 'view_btdk'){
            $taikhoan__Get_All = $taikhoan->taikhoan__Get_All_Phan_Nhom(3);
        }
        if($view == 'view_cvht'){
            $taikhoan__Get_All = $taikhoan->taikhoan__Get_All_Phan_Nhom(4);
        }
    }
 ?>


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
 <!-- Content Wrapper. Contains req content -->
 <div class="content-wrapper">
 <?= $id_phannhom = $_GET['id_phannhom'];?>

     <!-- Content Header (req header) -->

     <section class="content">
         <div class="col-12">
             <div class="card card-success">
                 <div class="card-header">
                     <h3 class="card-title">Thêm mới</h3>
                     <div class="card-tools">
                         <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                             <i class="fas fa-minus"></i>
                         </button>
                     </div>
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
                 <?= $id_phannhom = $_GET['id_phannhom'];?>


                 <!-- ADMIN -->
                 <?php if($id_phannhom == 0):?>
                 <form action="quan-ly-tai-khoan/action.php?req=add_admin" method="post" enctype="multipart/form-data">
                     <input type="hidden" name="id_phannhom" value="<?=$id_phannhom?>">
                     <input type="hidden" name="id_phan_quyen"
                         value="<?=$phanquyen->phanquyen__Get_By_Cap_Bac(0)->id_phan_quyen?>">
                     <div class="card-body">
                         <div class="form-group">
                             <label for="">Email <span class="color-crimson">(*)</span></label>
                             <input type="email" id="email" name="email" class="form-control" required
                                 placeholder="Nhập email">
                         </div>
                         <div class="form-group">
                             <label for="">Mật khẩu <span class="color-crimson">(*)</span></label>
                             <input type="password" id="mat_khau" name="mat_khau" class="form-control" required
                                 placeholder="Nhập mật khẩu">
                         </div>
                     </div>
                     <div class="card-footer">
                         <input type="submit" value="Thêm mới" class="btn btn-success float-right">
                     </div>
                 </form>
                 <?php endif?>
                 <!-- END ADMIN -->

                 <!-- MANAGER  -->
                 <?php if($id_phannhom == 1):?>
                 <form action="quan-ly-tai-khoan/action.php?req=add_admin" method="post" enctype="multipart/form-data">
                     <input type="hidden" name="id_phannhom" value="<?=$id_phannhom?>">
                     <input type="hidden" name="id_phan_quyen"
                         value="<?=$phanquyen->phanquyen__Get_By_Cap_Bac(1)->id_phan_quyen?>">
                     <div class="card-body">
                         <div class="form-group">
                             <label for="">Email <span class="color-crimson">(*)</span></label>
                             <input type="email" id="email" name="email" class="form-control" required
                                 placeholder="Nhập email">
                         </div>
                         <div class="form-group">
                             <label for="">Mật khẩu <span class="color-crimson">(*)</span></label>
                             <input type="password" id="mat_khau" name="mat_khau" class="form-control" required
                                 placeholder="Nhập mật khẩu">
                         </div>
                     </div>
                     <div class="card-footer">
                         <input type="submit" value="Thêm mới" class="btn btn-success float-right">
                     </div>
                 </form>
                 <?php endif?>
                 <!-- END MANAGER -->

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

                 <form action="quan-ly-tai-khoan/action.php?req=add_sv" method="post" enctype="multipart/form-data">
                     <input type="hidden" name="id_phannhom" value="<?=$id_phannhom?>">
                     <input type="hidden" name="id_phan_quyen"
                         value="<?=$phanquyen->phanquyen__Get_By_Cap_Bac(2)->id_phan_quyen?>">
                     <div class="card-body">
                         <div class="form-group">
                             <label for="">Chọn sinh viên <span class="color-crimson">(*)</span></label>
                             <select class="duallistbox_sv" multiple="multiple" name="id_nguoi_dung[]" required>
                                 <?php foreach ($sinhvien__Get_All_Not_Exits as $item):?>
                                 <option value="<?=$item->id_sinh_vien?>">
                                     <?=$item->ten_sinh_vien?>
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
                 <!-- COVANHOCTAP  -->
                 <?php if($id_phannhom == 4):?>
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
                    $giangvien__Get_All_Not_Exits = $giangvien->giangvien__Get_All_Not_Exits($id_lophoc);

                 ?>

                 <form action="quan-ly-tai-khoan/action.php?req=add_sv" method="post" enctype="multipart/form-data">
                     <input type="hidden" name="id_phannhom" value="<?=$id_phannhom?>">
                     <input type="hidden" name="id_phan_quyen"
                         value="<?=$phanquyen->phanquyen__Get_By_Cap_Bac(2)->id_phan_quyen?>">
                     <div class="card-body">
                         <div class="form-group">
                             <label for="">Chọn sinh viên <span class="color-crimson">(*)</span></label>
                             <select class="duallistbox_sv" multiple="multiple" name="id_nguoi_dung[]" required>
                                 <?php foreach ($giangvien__Get_All_Not_Exits as $item):?>
                                 <option value="<?=$item->id_giang_vien?>">
                                     <?=$item->ten_giang_vien?>
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
                 <!-- END COVANHOCTAP -->


                 <?php endif?>

             </div>
             <!-- /.card -->
         </div>
     </section>

     <section class="content" id="div_update">
     </section>

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
                 <a href="?req=quan-ly-tai-khoan&view=view_manager" type="button" class="btn btn-tool">
                     Manager <?=count($taikhoan__Get_All_Manager)?>
                 </a> |
                 <a href="?req=quan-ly-tai-khoan&view=view_sv" type="button" class="btn btn-tool">
                     Sinh viên <?=count($taikhoan__Get_All_Sv)?>
                 </a>|
                 <a href="?req=quan-ly-tai-khoan&view=view_btdk" type="button" class="btn btn-tool">
                     Bí thư đoàn khoa <?=count($taikhoan__Get_All_Btdk)?>
                 </a>|
                 <a href="?req=quan-ly-tai-khoan&view=view_cvht" type="button" class="btn btn-tool">
                     Cố vấn <?=count($taikhoan__Get_All_Cvht)?>
                 </a>]
                 <div class="card-tools">
                     <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                         <i class="fas fa-minus"></i>
                     </button>
                 </div>
             </div>
             <!-- /.card-header -->
             <div class="card-body">
                 <table id="tablejs" class="table table-bordered table-striped display responsive nowrap" width="100%">
                     <thead>
                         <tr>
                             <th>#</th>
                             <th>Email</th>
                             <th>Mật khẩu</th>
                             <th>Phân nhóm</th>
                             <th>Phân quyền</th>
                             <th>Trạng thái</th>
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
                             <td><?=$item->mat_khau?></td>
                             <td><?=$phannhom->phannhom__Get_By_Id($item->id_phannhom)->tenphannhom?></td>
                             <td><?=$phanquyen->phanquyen__Get_By_Id($item->id_phan_quyen)->ten_phan_quyen?></td>
                             <td
                                 onclick="return confirm_sweet('quan-ly-tai-khoan/action.php?req=active&id_tai_khoan=<?=$item->id_tai_khoan?>&trang_thai=<?=$item->trang_thai?>')">
                                 <?=$item->trang_thai == 1 ? "<button class='btn btn-success'><i class='fas fa-user-check'></i></button>" : "<button class='btn btn-danger'><i class='fas fa-user-slash'></i></button>"?>

                             </td>
                             <td>
                                 <a href="#" type="button" class="btn  btn-danger"
                                     onclick="return confirm_sweet('quan-ly-tai-khoan/action.php?req=reset&id_tai_khoan=<?=$item->id_tai_khoan?>')">
                                     <i class="fas fa-user-cog"></i>
                                 </a>
                             </td>
                             <td>
                                 <a href="#" type="button" class="btn  btn-danger"
                                     onclick="return confirm_sweet('quan-ly-tai-khoan/action.php?req=delete&id_tai_khoan=<?=$item->id_tai_khoan?>')">
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
    $("#tablejs").DataTable({
        "responsive": true,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print"]
    }).buttons().container().appendTo('#tablejs_wrapper .col-md-6:eq(0)');
});

function update_obj(id_tai_khoan) {
    $.post('quan-ly-tai-khoan/update.php', {
        'id_tai_khoan': id_tai_khoan,
    }, function(data) {
        $(".card.card-success").addClass('collapsed-card');
        $('#div_update').html(data);
    });
}
 </script>