<?php

    require '../../../models/getModel.php';
    require('../../../assets/vendor/PHPOffice/PHPExcel.php');
    
    if (isset($_GET['req'])){
        switch($_GET['req']){
            case "import":
                $status = 0;
                
                $file = $_FILES["file"]["tmp_name"];
                if(isset($file)){
                    $objReader = PHPExcel_IOFactory::createReaderForFile($file);
                     $objReader->setLoadSheetsOnly();
                     $objExcel = $objReader->load($file);
                     $sheetData = $objExcel->getActiveSheet()->toArray(null, true, true,true);
                     $highestRow = $objExcel->setActiveSheetIndex()->getHighestRow();


                    for($row = 2; $row<=$highestRow; $row++){
                        $ma_giangvien          = $sheetData[$row]['B'];
                        $tengiangvien      = $sheetData[$row]['C'];
                        $gioitinh      = $sheetData[$row]['D'];
                        $ngaysinh  = $sheetData[$row]['E'];
                        $email      = $sheetData[$row]['F'];
                        $diachithuongtru      = $sheetData[$row]['G'];
                        $diachilienlac      = $sheetData[$row]['H'];
                        $sdt1      = $sheetData[$row]['I'];
                        $sdt2      = $sheetData[$row]['J'];
                        $id_donvi      = $sheetData[$row]['K'];
                        $id_trinhdo      = $sheetData[$row]['L'];
                        $status .= $giangvien->giangvien_Add($ma_giangvien, $tengiangvien, $gioitinh, $ngaysinh, $email, $diachithuongtru, $diachilienlac, $sdt1, $sdt2, $id_donvi, $id_trinhdo);
                    }
                }
               
                if($status == 0){
                    header("location:../../index.php?req=index-gv&status=fail");
                }else{
                    header("location:../../index.php?req=index-gv&status=success");
                }
            break;  
            
            case "export":
                               
                $status = 0;
                
                $giangvien__Get_All = $giangvien->giangvien__Get_All();

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
                $objPHPExcel->getActiveSheet()->getStyle('I1')->getFont()->setBold(true);
                $objPHPExcel->getActiveSheet()->getStyle('J1')->getFont()->setBold(true);
                $objPHPExcel->getActiveSheet()->getStyle('K1')->getFont()->setBold(true);
                $objPHPExcel->getActiveSheet()->getStyle('L1')->getFont()->setBold(true);

                $objPHPExcel->getActiveSheet()->SetCellValue('A1', "ID");
                $objPHPExcel->getActiveSheet()->SetCellValue('B1', "MASV");
                $objPHPExcel->getActiveSheet()->SetCellValue('C1', "TENSV");
                $objPHPExcel->getActiveSheet()->SetCellValue('D1', "GIOITINH");
                $objPHPExcel->getActiveSheet()->SetCellValue('E1', "NGAYSINH");
                $objPHPExcel->getActiveSheet()->SetCellValue('F1', "EMAIL");
                $objPHPExcel->getActiveSheet()->SetCellValue('G1', "DIACHITHUONGTRU");
                $objPHPExcel->getActiveSheet()->SetCellValue('H1', "DIACHILIENLAC");
                $objPHPExcel->getActiveSheet()->SetCellValue('I1', "SDT1");
                $objPHPExcel->getActiveSheet()->SetCellValue('J1', "SDT2");
                $objPHPExcel->getActiveSheet()->SetCellValue('K1', "IDDONVI");
                $objPHPExcel->getActiveSheet()->SetCellValue('L1', "IDTRINHDO");
                foreach($giangvien__Get_All as $item){
                    $objPHPExcel->getActiveSheet()->SetCellValue('A'.$row_hd, "".$item->id_giangvien);
                    $objPHPExcel->getActiveSheet()->SetCellValue('B'.$row_hd, "".$item->ma_giangvien);
                    $objPHPExcel->getActiveSheet()->SetCellValue('C'.$row_hd, "".$item->tengiangvien);
                    $objPHPExcel->getActiveSheet()->SetCellValue('D'.$row_hd, "".$item->gioitinh);
                    $objPHPExcel->getActiveSheet()->SetCellValue('E'.$row_hd, "".$item->ngaysinh);
                    $objPHPExcel->getActiveSheet()->SetCellValue('F'.$row_hd, "".$item->email);
                    $objPHPExcel->getActiveSheet()->SetCellValue('G'.$row_hd, "".$item->diachithuongtru);
                    $objPHPExcel->getActiveSheet()->SetCellValue('H'.$row_hd, "".$item->diachilienlac);
                    $objPHPExcel->getActiveSheet()->SetCellValue('I'.$row_hd, "".$item->sdt1);
                    $objPHPExcel->getActiveSheet()->SetCellValue('J'.$row_hd, "".$item->sdt2);
                    $objPHPExcel->getActiveSheet()->SetCellValue('K'.$row_hd, "".$item->id_donvi);
                    $objPHPExcel->getActiveSheet()->SetCellValue('L'.$row_hd, "".$item->id_trinhdo);

                    $row_hd +=1;
                }
                // lưu file 
                $file = 'export.xlsx';
                $objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel); 
                $objWriter->save($file);
                
                // download
                header('Content-Description: File Transfer');
                header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
                header('Content-Disposition: attachment; filename='.basename($file));
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

                if($status == 0){
                    header("location:../../index.php?req=index-gv&status=fail");
                }else{
                    header("location:../../index.php?req=index-gv&status=success");
                }
                break; 
        }
    }

?>