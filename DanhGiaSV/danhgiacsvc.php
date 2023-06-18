<?php
session_start();

require("../models/getModel.php");
$id_phieu = $_GET["id"];

$phieukhaosat__Get_By_Id = $phieukhaosat->phieukhaosat__Get_By_Id($id_phieu);

$id_sinh_vien = $_SESSION['user']->id_nguoidung;
$sinhvien__Get_By_Id = $sinhvien->sinhvien__Get_By_Id($id_sinh_vien);

    if (isset($_POST['ketqua'])) {
        $id_phieu = $_POST["id_phieu"];
        $kq_ks = $_POST["ketqua"];
        $kq_is_text = $_POST["kq_is_text"];
        $kq = "";
        foreach ($kq_ks as $item) {
            $subArray = implode('|', $item);
            $kq .= $subArray . "|";
        }

        foreach ($kq_is_text as $item) {
            $kq .= $item . "|";
        }
       
        $status = $phieukhaosat->phieukhaosat__Update_KQ($id_phieu, $kq);
        
        if ($status) {
            echo"<script>location.href='danhgia.php?status_dg=success'</script>";
            } else {
    
                echo"<script>location.href='danhgia.php?status_dg=fail'</script>";
            }
        }            
            
?>

<!DOCTYPE html>
<html>

<head>

    <title>Khảo sát đánh giá cho sv</title>
    <meta charset="utf-8">
    <script type="text/javascript" src="../assets/vendor/jquery/jquery.min.js"></script>
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="../assets/css/user.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
    .content {
        height: 100vh;
        background: crimson;
    }
    </style>
</head>
<?php
        // include('../include/header_1.php');
        ?>
