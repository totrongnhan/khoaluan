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

class thongkeketquagv extends Database {

    public function thongkeketquagv__Get_All() {
        $obj = $this->connect->prepare("SELECT * FROM thongkeketquagv");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute();
        return $obj->fetchAll();
    }

    public function thongkeketquagv_Add($id_tenkhaosat, $id_dot, $id_phieu, $id_donvi, $id_giangvien, $ma_giangvien, $tengiangvien, $kohl, $ithl, $khahl, $hl, $rathl, $per_kohl, $per_ithl, $per_khahl, $per_hl, $per_rathl) {
        $obj = $this->connect->prepare("INSERT INTO thongkeketquagv(id_tenkhaosat, id_dot, id_phieu, id_donvi, id_giangvien, ma_giangvien, tengiangvien, kohl, ithl, khahl, hl, rathl, per_kohl, per_ithl, per_khahl, per_hl, per_rathl) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $obj->execute(array($id_tenkhaosat, $id_dot, $id_phieu, $id_donvi, $id_giangvien, $ma_giangvien, $tengiangvien, $kohl, $ithl, $khahl, $hl, $rathl, $per_kohl, $per_ithl, $per_khahl, $per_hl, $per_rathl));
        return $obj->rowCount();
    }

    public function thongkeketquagv__Get_By_Id($id) {
        $obj = $this->connect->prepare("SELECT * FROM thongkeketquagv WHERE id = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id));
        return $obj->fetch();
    }
    public function thongkeketquagv__Get_By_Id_Lop_Hoc_And_Id_Dot($id_donvi, $id_dot, $_tenkhaosat) {
        $obj = $this->connect->prepare("SELECT * FROM thongkeketquagv WHERE id_donvi=? AND id_dot = ? AND id_tenkhaosat=?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_donvi, $id_dot, $_tenkhaosat));
        return $obj->fetchAll();
    }

    public function thongkeketquagv__Get_By_Id_Phieu($id_donvi, $id_dot, $id_giangvien) {
        $obj = $this->connect->prepare("SELECT * FROM thongkeketquagv WHERE id_donvi=? AND id_dot=? AND id_giangvien=?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_donvi, $id_dot, $id_giangvien));
        return $obj->fetch();
    }
    public function thongkeketquagv__Get_By_Id_Dot_All($id_dot, $id_donvi) {
        $obj = $this->connect->prepare("SELECT COUNT(*) as sum FROM thongkeketquagv WHERE id_dot=? AND id_donvi=?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_dot, $id_donvi));
        return $obj->fetch();
    }
    public function thongkeketquagv__Get_By_Id_Tenkhaosat($id_tenkhaosat) {
        $obj = $this->connect->prepare("SELECT * FROM thongkeketquagv WHERE id_tenkhaosat = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_tenkhaosat));
        return $obj->fetchAll();
    }
    public function thongkeketquagv__Get_By_Id_dot($id_dot) {
        $obj = $this->connect->prepare("SELECT * FROM thongkeketquagv WHERE id_dot = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_dot));
        return $obj->fetchAll();
    }
    public function thongkeketquagv__Get_By_Id_sum($id_dot, $kohl, $ithl, $khahl, $hl, $rathl, $per_kohl, $per_ithl, $per_khahl, $per_hl, $per_rathl) {
        $obj = $this->connect->prepare("SELECT count(*) as sum_so_luong FROM thongkeketquagv WHERE id_dot=? AND kohl=? AND ithl=? AND khahl=? AND hl=? AND rathl=? AND per_kohl=? AND per_ithl=? AND per_khahl=? AND per_hl=? AND per_rathl=?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_dot, $kohl, $ithl, $khahl, $hl, $rathl, $per_kohl, $per_ithl, $per_khahl, $per_hl, $per_rathl));
        return $obj->fetch();
    }

    public function thongkeketquagv__Delete($id) {
        $obj = $this->connect->prepare("DELETE FROM thongkeketquagv WHERE id = ?");
        $obj->execute(array($id));
        return $obj->rowCount();
        
    }
    public function thongkeketquagv__Delete_All($id_tenkhaosat) {
        $obj = $this->connect->prepare("DELETE FROM thongkeketquagv WHERE id_tenkhaosat = ?");
        $obj->execute(array($id_tenkhaosat));
        return $obj->rowCount();
    }
    public function thongkeketquagv__All_muc1($id_dot) {
        $obj = $this->connect->prepare("SELECT SUM(kohl) as `sum_so_luong`FROM thongkeketquagv WHERE id_dot = ? AND kohl != 0");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_dot));
        return $obj->fetch();
    }

    public function thongkeketquagv__All_muc2($id_dot) {
        $obj = $this->connect->prepare("SELECT SUM(ithl) as `sum_so_luong` FROM thongkeketquagv WHERE id_dot = ? AND ithl != 0");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_dot));
        return $obj->fetch();
    }

    public function thongkeketquagv__All_muc3($id_dot) {
        $obj = $this->connect->prepare("SELECT SUM(khahl)as `sum_so_luong` FROM thongkeketquagv WHERE id_dot = ? AND khahl != 0");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_dot));
        return $obj->fetch();
    }

    public function thongkeketquagv__All_muc4($id_dot) {
        $obj = $this->connect->prepare("SELECT SUM(hl)as `sum_so_luong` FROM thongkeketquagv WHERE id_dot = ? AND hl != 0");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_dot));
        return $obj->fetch();
    }

    public function thongkeketquagv__All_muc5($id_dot) {
        $obj = $this->connect->prepare("SELECT SUM(rathl) as `sum_so_luong` FROM thongkeketquagv WHERE id_dot = ? AND rathl != 0");

        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_dot));
        return $obj->fetch();
    }

}
