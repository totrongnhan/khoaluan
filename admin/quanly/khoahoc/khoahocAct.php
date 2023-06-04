<?php

//userAct
session_start();
require("../../../models/getModel.php");
$khoahoc__Get_All = $khoahoc->khoahoc__Get_All();
if (isset($_GET["req"])) {
    switch ($_GET["req"]) {
        case "add":
            $tenkhoahoc = $_POST['tenkhoahoc'];
            $mota = $_POST['mota'];            
            $status = $khoahoc->khoahoc_Add($tenkhoahoc, $mota,);
            if ($status) {
                header('Location: ../../index.php?req=lietkekhoahoc&status=success');
            } else {
                header('Location: ../../index.php?req=lietkekhoahoc&status=fail');
            }
            break;

        case "update":
            $id_khoahoc = $_POST['id_khoahoc'];
            $tenkhoahoc = $_POST['tenkhoahoc'];
            $mota = $_POST['mota'];           
            $status = $khoahoc->khoahoc__Update($id_khoahoc, $tenkhoahoc, $mota,);
            if ($status) {
                header('Location: ../../index.php?req=lietkekhoahoc&status=success');
            } else {
                header('Location: ../../index.php?req=lietkekhoahoc&status=fail');
            }
            break;
        case "delete":
            $id_khoahoc = $_GET['id_khoahoc'];          
            $status = $khoahoc->khoahoc__Delete($id_khoahoc);
            if ($status) {
                header('Location: ../../index.php?req=lietkekhoahoc&status=success');
            } else {
                header('Location: ../../index.php?req=lietkekhoahoc&status=fail');
            }
            break;   
    }
}
?>




