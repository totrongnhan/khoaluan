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
                        $ma_sinhvien          = $sheetData[$row]['B'];
                        $tensinhvien      = $sheetData[$row]['C'];
                        $gioitinh      = $sheetData[$row]['D'];
                        $ngaysinh  = $sheetData[$row]['E'];
                        $email      = $sheetData[$row]['F'];
                        $diachithuongtru      = $sheetData[$row]['G'];
                        $diachilienlac      = $sheetData[$row]['H'];
                        $sdt1      = $sheetData[$row]['I'];
                        $sdt2      = $sheetData[$row]['J'];
                        $id_lophoc      = $sheetData[$row]['K'];
                        $status .= $sinhvien->sinhvien_Add($ma_sinhvien, $tensinhvien, $gioitinh, $ngaysinh, $email, $diachithuongtru, $diachilienlac, $sdt1, $sdt2, $id_lophoc);
                    }
                }
               
                if($status == 0){
                    header("location:../../index.php?req=index&status=fail");
                }else{
                    header("location:../../index.php?req=index&status=success");
                }
            break;  
            
            case "export":
                               
                $status = 0;
                
                $sinhvien__Get_All = $sinhvien->sinhvien__Get_All();

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
                $objPHPExcel->getActiveSheet()->SetCellValue('K1', "IDLOPHOC");
                foreach($sinhvien__Get_All as $item){
                    $objPHPExcel->getActiveSheet()->SetCellValue('A'.$row_hd, "".$item->id_sinhvien);
                    $objPHPExcel->getActiveSheet()->SetCellValue('B'.$row_hd, "".$item->ma_sinhvien);
                    $objPHPExcel->getActiveSheet()->SetCellValue('C'.$row_hd, "".$item->tensinhvien);
                    $objPHPExcel->getActiveSheet()->SetCellValue('D'.$row_hd, "".$item->gioitinh);
                    $objPHPExcel->getActiveSheet()->SetCellValue('E'.$row_hd, "".$item->ngaysinh);
                    $objPHPExcel->getActiveSheet()->SetCellValue('F'.$row_hd, "".$item->email);
                    $objPHPExcel->getActiveSheet()->SetCellValue('G'.$row_hd, "".$item->diachithuongtru);
                    $objPHPExcel->getActiveSheet()->SetCellValue('H'.$row_hd, "".$item->diachilienlac);
                    $objPHPExcel->getActiveSheet()->SetCellValue('I'.$row_hd, "".$item->sdt1);
                    $objPHPExcel->getActiveSheet()->SetCellValue('J'.$row_hd, "".$item->sdt2);
                    $objPHPExcel->getActiveSheet()->SetCellValue('K'.$row_hd, "".$item->id_lophoc);

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
                    header("location:../../index.php?req=index&status=fail");
                }else{
                    header("location:../../index.php?req=index&status=success");
                }
                break; 
        }
    }

?>