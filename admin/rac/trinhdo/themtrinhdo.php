<?php
    //nhan du lieu tu form
    $ma_trinhdo = $_POST['ma_trinhdo'];
    $tentrinhdo = $_POST['tentrinhdo'];
    $mota = $_POST['mota'];

    //ket noi csdl
    require_once '../mod/config.php';
    
    //viet lenh sql de them du lieu
    $themsql = "INSERT INTO trinhdo (ma_trinhdo, tentrinhdo, mota) VALUES ('$ma_trinhdo', '$tentrinhdo', '$mota')";
    //echo $themsql; exit;

    //thuc thi cau lenh them
    if (mysqli_query($conn, $themsql));{

    //in thong bao thanh cong
    //trở về trang liệt kê
    header("Location: lietketrinhdo.php");
    }
