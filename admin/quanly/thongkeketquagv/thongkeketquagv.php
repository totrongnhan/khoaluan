<?php
require("../models/getModel.php");
$id_tenkhaosat = -2;
$id_dot = -2;
$id_donvi = -2;

$dotkhaosat__Get_All = $dotkhaosat->dotkhaosat__Get_All();
$donvi__Get_All = $donvi->donvi__Get_All();
$tenkhaosat__Get_All = $tenkhaosat->tenkhaosat__Get_All();

if (isset($_GET['id_tenkhaosat'])) {
    $id_tenkhaosat = $_GET['id_tenkhaosat'];
}
if (isset($_GET['id_dot'])) {
    $id_dot = $_GET['id_dot'];
}


if (isset($_GET['id_donvi'])) {
    $id_donvi = $_GET['id_donvi'];
}
$thongkeketquagv__Get_By_Id_Lop_Hoc_And_Id_Dot = $thongkeketquagv->thongkeketquagv__Get_By_Id_Lop_Hoc_And_Id_Dot($id_donvi, $id_dot, $id_tenkhaosat);
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
                                <a href="#"><i class="zmdi zmdi-notifications text-danger"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="content-wrapper">
                    <!-- Content Header (Page header) -->
                    <section class="content-header">
                        <div class="container-fluid">
                            <div class="row mb-2">
                                <div class="col-sm-6">
                                    <h1>Quản lý kết quả khảo sát giảng viên</h1>
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
                                            <label for="">Chọn tên khảo sát (<?= count($tenkhaosat->tenkhaosat__Get_All()) ?>)</label>
                                            <select class="form-control" name="" required onchange="location.href = this.value">

                                                <option value="">Chọn tên khảo sát</option>
                                                <?php foreach ($tenkhaosat->tenkhaosat__Get_All() as $item): ?>
                                                    <option value="index.php?req=thongkeketquagv&id_tenkhaosat=<?php echo $item->id_tenkhaosat ?>"
                                                            <?= $id_tenkhaosat == $item->id_tenkhaosat ? "selected" : "" ?>>
                                                                <?= $item->tenkhaosat0 ?>
                                                    </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <?php if (isset($_GET['id_tenkhaosat'])): ?>
                                                <label for="">Chọn tên đợt (<?= count($dotkhaosat->dotkhaosat__Get_All()) ?>)</label>

                                                <select class="form-control" name="" required onchange="location.href = this.value">

                                                    <option value="">Chọn tên đợt</option>
                                                    <?php foreach ($dotkhaosat->dotkhaosat__Get_All() as $item): ?>
                                                        <option value="index.php?req=thongkeketquagv&id_tenkhaosat=<?php echo $id_tenkhaosat ?>&id_dot=<?php echo $item->id_dot ?>"
                                                                <?= $id_dot == $item->id_dot ? "selected" : "" ?>>
                                                                    <?= $item->tendot ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            <?php endif; ?>
                                        </div>

                                        <div class="col">
                                            <?php if (isset($_GET['id_dot'])): ?>
                                                <label for="">Chọn đơn vị (<?= count($donvi->donvi__Get_All()) ?>)</label>

                                                <select class="form-control" name="" required onchange="location.href = this.value">

                                                    <option value="">Chọn đơn vị</option>
                                                    <?php foreach ($donvi->donvi__Get_All() as $item): ?>
                                                        <option value="index.php?req=thongkeketquagv&id_tenkhaosat=<?php echo $id_tenkhaosat ?>&id_dot=<?php echo $id_dot ?>&id_donvi=<?php echo $item->id_donvi ?>"
                                                                <?= $id_donvi == $item->id_donvi ? "selected" : "" ?>>
                                                                    <?= $item->tendonvi ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            <?php endif; ?>
                                        </div>


                                    </div>

                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <?php if (count($thongkeketquagv__Get_By_Id_Lop_Hoc_And_Id_Dot) < 1) : ?>
                                        <div class="form">
                                            <form action="./quanly/thongkeketquagv/thongkeketquagvAct.php?req=add" method="post">
                                                <input type="hidden" name="id_tenkhaosat" value="<?php echo $id_tenkhaosat ?>"/>
                                                <input type="hidden" name="id_dot" value="<?php echo $id_dot ?>"/>
                                                <input type="hidden" name="id_donvi" value="<?php echo $id_donvi ?>"/>

                                                <button>Thống kê</button>
                                            </form>
                                        </div>

                                    <?php else: ?>
                                        <div class="form">
                                            <form action="./quanly/thongkeketquagv/thongkeketquagvAct.php?req=delete_all" method="post">
                                                <input type="hidden" name="id_tenkhaosat" value="<?php echo $id_tenkhaosat ?>"/>
                                                <input type="hidden" name="id_dot" value="<?php echo $id_dot ?>"/>
                                                <input type="hidden" name="id_donvi" value="<?php echo $id_donvi ?>"/>

                                                <button >Xóa tất cả</button>
                                            </form>
                                        </div>
                                    <?php endif ?>
                                </div>

                            </div>

                        </div>

                    </section>

                    <section class="content">
                        <h1>Thống kê kết quả</h1>

                        <div class="responsive m-4">
                            <!-- Button to Open the Modal -->
                            <table class="table table-dark table-hover" id="tablejs">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <!--<th>Id tên khảo sát</th>-->
                                        <th>Id đợt</th>
                                        <!--<th>Id phiếu</th>-->
                                        <th>Id đơn vị</th>
                                        <!--<th>Id giảng viên</th>-->
                                        <th>Mã giảng viên</th>
                                        <th>Tên giảng viên</th>                
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

                                    <?php foreach ($thongkeketquagv__Get_By_Id_Lop_Hoc_And_Id_Dot as $item) : ?>
                                        <tr>
                                            <td><?php echo ++$num; ?></td>
                                            <!--<td><?php echo $item->id_tenkhaosat; ?></td>-->
                                            <td><?php echo $item->id_dot; ?></td>
                                                <!--<td><?php echo $item->id_phieu; ?></td>-->
                                            <td><?php echo $item->id_donvi; ?></td>
                                                <!--<td><?php echo $item->id_giangvien; ?></td>-->
                                            <td><?php echo $item->ma_giangvien; ?></td>
                                            <td><?php echo $item->tengiangvien; ?></td>
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
                                                <a onclick="return confirm('Bạn có muốn xóa thống kê này không');" href="./quanly/thongkeketquagv/thongkeketquagvAct.php?req=delete&id=<?php echo $item->id; ?>" class="btn btn-danger">Xóa</a>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>


                                </tbody>
                            </table>
                        </div>
                    </section>
                </div>

            </div>
    </body>
</html>
