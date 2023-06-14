<?php
require("../models/getModel.php");
    $id_dot = -2;
    $id_lophoc  = -2;
    $thongkeketquasv__Get_By_Id_Lop_Hoc_And_Id_Dot = $thongkeketquasv->thongkeketquasv__Get_By_Id_Lop_Hoc_And_Id_Dot($id_lophoc, $id_dot);
    $dotkhaosat__Get_All = $dotkhaosat->dotkhaosat__Get_All();
    $lophoc__Get_All = $lophoc->lophoc__Get_All();
    
    


if (isset($_GET['id_dot'])) {
    $id_dot = $_GET['id_dot'];
    
}
if(isset($_GET['id_lophoc'])){
        $id_lophoc = $_GET['id_lophoc'];
        $thongkeketquasv__Get_By_Id_Lop_Hoc_And_Id_Dot = $thongkeketquasv->thongkeketquasv__Get_By_Id_Lop_Hoc_And_Id_Dot($id_lophoc, $id_dot);
    }

//$thongkeketquasv__Get_By_Id_dot = $thongkeketquasv->thongkeketquasv__Get_By_Id_dot($id_dot);
//$phieukhaosat__Get_All = $phieukhaosat->phieukhaosat__Get_By_Id_phieudot($id_phieu, $id_dot)
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Liệt kê danh sách</title>
        <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <!-- Latest compiled and minified CSS -->

        <!-- jQuery library -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <div>
            <!-- Content -->
            <div id="content">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#"><i class="zmdi zmdi-notifications text-danger">aaa</i>
                                </a>
                            </li>
                            <li><a href="..index.php">Trang Chủ</a></li>
                        </ul>
                    </div>
                </nav>
                <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1>Quản lý kết quả khảo sát sinh viên</h1>
                 </div>
                 
             </div>
         </div><!-- /.container-fluid -->
     </section>

     <section class="content">
         <div class="col-12">
             <div class="card card-success">
                 <div class="card-header">
                     
                 </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <label for="">Chọn đợt (<?= count($dotkhaosat->dotkhaosat__Get_All()) ?>)</label>
                            <select class="form-control" name="" required onchange="location.href = this.value">
                                
                                <option value="">Chọn đợt</option>
                                <?php foreach ($dotkhaosat->dotkhaosat__Get_All() as $item): ?>
                                    <option value="index.php?req=thongkeketquasv&id_dot=<?php echo $item->id_dot ?>"
                                            <?= $id_dot == $item->id_dot ? "selected" : "" ?>>
                                                <?= $item->tendot ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>


                        
                        <div class="col">
                            <?php if (isset($_GET['id_dot'])):?>
                            <label for="">Chọn lớp học (<?= count($lophoc->lophoc__Get_All()) ?>)</label>

                            <select class="form-control" name="" required onchange="location.href = this.value">
                                
                                <option value="">Chọn lớp học</option>
                                <?php foreach ($lophoc->lophoc__Get_All() as $item): ?>
                                    <option value="index.php?req=thongkeketquasv&id_dot=<?php echo $id_dot ?>&id_lophoc=<?php echo $item->id_lophoc ?>"
                                            <?= $id_lophoc == $item->id_lophoc ? "selected" : "" ?>>
                                                <?= $item->tenlophoc ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>



                            <!-- <select class="form-control" name="" required onchange="location.href = this.value">
                                
                                <option value="">Chọn lớp học</option>
                                <?php foreach ($lophoc->lophoc__Get_All() as $item): ?>
                                    <option value="index.php?req=thongkeketquasv&id_dot=<?php echo $item->id_lophoc ?>"
                                            <?= $id_lophoc == $item->id_lophoc ? "selected" : "" ?>>
                                                <?= $item->tendot ?>
                                   </option>
                                 <?php endforeach; ?>
                             </select> -->
                             <?php endif; ?>
                            </div>

                     </div>

                 </div>
                 <!-- /.card-body -->
                 <div class="card-footer">
                     <!-- <input type="submit" value="Xử lý" class="btn btn-success float-right"
                         <?=isset($_GET['id_lophoc']) ? "" : "disabled"?>> -->
                 </div>
             </div>
         </div>
     </section>
                        <div class="form">
                            <form action="./quanly/thongkeketquasv/thongkeketquasvAct.php?req=add" method="post">
                            <input type="hidden" name="id_dot" value="<?php echo $id_dot?>"/>
                            <input type="hidden" name="id_lophoc" value="<?php echo $id_lophoc?>"/>
                                                  
                                <button <?php echo count($thongkeketquasv__Get_By_Id_Lop_Hoc_And_Id_Dot)>0?"disabled":""?>>Thống kê</button>
                            </form>
                        </div>
                        

   
                        
                    </div>

                </div>
                <div class="container-fluid">
                    <div class="container">
                        <h1>Thống kê kết quả</h1>
                        <!-- Button to Open the Modal -->
                        


                        <table class="table table-dark table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Id đợt</th>
                                    <th>Id phiếu</th>
                                    <th>Id lớp học</th>
                                    <th>Id sinh viên</th>
                                    <th>Mã sinh viên</th>
                                    <th>Tên sinh viên</th>                
                                    <th>kohl</th>
                                    <th>ithl</th>
                                    <th>khahl</th>
                                    <th>hl</th>
                                    <th>rathl</th>
                                    <th>% kohl</th>
                                    <th>% ithl</th>
                                    <th>% khahl</th>
                                    <th>% hl</th>
                                    <th>% rathl</th>
                                    <th>Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $num = 0 ?>

                                <?php foreach ($thongkeketquasv__Get_By_Id_Lop_Hoc_And_Id_Dot as $item) : ?>
                                    <tr>
                                        <td><?php echo $item->id; ?></td>
                                        <td><?php echo $item->id_dot; ?></td>
                                        <td><?php echo $item->id_phieu; ?></td>
                                        <td><?php echo $item->id_lophoc; ?></td>
                                        <td><?php echo $item->id_sinhvien; ?></td>
                                        <td><?php echo $item->ma_sinhvien; ?></td>
                                        <td><?php echo $item->tensinhvien; ?></td>
                                        <td><?php echo $item->kohl; ?></td>
                                        <td><?php echo $item->ithl; ?></td>
                                        <td><?php echo $item->khahl; ?></td>
                                        <td><?php echo $item->hl; ?></td>
                                        <td><?php echo $item->rathl; ?></td>
                                        <td><?php echo $item->per_kohl; ?></td>
                                        <td><?php echo $item->per_ithl; ?></td>
                                        <td><?php echo $item->per_khahl; ?></td>
                                        <td><?php echo $item->per_hl; ?></td>
                                        <td><?php echo $item->per_rathl; ?></td>
                                        <td>
                                        <a onclick="return confirm('Bạn có muốn xóa thống kê này không');" href="./quanly/thongkeketquasv/thongkeketquasvAct.php?req=delete&id=<?php echo $item->id; ?>" class="btn btn-danger">Xóa</a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>


                            </tbody>
                        </table>
                    </div>
                </div>

                </body>
                </html>
