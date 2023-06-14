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

class donvi extends Database
{

    public function donvi__Get_All()
    {
        $obj = $this->connect->prepare("SELECT * FROM donvi");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute();
        return $obj->fetchAll();
    }

    public function donvi__Get_By_Id($id_donvi)
    {
        $obj = $this->connect->prepare("SELECT * FROM donvi WHERE id_donvi = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_donvi));
        return $obj->fetch();
    }


    public function donvi_Add($ma_donvi, $tendonvi, $mota, $is_khoa)
    {
        $obj = $this->connect->prepare("INSERT INTO donvi(ma_donvi, tendonvi, mota, is_khoa) VALUES (?,?,?,?)");
        $obj->execute(array($ma_donvi, $tendonvi, $mota, $is_khoa));
        return $obj->rowCount();
    }

    public function donvi__Update($id_donvi, $ma_donvi,  $tendonvi, $mota, $is_khoa)
    {
        $obj = $this->connect->prepare("UPDATE donvi SET ma_donvi=?, tendonvi=?, mota=?, is_khoa=? WHERE id_donvi=?");
        $obj->execute(array($ma_donvi, $tendonvi, $mota, $is_khoa, $id_donvi));
        return $obj->rowCount();
    }

    public function donvi__Delete($id_donvi)
    {
        $obj = $this->connect->prepare("DELETE FROM donvi WHERE id_donvi = ?");
        $obj->execute(array($id_donvi));
        return $obj->rowCount();
    }
    public function donvi__Get_By_Id_giangvien($id_giangvien) {
        $obj = $this->connect->prepare("SELECT * FROM donvi, giangvien WHERE donvi.id_donvi = giangvien.id_donvi AND id_giangvien=?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_giangvien));
        return $obj->fetch();
    }
}
