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
            $status = $nganhhoc->nganhhoc_Add($tennganhhoc, $mota);
            if ($status) {
                header("Location: lietkenganhhoc.php");
            } else {
                header('Location: lietkenganhhoc.php');
            }
            break;

        case "update":
            $id_nganhhoc = $POST['id_nganhhoc'];
            $tennganhhoc = $_POST['tennganhhoc'];
            $mota = $_POST['mota'];
            $status = $nganhhoc->nganhhoc__Update($id_nganhhoc, $tennganhhoc, $mota);
            if ($status) {
                header('Location: suanganhhoc.php');
            } else {
                header('Location: lietkenganhhoc.php');
            }
            break;
        case "delete":
            $id_nganhhoc = $POST['id_nganhhoc'];          
            $status = $nganhhoc->nganhhoc__Delete($id_nganhhoc);
            if ($status) {
                header('Location: lietkenganhhoc.php');
            } else {
                header('Location: lietkenganhhoc.php');
            }
            break;   
    }
}
?>


