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

class khoahoc extends Database {

    public function khoahoc__Get_All() {
        $obj = $this->connect->prepare("SELECT * FROM khoahoc");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute();
        return $obj->fetchAll();
    }

    public function khoahoc__Get_By_Id($id_khoahoc) {
        $obj = $this->connect->prepare("SELECT * FROM khoahoc WHERE id_khoahoc = ? AND action = 1");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_khoahoc));
        return $obj->fetch();
    }


    public function khoahoc_Add($tenkhoahoc, $mota) {
        $obj = $this->connect->prepare("INSERT INTO khoahoc(tenkhoahoc, mota) VALUES (?,?)");
        $obj->execute(array($tenkhoahoc, $mota));
        return $obj->rowCount();
    }

    public function khoahoc__Update($id_khoahoc, $tenkhoahoc, $mota) {
        $obj = $this->connect->prepare("UPDATE khoahoc SET tenkhoahoc=?, mota=? WHERE id_khoahoc=?");
        $obj->execute(array($tenkhoahoc, $mota, $id_khoahoc));
        return $obj->rowCount();
    }

    public function khoahoc__Delete($id_khoahoc) {
        $obj = $this->connect->prepare("DELETE FROM khoahoc WHERE id_khoahoc = ?");
        $obj->execute(array($id_khoahoc));
        return $obj->rowCount();
    }
}
?>

