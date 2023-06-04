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

class hocky extends Database {

    public function hocky__Get_All() {
        $obj = $this->connect->prepare("SELECT * FROM hocky");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute();
        return $obj->fetchAll();
    }
    
    public function hocky_Add($tenhocky, $mota, $id_namhoc) {
        $obj = $this->connect->prepare("INSERT INTO hocky(tenhocky, mota, id_namhoc) VALUES (?,?,?)");
        $obj->execute(array($tenhocky, $mota, $id_namhoc));
        return $obj->rowCount();
    }

    public function hocky__Update($id_hocky, $tenhocky, $mota, $id_namhoc) {
        $obj = $this->connect->prepare("UPDATE hocky SET tenhocky=?, mota=?, id_namhoc=? WHERE id_hocky=?");
        $obj->execute(array($tenhocky, $mota, $id_namhoc, $id_hocky));
        return $obj->rowCount();
    }
    

    public function hocky__Delete($id_hocky) {
        $obj = $this->connect->prepare("DELETE FROM hocky WHERE id_hocky = ?");
        $obj->execute(array($id_hocky));
        return $obj->rowCount();
    }

  
    public function hocky__Get_By_Id($id_hocky) {
        $obj = $this->connect->prepare("SELECT * FROM hocky WHERE id_hocky = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_hocky));
        return $obj->fetch();
    }

    public function hocky__Get_By_id_namhoc($id_namhoc) {
        $obj = $this->connect->prepare("SELECT * FROM hocky WHERE id_namhoc = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_namhoc));
        return $obj->fetchAll();
    }
}
?>