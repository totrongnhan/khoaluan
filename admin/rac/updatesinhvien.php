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
    $id_sv = $_POST['sid'];

    //ket noi csdl
    require_once '../mod/config.php';
    
    //viet lenh sql de them du lieu
    $updatesql = "UPDATE sinhvien SET ma_sv='$ma_sv', ten_sv='$ten_sv', gioitinh='$gioitinh', ngaysinh='$ngaysinh', email='$email', diachithuongtru='$diachithuongtru', diachilienlac='$diachilienlac', sdt1='$sdt1', sdt2='$sdt2', id_lophoc='$id_lophoc', id_taikhoan='$id_taikhoan'   WHERE id_sv=$id_sv";
    //echo updatesql; exit;

    //thuc thi cau lenh them
    if (mysqli_query($conn, $updatesql)){

    //in thong bao thanh cong
    //trở về trang liệt kê
    header("Location: lietkesinhvien.php");
    }