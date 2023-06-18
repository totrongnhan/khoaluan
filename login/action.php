<?php
//userAct
session_start();
require("../models/getModel.php");

    if (isset($_GET["req"])) {
        switch($_GET["req"]){
            case "login":
                
                $email = $_POST["email"];
                $matkhau = $_POST["matkhau"];
                $status = $taikhoan->taikhoan__Check_Login($email, $matkhau);
                if($status == 0){
                    header("location:../login/index.php?status=fail");
                    return;
                }else{
                    if($status->id_phanquyen  == 1){
                    $_SESSION['admin'] = $status;
                    header("location:../admin");
                }
                
                   if($status->id_phanquyen  == 3){
                    $sinhvien = $taikhoan->taikhoan__Get_By_thongtinsinhvien($status->id_taikhoan);
                     $_SESSION['user'] = $sinhvien;

                    header("location:../DanhgiaSV/danhgia.php");
                }   
                if($status->id_phanquyen  == 2){
                    $giangvien = $taikhoan->taikhoan__Get_By_thongtingiangvien($status->id_taikhoan);
                     $_SESSION['user'] = $giangvien;

                    header("location:../DanhgiaGV/danhgia.php");
                }
                    
                }
                break;
                
                case 'change':
                $id_taikhoan = $_POST['id_taikhoan'];
                $matkhau = $_POST['matkhau'];
                $status = $taikhoan->taikhoanChangePassword($id_taikhoan, $matkhau);
                if($status != "0" ){
                    header('location: ../../index.php?req=lietkehocky&status=success=success');
                }else{
                    header('location: ../user/index.php?page=quan-ly-tai-khoan&status=failed');
                }
                break; 
    
            case "logout":
                unset($_SESSION['admin']);
                session_destroy();
                header("location:../index.php");
                break;
    }
}

?>