<?php

//userAct
session_start();
require("../../../models/getModel.php");
$lophoc__Get_All = $lophoc->lophoc__Get_All();
if (isset($_GET["req"])) {
    switch ($_GET["req"]) {
        case "add":
            $tenlophoc = $_POST['tenlophoc'];
            $mota = $_POST['mota'];
            $id_nganhhoc = $_POST['id_nganhhoc'];
            $id_khoahoc = $_POST['id_khoahoc'];
            $status = $lophoc->lophoc_Add($tenlophoc, $mota, $id_nganhhoc, $id_khoahoc);
            if ($status) {
                header('Location: ../../index.php?req=lietkelophoc&status=fail');
            } else {
                header('Location: ../../index.php?req=lietkelophoc&status=success');
            }
            break;

        case "update":
            $id_lophoc = $_POST['id_lophoc'];
            $tenlophoc = $_POST['tenlophoc'];
            $mota = $_POST['mota'];
            $id_nganhhoc = $_POST['id_nganhhoc'];
            $id_khoahoc = $_POST['id_khoahoc'];
            $status = $lophoc->lophoc__Update($id_lophoc, $tenlophoc, $mota, $id_nganhhoc, $id_khoahoc);
             if ($status) {
                header('Location: ../../index.php?req=lietkelophoc&status=fail');
            } else {
                header('Location: ../../index.php?req=lietkelophoc&status=success');
            }
            break;
        case "delete":
            $id_lophoc = $_GET['id_lophoc'];          
            $status = $lophoc->lophoc__Delete($id_lophoc);
            if ($status) {
                header('Location: ../../index.php?req=lietkelophoc&status=fail');
            } else {
                header('Location: ../../index.php?req=lietkelophoc&status=success');
            }
            break;   
    }
}
?>




