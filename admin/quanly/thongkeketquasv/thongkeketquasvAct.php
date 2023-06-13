<?php

//userAct
session_start();
require("../../../models/getModel.php");


if (isset($_GET["req"])) {
    switch ($_GET["req"]) {
        case "add":

            $status = 0;
            $id_dot = $_POST["id_dot"];

            $thongkeketquasv__Get_All = $thongkeketquasv->thongkeketquasv__Get_All();
$thongkeketquasv__Get_By_Id_Phieu = $thongkeketquasv->thongkeketquasv__Get_By_Id_Phieu($id_lophoc, $id_dot, $id_sinhvien);
            $phieukhaosat__Get_By_Id_phieudot = $phieukhaosat->phieukhaosat__Get_By_Id_phieudot($id_dot);
            
            if(count($phieukhaosat__Get_By_Id_phieudot) > 0){
                foreach ($phieukhaosat__Get_By_Id_phieudot as $item) {
                    $kohl = 0;
                    $ithl = 0;
                    $khahl = 0;
                    $hl = 0;
                    $rathl = 0;
                    $per_kohl = 0;
                    $per_ithl = 0;
                    $per_khahl = 0;
                    $per_hl = 0;
                    $per_rathl = 0;
                    $sum = 0;
                    $arr = [];

                    $lophoc__Get_By_Id_sinhvien = $lophoc->lophoc__Get_By_Id_sinhvien($item->id_doituong);



            
                     $id_phieu = $item->id_phieu;
                     $id_lophoc = $lophoc__Get_By_Id_sinhvien->id_lophoc;
                     $id_sinhvien = $lophoc__Get_By_Id_sinhvien->id_sinhvien;
                     $ma_sinhvien = $lophoc__Get_By_Id_sinhvien->ma_sinhvien;
                     $tensinhvien = $lophoc__Get_By_Id_sinhvien->tensinhvien;




                    if($item->ketqua != "" || $item->ketqua !=null){
                        $arr = $phieukhaosat->phieukhaosat__Get_By_Id_chuoi($item->ketqua);
                    };
                    foreach ($arr as $item_1) {
                        echo $item_1 . " \n ";
                        if($item_1 == 1) {$kohl ++; $sum++;}
                        else if($item_1 == 2) {$ithl ++ ; $sum++;}
                        else if($item_1 == 3) {$khahl ++ ; $sum++;}
                        else if($item_1 == 4) {$hl ++ ; $sum++;}
                        else if($item_1 == 5) {$rathl ++ ; $sum++;}
                        else {continue;}
                    }

                    $sum_per = $sum == 0 ? 1 : $sum;

                    $per_kohl = round($kohl / $sum_per *100);
                    $per_ithl = round($ithl / $sum_per *100);
                    $per_khahl = round($khahl / $sum_per *100);
                    $per_hl = round($hl / $sum_per *100);
                    $per_rathl = round($rathl / $sum_per *100);

                    $status .= $thongkeketquasv->thongkeketquasv_Add($id_dot, $id_phieu, $id_lophoc, $id_sinhvien, $ma_sinhvien, $tensinhvien, $kohl, $ithl, $khahl, $hl, $rathl, $per_kohl, $per_ithl, $per_khahl, $per_hl, $per_rathl);
                }

    
            }

            if($status != 0){
                header("Location: ../../index.php?req=thongkeketquasv&id_dot=$id_dot&status=success");
            }else {
                header("Location: ../../index.php?req=thongkeketquasv&id_dot=$id_dot&status=fail");
            }
            break;

        case "update":
            $id_dot = $_POST["id_dot"];
            $kohl = $_POST["kohl"];
            $ithl = $_POST["ithl"];
            $khahl = $_POST["khahl"];
            $hl = $_POST["hl"];
            $rathl = $_POST["rathl"];
            $per_kohl = $_POST["per_kohl"];
            $per_ithl = $_POST["per_ithl"];
            $per_khahl = $_POST["per_khahl"];
            $per_hl = $_POST["per_hl"];
            $per_rathl = $_POST["per_rathl"];
            $status = $ketqua->ketqua_Add($id, $id_dot, $kohl, $ithl, $khahl, $hl, $rathl, $per_kohl, $per_ithl, $per_khahl, $per_hl, $per_rathl);
            if ($status) {
                header("Location: ../../index.php?req=thongkeketquasv&id_dot=$id_dot&status=success");
            } else {
                header("Location: ../../index.php?req=thongkeketquasv&id_dot=$id_dot&status=fail");
            }
            break;
        case "delete":
            $id = $_GET["id"];
            $status = $thongkeketquasv->thongkeketquasv__Delete($id);
            if ($status) {
                header("Location: ../../index.php?req=thongkeketquasv&status=success");
            } else {
                header("Location: ../../index.php?req=thongkeketquasv&status=fail");
            }
            break;
    }
}
?>




