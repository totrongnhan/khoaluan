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

class nganhhoc extends Database {

    public function nganhhoc__Get_All() {
        $obj = $this->connect->prepare("SELECT * FROM nganhhoc");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute();
        return $obj->fetchAll();
    }

    public function nganhhoc__Get_By_Id($id_nganhhoc) {
        $obj = $this->connect->prepare("SELECT * FROM nganhhoc WHERE id_nganhhoc = ? AND action = 1");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_nganhhoc));
        return $obj->fetch();
    }


    public function nganhhoc_Add($tennganhhoc, $mota) {
        $obj = $this->connect->prepare("INSERT INTO nganhhoc(tennganhhoc, mota) VALUES (?,?)");
        $obj->execute(array($tennganhhoc, $mota));
        return $obj->rowCount();
    }

    public function nganhhoc__Update($id_nganhhoc, $tennganhhoc, $mota) {
        $obj = $this->connect->prepare("UPDATE nganhhoc SET tennganhhoc=?, mota=? WHERE id_nganhhoc=?");
        $obj->execute(array($tennganhhoc, $mota, $id_nganhhoc));
        return $obj->rowCount();
    }

    public function nganhhoc__Delete($id_nganhhoc) {
        $obj = $this->connect->prepare("DELETE FROM nganhhoc WHERE id_nganhhoc = ?");
        $obj->execute(array($id_nganhhoc));
        return $obj->rowCount();
    }
}
?>

