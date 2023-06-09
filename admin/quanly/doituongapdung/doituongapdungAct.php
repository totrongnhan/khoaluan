<?php

//userAct
session_start();
require("../../../models/getModel.php");
$doituongapdung__Get_All = $doituongapdung->doituongapdung__Get_All();
if (isset($_GET["req"])) {
    switch ($_GET["req"]) {
        case "add":          
            $id_dot = $_POST['id_dot'];
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
            if ($id_phannhom == 2) {
                $giangvien__Get_All = $giangvien->giangvien__Get_All();
                foreach ($giangvien__Get_All as $s) {
                    $id_doituong = $s->id_giangvien;
                    $ketqua = "";
                    $ngaythuchien = date('Y-M-D');

                    $status .= $phieukhaosatgv->phieukhaosatgv_Add($id_apdung, $id_doituong, $ketqua, $ngaythuchien);

                }

            }
            
            if ($status) {
                header('Location: ../../index.php?req=lietkedoituongapdung&status=success');
            } else {
                header('Location: ../../index.php?req=lietkedoituongapdung&status=fail');
            }
            break;

        case "update":
            $id_apdung = $_POST['id_apdung'];
            $id_dot = $_POST['id_dot'];
            $id_tenkhaosat = $_POST['id_tenkhaosat'];
            $id_phannhom = $_POST['id_phannhom'];
            $status = $doituongapdung->doituongapdung__Update($id_apdung, $id_dot, $id_tenkhaosat, $id_phannhom);
            if ($status) {
                header('Location: ../../index.php?req=lietkedoituongapdung&status=success');
            } else {
                header('Location: ../../index.php?req=lietkedoituongapdung&status=fail');
            }
            break;
        case "delete":
            $id_apdung = $_GET['id_apdung'];          
            $status = $doituongapdung->doituongapdung__Delete($id_apdung);
            if ($status) {
                header('Location: ../../index.php?req=lietkedoituongapdung&status=success');
            } else {
                header('Location: ../../index.php?req=lietkedoituongapdung&status=fail');
            }
            break;   
    }
}
?>




