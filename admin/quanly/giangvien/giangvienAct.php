<?php

//userAct
session_start();
require("../../../models/getModel.php");
$giangvien__Get_All = $giangvien->giangvien__Get_All();
if (isset($_GET["req"])) {
    switch ($_GET["req"]) {
        case "add":
            $ma_giangvien = $_POST['ma_giangvien'];
            $tengiangvien = $_POST['tengiangvien'];
            $gioitinh = $_POST['gioitinh'];
            $ngaysinh = $_POST['ngaysinh'];
            $email = $_POST['email'];
            $diachithuongtru = $_POST['diachithuongtru'];
            $diachilienlac = $_POST['diachilienlac'];
            $sdt1 = $_POST['sdt1'];
            $sdt2 = $_POST['sdt2'];
            $id_donvi = $_POST['id_donvi'];
            $id_trinhdo = $_POST['id_trinhdo'];
            $status = $giangvien->giangvien_Add($ma_giangvien, $tengiangvien, $gioitinh, $ngaysinh, $email, $diachithuongtru, $diachilienlac, $sdt1, $sdt2, $id_donvi, $id_trinhdo);
            if ($status) {
                header('Location: ../../index.php?req=lietkegiangvien&status=success');
            } else {
                header('Location: ../../index.php?req=lietkegiangvien&status=fail');
            }
            break;

        case "update":
            $id_giangvien = $_POST['id_giangvien'];
            $ma_giangvien = $_POST['ma_giangvien'];
            $tengiangvien = $_POST['tengiangvien'];
            $gioitinh = $_POST['gioitinh'];
            $ngaysinh = $_POST['ngaysinh'];
            $email = $_POST['email'];
            $diachithuongtru = $_POST['diachithuongtru'];
            $diachilienlac = $_POST['diachilienlac'];
            $sdt1 = $_POST['sdt1'];
            $sdt2 = $_POST['sdt2'];
            $id_donvi = $_POST['id_donvi'];
            $id_trinhdo = $_POST['id_trinhdo'];
            $status = $giangvien->giangvien__Update($id_giangvien, $ma_giangvien, $tengiangvien, $gioitinh, $ngaysinh, $email, $diachithuongtru, $diachilienlac, $sdt1, $sdt2, $id_donvi, $id_trinhdo,);
            if ($status) {
                header('Location: ../../index.php?req=lietkegiangvien&status=success');
            } else {
                header('Location: ../../index.php?req=lietkegiangvien&status=fail');
            }
            break;
        case "delete":
            $id_giangvien = $_GET['id_giangvien'];
            $status = $giangvien->giangvien__Delete($id_giangvien);
            if ($status) {
                header('Location: ../../index.php?req=lietkegiangvien&status=success');
            } else {
                header('Location: ../../index.php?req=lietkegiangvien&status=fail');
            }
            break;
    }
}
?>




