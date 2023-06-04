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

class tenkhaosat extends Database {

    public function tenkhaosat__Get_All() {
        $obj = $this->connect->prepare("SELECT * FROM tenkhaosat");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute();
        return $obj->fetchAll();
    }
    
    public function tenkhaosat__Add($tenkhaosat0, $mota) {
        $obj = $this->connect->prepare("INSERT INTO tenkhaosat(tenkhaosat0, mota) VALUES (?,?)");
        $obj->execute(array($tenkhaosat0, $mota));
        return $obj->rowCount();
    }

    public function tenkhaosat__Update($id_tenkhaosat, $tenkhaosat0, $mota) {
        $obj = $this->connect->prepare("UPDATE tenkhaosat SET tenkhaosat0=?, mota=? WHERE id_tenkhaosat=?");
        $obj->execute(array($tenkhaosat0, $mota, $id_tenkhaosat));
        return $obj->rowCount();
    }
    

    public function tenkhaosat__Delete($id_tenkhaosat) {
        $obj = $this->connect->prepare("DELETE FROM tenkhaosat WHERE id_tenkhaosat = ?");
        $obj->execute(array($id_tenkhaosat));
        return $obj->rowCount();
    }

  
    public function tenkhaosat__Get_By_Id($id_tenkhaosat) {
        $obj = $this->connect->prepare("SELECT * FROM tenkhaosat WHERE id_tenkhaosat = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_tenkhaosat));
        return $obj->fetch();
    }

}
?>