<?php
if (isset($_GET['req'])) {
    $request = $_GET['req'];
    switch ($request) {
   
        case 'taikhoan':
            require 'taikhoan/lietketaikhoan.php';
            break;
        case 'lietkelophoc':
            require './quanly/lophoc/lietkelophoc.php';
            break;
        case 'sualophoc':
            require './quanly/lophoc/sualophoc.php';
            break;  
        
        case 'lietkelophoctest':
            require 'lophoc/lietkelophoctest.php';
            break;
        case 'lietkekhoahoc':
            require 'khoahoc/lietkekhoahoc.php';
            break;
        
    }
} else {
}
