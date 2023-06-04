<?php

//userAct
session_start();
require("../../../models/getModel.php");
$dotkhaosat__Get_All = $dotkhaosat->dotkhaosat__Get_All();
if (isset($_GET["req"])) {
    switch ($_GET["req"]) {
        case "add":
            $tendot = $_POST['tendot'];
            $mota = $_POST['mota'];
            $thoigianbatdau = $_POST['thoigianbatdau'];
            $thoigianketthuc = $_POST['thoigianketthuc'];
            $id_hocky = $_POST['id_hocky'];
            
            $status = $dotkhaosat->dotkhaosat_Add($tendot, $mota, $thoigianbatdau, $thoigianketthuc, $id_hocky);
            if ($status) {
                header('Location: ../../index.php?req=lietkedotkhaosat&status=success');
            } else {
                header('Location: ../../index.php?req=lietkedotkhaosat&status=fail');
            }
            break;

        case "update":
            $id_dot = $_POST['id_dot'];
            $tendot = $_POST['tendot'];
            $mota = $_POST['mota'];
            $thoigianbatdau = $_POST['thoigianbatdau'];
            $thoigianketthuc = $_POST['thoigianketthuc'];
            $id_hocky = $_POST['id_hocky'];
            
            $status = $dotkhaosat->dotkhaosat__Update($id_dot, $tendot, $mota, $thoigianbatdau, $thoigianketthuc, $id_hocky);
            if ($status) {
                header('Location: ../../index.php?req=lietkedotkhaosat&status=success');
            } else {
                header('Location: ../../index.php?req=lietkedotkhaosat&status=fail');
            }
            break;
        case "delete":
            $id_dot = $_GET['id_dot'];          
            $status = $dotkhaosat->dotkhaosat__Delete($id_dot);
            if ($status) {
                header('Location: ../../index.php?req=lietkedotkhaosat&status=success');
            } else {
                header('Location: ../../index.php?req=lietkedotkhaosat&status=fail');
            }
            break;   
    }
}
?>




