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

class phanquyen extends Database
{

    public function phanquyen__Get_All()
    {
        $obj = $this->connect->prepare("SELECT * FROM phanquyen");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute();
        return $obj->fetchAll();
    }

    public function phanquyen__Get_By_Id($id_phanquyen)
    {
        $obj = $this->connect->prepare("SELECT * FROM phanquyen WHERE id_phanquyen = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_phanquyen));
        return $obj->fetch();
    }


    public function phanquyen_Add($tenphanquyen, $mota)
    {
        $obj = $this->connect->prepare("INSERT INTO phanquyen(tenphanquyen, mota) VALUES (?,?)");
        $obj->execute(array($tenphanquyen, $mota));
        return $obj->rowCount();
    }

    public function phanquyen__Update($id_phanquyen, $tenphanquyen, $mota)
    {
        $obj = $this->connect->prepare("UPDATE phanquyen SET tenphanquyen=?, mota=? WHERE id_phanquyen=?");
        $obj->execute(array($tenphanquyen, $mota, $id_phanquyen));
        return $obj->rowCount();
    }

    public function phanquyen__Delete($id_phanquyen)
    {
        $obj = $this->connect->prepare("DELETE FROM phanquyen WHERE id_phanquyen = ?");
        $obj->execute(array($id_phanquyen));
        return $obj->rowCount();
    }
}
