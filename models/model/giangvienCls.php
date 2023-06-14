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

class giangvien extends Database {

    public function giangvien__Get_All() {
        $obj = $this->connect->prepare("SELECT * FROM giangvien");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute();
        return $obj->fetchAll();
    }

    public function giangvien__Get_By_Id($id_giangvien) {
        $obj = $this->connect->prepare("SELECT * FROM giangvien WHERE id_giangvien = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_giangvien));
        return $obj->fetch();
    }


    public function giangvien_Add($ma_giangvien, $tengiangvien, $gioitinh, $ngaysinh, $email, $diachithuongtru, $diachilienlac, $sdt1, $sdt2, $id_donvi, $id_trinhdo) {
        $obj = $this->connect->prepare("INSERT INTO giangvien(ma_giangvien, tengiangvien, gioitinh, ngaysinh, email, diachithuongtru, diachilienlac, sdt1, sdt2, id_donvi, id_trinhdo) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
        $obj->execute(array($ma_giangvien, $tengiangvien, $gioitinh, $ngaysinh, $email, $diachithuongtru, $diachilienlac, $sdt1, $sdt2, $id_donvi, $id_trinhdo));
        return $obj->rowCount();
    }

    public function giangvien__Update($id_giangvien, $ma_giangvien, $tengiangvien, $gioitinh, $ngaysinh, $email, $diachithuongtru, $diachilienlac, $sdt1, $sdt2, $id_donvi, $id_trinhdo) {
        $obj = $this->connect->prepare("UPDATE giangvien SET ma_giangvien=?, tengiangvien=?, gioitinh=?, ngaysinh=?, email=?, diachithuongtru=?, diachilienlac=?, sdt1=?, sdt2=?, id_donvi=?, id_trinhdo=? WHERE id_giangvien=?");
        $obj->execute(array($ma_giangvien, $tengiangvien, $gioitinh, $ngaysinh, $email, $diachithuongtru, $diachilienlac, $sdt1, $sdt2, $id_donvi, $id_trinhdo, $id_giangvien));
        return $obj->rowCount();
    }

    public function giangvien__Delete($id_giangvien) {
        $obj = $this->connect->prepare("DELETE FROM giangvien WHERE id_giangvien = ?");
        $obj->execute(array($id_giangvien));
        return $obj->rowCount();
    }
    public function giangvien__Get_By_Id_trinhdo($id_trinhdo) {
        $obj = $this->connect->prepare("SELECT * FROM giangvien WHERE id_trinhdo = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_trinhdo));
        return $obj->fetchAll();
    }

    public function giangvien__Get_By_Id_donvi($id_donvi) {
        $obj = $this->connect->prepare("SELECT * FROM giangvien WHERE id_donvi = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_donvi));
        return $obj->fetchAll();
    }

    public function giangvien__Get_All_Not_Exits($id_donvi) {
        $obj = $this->connect->prepare("SELECT * FROM giangvien, donvi WHERE giangvien.id_donvi = donvi.id_donvi AND donvi.id_donvi =?  AND giangvien.id_giangvien NOT IN (SELECT id_nguoidung FROM taikhoan, phannhom WHERE taikhoan.id_phannhom = phannhom.id_phannhom AND phannhom.id_phannhom = 2)");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_donvi));
        return $obj->fetchAll();
    }
}
?>