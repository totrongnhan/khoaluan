<?php

//userAct
session_start();
require("../../../models/getModel.php");
$phanquyen__Get_All = $phanquyen->phanquyen__Get_All();
if (isset($_GET["req"])) {
    switch ($_GET["req"]) {
        case "add":
            $tenphanquyen = $_POST['tenphanquyen'];
            $mota = $_POST['mota'];
            $status = $phanquyen->phanquyen_Add($tenphanquyen, $mota,);
            if ($status) {
                header('Location: ../../index.php?req=lietkephanquyen&status=fail');
            } else {
                header('Location: ../../index.php?req=lietkephanquyen&status=success');
            }
            break;

        case "update":
            $id_phanquyen = $_POST['id_phanquyen'];
            $tenphanquyen = $_POST['tenphanquyen'];
            $mota = $_POST['mota'];
            $status = $phanquyen->phanquyen__Update($id_phanquyen, $tenphanquyen, $mota,);
            if ($status) {
                header('Location: ../../index.php?req=lietkephanquyen&status=fail');
            } else {
                header('Location: ../../index.php?req=lietkephanquyen&status=success');
            }
            break;
        case "delete":
            $id_phanquyen = $_GET['id_phanquyen'];
            $status = $phanquyen->phanquyen__Delete($id_phanquyen);
            if ($status) {
                header('Location: ../../index.php?req=lietkephanquyen&status=fail');
            } else {
                header('Location: ../../index.php?req=lietkephanquyen&status=success');
            }
            break;
    }
}
