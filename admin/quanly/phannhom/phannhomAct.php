<?php

//userAct
session_start();
require("../../../models/getModel.php");
$phannhom__Get_All = $phannhom->phannhom__Get_All();
if (isset($_GET["req"])) {
    switch ($_GET["req"]) {
        case "add":
            $tenphannhom = $_POST['tenphannhom'];
            $mota = $_POST['mota'];            
            $status = $phannhom->phannhom_Add($tenphannhom, $mota,);
            if ($status) {
                header('Location: ../../index.php?req=lietkephannhom&status=success');
            } else {
                header('Location: ../../index.php?req=lietkephannhom&status=fail');
            }
            break;

        case "update":
            $id_phannhom = $_POST['id_phannhom'];
            $tenphannhom = $_POST['tenphannhom'];
            $mota = $_POST['mota'];           
            $status = $phannhom->phannhom__Update($id_phannhom, $tenphannhom, $mota,);
             if ($status) {
                header('Location: ../../index.php?req=lietkephannhom&status=success');
            } else {
                header('Location: ../../index.php?req=lietkephannhom&status=fail');
            }
            break;
        case "delete":
            $id_phannhom = $_GET['id_phannhom'];          
            $status = $phannhom->phannhom__Delete($id_phannhom);
            if ($status) {
                header('Location: ../../index.php?req=lietkephannhom&status=success');
            } else {
                header('Location: ../../index.php?req=lietkephannhom&status=fail');
            }
            break;   
    }
}
