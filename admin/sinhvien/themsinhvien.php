<?php
    //nhan du lieu tu form
    $ma_sv = $_POST['ma_sv'];
    $ten_sv = $_POST['ten_sv'];
    $gioitinh = $_POST['gioitinh'];
    $ngaysinh = $_POST['ngaysinh'];
    $email = $_POST['email'];
    $diachithuongtru = $_POST['diachithuongtru'];
    $diachilienlac = $_POST['diachilienlac'];
    $sdt1 = $_POST['sdt1'];
    $sdt2 = $_POST['sdt2'];
    $id_lophoc = $_POST['id_lophoc'];
    $id_taikhoan = $_POST['id_taikhoan'];

    //ket noi csdl
    require_once '../mod/config.php';
    
    //viet lenh sql de them du lieu
    $themsql = "INSERT INTO sinhvien (ma_sv, ten_sv, gioitinh, ngaysinh, email, diachithuongtru, diachilienlac, sdt1, sdt2, id_lophoc, id_taikhoan) VALUES ('$ma_sv', '$ten_sv', '$gioitinh', '$ngaysinh', '$email', '$diachithuongtru', '$diachilienlac', '$sdt1', '$sdt2', '$id_lophoc', '$id_taikhoan')";
    //echo $themsql; exit;

    //thuc thi cau lenh them
    if (mysqli_query($conn, $themsql));{

    //in thong bao thanh cong
    //trở về trang liệt kê
    header("Location: lietkesinhvien.php");
    }
