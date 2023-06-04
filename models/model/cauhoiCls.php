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

class cauhoi extends Database {

    public function cauhoi__Get_All() {
        $obj = $this->connect->prepare("SELECT * FROM cauhoi");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute();
        return $obj->fetchAll();
    }
    
    public function cauhoi_Add($tencauhoi, $mota, $thutu, $id_nhom, $is_text) {
        $obj = $this->connect->prepare("INSERT INTO cauhoi(tencauhoi, mota, thutu, id_nhom, is_text) VALUES (?,?,?,?,?)");
        $obj->execute(array($tencauhoi, $mota, $thutu, $id_nhom, $is_text));
        return $obj->rowCount();
    }

    public function cauhoi__Update($id_cauhoi, $tencauhoi, $mota, $thutu, $id_nhom, $is_text) {
        $obj = $this->connect->prepare("UPDATE cauhoi SET tencauhoi=?, mota=?, thutu=?, id_nhom=?, is_text=? WHERE id_cauhoi=?");
        $obj->execute(array($tencauhoi, $mota, $thutu, $id_nhom, $is_text, $id_cauhoi));
        return $obj->rowCount();
    }
    

    public function cauhoi__Delete($id_cauhoi) {
        $obj = $this->connect->prepare("DELETE FROM cauhoi WHERE id_cauhoi = ?");
        $obj->execute(array($id_cauhoi));
        return $obj->rowCount();
    }

  
    public function cauhoi__Get_By_Id($id_cauhoi) {
        $obj = $this->connect->prepare("SELECT * FROM cauhoi WHERE id_cauhoi = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_cauhoi));
        return $obj->fetch();
    }

    public function cauhoi__Get_By_Id_nhom($id_nhom) {
        $obj = $this->connect->prepare("SELECT * FROM cauhoi WHERE id_nhom= ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_nhom));
        return $obj->fetchAll();
    }
}
?>