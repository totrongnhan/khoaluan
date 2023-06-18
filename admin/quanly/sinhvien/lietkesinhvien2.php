 <?php
     require "../models/getModel.php";
    $sinhvien__Get_All = $sinhvien->sinhvien__Get_All();
    $lophoc__Get_All = $lophoc->lophoc__Get_All();
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


 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1>Quản lý sinh viên</h1>
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
         <form class="row form" action="quanly/sinhvien/sinhvienAct.php?req=add" method="post"
             enctype="multipart/form-data">
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
                         <div class="row">
                             <div class="col-6">
                                 <div class="form-group">
                                     <label for="">Mã sinh viên <span class="color-crimson">(*)</span></label>
                                     <input type="text" id="ma_sinhvien" name="ma_sinhvien" class="form-control"
                                         required placeholder="Nhập mã sinh viên">
                                 </div>
                                 <div class="form-group">
                                     <label for="">Tên sinh viên <span class="color-crimson">(*)</span></label>
                                     <input type="text" id="ten_sinhvien" name="ten_sinhvien" class="form-control"
                                         required placeholder="Nhập tên sinh viên">
                                 </div>
                             </div>
                             <div class="col-6">
                                 <div class="form-group">
                                     <label for="">Giới tính <span class="color-crimson">(*)</span></label>
                                     <select class="form-control" name="gioi_tinh" required>
                                         <option value="">Chọn giới tính</option>
                                         <option value="0">Nữ</option>
                                         <option value="1">Nam</option>
                                     </select>
                                 </div>
                                 <div class="form-group">
                                     <label for="">Ngày sinh <span class="color-crimson">(*)</span></label>
                                     <input type="date" id="ngaysinh" name="ngaysinh" class="form-control" required
                                         value="<?=date('Y-m-d', strtotime('-22 years'))?>"
                                         min="<?=date('Y-m-d', strtotime('-100 years'))?>"
                                         max="<?=date('Y-m-d', strtotime('-10 years'))?>" placeholder="Nhập ngày sinh">
                                 </div>
                             </div>
                             <div class="col-6">
                                 <div class="form-group">
                                     <label for="">Email <span class="color-crimson">(*)</span></label>
                                     <input type="email" id="email" name="email" class="form-control" required
                                         placeholder="Nhập email">
                                 </div>
                                 <div class="form-group">
                                     <label for="">Số điện thoại 1 <span class="color-crimson">(*)</span></label>
                                     <input type="std1" id="std1" name="std1"
                                         pattern="[0][0-9]{8-9}" class=" form-control" required
                                         title="Số điện thoại có 10 hoặc 11 số" placeholder="Nhập số điện thoại 1"
                                         minlength="10" max="11">
                                 </div>
                                 <div class="form-group">
                                     <label for="">Số điện thoại 2 <span class="color-crimson">(*)</span></label>
                                     <input type="std2" id="std2" name="std2"
                                         pattern="[0][0-9]{8-9}" class=" form-control" required
                                         title="Số điện thoại có 10 hoặc 11 số" placeholder="Nhập số điện thoại 2"
                                         minlength="10" max="11">
                                 </div>
                             </div>

                             <div class="col-6">
                                 <div class="form-group">
                                     <label for="">Địa chỉ liên lạc <span class="color-crimson">(*)</span></label>
                                     <input type="diachilienlac" id="diachilienlac" name="diachilienlac"
                                         class="form-control" required placeholder="Nhập địa chỉ liên lạc">
                                 </div>
                                 <div class="form-group">
                                     <label for="">Địa chỉ thường trú <span class="color-crimson">(*)</span></label>
                                     <input type="diachithuongtru" id="diachithuongtru" name="diachithuongtru"
                                         class="form-control" required placeholder="Nhập địa chỉ thường trú">
                                 </div>
                                 
                             </div>
                             <div class="col-6">
                                 <div class="form-group">
                                     <label for="">Lớp học <span class="color-crimson">(*)</span></label>
                                     <select class="form-control" name="id_lophoc" required>
                                         <option value="">Chọn Lớp học</option>
                                         <?php foreach($lophoc__Get_All as $item):?>
                                         <option value="<?=$item->id_lophoc?>"><?=$item->tenlophoc?></option>
                                         <?php endforeach;?>
                                     </select>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <!-- /.card-body -->
                     <div class="card-footer">
                         <input type="submit" value="Thêm mới" class="btn btn-success float-right">
                     </div>
                 </div>
                 <!-- /.card -->
             </div>
         </form>
     </section>

     <section class="content" id="div_update">
     </section>

     <section class="content">
         <div class="card card-primary">
             <div class="card-header">
                 <h3 class="card-title">Danh sách</h3>
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
                             <th>Mã sinh viên</th>
                             <th>Tên sinh viên</th>
                             <th>Giới tính</th>
                             <th>Ngày sinh</th>
                             <th>Số điện thoại 1</th>
                             <th>Địa chỉ liên lạc</th>
                             <th>Lớp học</th>
                             <th>Thao tác</th>
                         </tr>
                     </thead>
                     <tbody>
                         <?php $num = 0;?>
                         <?php foreach($sinhvien__Get_All as $item):?>
                         <tr>
                             <td><?=++$num?></td>
                             <td><?=$item->ma_sinhvien?></td>
                             <td><?=$item->tensinhvien?></td>
                             <td><?=$item->gioitinh == 1 ? "Nam" : "Nữ"?></td>
                             <td><?=$item->ngaysinh?></td>
                             <td><?=$item->sdt1?></td>
                             <td><?=$item->diachilienlac?></td>
                             <td><?=$lophoc->lophoc__Get_By_Id($item->id_lophoc)->tenlophoc?></td>

                             <td>
                                  <a href="#" type="button" class="btn  btn-warning m-2" onclick="update_obj(<?=$item->id_sinhvien?>)">
                                     <i class="fas fa-edit"></i>
                                 </a>
                                 <a href="#" type="button" class="btn  btn-danger m-2"
                                     onclick="return confirm_sweet('quan-ly-sinh-vien/action.php?req=delete&id_sinh_vien=<?=$item->id_sinhvien?>')">
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

function update_obj(id_sinhvien) {
    $.post('quan-ly-sinh-vien/update.php', {
        'id_sinhvien': id_sinhvien,
    }, function(data) {
        $(".card.card-success").addClass('collapsed-card');
        $('#div_update').html(data);
    });
}
 </script>