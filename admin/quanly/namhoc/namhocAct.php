<?php

//userAct
session_start();
require("../../../models/getModel.php");
$namhoc__Get_All = $namhoc->namhoc__Get_All();
if (isset($_GET["req"])) {
    switch ($_GET["req"]) {
        case "add":
            $tennamhoc = $_POST['tennamhoc'];
            $mota = $_POST['mota'];           
            $status = $namhoc->namhoc_Add($tennamhoc, $mota);
            if ($status) {
                header('Location: ../../index.php?req=lietkenamhoc&status=success');
            } else {
                header('Location: ../../index.php?req=lietkenamhoc&status=fail');
            }
            break;

        case "update":
            $id_namhoc = $_POST['id_namhoc'];
            $tennamhoc = $_POST['tennamhoc'];
            $mota = $_POST['mota'];           
            $status = $namhoc->namhoc__Update($id_namhoc, $tennamhoc, $mota,);
             if ($status) {
                header('Location: ../../index.php?req=lietkenamhoc&status=fail');
            } else {
                header('Location: ../../index.php?req=lietkenamhoc&status=success');
            }
            break;
        case "delete":
            $id_namhoc = $_GET['id_namhoc'];          
            $status = $namhoc->namhoc__Delete($id_namhoc);
            if ($status) {
                header('Location: ../../index.php?req=lietkenamhoc&status=success');
            } else {
                header('Location: ../../index.php?req=lietkenamhoc&status=fail');
            }
            break;   
    }
}
?>




