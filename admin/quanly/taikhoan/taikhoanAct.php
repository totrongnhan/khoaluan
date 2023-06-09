<?php

//userAct
session_start();
require("../../../models/getModel.php");
$taikhoan__Get_All = $taikhoan->taikhoan__Get_All();
if (isset($_GET["req"])) {
    switch ($_GET["req"]) {
        case "add":
            $tentaikhoan = $_POST['tentaikhoan'];
            $email = $_POST['email'];
            $matkhau = $_POST['matkhau'];
            $mota = $_POST['mota'];
            $id_phannhom = $_POST['id_phannhom'];
            $id_phanquyen = $_POST['id_phanquyen'];
            $id_nguoidung = $_POST['id_nguoidung'];
            
             
            $status = $taikhoan->taikhoan_Add($tentaikhoan, $email, $matkhau, $mota, $id_phanquyen, $id_phannhom, $id_nguoidung);
            if ($status) {
                header('Location: ../../index.php?req=lietketaikhoan&status=success');
            } else {
                header('Location: ../../index.php?req=lietketaikhoan&status=fail');
            }
            break;

        case "update":
            $id_taikhoan = $_POST['id_taikhoan'];
            $tentaikhoan = $_POST['tentaikhoan'];
            $email = $_POST['email'];
            $matkhau = $_POST['matkhau'];
            $mota = $_POST['mota'];
            $id_phannhom = $_POST['id_phannhom'];
            $id_phanquyen = $_POST['id_phanquyen'];
            $id_nguoidung = $_POST['id_nguoidung'];
            $status = $taikhoan->taikhoan__Update($id_taikhoan, $tentaikhoan, $email, $matkhau, $mota, $id_phanquyen, $id_phannhom,$id_nguoidung);
            if ($status) {
                header('Location: ../../index.php?req=lietketaikhoan&status=success');
            } else {
                header('Location: ../../index.php?req=lietketaikhoan&status=fail');
            }
            break;
        case "delete":
            $id_taikhoan = $_GET['id_taikhoan'];
            $status = $taikhoan->taikhoan__Delete($id_taikhoan);
            if ($status) {
                header('Location: ../../index.php?req=lietketaikhoan&status=success');
            } else {
                header('Location: ../../index.php?req=lietketaikhoan&status=fail');
            }
            break;
        case "reset":
            
           function random_string($length) {
                $str = random_bytes($length);
                $str = base64_encode($str);
                $str = str_replace(["+", "/", "="], "", $str);
                $str = substr($str, 0, $length);
                return $str;
            }
                

                $id_taikhoan = $_GET['id_taikhoan'];
            
            $email = $_GET['email'];
            $matkhau = random_string(6);
            $status = $taikhoan->taikhoan__Reset($id_taikhoan, $matkhau);
            if ($status) {
//			$subject="test Mail";
//			$message="Hello ! This is a test Message";
//			$from = "totrongnhan972@gmail.com";
//			$headers="From :" . $from;
//				mail($to,$subject,$message,$headers);
//				echo "Mail sent";
		
  //mail("$email","My subject",$matkhau);
                header('Location: ../../index.php?req=lietketaikhoan&status=success');
            } else {
                header('Location: ../../index.php?req=lietketaikhoan&status=fail');
            }
            break;
    }
}
?>




