<?php
    //nhan du lieu tu form
    $ma_trinhdo = $_POST['ma_trinhdo'];
    $tentrinhdo = $_POST['tentrinhdo'];
    $mota = $_POST['mota'];
    $id_trinhdo = $_POST['sid'];

    //ket noi csdl
    require_once '../mod/config.php';
    
    //viet lenh sql de them du lieu
    $updatesql = "UPDATE trinhdo SET ma_trinhdo='$ma_trinhdo', tentrinhdo='$tentrinhdo', mota='$mota'   WHERE id_trinhdo=$id_trinhdo";
    //echo updatesql; exit;

    //thuc thi cau lenh them
    if (mysqli_query($conn, $updatesql));{

    //in thong bao thanh cong
    //trở về trang liệt kê
    header("Location: lietketrinhdo.php");
    }