<?php
require '../models/getModel.php';
$labels = [];
$data = [];
$data_2 = [];
$sum_0 = 0;
$thongkeketquasv__Get_By_Id_Dot_Muc_1 = 0;
$thongkeketquasv__Get_By_Id_Dot_Muc_2 = 0;
$thongkeketquasv__Get_By_Id_Dot_Muc_3 = 0;
$thongkeketquasv__Get_By_Id_Dot_Muc_4 = 0;
$thongkeketquasv__Get_By_Id_Dot_Muc_5 = 0;
$thongkeketquasv__Get_By_Id_Dot_Muc_1_per = 0;
$thongkeketquasv__Get_By_Id_Dot_Muc_2_per = 0;
$thongkeketquasv__Get_By_Id_Dot_Muc_3_per = 0;
$thongkeketquasv__Get_By_Id_Dot_Muc_4_per = 0;
$thongkeketquasv__Get_By_Id_Dot_Muc_5_per = 0;
$id_phannhom = -2;
$id_dot = -2;
$id_tenkhaosat = -2;
$dotkhaosat__Get_All = $dotkhaosat->dotkhaosat__Get_All();
$tenkhaosat__Get_All = $tenkhaosat->tenkhaosat__Get_All();

if (isset($_GET['id_tenkhaosat'])) {
    $id_tenkhaosat = $_GET['id_tenkhaosat'];

    $id_tenkhaosat = -2;
    $id_dot = -2;
    $id_lophoc = -2;
    $tenkhaosat__Get_All = $tenkhaosat->tenkhaosat__Get_All();
    $dotkhaosat__Get_All = $dotkhaosat->dotkhaosat__Get_All();
    $lophoc__Get_All = $lophoc->lophoc__Get_All();

    if (isset($_GET['id_tenkhaosat'])) {
        $id_tenkhaosat = $_GET['id_tenkhaosat'];
    }
    if (isset($_GET['id_dot'])) {
        $id_dot = $_GET['id_dot'];
    }
    if (isset($_GET['id_phannhom'])) {
        $id_phannhom = $_GET['id_phannhom'];
        if ($id_phannhom == 2) {
            $thongkeketquagv__Get_By_Id_Tenkhaosat = $thongkeketquagv->thongkeketquagv__Get_By_Id_Tenkhaosat($id_tenkhaosat);

            $thongkeketquasv__Get_By_Id_Dot_Muc_1 = intval(isset($thongkeketquagv->thongkeketquagv__All_muc1($id_dot)->sum_so_luong) ? $thongkeketquagv->thongkeketquagv__All_muc1($id_dot)->sum_so_luong : 0);
            $thongkeketquasv__Get_By_Id_Dot_Muc_2 = intval(isset($thongkeketquagv->thongkeketquagv__All_muc2($id_dot)->sum_so_luong) ? $thongkeketquagv->thongkeketquagv__All_muc2($id_dot)->sum_so_luong : 0);
            $thongkeketquasv__Get_By_Id_Dot_Muc_3 = intval(isset($thongkeketquagv->thongkeketquagv__All_muc3($id_dot)->sum_so_luong) ? $thongkeketquagv->thongkeketquagv__All_muc3($id_dot)->sum_so_luong : 0);
            $thongkeketquasv__Get_By_Id_Dot_Muc_4 = intval(isset($thongkeketquagv->thongkeketquagv__All_muc4($id_dot)->sum_so_luong) ? $thongkeketquagv->thongkeketquagv__All_muc4($id_dot)->sum_so_luong : 0);
            $thongkeketquasv__Get_By_Id_Dot_Muc_5 = intval(isset($thongkeketquagv->thongkeketquagv__All_muc5($id_dot)->sum_so_luong) ? $thongkeketquagv->thongkeketquagv__All_muc5($id_dot)->sum_so_luong : 0);
            $sum_0 = $thongkeketquasv__Get_By_Id_Dot_Muc_1 + $thongkeketquasv__Get_By_Id_Dot_Muc_2 + $thongkeketquasv__Get_By_Id_Dot_Muc_3 + $thongkeketquasv__Get_By_Id_Dot_Muc_4 + $thongkeketquasv__Get_By_Id_Dot_Muc_5;
            $sum = $sum_0 == 0 ? 1 : $sum_0;
            $thongkeketquasv__Get_By_Id_Dot_Muc_1_per = round($thongkeketquasv__Get_By_Id_Dot_Muc_1 / $sum * 100);
            $thongkeketquasv__Get_By_Id_Dot_Muc_2_per = round($thongkeketquasv__Get_By_Id_Dot_Muc_2 / $sum * 100);
            $thongkeketquasv__Get_By_Id_Dot_Muc_3_per = round($thongkeketquasv__Get_By_Id_Dot_Muc_3 / $sum * 100);
            $thongkeketquasv__Get_By_Id_Dot_Muc_4_per = round($thongkeketquasv__Get_By_Id_Dot_Muc_4 / $sum * 100);
            $thongkeketquasv__Get_By_Id_Dot_Muc_5_per = round($thongkeketquasv__Get_By_Id_Dot_Muc_5 / $sum * 100);
        }
        if ($id_phannhom == 3) {
            $thongkeketquasv__Get_By_Id_Tenkhaosat = $thongkeketquasv->thongkeketquasv__Get_By_Id_Tenkhaosat($id_tenkhaosat);

            $thongkeketquasv__Get_By_Id_Dot_Muc_1 = intval(isset($thongkeketquasv->thongkeketquasv__All_muc1($id_dot)->sum_so_luong) ? $thongkeketquasv->thongkeketquasv__All_muc1($id_dot)->sum_so_luong : 0);
            $thongkeketquasv__Get_By_Id_Dot_Muc_2 = intval(isset($thongkeketquasv->thongkeketquasv__All_muc2($id_dot)->sum_so_luong) ? $thongkeketquasv->thongkeketquasv__All_muc2($id_dot)->sum_so_luong : 0);
            $thongkeketquasv__Get_By_Id_Dot_Muc_3 = intval(isset($thongkeketquasv->thongkeketquasv__All_muc3($id_dot)->sum_so_luong) ? $thongkeketquasv->thongkeketquasv__All_muc3($id_dot)->sum_so_luong : 0);
            $thongkeketquasv__Get_By_Id_Dot_Muc_4 = intval(isset($thongkeketquasv->thongkeketquasv__All_muc4($id_dot)->sum_so_luong) ? $thongkeketquasv->thongkeketquasv__All_muc4($id_dot)->sum_so_luong : 0);
            $thongkeketquasv__Get_By_Id_Dot_Muc_5 = intval(isset($thongkeketquasv->thongkeketquasv__All_muc5($id_dot)->sum_so_luong) ? $thongkeketquasv->thongkeketquasv__All_muc5($id_dot)->sum_so_luong : 0);
            $sum_0 = $thongkeketquasv__Get_By_Id_Dot_Muc_1 + $thongkeketquasv__Get_By_Id_Dot_Muc_2 + $thongkeketquasv__Get_By_Id_Dot_Muc_3 + $thongkeketquasv__Get_By_Id_Dot_Muc_4 + $thongkeketquasv__Get_By_Id_Dot_Muc_5;
            $sum = $sum_0 == 0 ? 1 : $sum_0;
            $thongkeketquasv__Get_By_Id_Dot_Muc_1_per = round($thongkeketquasv__Get_By_Id_Dot_Muc_1 / $sum * 100);
            $thongkeketquasv__Get_By_Id_Dot_Muc_2_per = round($thongkeketquasv__Get_By_Id_Dot_Muc_2 / $sum * 100);
            $thongkeketquasv__Get_By_Id_Dot_Muc_3_per = round($thongkeketquasv__Get_By_Id_Dot_Muc_3 / $sum * 100);
            $thongkeketquasv__Get_By_Id_Dot_Muc_4_per = round($thongkeketquasv__Get_By_Id_Dot_Muc_4 / $sum * 100);
            $thongkeketquasv__Get_By_Id_Dot_Muc_5_per = round($thongkeketquasv__Get_By_Id_Dot_Muc_5 / $sum * 100);
        }
    }
}



