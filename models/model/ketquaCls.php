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

class ketqua extends Database
{

    public function ketqua__Get_All()
    {
        $obj = $this->connect->prepare("SELECT * FROM `thong ke ket qua`");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute();
        return $obj->fetchAll();
    }

    public function ketqua_Add($id_dot, $kohl, $ithl, $khahl, $hl, $rathl, $per_kohl, $per_ithl, $per_khahl, $per_hl, $per_rathl)
    {
        $obj = $this->connect->prepare("INSERT INTO `thong ke ket qua`(`id`, `id_dot`, `kohl`, `ithl`, `khahl`, `hl`, `rathl`, `per_kohl`, `per_ithl`, `per_khahl`, `per_hl`, `per_rathl`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
        $obj->execute(array($id_dot, $kohl, $ithl, $khahl, $hl, $rathl, $per_kohl, $per_ithl, $per_khahl, $per_hl, $per_rathl));
        return $obj->rowCount();
    }


    public function ketqua__Delete($id)
    {
        $obj = $this->connect->prepare("DELETE FROM `thong ke ket qua` WHERE id = ?");
        $obj->execute(array($id));
        return $obj->rowCount();
    }
}
