<?php
    //nhan du lieu tu form
    $tenlophoc = $_POST['tenlophoc'];
    $mota = $_POST['mota'];
    $id_nganhhoc = $_POST['id_nganhhoc'];
    $id_khoahoc = $_POST['id_khoahoc'];
    $id_lophoc = $_POST['sid'];

    //ket noi csdl
    require_once '../mod/config.php';
    
    //viet lenh sql de them du lieu
    $updatesql = "UPDATE lophoc SET tenlophoc='$tenlophoc', mota='$mota', id_nganhhoc='$id_nganhhoc', id_khoahoc='$id_khoahoc'  WHERE id_lophoc=$id_lophoc";
    //echo updatesql; exit;

    //thuc thi cau lenh them
    if (mysqli_query($conn, $updatesql));{

    //in thong bao thanh cong
    //trở về trang liệt kê
    header("Location: lietkelophoc.php");
    }