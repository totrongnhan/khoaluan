<?php

//userAct
session_start();
require("../../../models/getModel.php");
$nganhhoc__Get_All = $nganhhoc->nganhhoc__Get_All();
if (isset($_GET["req"])) {
    switch ($_GET["req"]) {
        case "add":
            $tennganhhoc = $_POST['tennganhhoc'];
            $mota = $_POST['mota'];
            $id_khoaa = $_POST['id_khoaa'];
            $status = $nganhhoc->nganhhoc_Add($tennganhhoc, $mota, $id_khoaa);
            if ($status) {
                header('Location: ../../index.php?req=lietkenganhhoc&status=success');
            } else {
                header('Location: ../../index.php?req=lietkenganhhoc&status=fail');
            }
            break;

        case "update":
            $id_nganhhoc = $_POST['id_nganhhoc'];
            $tennganhhoc = $_POST['tennganhhoc'];
            $mota = $_POST['mota'];
            $id_khoaa = $_POST['id_khoaa'];
            $status = $nganhhoc->nganhhoc__Update($id_nganhhoc, $tennganhhoc, $mota, $id_khoaa);
            
            if ($status) {
                header('Location: ../../index.php?req=lietkenganhhoc&status=success');
            } else {
                header('Location: ../../index.php?req=lietkenganhhoc&status=fail');
            }
            break;
        case "delete":
            $id_nganhhoc = $_GET['id_nganhhoc'];          
            $status = $nganhhoc->nganhhoc__Delete($id_nganhhoc);
            if ($status) {
                header('Location: ../../index.php?req=lietkenganhhoc&status=success');
            } else {
                header('Location: ../../index.php?req=lietkenganhhoc&status=fail');
            }
            break;   
    }
}
?>




