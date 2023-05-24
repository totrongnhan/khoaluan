<?php
    //nhan du lieu tu form
    $tenlophoc = $_POST['tenlophoc'];
    $mota = $_POST['mota'];
    $id_nganhhoc = $_POST['id_nganhhoc'];
    $id_khoahoc = $_POST['id_khoahoc'];

    //ket noi csdl
    require_once '../mod/config.php';
    
    //viet lenh sql de them du lieu
    $themsql = "INSERT INTO lophoc (tenlophoc, mota, id_nganhhoc, id_khoahoc) VALUES ('$tenlophoc', '$mota', '$id_nganhhoc', '$id_khoahoc')";
    //echo $themsql; exit;

    //thuc thi cau lenh them
    if (mysqli_query($conn, $themsql)){

    //in thong bao thanh cong
    //trở về trang liệt kê
    header("Location: lietkelophoc.php");
    }
   
