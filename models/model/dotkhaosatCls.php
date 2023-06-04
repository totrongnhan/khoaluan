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

class dotkhaosat extends Database {

    public function dotkhaosat__Get_All() {
        $obj = $this->connect->prepare("SELECT * FROM dotkhaosat");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute();
        return $obj->fetchAll();
    }
    
    public function dotkhaosat_Add($tendot, $mota, $thoigianbatdau, $thoigianketthuc, $id_hocky) {
        $obj = $this->connect->prepare("INSERT INTO dotkhaosat(tendot, mota, thoigianbatdau, thoigianketthuc, id_hocky) VALUES (?,?,?,?,?)");
        $obj->execute(array($tendot, $mota, $thoigianbatdau, $thoigianketthuc, $id_hocky));
        return $this->connect->lastInsertId();
    }

    public function dotkhaosat__Update($id_dot, $tendot, $mota, $thoigianbatdau, $thoigianketthuc, $id_hocky)
    {
        $obj = $this->connect->prepare("UPDATE dotkhaosat SET tendot=?, mota=?, thoigianbatdau=?, thoigianketthuc=?, id_hocky=? WHERE id_dot=?");
        $obj->execute(array($tendot, $mota, $thoigianbatdau, $thoigianketthuc, $id_hocky, $id_dot));
        return $obj->rowCount();
    }
    

    public function dotkhaosat__Delete($id_dot) {
        $obj = $this->connect->prepare("DELETE FROM dotkhaosat WHERE id_dot= ?");
        $obj->execute(array($id_dot));
        return $obj->rowCount();
    }

  
    public function dotkhaosat__Get_By_Id($id_dot) {
        $obj = $this->connect->prepare("SELECT * FROM dotkhaosat WHERE id_dot= ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_dot));
        return $obj->fetch();
    }

    public function dotkhaosat__Get_By_Id_hocky($id_hocky) {
        $obj = $this->connect->prepare("SELECT * FROM dotkhaosat WHERE id_hocky= ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_hocky));
        return $obj->fetchAll();
    }
   

}
?>