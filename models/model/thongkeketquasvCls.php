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

class thongkeketquasv extends Database {

    public function thongkeketquasv__Get_All() {
        $obj = $this->connect->prepare("SELECT * FROM thongkeketquasv");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute();
        return $obj->fetchAll();
    }

    public function thongkeketquasv_Add($id_dot, $id_phieu, $id_lophoc, $id_sinhvien, $ma_sinhvien, $tensinhvien, $kohl, $ithl, $khahl, $hl, $rathl, $per_kohl, $per_ithl, $per_khahl, $per_hl, $per_rathl) {
        $obj = $this->connect->prepare("INSERT INTO thongkeketquasv(id_dot, id_phieu, id_lophoc,id_sinhvien, ma_sinhvien, tensinhvien, kohl, ithl, khahl, hl, rathl, per_kohl, per_ithl, per_khahl, per_hl, per_rathl) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $obj->execute(array($id_dot, $id_phieu, $id_lophoc, $id_sinhvien, $ma_sinhvien, $tensinhvien, $kohl, $ithl, $khahl, $hl, $rathl, $per_kohl, $per_ithl, $per_khahl, $per_hl, $per_rathl));
        return $obj->rowCount();
    }

    public function thongkeketquasv__Get_By_Id($id) {
        $obj = $this->connect->prepare("SELECT * FROM thongkeketquasv WHERE id = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id));
        return $obj->fetch();
    }
    public function thongkeketquasv__Get_By_Id_Lop_Hoc_And_Id_Dot($id_lophoc, $id_dot) {
        $obj = $this->connect->prepare("SELECT * FROM thongkeketquasv WHERE id_lophoc=? AND id_dot = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_lophoc, $id_dot));
        return $obj->fetchAll();
    }

    public function thongkeketquasv__Get_By_Id_Phieu($id_lophoc, $id_dot, $id_sinhvien) {
        $obj = $this->connect->prepare("SELECT * FROM thongkeketquasv WHERE id_lophoc=? AND id_dot=? AND id_sinhvien=?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_lophoc, $id_dot, $id_sinhvien));
        return $obj->fetch();
    }
    public function thongkeketquasv__Get_By_Id_Dot_All($id_dot, $id_lophoc) {
        $obj = $this->connect->prepare("SELECT COUNT(*) as sum FROM thongkeketquasv WHERE id_dot=? AND id_lophoc=?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_dot, $id_lophoc));
        return $obj->fetch();
    }
    public function thongkeketquasv__Get_By_Id_dot($id_dot) {
        $obj = $this->connect->prepare("SELECT * FROM thongkeketquasv WHERE id_dot = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_dot));
        return $obj->fetchAll();
    }
    public function thongkeketquasv__Get_By_Id_sum($id_dot, $kohl, $ithl, $khahl, $hl, $rathl, $per_kohl, $per_ithl, $per_khahl, $per_hl, $per_rathl) {
        $obj = $this->connect->prepare("SELECT count(*) as sum_so_luong FROM thongkeketquasv WHERE id_dot=? AND kohl=? AND ithl=? AND khahl=? AND hl=? AND rathl=? AND per_kohl=? AND per_ithl=? AND per_khahl=? AND per_hl=? AND per_rathl=?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_dot, $kohl, $ithl, $khahl, $hl, $rathl, $per_kohl, $per_ithl, $per_khahl, $per_hl, $per_rathl));
        return $obj->fetch();
    }

    public function thongkeketquasv__Delete($id) {
        $obj = $this->connect->prepare("DELETE FROM thongkeketquasv WHERE id = ?");
        $obj->execute(array($id));
        return $obj->rowCount();
    }

}
