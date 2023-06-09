<?php

//userAct
session_start();
require("../../../models/getModel.php");
$phieukhaosat__Get_All = $phieukhaosat->phieukhaosat__Get_All();
if (isset($_GET["req"])) {
    switch ($_GET["req"]) {
        case "add":
            $id_apdung = $_POST['id_apdung'];
            $id_doituong = $_POST['id_doituong'];
            $ketqua = $_POST['ketqua'];
            $ngaythuchien = $_POST['ngaythuchien'];
            $status = $phieukhaosat->phieukhaosat_Add($id_apdung, $id_doituong, $ketqua, $ngaythuchien);
            if ($status) {
                header('Location: ../../index.php?req=lietkephieukhaosat&status=success');
            } else {
                header('Location: ../../index.php?req=lietkephieukhaosat&status=fail');
            }
            break;

        case "update":
            $id_phieu = $_POST['id_phieu'];
            $id_apdung = $_POST['id_apdung'];
            $id_doituong = $_POST['id_doituong'];
            $ketqua = $_POST['ketqua'];
            $ngaythuchien = $_POST['ngaythuchien'];
            $status = $phieukhaosat->phieukhaosat__Update($id_phieu, $id_apdung, $id_doituong, $ketqua, $ngaythuchien);
            if ($status) {
                header('Location: ../../index.php?req=lietkephieukhaosat&status=success');
            } else {
                header('Location: ../../index.php?req=lietkephieukhaosat&status=fail');
            }
            break;
        case "delete":
            $id_phieu = $_GET['id_phieu'];          
            $status = $phieukhaosat->phieukhaosat__Delete($id_phieu);
            if ($status) {
                header('Location: ../../index.php?req=lietkephieukhaosat&status=success');
            } else {
                header('Location: ../../index.php?req=lietkephieukhaosat&status=fail');
            }
            break;   
    }
}
?>




