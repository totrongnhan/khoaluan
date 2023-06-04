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

    public function taikhoan__Get_By_Id($id_taikhoan) {
        $obj = $this->connect->prepare("SELECT * FROM taikhoan WHERE id_taikhoan = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_taikhoan));
        return $obj->fetch();
    }


    public function taikhoan_Add($tentaikhoan, $email, $matkhau, $mota, $id_phanquyen, $id_phannhom, $id_nguoidung) {
        $obj = $this->connect->prepare("INSERT INTO taikhoan(tentaikhoan, email, matkhau, mota, id_phanquyen, id_phannhom, id_nguoidung) VALUES (?,?,?,?,?,?,?)");
        $obj->execute(array($tentaikhoan, $email, $matkhau, $mota, $id_phanquyen, $id_phannhom, $id_nguoidung));
        return $obj->rowCount();
    }

    public function taikhoan__Update($id_taikhoan, $tentaikhoan, $email, $matkhau, $mota, $id_phanquyen, $id_phannhom, $id_nguoidung) {
        $obj = $this->connect->prepare("UPDATE taikhoan SET tentaikhoan=?, email=?, matkhau=?, mota=?, id_phanquyen=?, id_phannhom=? WHERE id_taikhoan=?");
        $obj->execute(array($tentaikhoan, $email, $matkhau, $id_phanquyen, $mota, $id_phanquyen, $id_phannhom, $id_nguoidung, $id_taikhoan));
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
}
?>