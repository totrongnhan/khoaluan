<?php

if (isset($_GET['req'])) {
    $request = $_GET['req'];
    switch ($request) {
        case 'quan-ly-tai-khoan':
            require './quanly/quan-ly-tai-khoan/index.php';
            break;
        case 'lietketaikhoan':
            require './quanly/taikhoan/lietketaikhoan.php';
            break;
        case 'suataikhoan':
            require './quanly/taikhoan/suataikhoan.php';
            break;

        case 'lietkesinhvien':
            require './quanly/sinhvien/lietkesinhvien.php';
            break;
        case 'suasinhvien':
            require './quanly/sinhvien/suasinhvien.php';
            break;

        case 'lietkegiangvien':
            require './quanly/giangvien/lietkegiangvien.php';
            break;
        case 'suagiangvien':
            require './quanly/giangvien/suagiangvien.php';
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

        case 'lietkenganhhoc':
            require './quanly/nganhhoc/lietkenganhhoc.php';
            break;
        case 'suanganhhoc':
            require './quanly/nganhhoc/suanganhhoc.php';
            break;

        case 'lietkekhoahoc':
            require './quanly/khoahoc/lietkekhoahoc.php';
            break;
        case 'suakhoahoc':
            require './quanly/khoahoc/suakhoahoc.php';
            break;

        case 'lietkephieu':
            require './quanly/phieu/lietkephieu.php';
            break;

        case 'lietkephanquyen':
            require './quanly/phanquyen/lietkephanquyen.php';
            break;
        case 'suaphanquyen':
            require './quanly/phanquyen/suaphanquyen.php';
            break;

        case 'lietkephannhom':
            require './quanly/phannhom/lietkephannhom.php';
            break;
        case 'suaphannhom':
            require './quanly/phannhom/suaphannhom.php';
            break;

        case 'lietketrinhdo':
            require './quanly/trinhdo/lietketrinhdo.php';
            break;
        case 'suatrinhdo':
            require './quanly/trinhdo/suatrinhdo.php';
            break;

        case 'lietkedonvi':
            require './quanly/donvi/lietkedonvi.php';
            break;
        case 'suadonvi':
            require './quanly/donvi/suadonvi.php';
            break;

        case 'lietkecauhoi':
            require './quanly/cauhoi/lietkecauhoi.php';
            break;
        case 'suacauhoi':
            require './quanly/cauhoi/suacauhoi.php';
            break;

        case 'lietkenhomcauhoi':
            require './quanly/nhomcauhoi/lietkenhomcauhoi.php';
            break;
        case 'suanhomcauhoi':
            require './quanly/nhomcauhoi/suanhomcauhoi.php';
            break;

        case 'lietketenkhaosat':
            require './quanly/tenkhaosat/lietketenkhaosat.php';
            break;
        case 'suatenkhaosat':
            require './quanly/tenkhaosat/suatenkhaosat.php';
            break;

        case 'lietkenamhoc':
            require './quanly/namhoc/lietkenamhoc.php';
            break;
        case 'suanamhoc':
            require './quanly/namhoc/suanamhoc.php';
            break;
        case 'lietkehocky':
            require './quanly/hocky/lietkehocky.php';
            break;
        case 'suahocky':
            require './quanly/hocky/suahocky.php';
            break;
        case 'lietkedotkhaosat':
            require './quanly/dotkhaosat/lietkedotkhaosat.php';
            break;
        case 'suadotkhaosat':
            require './quanly/dotkhaosat/suadotkhaosat.php';
            break;
        case 'lietkedoituongapdung':
            require './quanly/doituongapdung/lietkedoituongapdung.php';
            break;
        case 'suadoituongapdung':
            require './quanly/doituongapdung/suadoituongapdung.php';
            break;
        case 'lietkephieukhaosat':
            require './quanly/phieukhaosat/lietkephieukhaosat.php';
            break;
        case 'suaphieukhaosat':
            require './quanly/phieukhaosat/suaphieukhaosat.php';
            break;
        case 'lietkephieukhaosatgv':
            require './quanly/phieukhaosatgv/lietkephieukhaosatgv.php';
            break;
        case 'suaphieukhaosatgv':
            require './quanly/phieukhaosatgv/suaphieukhaosatgv.php';
            break;
//        case 'taophieu':
//            require './quanly/taophieu/taophieu.php';
//            break;
        case 'suaphieukhaosat':
            require './quanly/phieukhaosat/suaphieukhaosat.php';
            break;
        case 'thongkeketquasv':
            require './quanly/thongkeketquasv/thongkeketquasv.php';
            break;
        case 'thongkeketquagv':
            require './quanly/thongkeketquagv/thongkeketquagv.php';
            break;
        case 'index':
            require './quanly/import-from-excel/index.php';
            break;
        case 'index-tk':
            require './quanly/import-from-excel/index-tk.php';
            break;
    }
} else {
    
}
