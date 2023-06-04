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

class phannhom extends Database
{

    public function phannhom__Get_All()
    {
        $obj = $this->connect->prepare("SELECT * FROM phannhom");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute();
        return $obj->fetchAll();
    }

    public function phannhom__Get_By_Id($id_phannhom)
    {
        $obj = $this->connect->prepare("SELECT * FROM phannhom WHERE id_phannhom = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_phannhom));
        return $obj->fetch();
    }


    public function phannhom_Add($tenphannhom, $mota)
    {
        $obj = $this->connect->prepare("INSERT INTO phannhom(tenphannhom, mota) VALUES (?,?)");
        $obj->execute(array($tenphannhom, $mota));
        return $obj->rowCount();
    }

    public function phannhom__Update($id_phannhom, $tenphannhom, $mota)
    {
        $obj = $this->connect->prepare("UPDATE phannhom SET tenphannhom=?, mota=? WHERE id_phannhom=?");
        $obj->execute(array($tenphannhom, $mota, $id_phannhom));
        return $obj->rowCount();
    }

    public function phannhom__Delete($id_phannhom)
    {
        $obj = $this->connect->prepare("DELETE FROM phannhom WHERE id_phannhom = ?");
        $obj->execute(array($id_phannhom));
        return $obj->rowCount();
    }
}
