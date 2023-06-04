<?php
    //nhan du lieu tu form
    $tentaikhoan = $_POST['tentaikhoan'];
    $email = $_POST['email'];
    $matkhau = $_POST['matkhau'];
    $mota = $_POST['mota'];
    $id_phannhom = $_POST['id_phannhom'];
    $id_phanquyen = $_POST['id_phanquyen'];
    $id_nguoidung = $_POST['id_nguoidung'];

    //ket noi csdl
    require_once '../mod/config.php';
    
    //viet lenh sql de them du lieu
    $updatesql = "UPDATE taikhoan tentaikhoan='$tentaikhoan', email='$email', matkhau='$matkhau', mota='$mota', id_phannhom='$id_phannhom', id_phanquyen='$id_phanquyen'   WHERE id_taikhoan=$id_taikhoan";
    //echo updatesql; exit;

    //thuc thi cau lenh them
    if (mysqli_query($conn, $updatesql)){

    //in thong bao thanh cong
    //trở về trang liệt kê
    header("Location: lietketaikhoan.php");
    }