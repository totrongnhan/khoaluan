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

class lophoc extends Database {

    public function lophoc__Get_All() {
        $obj = $this->connect->prepare("SELECT * FROM lophoc");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute();
        return $obj->fetchAll();
    }

    public function lophoc__Get_By_Id($id_lophoc) {
        $obj = $this->connect->prepare("SELECT * FROM lophoc WHERE id_lophoc = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_lophoc));
        return $obj->fetch();
    }

    public function lophoc_Add($tenlophoc, $mota, $id_nganhhoc, $id_khoahoc) {
        $obj = $this->connect->prepare("INSERT INTO lophoc(tenlophoc, mota, id_nganhhoc, id_khoahoc) VALUES (?,?,?,?)");
        $obj->execute(array($tenlophoc, $mota, $id_nganhhoc, $id_khoahoc));
        return $obj->rowCount();
    }

    public function lophoc__Update($id_lophoc, $tenlophoc, $mota, $id_nganhhoc, $id_khoahoc) {
        $obj = $this->connect->prepare("UPDATE lophoc SET tenlophoc=?, mota=?, id_nganhhoc=?, id_khoahoc=?  WHERE id_lophoc=?");
        $obj->execute(array($tenlophoc, $mota, $id_nganhhoc, $id_khoahoc, $id_lophoc));
        return $obj->rowCount();
    }

    public function lophoc__Delete($id_lophoc) {
        $obj = $this->connect->prepare("DELETE FROM lophoc WHERE id_lophoc = ?");
        $obj->execute(array($id_lophoc));
        return $obj->rowCount();
    }
}
?>