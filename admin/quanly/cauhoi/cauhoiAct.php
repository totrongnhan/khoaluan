<?php

//userAct
session_start();
require("../../../models/getModel.php");
$cauhoi__Get_All = $cauhoi->cauhoi__Get_All();
if (isset($_GET["req"])) {
    switch ($_GET["req"]) {
        case "add":
            $tencauhoi = $_POST['tencauhoi'];
            $mota = $_POST['mota'];
            $thutu = $_POST['thutu'];
            $id_nhom = $_POST['id_nhom'];
            $is_text = $_POST['is_text'];
            $status = $cauhoi->cauhoi_Add($tencauhoi, $mota, $thutu, $id_nhom, $is_text);
            if ($status) {
                header('Location: ../../index.php?req=lietkecauhoi&status=success');
            } else {
                header('Location: ../../index.php?req=lietkecauhoi&status=fail');
            }
            break;

        case "update":
            $id_cauhoi = $_POST['id_cauhoi'];
            $tencauhoi = $_POST['tencauhoi'];
            $mota = $_POST['mota'];
            $thutu = $_POST['thutu'];
            $id_nhom = $_POST['id_nhom'];
            $is_text = $_POST['is_text'];
            $status = $cauhoi->cauhoi__Update($id_cauhoi, $tencauhoi, $mota, $thutu, $id_nhom, $is_text);
            if ($status) {
                header('Location: ../../index.php?req=lietkecauhoi&status=success');
            } else {
                header('Location: ../../index.php?req=lietkecauhoi&status=fail');
            }
            break;
        case "delete":
            $id_cauhoi = $_GET['id_cauhoi'];          
            $status = $cauhoi->cauhoi__Delete($id_cauhoi);
            if ($status) {
                header('Location: ../../index.php?req=lietkecauhoi&status=success');
            } else {
                header('Location: ../../index.php?req=lietkecauhoi&status=fail');
            }
            break;   
    }
}
?>




