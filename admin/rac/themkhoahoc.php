<?php
    //nhan du lieu tu form
    $tenkhoahoc = $_POST['tenkhoahoc'];
    $mota = $_POST['mota'];

    //ket noi csdl
    require_once '../mod/config.php';
    
    //viet lenh sql de them du lieu
    $themsql = "INSERT INTO khoahoc (tenkhoahoc, mota) VALUES ('$tenkhoahoc', '$mota')";
    //echo $themsql; exit;

    //thuc thi cau lenh them
    if (mysqli_query($conn, $themsql));{

    //in thong bao thanh cong
    //trở về trang liệt kê
    header("Location: lietkekhoahoc.php");
    }
