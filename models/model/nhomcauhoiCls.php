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

class nhomcauhoi extends Database {

    public function nhomcauhoi__Get_All() {
        $obj = $this->connect->prepare("SELECT * FROM nhomcauhoi");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute();
        return $obj->fetchAll();
    }
    
    public function nhomcauhoi_Add($tennhomcauhoi, $mota, $thutu, $id_tenkhaosat) {
        $obj = $this->connect->prepare("INSERT INTO nhomcauhoi(tennhomcauhoi, mota, thutu, id_tenkhaosat) VALUES (?,?,?,?)");
        $obj->execute(array($tennhomcauhoi, $mota, $thutu, $id_tenkhaosat));
        return $obj->rowCount();
    }

    public function nhomcauhoi__Update($id_nhomcauhoi, $tennhomcauhoi, $mota, $thutu, $id_tenkhaosat) {
        $obj = $this->connect->prepare("UPDATE nhomcauhoi SET tennhomcauhoi=?, mota=?, thutu=?, id_tenkhaosat=? WHERE id_nhomcauhoi=?");
        $obj->execute(array($tennhomcauhoi, $mota, $thutu, $id_tenkhaosat, $id_nhomcauhoi));
        return $obj->rowCount();
    }
    

    public function nhomcauhoi__Delete($id_nhomcauhoi) {
        $obj = $this->connect->prepare("DELETE FROM nhomcauhoi WHERE id_nhomcauhoi = ?");
        $obj->execute(array($id_nhomcauhoi));
        return $obj->rowCount();
    }

  
    public function nhomcauhoi__Get_By_Id($id_nhomcauhoi) {
        $obj = $this->connect->prepare("SELECT * FROM nhomcauhoi WHERE id_nhomcauhoi = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_nhomcauhoi));
        return $obj->fetch();
    }

    public function nhomcauhoi__Get_By_Id_tenkhaosat($id_tenkhaosat) {
        $obj = $this->connect->prepare("SELECT * FROM nhomcauhoi WHERE id_tenkhaosat = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_tenkhaosat));
        return $obj->fetchAll();
    }

}
?>