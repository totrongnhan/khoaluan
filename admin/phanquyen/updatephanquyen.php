<?php
    //nhan du lieu tu form
    $tenphanquyen = $_POST['tenphanquyen'];
    $mota = $_POST['mota'];
    $id_phanquyen = $_POST['sid'];

    //ket noi csdl
    require_once '../mod/config.php';
    
    //viet lenh sql de them du lieu
    $updatesql = "UPDATE phanquyen SET tenphanquyen='$tenphanquyen', mota='$mota'   WHERE id_phanquyen=$id_phanquyen";
    //echo updatesql; exit;

    //thuc thi cau lenh them
    if (mysqli_query($conn, $updatesql));{

    //in thong bao thanh cong
    //trở về trang liệt kê
    header("Location: lietkephanquyen.php");
    }