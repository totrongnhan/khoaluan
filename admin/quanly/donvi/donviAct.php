<?php

//userAct
session_start();
require("../../../models/getModel.php");
$donvi__Get_All = $donvi->donvi__Get_All();
if (isset($_GET["req"])) {
    switch ($_GET["req"]) {
        case "add":
            $ma_donvi = $_POST['ma_donvi'];
            $tendonvi = $_POST['tendonvi'];
            $mota = $_POST['mota'];
            $status = $donvi->donvi_Add($ma_donvi, $tendonvi, $mota);
            if ($status) {
                header('Location: ../../index.php?req=lietkedonvi&status=success');
            } else {
                header('Location: ../../index.php?req=lietkedonvi&status=fail');
            }
            break;

        case "update":
            $id_donvi = $_POST['id_donvi'];
            $ma_donvi = $_POST['ma_donvi'];
            $tendonvi = $_POST['tendonvi'];
            $mota = $_POST['mota'];
            $status = $donvi->donvi__Update($id_donvi, $ma_donvi, $tendonvi, $mota);
            if ($status) {
                header('Location: ../../index.php?req=lietkedonvi&status=success');
            } else {
                header('Location: ../../index.php?req=lietkedonvi&status=fail');
            }
            break;
        case "delete":
            $id_donvi = $_GET['id_donvi'];
            $status = $donvi->donvi__Delete($id_donvi);
            if ($status) {
                header('Location: ../../index.php?req=lietkedonvi&status=success');
            } else {
                header('Location: ../../index.php?req=lietkedonvi&status=fail');
            }
            break;
    }
}
