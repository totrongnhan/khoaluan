<?php

//userAct
session_start();
require("../../../models/getModel.php");
$doituongapdung__Get_All = $doituongapdung->doituongapdung__Get_All();
if (isset($_GET["req"])) {
    switch ($_GET["req"]) {
        case "add":
            $status = 0;
            $tendot = $_POST['tendot'];
            $mota = $_POST['mota'];
            $thoigianbatdau = $_POST['thoigianbatdau'];
            $thoigianketthuc = $_POST['thoigianketthuc'];
            $id_hocky = $_POST['id_hocky'];
            
            $id_dot = $dotkhaosat->dotkhaosat_Add($tendot, $mota, $thoigianbatdau, $thoigianketthuc, $id_hocky);


            $id_tenkhaosat = $_POST['id_tenkhaosat'];
            $id_phannhom = $_POST['id_phannhom'];

            $id_apdung = $doituongapdung->doituongapdung_Add($id_dot, $id_tenkhaosat, $id_phannhom);


            if ($id_phannhom == 3) {
                $sinhvien__Get_All = $sinhvien->sinhvien__Get_All();
                foreach ($sinhvien__Get_All as $s) {
                    $id_doituong = $s->id_sinhvien;
                    $ketqua = "";
                    $ngaythuchien = date('Y-M-D');

                    $status .= $phieukhaosat->phieukhaosat_Add($id_apdung, $id_doituong, $ketqua, $ngaythuchien);

                }

            }




            if ($status == 0) {
                header('Location: ../../index.php?req=taophieu&status=success');
            } else {
                header('Location: ../../index.php?req=taophieu&status=fail');
            }



        case "update":
            $id_apdung = $_POST['id_apdung'];
            $id_dot = $_POST['id_dot'];
            $id_mauphieu = $_POST['id_mauphieu'];
            $id_Phan_Nhom = $_POST['id_Phan_Nhom'];
            $status = $doituongapdung->doituongapdung__Update($id_apdung, $id_dot, $id_mauphieu, $id_Phan_Nhom);
            if ($status) {
                header('Location: ../../index.php?req=lietkedoituongapdung&status=fail');
            } else {
                header('Location: ../../index.php?req=lietkedoituongapdung&status=success');
            }
            break;
        case "delete":
            $id_apdung = $_GET['id_apdung'];
            $status = $doituongapdung->doituongapdung__Delete($id_apdung);
            if ($status) {
                header('Location: ../../index.php?req=lietkedoituongapdung&status=fail');
            } else {
                header('Location: ../../index.php?req=lietkedoituongapdung&status=success');
            }
            break;
    }
}
?>