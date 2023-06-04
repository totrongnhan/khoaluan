<?php

//userAct
session_start();
require("../../../models/getModel.php");
$trinhdo__Get_All = $trinhdo->trinhdo__Get_All();
if (isset($_GET["req"])) {
    switch ($_GET["req"]) {
        case "add":
            $ma_trinhdo = $_POST['ma_trinhdo'];
            $tentrinhdo = $_POST['tentrinhdo'];
            $mota = $_POST['mota'];
            $status = $trinhdo->trinhdo_Add($ma_trinhdo, $tentrinhdo, $mota);
            if ($status) {
                header('Location: ../../index.php?req=lietketrinhdo&status=success');
            } else {
                header('Location: ../../index.php?req=lietketrinhdo&status=fail');
            }
            break;

        case "update":
            $id_trinhdo = $_POST['id_trinhdo'];
            $ma_trinhdo = $_POST['ma_trinhdo'];
            $tentrinhdo = $_POST['tentrinhdo'];
            $mota = $_POST['mota'];
            $status = $trinhdo->trinhdo__Update($id_trinhdo, $ma_trinhdo, $tentrinhdo, $mota);
            if ($status) {
                header('Location: ../../index.php?req=lietketrinhdo&status=success');
            } else {
                header('Location: ../../index.php?req=lietketrinhdo&status=fail');
            }
            break;
        case "delete":
            $id_trinhdo = $_GET['id_trinhdo'];
            $status = $trinhdo->trinhdo__Delete($id_trinhdo);
            if ($status) {
                header('Location: ../../index.php?req=lietketrinhdo&status=success');
            } else {
                header('Location: ../../index.php?req=lietketrinhdo&status=fail');
            }
            break;
    }
}
