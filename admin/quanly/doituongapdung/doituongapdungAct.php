<?php

//userAct
session_start();
require("../../../models/getModel.php");
$doituongapdung__Get_All = $doituongapdung->doituongapdung__Get_All();
if (isset($_GET["req"])) {
    switch ($_GET["req"]) {
        case "add":          
            $id_dot = $_POST['id_dot'];
            $id_tenkhaosat = $_POST['id_tenkhaosat'];
            $id_phannhom = $_POST['id_phannhom'];
            $status = $doituongapdung->doituongapdung_Add($id_dot, $id_tenkhaosat, $id_phannhom);
            if ($status) {
                header('Location: ../../index.php?req=lietkedoituongapdung&status=success');
            } else {
                header('Location: ../../index.php?req=lietkedoituongapdung&status=fail');
            }
            break;

        case "update":
            $id_apdung = $_POST['id_apdung'];
            $id_dot = $_POST['id_dot'];
            $id_tenkhaosat = $_POST['id_tenkhaosat'];
            $id_phannhom = $_POST['id_phannhom'];
            $status = $doituongapdung->doituongapdung__Update($id_apdung, $id_dot, $id_tenkhaosat, $id_phannhom);
            if ($status) {
                header('Location: ../../index.php?req=lietkedoituongapdung&status=success');
            } else {
                header('Location: ../../index.php?req=lietkedoituongapdung&status=fail');
            }
            break;
        case "delete":
            $id_apdung = $_GET['id_apdung'];          
            $status = $doituongapdung->doituongapdung__Delete($id_apdung);
            if ($status) {
                header('Location: ../../index.php?req=lietkedoituongapdung&status=success');
            } else {
                header('Location: ../../index.php?req=lietkedoituongapdung&status=fail');
            }
            break;   
    }
}
?>




