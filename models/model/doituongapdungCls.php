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

class doituongapdung extends Database {

    public function doituongapdung__Get_All() {
        $obj = $this->connect->prepare("SELECT * FROM doituongapdung");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute();
        return $obj->fetchAll();
    }
    
    public function doituongapdung_Add($id_dot, $id_tenkhaosat, $id_phannhom) {
        $obj = $this->connect->prepare("INSERT INTO doituongapdung(id_dot, id_tenkhaosat, id_phannhom) VALUES (?,?,?)");
        $obj->execute(array($id_dot, $id_tenkhaosat, $id_phannhom));
        return $this->connect->lastInsertId();
    }

    public function doituongapdung__Update($id_apdung, $id_dot, $id_tenkhaosat, $id_phannhom) {
        $obj = $this->connect->prepare("UPDATE doituongapdung SET id_dot=?, id_tenkhaosat=?, id_phannhom=? WHERE id_apdung=?");
        $obj->execute(array($id_dot, $id_tenkhaosat, $id_phannhom, $id_apdung));
        return $obj->rowCount();
    }
    

    public function doituongapdung__Delete($id_apdung) {
        $obj = $this->connect->prepare("DELETE FROM doituongapdung WHERE id_apdung = ?");
        $obj->execute(array($id_apdung));
        return $obj->rowCount();
    }

  
    public function doituongapdung__Get_By_Id($id_apdung) {
        $obj = $this->connect->prepare("SELECT * FROM doituongapdung WHERE id_apdung = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_apdung));
        return $obj->fetch();
    }

    public function doituongapdung__Get_By_Id_dot($id_dot) {
        $obj = $this->connect->prepare("SELECT * FROM doituongapdung WHERE id_dot = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_dot));
        return $obj->fetchAll();
    }

    public function doituongapdung__Get_By_id_tenkhaosat($id_tenkhaosat) {
        $obj = $this->connect->prepare("SELECT * FROM doituongapdung WHERE id_tenkhaosat = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_tenkhaosat));
        return $obj->fetchAll();
    }

    public function doituongapdung__Get_By_Id_phannhom($id_phannhom) {
        $obj = $this->connect->prepare("SELECT * FROM doituongapdung WHERE id_phannhom = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_phannhom));
        return $obj->fetchAll();
    }

}
?>