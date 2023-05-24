<?php

session_start();
require '../../element/mod/userCls.php';
if (isset($_GET['reqact'])) {
    $requestAction = $_GET['reqact'];
    switch ($requestAction) {
        case 'addnew':
            ////            xử lí thêm
            $tentaikhoan = $_POST['tentaikhoan'];
            $email = $_POST['email'];
            $matkhau = $_POST['matkhau'];
            $mota = $_POST['mota'];
            $phanquyen = $_POST['phanquyen'];
            $phannhom = $_POST['phannhom'];


            $user = new userss();
            $rs = $user->UserAdd($tentaikhoan, $email, $matkhau, $mota, $phanquyen, $phannhom);
            if ($rs) {
                header('location:../../index.php?req=userView&result=ok');
            } else {
                header('location:../../index.php?req=userView&result=notok');
            }
            break;

        case 'deleteuser':
            $iduser = $_GET['iduser'];
            $user = new userss();
            $rs = $user->UserDelete($id_taikhoan);
            if ($rs) {
                header('location:../../index.php?req=userView&result=ok');
            } else {
                header('location:../../index.php?req=userView&result=notok');
            }
            break;

        case 'setlock':
            $iduser = $_GET['id_taikhoan'];
            $ability = $_GET['ability'];
            $objuser = new userss();
            if ($ability == 0) {
                $rs = $objuser->UserSetActive($iduser, 1);
            } else {

                $rs = $objuser->UserSetActive($iduser, 0);
            }
            if ($rs) {
                header('location:../../index.php?req=userView&result=ok');
            } else {
                header('location:../../index.php?req=userView&result=notok');
            }
            break;

        case 'updateuser':
            $tentaikhoan = $_POST['tentaikhoan'];
            $email = $_POST['email'];
            $matkhau = $_POST['matkhau'];
            $mota = $_POST['mota'];
            $phanquyen = $_POST['phanquyen'];
            $phannhom = $_POST['phannhom'];
            $id_taikhoan = $_POST['id_taikhoan'];

            $user = new taikhoan();
            $rs = $user->UserUpdate($tentaikhoan, $email, $matkhau, $mota, $phanquyen, $phannhom, $iduser);
            if ($rs) {
                header('location:../../index.php?req=userView&result=ok');
            } else {
                header('location:../../index.php?req=userView&result=notok');
            }
            break;

        case 'checkLogin':
            $email = $_POST['email'];
            $matkhau = $_POST['matkhau'];
            $user = new userss();

            $rs = $user->UserCheckLogin($username, $password);
            if ($rs) {
                if ($username == "admin") {
                    $_SESSION['ADMIN'] = $username;
                } else {
                    $_SESSION['USER'] = $username;
                }
                if (isset($_SESSION['USER']) || isset($_SESSION['ADMIN'])) {
                    header('location: ../../index.php');
                }
            } else {
                header('location:../../userLogin.php');
            }
            break;

        case 'userlogout':
            $timelogin = date('h:i - d/m/Y');
            if (isset($_SESSION['USER'])) {
                $namelogin = $_SESSION['USER'];
            }
            if (isset($_SESSION['ADMIN'])) {
                $namelogin = $_SESSION['ADMIN'];
            }
            setcookie($namelogin, $timelogin, time() + (86400 * 30), "/");
            session_destroy();
            header('location:../../index.php?');
            break;
        default:
            header('location:../../index.php?req=userView');
            break;
    }
} else {
    header('location:../../index.php');
}
