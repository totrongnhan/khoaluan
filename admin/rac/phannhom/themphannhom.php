<?php
    //nhan du lieu tu form
    $tenphannhom = $_POST['tenphannhom'];
    $mota = $_POST['mota'];

    //ket noi csdl
    require_once '../mod/config.php';
    
    //viet lenh sql de them du lieu
    $themsql = "INSERT INTO phannhom (tenphannhom, mota) VALUES ('$tenphannhom', '$mota')";
    //echo $themsql; exit;

    //thuc thi cau lenh them
    if (mysqli_query($conn, $themsql));{

    //in thong bao thanh cong
    //trở về trang liệt kê
    header("Location: lietkephannhom.php");
    }
