<?php

//userAct
session_start();
require("../../../models/getModel.php");
$tenkhaosat__Get_All = $tenkhaosat->tenkhaosat__Get_All();
if (isset($_GET["req"])) {
    switch ($_GET["req"]) {
        case "add":
            $tenkhaosat0 = $_POST['tenkhaosat0'];
            $mota = $_POST['mota'];
            $status = $tenkhaosat->tenkhaosat_Add($tenkhaosat0, $mota);
            if ($status) {
                header('Location: ../../index.php?req=lietketenkhaosat&status=success');
            } else {
                header('Location: ../../index.php?req=lietketenkhaosat&status=fail');
            }
            break;

        case "update":
            $id_tenkhaosat = $_POST['id_tenkhaosat'];
            $tenkhaosat0 = $_POST['tenkhaosat0'];
            $mota = $_POST['mota'];
            $status = $tenkhaosat->tenkhaosat__Update($id_tenkhaosat, $tenkhaosat0, $mota);
            if ($status) {
                header('Location: ../../index.php?req=lietketenkhaosat&status=success');
            } else {
                header('Location: ../../index.php?req=lietketenkhaosat&status=fail');
            }
            break;
        case "delete":
            $id_tenkhaosat = $_GET['id_tenkhaosat'];          
            $status = $tenkhaosat->tenkhaosat__Delete($id_tenkhaosat);
            if ($status) {
                header('Location: ../../index.php?req=lietketenkhaosat&status=success');
            } else {
                header('Location: ../../index.php?req=lietketenkhaosat&status=fail');
            }
            break;   
    }
}
?>




