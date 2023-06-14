<?php
//userCls
$a = "./models/configs/config.php";
$b = "../models/configs/config.php";
$c = "../../models/configs/config.php";
$d = "../../../models/configs/config.php";
$e = "../../../../models/configs/config.php";

if (file_exists($a)) {
    $des = $a;
}
if (file_exists($b)) {
    $des = $b;
}
if (file_exists($c)) {
    $des = $c;
} 
if (file_exists($d)) {
    $des = $d;
} 

if (file_exists($e)) {
    $des = $e;
} 
include_once($des);

class taikhoan extends Database {

    public function taikhoan__Get_All() {
        $obj = $this->connect->prepare("SELECT * FROM taikhoan");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute();
        return $obj->fetchAll();
    }
    public function taikhoan__Get_check() {
        $obj = $this->connect->prepare("SELECT * FROM sinhvien WHERE id_sinhvien not in(SELECT id_nguoidung FROM taikhoan WHERE id_phannhom = 3)");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute();
        return $obj->fetchAll();
    }
    public function taikhoan__Get_checkgv() {
        $obj = $this->connect->prepare("SELECT * FROM giangvien WHERE id_giangvien not in(SELECT id_nguoidung FROM taikhoan WHERE id_phannhom = 2)");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute();
        return $obj->fetchAll();
    }

