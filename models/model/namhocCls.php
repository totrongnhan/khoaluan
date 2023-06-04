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

class namhoc extends Database {

    public function namhoc__Get_All() {
        $obj = $this->connect->prepare("SELECT * FROM namhoc");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute();
        return $obj->fetchAll();
    }
    
    public function namhoc_Add($tennamhoc, $mota) {
        $obj = $this->connect->prepare("INSERT INTO namhoc(tennamhoc, mota) VALUES (?,?)");
        $obj->execute(array($tennamhoc, $mota));
        return $obj->rowCount();
    }

    public function namhoc__Update($id_namhoc, $tennamhoc, $mota)
    {
        $obj = $this->connect->prepare("UPDATE namhoc SET tennamhoc=?, mota=? WHERE id_namhoc=?");
        $obj->execute(array($tennamhoc, $mota, $id_namhoc));
        return $obj->rowCount();
    }
    

    public function namhoc__Delete($id_namhoc) {
        $obj = $this->connect->prepare("DELETE FROM namhoc WHERE id_namhoc = ?");
        $obj->execute(array($id_namhoc));
        return $obj->rowCount();
    }
    

  
    public function namhoc__Get_By_Id($id_namhoc) {
        $obj = $this->connect->prepare("SELECT * FROM namhoc WHERE id_namhoc = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_namhoc));
        return $obj->fetch();
    }
}
?>