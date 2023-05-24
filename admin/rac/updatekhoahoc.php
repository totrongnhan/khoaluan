<?php
    //nhan du lieu tu form
    $tenkhoahoc = $_POST['tenkhoahoc'];
    $mota = $_POST['mota'];
    $id_khoahoc = $_POST['sid'];

    //ket noi csdl
    require_once '../mod/config.php';
    
    //viet lenh sql de them du lieu
    $updatesql = "UPDATE khoahoc SET tenkhoahoc='$tenkhoahoc', mota='$mota'   WHERE id_khoahoc=$id_khoahoc";
    //echo updatesql; exit;

    //thuc thi cau lenh them
    if (mysqli_query($conn, $updatesql));{

    //in thong bao thanh cong
    //trở về trang liệt kê
    header("Location: lietkekhoahoc.php");
    }