$labels = ["Không hài lòng", "Ít hài lòng", "Khá hài lòng", "Hài lòng", "Rất hài lòng"];
$data = [$thongkeketquasv__Get_By_Id_Dot_Muc_1, $thongkeketquasv__Get_By_Id_Dot_Muc_2, $thongkeketquasv__Get_By_Id_Dot_Muc_3, $thongkeketquasv__Get_By_Id_Dot_Muc_4, $thongkeketquasv__Get_By_Id_Dot_Muc_5];
$data_2 = [$thongkeketquasv__Get_By_Id_Dot_Muc_1_per, $thongkeketquasv__Get_By_Id_Dot_Muc_2_per, $thongkeketquasv__Get_By_Id_Dot_Muc_3_per, $thongkeketquasv__Get_By_Id_Dot_Muc_4_per, $thongkeketquasv__Get_By_Id_Dot_Muc_5_per];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!-- Latest compiled and minified CSS -->

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <!-- Content -->
    <section class=" form-control mt-2">

        <div class="row">
            <div class="col">
                <label for="">Chọn tên khảo sát (<?= count($tenkhaosat->tenkhaosat__Get_All()) ?>)</label>

                <select name="" id="" onchange="location.href = this.value" required class="form-control">
                    <option value="?req=trangchu&id_tenkhaosat=<?= $id_dot ?>">Chọn tên khảo sát</option>
                    <?php foreach ($tenkhaosat__Get_All as $item): ?>
                    <option <?= $item->id_tenkhaosat == $id_tenkhaosat ? "selected" : "" ?>
                        value="?req=trangchu&id_tenkhaosat=<?php echo $item->id_tenkhaosat ?>">
                        <?= $item->tenkhaosat0 ?>
                    </option>
                    <?php endforeach; ?>


                </select>

            </div>
            <div class="col">
                <label for="">Chọn đợt</label>
                <?php if (isset($_GET['id_tenkhaosat'])) : ?>

                <select name="" id="" onchange="location.href = this.value" required class="form-control">
                    <option value="">Chọn đợt</option>
                    <?php foreach ($dotkhaosat__Get_All as $item): ?>
                    <option <?= $item->id_dot == $id_dot ? "selected" : "" ?>
                        value="?req=trangchu&id_tenkhaosat=<?php echo $id_tenkhaosat ?>&id_dot=<?php echo $item->id_dot ?>"
                        <?= $id_dot == $item->id_dot ? "selected" : "" ?>>
                        <?= $item->tendot ?>
                    </option>
                    <?php endforeach; ?>
                </select>
                <?php endif; ?>
            </div>
            <div class="col">

                <label for="">Chọn nhóm</label>
                <?php if (isset($_GET['id_dot'])) : ?>

                <select name="" id="" onchange="location.href = this.value" required class="form-control">
                    <option value="">Chọn phân nhóm</option>
                    <option
                        value="?req=trangchu&id_tenkhaosat=<?php echo $id_tenkhaosat ?>&id_dot=<?= $id_dot ?>&id_phannhom=2"
                        <?= $id_phannhom == 2 ? "selected" : "" ?>>Giảng viên</option>
                    <option
                        value="?req=trangchu&id_tenkhaosat=<?php echo $id_tenkhaosat ?>&id_dot=<?= $id_dot ?>&id_phannhom=3"
                        <?= $id_phannhom == 3 ? "selected" : "" ?>>Sinh viên</option>
                </select>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="chart">
                    <canvas id="barChart"
                        style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
            </div>
            <div class="col">
                <div class="chart">
                    <canvas id="pieChart"
                        style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
            </div>
        </div>
    </section>
    <?php if (isset($_GET['id_phannhom'])) : ?>

    <?php if ($id_phannhom == 2): ?>
    <section>
        <h1>Thống kê kết quả</h1>
        <!-- Button to Open the Modal -->
        <table class="table table-dark table-hover" id="tablejs">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Khoa</th>
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

                </tr>
            </thead>
            <tbody>
                <?php $num = 0 ?>

                <?php foreach ($thongkeketquagv__Get_By_Id_Tenkhaosat as $item) : ?>
                <tr>
                    <td><?php echo ++$num; ?></td>
                    <td><?php echo $donvi->donvi__Get_By_Id($item->id_donvi)->tendonvi; ?></td>
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

                </tr>
                <?php endforeach ?>


            </tbody>
        </table>
    </section>

    <?php endif ?>



    <?php if ($id_phannhom == 3): ?>
    <section>
        <h1>Thống kê kết quả</h1>
        <!-- Button to Open the Modal -->

        <table class="table table-dark table-hover" id="tablejs">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Lớp học</th>
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

                </tr>
            </thead>
            <tbody>
                <?php $num = 0 ?>

                <?php foreach ($thongkeketquasv__Get_By_Id_Tenkhaosat as $item) : ?>
                <tr>
                    <td><?php echo ++$num; ?></td>
                    <td><?php echo $lophoc->lophoc__Get_By_Id($item->id_lophoc)->tenlophoc; ?></td>
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

                </tr>
                <?php endforeach ?>


            </tbody>
        </table>
        </div>
    </section>

    <?php endif ?>
    <?php endif ?>


    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <!-- ChartJS -->
    <script src="../assets/theme/plugins/chart.js/Chart.min.js"></script>
    <script>
    window.addEventListener('load', function() {

    });

    //- BAR CHART -
    //-------------
    var barChartCanvas = $('#barChart').get(0).getContext('2d')
    var barData = {
        labels: <?= json_encode($labels) ?>,
        datasets: [{
            label: "Số lượng",
            data: <?= json_encode($data) ?>,
            backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }]
    }
    var barOptions = {
        maintainAspectRatio: false,
        responsive: true,
    }
    new Chart(barChartCanvas, {
        type: 'bar',
        data: barData,
        options: barOptions
    });

    // //- pie CHART -
    // //-------------
    // // Get context with jQuery - using jQuery's .get() method.


    var donutChartCanvas = $('#pieChart').get(0).getContext('2d')
    var donutData = {
        labels: <?= json_encode($labels) ?>,
        datasets: [{
            label: "Tỷ lệ",
            data: <?= json_encode($data_2) ?>,
            backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }]
    }
    var donutOptions = {
        maintainAspectRatio: false,
        responsive: true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(donutChartCanvas, {
        type: 'pie',
        data: donutData,
        options: donutOptions
    })
    </script>

</html>