    public function taikhoan__Get_By_Id($id_taikhoan) {
        $obj = $this->connect->prepare("SELECT * FROM taikhoan WHERE id_taikhoan = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_taikhoan));
        return $obj->fetch();
    }
    public function taikhoan__Get_By_thongtinsinhvien($id_taikhoan) {
        $obj = $this->connect->prepare("SELECT * FROM taikhoan , sinhvien WHERE taikhoan.id_nguoidung = sinhvien.id_sinhvien AND taikhoan.id_taikhoan = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_taikhoan));
        return $obj->fetch();
    }
    public function taikhoan__Get_By_thongtingiangvien($id_taikhoan) {
        $obj = $this->connect->prepare("SELECT * FROM taikhoan , giangvien WHERE taikhoan.id_nguoidung = giangvien.id_giangvien AND taikhoan.id_taikhoan = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_taikhoan));
        return $obj->fetch();
    }

    public function taikhoan__Check_Login($email, $matkhau) {
        $obj = $this->connect->prepare("SELECT * FROM `taikhoan` INNER JOIN `phanquyen` ON `taikhoan`.id_phanquyen = `phanquyen`.id_phanquyen WHERE  email=? AND matkhau=?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($email, $matkhau));
        if($obj->rowCount() > 0){
            return $obj->fetch();
        }else{
            return 0;
        }
    }

    public function taikhoan__Change_Password($id_taikhoan, $matkhau) {
        $obj = $this->connect->prepare("UPDATE taikhoan SET matkhau=? WHERE id_taikhoan=?");
        $obj->execute(array($matkhau, $id_taikhoan));
        if($obj->rowCount() > 0){
            return $obj->fetch();
        }else{
            return 0;
        }
    }
    public function taikhoanChangePassword($email, $passwordold, $passwordnew) {
        $selectMK = $this->connect->prepare("select matkhau from taikhoan where email =?");
        $selectMK->setFetchMode(PDO::FETCH_OBJ);
        $selectMK->execute(array($email));

        if (count($selectMK->fetch()) == 1) {
            $temp = $selectMK->fetch();
            if ($passwordold == $temp->matkhau) {
                $update = $this->connect->prepare("update taikhoan set matkhau=? where email =?");

                $update->execute(array($passwordnew, $email));
                return $update->rowCount();
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
    

    public function taikhoan_Add($tentaikhoan, $email, $matkhau, $mota, $id_phanquyen, $id_phannhom, $id_nguoidung) {
        $obj = $this->connect->prepare("INSERT INTO taikhoan(tentaikhoan, email, matkhau, mota, id_phanquyen, id_phannhom, id_nguoidung) VALUES (?,?,?,?,?,?,?)");
        $obj->execute(array($tentaikhoan, $email, $matkhau, $mota, $id_phanquyen, $id_phannhom, $id_nguoidung));
        return $obj->rowCount();
    }

    public function taikhoan__Update($id_taikhoan, $tentaikhoan, $email, $matkhau, $mota, $id_phanquyen, $id_phannhom, $id_nguoidung) {
        $obj = $this->connect->prepare("UPDATE taikhoan SET tentaikhoan=?, email=?, matkhau=?, mota=?, id_phanquyen=?, id_phannhom=? , id_nguoidung=? WHERE id_taikhoan=?");
        $obj->execute(array($tentaikhoan, $email, $matkhau, $mota, $id_phanquyen, $id_phannhom, $id_nguoidung, $id_taikhoan));
        return $obj->rowCount();
    }
    public function taikhoan__reset($id_taikhoan, $matkhau) {
        $obj = $this->connect->prepare("UPDATE taikhoan SET matkhau=? WHERE id_taikhoan=?");
        $obj->execute(array($matkhau, $id_taikhoan));
        return $obj->rowCount();
    }

    public function taikhoan__Delete($id_taikhoan) {
        $obj = $this->connect->prepare("DELETE FROM taikhoan WHERE id_taikhoan = ?");
        $obj->execute(array($id_taikhoan));
        return $obj->rowCount();
    }
    public function taikhoan__Get_By_Id_phanquyen($id_phanquyen) {
        $obj = $this->connect->prepare("SELECT * FROM taikhoan WHERE id_phanquyen = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_phanquyen));
        return $obj->fetchAll();
    }

    
    public function taikhoan__Get_By_Id_phannhom($id_phannhom) {
        $obj = $this->connect->prepare("SELECT * FROM taikhoan WHERE id_phannhom = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_phannhom));
        return $obj->fetchAll();
    }

    public function taikhoan__Get_By_Id_nguoidung($id_nguoidung) {
        $obj = $this->connect->prepare("SELECT * FROM taikhoan WHERE id_nguoidung = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_nguoidung));
        return $obj->fetchAll();
    }

    
    public function taikhoan__Get_All_Phan_Nhom($id_phannhom) {
        $obj = $this->connect->prepare("SELECT * FROM taikhoan, phannhom WHERE taikhoan.id_phannhom = phannhom.id_phannhom AND phannhom.id_phannhom = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_phannhom));
        return $obj->fetchAll();
    }
    public function taikhoan__Get_By_Id_Phan_Quyen($id_phan_quyen) {
        $obj = $this->connect->prepare("SELECT * FROM taikhoan WHERE id_phan_quyen = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_phan_quyen));
        return $obj->fetchAll();
    }

    
    public function taikhoan__Get_By_Id_Phan_Nhom($id_phannhom) {
        $obj = $this->connect->prepare("SELECT * FROM taikhoan WHERE id_phannhom = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_phannhom));
        return $obj->fetchAll();
    }

    public function taikhoan__Get_By_Id_Nguoi_Dung($id_nguoidung) {
        $obj = $this->connect->prepare("SELECT * FROM taikhoan WHERE id_nguoidung = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_nguoidung));
        return $obj->fetchAll();
    }

    public function taikhoan__Get_By_Sinh_Vien($id_nguoidung) {
        $obj = $this->connect->prepare("SELECT * FROM taikhoan INNER JOIN sinhvien ON taikhoan.id_nguoidung = sinhvien.id_sinhvien WHERE taikhoan.id_phannhom = 3");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_nguoidung));
        return $obj->fetchAll();
    }

    public function taikhoan__Get_By_Giang_Vien($id_nguoidung) {
        $obj = $this->connect->prepare("SELECT * FROM taikhoan INNER JOIN giangvien ON taikhoan.id_nguoidung = giangvien.id_giangvien WHERE taikhoan.id_phannhom = 2");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_nguoidung));
        return $obj->fetchAll();
    }

    public function taikhoan__Get_All_Phan_Nhom_And_Lop($id_lophoc) {
        $obj = $this->connect->prepare("SELECT * FROM taikhoan,sinhvien, lophoc WHERE taikhoan.id_nguoidung = sinhvien.id_sinhvien AND sinhvien.id_lophoc = lophoc.id_lophoc AND id_phannhom = ? AND lophoc.id_lophoc = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array(3, $id_lophoc));
        return $obj->fetchAll();
    }


}
?>