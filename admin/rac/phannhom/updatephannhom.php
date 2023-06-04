<?php
    //nhan du lieu tu form
    $tenphannhom = $_POST['tenphannhom'];
    $mota = $_POST['mota'];
    $id_phannhom = $_POST['sid'];

    //ket noi csdl
    require_once '../mod/config.php';
    
    //viet lenh sql de them du lieu
    $updatesql = "UPDATE phannhom SET tenphannhom='$tenphannhom', mota='$mota'   WHERE id_phannhom=$id_phannhom";
    //echo updatesql; exit;

    //thuc thi cau lenh them
    if (mysqli_query($conn, $updatesql));{

    //in thong bao thanh cong
    //trở về trang liệt kê
    header("Location: lietkephannhom.php");
    }