<div class="content m-2 h-100">
    <form class="form" action="" method="post" enctype="multipart/form-data">

        <input type="hidden" name="id_phieu" value="<?=$phieukhaosat__Get_By_Id->id_phieu?>">
        <div class="card overflow-auto w-100">
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        <h3 class="card-title text-center font-weight-bold w-100 mt-3 mb-3">
                            <?=$phieukhaosat__Get_By_Id->tenkhaosat0?></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h3 class="card-title">Mã sinh viên: <?=$sinhvien__Get_By_Id->ma_sinhvien?></h3>
                    </div>
                    <div class="col">

                        <h3 class="card-title">Tên sinh viên: <?=$sinhvien__Get_By_Id->tensinhvien?></h3>
                    </div>
                </div>


                <hr>
            </div>
            <!-- /.card-header -->
            <div class="card-body responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="w-10  text-center vertical-align-middle"></th>
                            <th class="w-90  text-center vertical-align-middle no-padding">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="w-90 no-border full vertical-align-middle">
                                                Nội dung chấm điểm
                                            </td>
                                            <td class="w-10 no-border full vertical-align-middle">
                                                Không hài lòng
                                            </td>
                                            <td class="w-10 no-border full vertical-align-middle">
                                                Ít hài lòng
                                            </td>
                                            <td class="w-10 no-border full vertical-align-middle">
                                                Khá hài lòng
                                            </td>
                                            <td class="w-10 no-border full vertical-align-middle">
                                                Hài lòng
                                            </td>
                                            <td class="w-10 no-border full vertical-align-middle">
                                                Rất hài lòng
                                            </td>
                                    </tbody>
                                </table>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0;?>

                        <tr>
                            <td class="vertical-align-middle">
                                <table class="table no-border text-center">
                                    <tbody>
                                        <tr>
                                            <th class="no-border-colo vertical-align-middle">
                                                <?=$tenkhaosat->tenkhaosat__Get_By_Id($phieukhaosat__Get_By_Id->id_tenkhaosat)->tenkhaosat0?>
                                            </th>
                                        </tr>

                                    </tbody>
                                </table>
                            </td>

                            <td class="no-padding">
                                <?php foreach($nhomcauhoi->nhomcauhoi__Get_By_Id_tenkhaosat($phieukhaosat__Get_By_Id->id_tenkhaosat) as $item_2): ?>

                                <table class="w-100 table-striped">
                                    <tbody>
                                        <tr class="no-border">
                                            <th class="w-100 no-border full vertical-align-middle border-bottom-top">
                                                <?=$nhomcauhoi->nhomcauhoi__Get_By_Id($item_2->id_nhomcauhoi)->tennhomcauhoi?>
                                            </th>

                                        </tr>
                                    </tbody>
                                </table>
                                <?php foreach($cauhoi->cauhoi__Get_By_Id_nhom($item_2->id_nhomcauhoi) as $item_3): ?>
                                <?php $dw = $item_3->tencauhoi?>

                                <table class="w-100">
                                    <tbody>
                                        <tr>
                                            <td class="w-90 no-border full  h-0 ">
                                                <?=$dw?>
                                            </td>
                                            <td class="w-10 h-0 no-border full">
                                                Không hài lòng
                                            </td>
                                            <td class="w-10 h-0 no-border full">
                                                Ít hài lòng
                                            </td>
                                            <td class="w-10 h-0 no-border full">
                                                Khá hài lòng
                                            </td>
                                            <td class="w-10 h-0 no-border full">
                                                Hài lòng
                                            </td>
                                            <td class="w-10 h-0 no-border full">
                                                Rất hài lòng
                                            </td>
                                        </tr>

                                        <tr class="border-bottom">
                                            <?php if($item_3->is_text != 1):?>
                                            <td class="w-50 no-border full vertical-align-middle">
                                                - <?=$cauhoi->cauhoi__Get_By_Id($item_3->id_cauhoi)->tencauhoi?>
                                            </td>
                                            <td class="w-10 no-border full vertical-align-middle">
                                                <label class="" for="ketqua[<?=$item_3->id_cauhoi?>][]">
                                                    <input type="radio" class="form-check-input   kq_ks_1"
                                                        id="ketqua[<?=$item_3->id_cauhoi?>][]"
                                                        name="ketqua[<?=$item_3->id_cauhoi?>][]" required value="1"
                                                        <?=isset($phieukhaosat->phieukhaosat__Get_By_Id_chuoi($phieukhaosat__Get_By_Id->ketqua)[$i]) ? ($phieukhaosat->phieukhaosat__Get_By_Id_chuoi($phieukhaosat__Get_By_Id->ketqua)[$i] == 1 ? "checked" : "") : ""?>>

                                                </label>
                                            </td>
                                            <td class="w-10 no-border full vertical-align-middle">
                                                <label class="" for="ketqua_2[<?=$item_3->id_cauhoi?>][]">
                                                    <input type="radio" class="form-check-input   kq_ks_2"
                                                        id="ketqua_2[<?=$item_3->id_cauhoi?>][]"
                                                        name="ketqua[<?=$item_3->id_cauhoi?>][]" required value="2"
                                                        <?=isset($phieukhaosat->phieukhaosat__Get_By_Id_chuoi($phieukhaosat__Get_By_Id->ketqua)[$i]) ? ($phieukhaosat->phieukhaosat__Get_By_Id_chuoi($phieukhaosat__Get_By_Id->ketqua)[$i] == 2 ? "checked" : "") : ""?>>

                                                </label>
                                            </td>
                                            <td class="w-10 no-border full vertical-align-middle">
                                                <label class="" for="ketqua_3[<?=$item_3->id_cauhoi?>][]">
                                                    <input type="radio" class="form-check-input   kq_ks_3"
                                                        id="ketqua_3[<?=$item_3->id_cauhoi?>][]"
                                                        name="ketqua[<?=$item_3->id_cauhoi?>][]" required value="3"
                                                        <?=isset($phieukhaosat->phieukhaosat__Get_By_Id_chuoi($phieukhaosat__Get_By_Id->ketqua)[$i]) ? ($phieukhaosat->phieukhaosat__Get_By_Id_chuoi($phieukhaosat__Get_By_Id->ketqua)[$i] == 3 ? "checked" : "") : ""?>>

                                                </label>
                                            </td>
                                            <td class="w-10 no-border full vertical-align-middle">
                                                <label class="" for="ketqua_4[<?=$item_3->id_cauhoi?>][]">
                                                    <input type="radio" class="form-check-input   kq_ks_4"
                                                        id="ketqua_4[<?=$item_3->id_cauhoi?>][]"
                                                        name="ketqua[<?=$item_3->id_cauhoi?>][]" required value="4"
                                                        <?=isset($phieukhaosat->phieukhaosat__Get_By_Id_chuoi($phieukhaosat__Get_By_Id->ketqua)[$i]) ? ($phieukhaosat->phieukhaosat__Get_By_Id_chuoi($phieukhaosat__Get_By_Id->ketqua)[$i] == 4 ? "checked" : "") : ""?>>

                                                </label>
                                            </td>
                                            <td class="w-10 no-border full vertical-align-middle">
                                                <label class="" for="ketqua_5[<?=$item_3->id_cauhoi?>][]">
                                                    <input type="radio" class="form-check-input   kq_ks_5"
                                                        id="ketqua_5[<?=$item_3->id_cauhoi?>][]"
                                                        name="ketqua[<?=$item_3->id_cauhoi?>][]" required value="5"
                                                        <?=isset($phieukhaosat->phieukhaosat__Get_By_Id_chuoi($phieukhaosat__Get_By_Id->ketqua)[$i]) ? ($phieukhaosat->phieukhaosat__Get_By_Id_chuoi($phieukhaosat__Get_By_Id->ketqua)[$i] == 5 ? "checked" : "") : ""?>>

                                                </label>
                                            </td>
                                            <?php else:?>
                                            <b class="w-100 no-border full vertical-align-middle m-2">
                                                <textarea class="form-control" name="kq_is_text[]"
                                                    placeholder="Thêm góp ý vào đây"><?=isset($phieukhaosat->phieukhaosat__Get_By_Id_chuoi($phieukhaosat__Get_By_Id->ketqua)[$i]) ? ($phieukhaosat->phieukhaosat__Get_By_Id_chuoi($phieukhaosat__Get_By_Id->ketqua)[$i]): "" ?></textarea>
                                            </b>
                                            <?php endif?>

                                        </tr>

                                    </tbody>
                                </table>
                                <?php $i++?>
                                <?php endforeach?>

                                <?php endforeach?>

                            </td>
                        </tr>


                    </tbody>

                </table>
            </div>
            <div class="card-footer w-100">
                <input type="submit" value="Cập nhật" class="btn btn-lg btn-danger" id="submit">
            </div>
        </div>

    </form>
</div>
</body>


</html>