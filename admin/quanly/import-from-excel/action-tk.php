<?php

require '../../../models/getModel.php';
require('../../../assets/vendor/PHPOffice/PHPExcel.php');

if (isset($_GET['req'])) {
    switch ($_GET['req']) {
        case "import":
            $status = 0;

            $file = $_FILES["file"]["tmp_name"];
            if (isset($file)) {
                $objReader = PHPExcel_IOFactory::createReaderForFile($file);
                $objReader->setLoadSheetsOnly();
                $objExcel = $objReader->load($file);
                $sheetData = $objExcel->getActiveSheet()->toArray(null, true, true, true);
                $highestRow = $objExcel->setActiveSheetIndex()->getHighestRow();

                for ($row = 2; $row <= $highestRow; $row++) {


                    $tentaikhoan = $sheetData[$row]['B'];
                    $email = $sheetData[$row]['C'];
                    $matkhau = $sheetData[$row]['D'];
                    $mota = $sheetData[$row]['E'];
                    $id_phanquyen = $sheetData[$row]['F'];
                    $id_phannhom = $sheetData[$row]['G'];
                    $id_nguoidung = $sheetData[$row]['H'];

                    $status .= $taikhoan->taikhoan_Add($tentaikhoan, $email, $matkhau, $mota, $id_phanquyen, $id_phannhom, $id_nguoidung);
                }
            }

            if ($status == 0) {
                header("location:../index-tk.php?page=import-from-excel&status=fail");
            } else {
                header("location:../index-tk.php?page=import-from-excel&status=success");
            }
            break;

        case "export":

            $status = 0;

            $taikhoan__Get_All = $taikhoan->taikhoan__Get_All();

            $objPHPExcel = new PHPExcel();
            $objPHPExcel->setActiveSheetIndex(0);

            $row_hd = 2;

            $objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true);
            $objPHPExcel->getActiveSheet()->getStyle('B1')->getFont()->setBold(true);
            $objPHPExcel->getActiveSheet()->getStyle('C1')->getFont()->setBold(true);
            $objPHPExcel->getActiveSheet()->getStyle('D1')->getFont()->setBold(true);
            $objPHPExcel->getActiveSheet()->getStyle('E1')->getFont()->setBold(true);
            $objPHPExcel->getActiveSheet()->getStyle('F1')->getFont()->setBold(true);
            $objPHPExcel->getActiveSheet()->getStyle('G1')->getFont()->setBold(true);
            $objPHPExcel->getActiveSheet()->getStyle('H1')->getFont()->setBold(true);

            $objPHPExcel->getActiveSheet()->SetCellValue('A1', "ID");
            $objPHPExcel->getActiveSheet()->SetCellValue('B1', "TEN");
            $objPHPExcel->getActiveSheet()->SetCellValue('C1', "EMAIL");
            $objPHPExcel->getActiveSheet()->SetCellValue('D1', "MATKHAU");
            $objPHPExcel->getActiveSheet()->SetCellValue('E1', "MOTA");
            $objPHPExcel->getActiveSheet()->SetCellValue('F1', "PHANQUYEN");
            $objPHPExcel->getActiveSheet()->SetCellValue('G1', "PHANNHOM");
            $objPHPExcel->getActiveSheet()->SetCellValue('H1', "ID_NGUOIDUNG");

            foreach ($taikhoan__Get_All as $item) {
                $objPHPExcel->getActiveSheet()->SetCellValue('A'.$row_hd, "". $item->id_taikhoan);
                $objPHPExcel->getActiveSheet()->SetCellValue('B'.$row_hd, "". $item->tentaikhoan);
                $objPHPExcel->getActiveSheet()->SetCellValue('C'.$row_hd, "". $item->email);
                $objPHPExcel->getActiveSheet()->SetCellValue('D'.$row_hd, "". $item->matkhau);
                $objPHPExcel->getActiveSheet()->SetCellValue('E'.$row_hd, "". $item->mota);
                $objPHPExcel->getActiveSheet()->SetCellValue('F'.$row_hd, "". $item->id_phanquyen);
                $objPHPExcel->getActiveSheet()->SetCellValue('G'.$row_hd, "". $item->id_phannhom);
                $objPHPExcel->getActiveSheet()->SetCellValue('H'.$row_hd, "". $item->id_nguoidung);

                $row_hd += 1;
            }
            // lưu file 
            $file = 'export.xlsx';
            $objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
            $objWriter->save($file);

            // download
            header('Content-Description: File Transfer');
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            header('Content-Disposition: attachment; filename=' . basename($file));
            header('Content-Transfer-Encoding: binary');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($file));
            ob_clean();
            flush();
            readfile($file);
            // xóa file tạm
            $status .= unlink($file);

            if ($status == 0) {
                header("location:../index-tk.php?page=import-from-excel&status=fail");
            } else {
                header("location:../index-tk.php?page=import-from-excel&status=success");
            }
            break;
    }
}
?>