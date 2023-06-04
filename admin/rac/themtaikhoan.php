<?php
    //nhan du lieu tu form    
    $tentaikhoan = $_POST['tentaikhoan'];
    $email = $_POST['email'];
    $matkhau = $_POST['matkhau'];
    $mota = $_POST['mota'];
    $id_phannhom = $_POST['id_phannhom'];
    $id_phanquyen = $_POST['id_phanquyen'];

    //ket noi csdl
    require_once '../mod/config.php';
    
    //viet lenh sql de them du lieu
    $themsql = "INSERT INTO taikhoan (tentaikhoan, email, matkhau, mota, id_phannhom, id_phanquyen) VALUES ('$tentaikhoan', '$email', '$matkhau', '$mota', '$id_phannhom', '$id_phanquyen')";
    //echo $themsql; exit;

    //thuc thi cau lenh them
    if (mysqli_query($conn, $themsql));{

    //in thong bao thanh cong
    //trở về trang liệt kê
    header("Location: lietketaikhoan.php");
    }
