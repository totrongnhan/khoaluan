<?php

//userAct
session_start();
require("../../../models/getModel.php");
$hocky__Get_All = $hocky->hocky__Get_All();
if (isset($_GET["req"])) {
    switch ($_GET["req"]) {
        case "add":
            $tenhocky = $_POST['tenhocky'];
            $mota = $_POST['mota'];
            $id_namhoc = $_POST['id_namhoc'];
            $status = $hocky->hocky_Add($tenhocky, $mota, $id_namhoc);
            if ($status) {
                header('Location: ../../index.php?req=lietkehocky&status=success');
            } else {
                header('Location: ../../index.php?req=lietkehocky&status=fail');
            }
            break;

        case "update":
            $id_hocky = $_POST['id_hocky'];
            $tenhocky = $_POST['tenhocky'];
            $mota = $_POST['mota'];
            $id_namhoc = $_POST['id_namhoc'];
            $status = $hocky->hocky__Update($id_hocky, $tenhocky, $mota, $id_namhoc);
            if ($status) {
                header('Location: ../../index.php?req=lietkehocky&status=success');
            } else {
                header('Location: ../../index.php?req=lietkehocky&status=fail');
            }
            break;
        case "delete":
            $id_hocky = $_GET['id_hocky'];          
            $status = $hocky->hocky__Delete($id_hocky);
            if ($status) {
                header('Location: ../../index.php?req=lietkehocky&status=success');
            } else {
                header('Location: ../../index.php?req=lietkehocky&status=fail');
            }
            break;   
    }
}
?>




