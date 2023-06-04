<?php

//userAct
session_start();
require("../../../models/getModel.php");
$nhomcauhoi__Get_All = $nhomcauhoi->nhomcauhoi__Get_All();
if (isset($_GET["req"])) {
    switch ($_GET["req"]) {
        case "add":
            $tennhomcauhoi = $_POST['tennhomcauhoi'];
            $mota = $_POST['mota'];
            $thutu = $_POST['thutu'];
            $id_tenkhaosat = $_POST['id_tenkhaosat'];
            $status = $nhomcauhoi->nhomcauhoi_Add($tennhomcauhoi, $mota, $thutu, $id_tenkhaosat);
            if ($status) {
                header('Location: ../../index.php?req=lietkenhomcauhoi&status=success');
            } else {
                header('Location: ../../index.php?req=lietkenhomcauhoi&status=fail');
            }
            break;

        case "update":
            $id_nhomcauhoi = $_POST['id_nhomcauhoi'];
            $tennhomcauhoi = $_POST['tennhomcauhoi'];
            $mota = $_POST['mota'];
            $thutu = $_POST['thutu'];
            $id_tenkhaosat = $_POST['id_tenkhaosat'];
            $status = $nhomcauhoi->nhomcauhoi__Update($id_nhomcauhoi, $tennhomcauhoi, $mota, $thutu, $id_tenkhaosat);
            if ($status) {
                header('Location: ../../index.php?req=lietkenhomcauhoi&status=success');
            } else {
                header('Location: ../../index.php?req=lietkenhomcauhoi&status=fail');
            }
            break;
        case "delete":
            $id_nhomcauhoi = $_GET['id_nhomcauhoi'];          
            $status = $nhomcauhoi->nhomcauhoi__Delete($id_nhomcauhoi);
            if ($status) {
                header('Location: ../../index.php?req=lietkenhomcauhoi&status=success');
            } else {
                header('Location: ../../index.php?req=lietkenhomcauhoi&status=fail');
            }
            break;   
    }
}
?>




