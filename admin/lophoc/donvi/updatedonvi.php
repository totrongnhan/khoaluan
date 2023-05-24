<?php
    //nhan du lieu tu form
    $ma_donvi = $_POST['ma_donvi'];
    $tendonvi = $_POST['tendonvi'];
    $mota = $_POST['mota'];
    $id_donvi = $_POST['sid'];

    //ket noi csdl
    require_once '../mod/config.php';
    
    //viet lenh sql de them du lieu
    $updatesql = "UPDATE donvi SET ma_donvi='$ma_donvi', tendonvi='$tendonvi', mota='$mota'   WHERE id_donvi=$id_donvi";
    //echo updatesql; exit;

    //thuc thi cau lenh them
    if (mysqli_query($conn, $updatesql));{

    //in thong bao thanh cong
    //trở về trang liệt kê
    header("Location: lietkedonvi.php");
    }