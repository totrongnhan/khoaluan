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
                    $_SESSION['user'] = $status;
                    header("location:../Danhgi/Hinh.php");
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