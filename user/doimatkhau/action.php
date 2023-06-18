<?php
//userAct
session_start();
require("../../models/getModel.php");

    if (isset($_GET["req"])) {
        switch($_GET["req"]){
            
                case 'change':
                $id_taikhoan = $_POST['id_taikhoan'];
                $matkhau = $_POST['matkhau'];
                $status = $taikhoan->taikhoanChangePassword($id_taikhoan, $matkhau);
                if($status != "0" ){
                    header('location:../../DanhgiaSV/danhgia.php?status=success');
                }else{
                    header('location:../../DanhgiaSV/danhgia.php?status=failed');
                }
                break; 
    
            
    }
}

?>