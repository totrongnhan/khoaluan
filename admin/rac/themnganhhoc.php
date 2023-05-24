<?php
    //nhan du lieu tu form
    $tennganhhoc = $_POST['tennganhhoc'];
    $mota = $_POST['mota'];

    //ket noi csdl
    require_once '../mod/config.php';
    
    //viet lenh sql de them du lieu
    $themsql = "INSERT INTO nganhhoc (tennganhhoc, mota) VALUES ('$tennganhhoc', '$mota')";
    //echo $themsql; exit;

    //thuc thi cau lenh them
    if (mysqli_query($conn, $themsql));{

    //in thong bao thanh cong
    //trở về trang liệt kê
    header("Location: lietkenganhhoc.php");
    }
