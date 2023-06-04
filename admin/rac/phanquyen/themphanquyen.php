<?php
    //nhan du lieu tu form
    $tenphanquyen = $_POST['tenphanquyen'];
    $mota = $_POST['mota'];

    //ket noi csdl
    require_once '../mod/config.php';
    
    //viet lenh sql de them du lieu
    $themsql = "INSERT INTO phanquyen (tenphanquyen, mota) VALUES ('$tenphanquyen', '$mota')";
    //echo $themsql; exit;

    //thuc thi cau lenh them
    if (mysqli_query($conn, $themsql));{

    //in thong bao thanh cong
    //trở về trang liệt kê
    header("Location: lietkephanquyen.php");
    }
