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

class trinhdo extends Database
{
    public function trinhdo__Get_All()
    {
        $obj = $this->connect->prepare("SELECT * FROM trinhdo");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute();
        return $obj->fetchAll();
    }

    public function trinhdo__Get_By_Id($id_trinhdo)
    {
        $obj = $this->connect->prepare("SELECT * FROM trinhdo WHERE id_trinhdo = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_trinhdo));
        return $obj->fetch();
    }


    public function trinhdo_Add($ma_trinhdo, $tentrinhdo, $mota)
    {
        $obj = $this->connect->prepare("INSERT INTO trinhdo(ma_trinhdo, tentrinhdo, mota) VALUES (?,?,?)");
        $obj->execute(array($ma_trinhdo, $tentrinhdo, $mota));
        return $obj->rowCount();
    }

    public function trinhdo__Update($id_trinhdo, $ma_trinhdo,  $tentrinhdo, $mota)
    {
        $obj = $this->connect->prepare("UPDATE trinhdo SET ma_trinhdo=?, tentrinhdo=?, mota=? WHERE id_trinhdo=?");
        $obj->execute(array($ma_trinhdo, $tentrinhdo, $mota, $id_trinhdo));
        return $obj->rowCount();
    }

    public function trinhdo__Delete($id_trinhdo)
    {
        $obj = $this->connect->prepare("DELETE FROM trinhdo WHERE id_trinhdo = ?");
        $obj->execute(array($id_trinhdo));
        return $obj->rowCount();
    }
}
