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

class sinhvien extends Database {

    public function sinhvien__Get_All() {
        $obj = $this->connect->prepare("SELECT * FROM sinhvien");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute();
        return $obj->fetchAll();
    }

    public function sinhvien__Get_By_Id($id_sinhvien) {
        $obj = $this->connect->prepare("SELECT * FROM sinhvien WHERE id_sinhvien = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_sinhvien));
        return $obj->fetch();
    }


    public function sinhvien_Add($ma_sinhvien, $tensinhvien, $gioitinh, $ngaysinh, $email, $diachithuongtru, $diachilienlac, $sdt1, $sdt2, $id_lophoc) {
        $obj = $this->connect->prepare("INSERT INTO sinhvien(ma_sinhvien, tensinhvien, gioitinh, ngaysinh, email, diachithuongtru, diachilienlac, sdt1, sdt2, id_lophoc) VALUES (?,?,?,?,?,?,?,?,?,?)");
        $obj->execute(array($ma_sinhvien, $tensinhvien, $gioitinh, $ngaysinh, $email, $diachithuongtru, $diachilienlac, $sdt1, $sdt2, $id_lophoc));
        return $obj->rowCount();
    }

    public function sinhvien__Update($id_sinhvien, $ma_sinhvien, $tensinhvien, $gioitinh, $ngaysinh, $email, $diachithuongtru, $diachilienlac, $sdt1, $sdt2, $id_lophoc) {
        $obj = $this->connect->prepare("UPDATE sinhvien SET ma_sinhvien=?, tensinhvien=?, gioitinh=?, ngaysinh=?, email=?, diachithuongtru=?, diachilienlac=?, sdt1=?, sdt2=?, id_lophoc=? WHERE id_sinhvien=?");
        $obj->execute(array($ma_sinhvien, $tensinhvien, $gioitinh, $ngaysinh, $email, $diachithuongtru, $diachilienlac, $sdt1, $sdt2, $id_lophoc, $id_sinhvien));
        return $obj->rowCount();
    }

    public function sinhvien__Delete($id_sinhvien) {
        $obj = $this->connect->prepare("DELETE FROM sinhvien WHERE id_sinhvien = ?");
        $obj->execute(array($id_sinhvien));
        return $obj->rowCount();
    }
     public function sinhvien__Get_By_Id_lophoc($id_lophoc) {
        $obj = $this->connect->prepare("SELECT * FROM sinhvien WHERE id_lophoc = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_lophoc));
        return $obj->fetchAll();
    }

    
}
?>

