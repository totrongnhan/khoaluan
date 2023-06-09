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
                    if($status->id_phanquyen  == 0){
                    $_SESSION['admin'] = $status;
                    header("location:../admin");
                }
                
                   if($status->id_phanquyen  == 3){
                    $sinhvien = $taikhoan->taikhoan__Get_By_thongtinsinhvien($status->id_taikhoan);
                     $_SESSION['user'] = $sinhvien;

                    header("location:../DanhgiaSV/Hinh.php");
                }   
                if($status->id_phanquyen  == 2){
                    $giangvien = $taikhoan->taikhoan__Get_By_thongtingiangvien($status->id_taikhoan);
                     $_SESSION['user'] = $giangvien;

                    header("location:../DanhgiaGV/Hinh.php");
                }
                    
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