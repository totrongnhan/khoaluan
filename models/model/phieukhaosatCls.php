<?php

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

class phieukhaosat extends Database {

    public function phieukhaosat__Get_All() {
        $obj = $this->connect->prepare("SELECT * FROM phieukhaosat");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute();
        return $obj->fetchAll();
    }
    
    public function phieukhaosat_Add($id_apdung, $id_doituong, $ketqua, $ngaythuchien) {
        $obj = $this->connect->prepare("INSERT INTO phieukhaosat(id_apdung, id_doituong, ketqua, ngaythuchien) VALUES (?,?,?,?)");
        $obj->execute(array($id_apdung, $id_doituong, $ketqua, $ngaythuchien));
        return $obj->rowCount();
    }

    public function phieukhaosat__Update($id_phieu, $id_apdung, $id_doituong, $ketqua, $ngaythuchien) {
        $obj = $this->connect->prepare("UPDATE phieukhaosat SET id_apdung=?, id_doituong=?, ketqua=?, ngaythuchien=? WHERE id_phieu=?");
        $obj->execute(array($id_apdung, $id_doituong, $ketqua, $ngaythuchien, $id_phieu));
        return $obj->rowCount();
    }
    
     public function phieukhaosat__Update_KQ($id_phieu,  $ketqua) {
        $obj = $this->connect->prepare("UPDATE phieukhaosat SET ketqua=?, ngaythuchien=? WHERE id_phieu=?");
        $obj->execute(array($ketqua,date('Y-m-d H:i:s'), $id_phieu));
        return $obj->rowCount();
    }

    public function phieukhaosat__Delete($id_phieu) {
        $obj = $this->connect->prepare("DELETE FROM phieukhaosat WHERE id_phieu = ?");
        $obj->execute(array($id_phieu));
        return $obj->rowCount();
    }

  
    public function phieukhaosat__Get_By_Id($id_phieu) {
        $obj = $this->connect->prepare("SELECT * FROM phieukhaosat, doituongapdung, tenkhaosat WHERE phieukhaosat.id_apdung = doituongapdung.id_apdung AND doituongapdung.id_tenkhaosat = tenkhaosat.id_tenkhaosat AND id_phieu = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_phieu));
        return $obj->fetch();
    }
    public function phieukhaosat__Get_By_Id_apdung($id_apdung) {
        $obj = $this->connect->prepare("SELECT * FROM phieukhaosat WHERE id_apdung = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_apdung));
        return $obj->fetchAll();
    }
    public function phieukhaosat__Get_By_Id_apdungandid_doituong($id_apdung, $id_doituong) {
        $obj = $this->connect->prepare("SELECT * FROM phieukhaosat WHERE id_apdung = ? AND id_doituong=?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_apdung, $id_doituong));
        return $obj->fetch();
    }

    
    public function phieukhaosat__Get_By_Id_doituong($id_doituong) {
        $obj = $this->connect->prepare("SELECT * FROM phieukhaosat WHERE id_doituong = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_doituong));
        return $obj->fetchAll();
    }
    public function phieukhaosat__Get_By_Id_chuoi($a) {
    $aray = explode('|', $a);
    return $aray;
    }
    public function phieukhaosat__Get_By_Id_phieudot($id_dot, $id_tenkhaosat) {
        $obj = $this->connect->prepare("SELECT * FROM phieukhaosat, doituongapdung, dotkhaosat, tenkhaosat  WHERE phieukhaosat.id_apdung = doituongapdung.id_apdung AND doituongapdung.id_tenkhaosat = tenkhaosat.id_tenkhaosat AND phieukhaosat.id_apdung = doituongapdung.id_apdung AND doituongapdung.id_dot = dotkhaosat.id_dot AND tenkhaosat.id_tenkhaosat = ? AND dotkhaosat.id_dot = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array( $id_tenkhaosat, $id_dot));
        return $obj->fetchAll();
    }
    
}
?>