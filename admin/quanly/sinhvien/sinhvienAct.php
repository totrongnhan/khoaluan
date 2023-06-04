<?php

//userAct
session_start();
require("../../../models/getModel.php");
$sinhvien__Get_All = $sinhvien->sinhvien__Get_All();
if (isset($_GET["req"])) {
    switch ($_GET["req"]) {
        case "add":
            $ma_sinhvien = $_POST['ma_sinhvien'];
            $tensinhvien = $_POST['tensinhvien'];
            $gioitinh = $_POST['gioitinh'];
            $ngaysinh = $_POST['ngaysinh'];
            $email = $_POST['email'];
            $diachithuongtru = $_POST['diachithuongtru'];
            $diachilienlac = $_POST['diachilienlac'];
            $sdt1 = $_POST['sdt1'];
            $sdt2 = $_POST['sdt2'];
            $id_lophoc = $_POST['id_lophoc'];
            $status = $sinhvien->sinhvien_Add($ma_sinhvien, $tensinhvien, $gioitinh, $ngaysinh, $email, $diachithuongtru, $diachilienlac, $sdt1, $sdt2, $id_lophoc);
            if ($status) {
                header('Location: ../../index.php?req=lietkesinhvien&status=success');
            } else {
                header('Location: ../../index.php?req=lietkesinhvien&status=fail');
            }
            break;

        case "update":
            $id_sinhvien = $_POST['id_sinhvien'];
            $ma_sinhvien = $_POST['ma_sinhvien'];
            $tensinhvien = $_POST['tensinhvien'];
            $gioitinh = $_POST['gioitinh'];
            $ngaysinh = $_POST['ngaysinh'];
            $email = $_POST['email'];
            $diachithuongtru = $_POST['diachithuongtru'];
            $diachilienlac = $_POST['diachilienlac'];
            $sdt1 = $_POST['sdt1'];
            $sdt2 = $_POST['sdt2'];
            $id_lophoc = $_POST['id_lophoc'];
            $status = $sinhvien->sinhvien__Update($id_sinhvien, $ma_sinhvien, $tensinhvien, $gioitinh, $ngaysinh, $email, $diachithuongtru, $diachilienlac, $sdt1, $sdt2, $id_lophoc,);
            if ($status) {
                header('Location: ../../index.php?req=lietkesinhvien&status=success');
            } else {
                header('Location: ../../index.php?req=lietkesinhvien&status=fail');
            }
            break;
        case "delete":
            $id_sinhvien = $_GET['id_sinhvien'];
            $status = $sinhvien->sinhvien__Delete($id_sinhvien);
            if ($status) {
                header('Location: ../../index.php?req=lietkesinhvien&status=success');
            } else {
                header('Location: ../../index.php?req=lietkesinhvien&status=fail');
            }
            break;
    }
}
?>




