<?php

//userAct
session_start();
require("../../../models/getModel.php");
$ketqua__Get_All = $ketqua->ketqua__Get_All();
if (isset($_GET["req"])) {
    switch ($_GET["req"]) {
        case "add":
            $id_dot = $_POST['id_dot'];
            $kohl = $_POST['kohl'];
            $ithl = $_POST['ithl'];
            $khahl = $_POST['khahl'];
            $hl = $_POST['hl'];
            $rathl = $_POST['rathl'];
            $per_kohl = $_POST['per_kohl'];
            $per_ithl = $_POST['per_ithl'];
            $per_khahl = $_POST['per_khahl'];
            $per_hl = $_POST['per_hl'];
            $per_rathl = $_POST['per_rathl'];
            $status = $ketqua->ketqua_Add($id_dot, $kohl, $ithl, $khahl, $hl, $rathl, $per_kohl, $per_ithl, $per_khahl, $per_hl, $per_rathl);
            if ($status) {
                header('Location: ../../index.php?req=lietkeketqua&status=success');
            } else {
                header('Location: ../../index.php?req=lietkeketqua&status=fail');
            }
            break;

        case "update":
             $id_dot = $_POST['id_dot'];
            $kohl = $_POST['kohl'];
            $ithl = $_POST['ithl'];
            $khahl = $_POST['khahl'];
            $hl = $_POST['hl'];
            $rathl = $_POST['rathl'];
            $per_kohl = $_POST['per_kohl'];
            $per_ithl = $_POST['per_ithl'];
            $per_khahl = $_POST['per_khahl'];
            $per_hl = $_POST['per_hl'];
            $per_rathl = $_POST['per_rathl'];
            $status = $ketqua->ketqua_Add($id, $id_dot, $kohl, $ithl, $khahl, $hl, $rathl, $per_kohl, $per_ithl, $per_khahl, $per_hl, $per_rathl);
            if ($status) {
                header('Location: ../../index.php?req=lietkeketqua&status=success');
            } else {
                header('Location: ../../index.php?req=lietkeketqua&status=fail');
            }
            break;
        case "delete":
            $id = $_GET['id'];          
            $status = $ketqua->ketqua__Delete($id);
            if ($status) {
                header('Location: ../../index.php?req=lietkeketqua&status=success');
            } else {
                header('Location: ../../index.php?req=lietkeketqua&status=fail');
            }
            break;   
    }
}
?>




