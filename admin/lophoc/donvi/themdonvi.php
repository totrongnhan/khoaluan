<?php
    //nhan du lieu tu form
    $ma_donvi = $_POST['ma_donvi'];
    $tendonvi = $_POST['tendonvi'];
    $mota = $_POST['mota'];

    //ket noi csdl
    require_once '../mod/config.php';
    
    //viet lenh sql de them du lieu
    $themsql = "INSERT INTO donvi (ma_donvi, tendonvi, mota) VALUES ('$ma_donvi', '$tendonvi', '$mota')";
    //echo $themsql; exit;

    //thuc thi cau lenh them
    if (mysqli_query($conn, $themsql));{

    //in thong bao thanh cong
    //trở về trang liệt kê
    header("Location: lietkedonvi.php");
    }
   
