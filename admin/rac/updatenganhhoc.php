<?php
    //nhan du lieu tu form
    $tennganhhoc = $_POST['tennganhhoc'];
    $mota = $_POST['mota'];
    $id_nganhhoc = $_POST['sid'];

    //ket noi csdl
    require_once '../mod/config.php';
    
    //viet lenh sql de them du lieu
    $updatesql = "UPDATE nganhhoc SET tennganhhoc='$tennganhhoc', mota='$mota'   WHERE id_nganhhoc=$id_nganhhoc";
    //echo updatesql; exit;

    //thuc thi cau lenh them
    if (mysqli_query($conn, $updatesql));{

    //in thong bao thanh cong
    //trở về trang liệt kê
    header("Location: lietkenganhhoc.php");
    }