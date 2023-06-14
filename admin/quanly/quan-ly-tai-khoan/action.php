<?php

    require("../../../models/getModel.php");
    $href = $_SERVER["HTTP_REFERER"];
    if(strlen(strpos($href, '&status')) > 0){
        $href = explode('&status', $href)[0];
    }

    function locDau ($str){
        $unicode = array(
            "a"=>"á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ",
            "d"=>"đ",
            "e"=>"é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ",
            "i"=>"í|ì|ỉ|ĩ|ị",
            "o"=>"ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ",
            "u"=>"ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự",
            "y"=>"ý|ỳ|ỷ|ỹ|ỵ",
            "A"=>"Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ",
            "D"=>"Đ",
            "E"=>"É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ",
            "I"=>"Í|Ì|Ỉ|Ĩ|Ị",
            "O"=>"Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ",
            "U"=>"Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự",
            "Y"=>"Ý|Ỳ|Ỷ|Ỹ|Ỵ",
        );
        foreach($unicode as $nonUnicode=>$uni){
            $str = preg_replace("/($uni)/i", $nonUnicode, $str);
        }
        $str = trim(strtolower(str_replace(" ","",$str)));
     
        return $str;
    }


    if (isset($_GET["req"])){
        switch($_GET["req"]){

            case "add_admin":
                $status  = 0;
              
                $id_phanquyen = $_POST["id_phanquyen"];
                $id_phannhom = $_POST["id_phannhom"];
                $id_nguoidung = 0;
                $tentaikhoan = $_POST["tentaikhoan"];
                $email = $_POST["email"];
                $matkhau = $_POST["matkhau"];
                $mota = date('Y-m-d H:i:s');

                $status = $taikhoan->taikhoan_Add($tentaikhoan, $email, $matkhau, $mota, $id_phanquyen, $id_phannhom, $id_nguoidung);
                if($status !=0 ){
                    header("location: $href&status=success");
                }else{
                    header("location: $href&status=failed");
                }
                
                break;
                  
            case "add_sv":
                $status  = 0;
              
                $id_phanquyen = $_POST["id_phanquyen"];
                $id_phannhom = $_POST["id_phannhom"];
                $id_nguoidung = $_POST["id_nguoidung"];
                $mota = date('Y-m-d H:i:s');

                foreach($id_nguoidung as $item){
                    $sinhvien__Get_By_Id = $sinhvien->sinhvien__Get_By_Id($item);
                    
                    $tentaikhoan = $sinhvien__Get_By_Id->tensinhvien;
                    $email = $sinhvien__Get_By_Id->email;
                    $matkhau = locDau($sinhvien__Get_By_Id->tensinhvien).date("@is");

                    $status = $taikhoan->taikhoan_Add($tentaikhoan, $email, $matkhau, $mota, $id_phanquyen, $id_phannhom, $sinhvien__Get_By_Id->id_sinhvien);
                }

                if($status !=0 ){
                    header("location: $href&status=success");
                }else{
                    header("location: $href&status=failed");
                }
                
                break;
            case "add_gv":
                $status  = 0;
              
                $id_phanquyen = $_POST["id_phanquyen"];
                $id_phannhom = $_POST["id_phannhom"];
                $id_nguoidung = $_POST["id_nguoidung"];
                $mota = date('Y-m-d H:i:s');

                foreach($id_nguoidung as $item){
                    $giangvien__Get_By_Id = $giangvien->giangvien__Get_By_Id($item);
                    
                    $tentaikhoan = $giangvien__Get_By_Id->tengiangvien;
                    $email = $giangvien__Get_By_Id->email;
                    $matkhau = locDau($giangvien__Get_By_Id->tengiangvien).date("@is");

                    $status = $taikhoan->taikhoan_Add($tentaikhoan, $email, $matkhau, $mota, $id_phanquyen, $id_phannhom, $giangvien__Get_By_Id->id_giangvien);
                }

                if($status !=0 ){
                    header("location: $href&status=success");
                }else{
                    header("location: $href&status=failed");
                }
                
                break;

            
            case "delete":
                $status = 0;
                $id_taikhoan = $_GET["id_taikhoan"];
                $status .= $taikhoan->taikhoan__Delete($id_taikhoan);
            
                if($status !=0 ){
                    header("location: $href&status=success");
                }else{
                    header("location: $href&status=failed");
                }
            
            break;
              
            case "reset":
                $status = 0;
                $id_taikhoan = $_GET["id_taikhoan"];
                $id_sinh_vien = $taikhoan->taikhoan__Get_By_Id($id_taikhoan)->id_nguoidung;
                $sinhvien__Get_By_Id = $sinhvien->sinhvien__Get_By_Id($id_sinh_vien);
                $matkhau = locDau($sinhvien__Get_By_Id->ten_sinh_vien).date("@is");
                $status .= $taikhoan->taikhoan__Reset($id_taikhoan, $matkhau);
            
                if($status !=0 ){
                    header("location: $href&status=success");
                }else{
                    header("location: $href&status=failed");
                }
            break;
        }
    }

?>