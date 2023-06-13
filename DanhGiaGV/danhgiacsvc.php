<?php
    session_start();
    
    

require("../models/getModel.php");
$id_giangvien = $_SESSION['user']->id_giangvien;
$id_dot =$dotkhaosat->dotkhaosat__Get_Last()->id_dot;
$tenkhaosat__Get_By_Id_giangvien = $tenkhaosat->tenkhaosat__Get_By_Id_giangvien($id_giangvien,$id_dot);
                
$id = $_GET['id'];
                
$item_1 = $phieukhaosatgv->phieukhaosatgv__Get_By_Id($id);
                

?>

<!DOCTYPE html>
<html>

    <head>

        <title>Khảo sát đánh giá cho sv</title>
        <meta charset="utf-8">
        <script type="text/javascript" src="../assets/vendor/jquery/jquery.min.js"></script>
        <style type="text/css">
            table,
            th,
            td {
                border: 1px solid #868585;
                font-size: 18px;
            }

            table {
                border-collapse: collapse;
                width: 100%;
            }

            th,
            td {
                text-align: left;
                padding: 5px;
            }

            .H3 {
                font-size: 25px;

            }

            .border-custom {
                border-top: 1px solid;
                padding: 5px;
                margin: -5px;
                height: 100px;
            }
            .button {
                background-color: #4CAF50;
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
            }
           
        </style>
    </head>
    <center>
      <div class="dnn_banner bannerg">            
            <img src="../assets/img/bannertruong.jpg" style="width: 1400px;"/>
            <nav class="navbar" style="background-color: 5fbf00;">
                <div class="container-fluid">
<!--                    <a class="navbar-brand" href="../danhgia/danhgia.php>">Trang chủ</a>-->
<!--                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>-->
                    <form class="d-flex">
                        
                        <a style="font-size: 25px; margin-left: 1200px; color: red; margin-top: 50px; " class="dropdown-item">Xin chào:<?= isset($_SESSION['user'])?$_SESSION['user']->tengiangvien:"chuadapnhap" ;?>
                        </a>
<!--                        <a class="dropdown-item" href="../login/index.php">Đăng xuất</a>-->


                    </form>
                </div>
        </div>



        <table border="0" width="1500px;">
        </table>





    </body>
    <table border="1">
        <tr>

            <th style="text-align: center; background-color: #82ce34;">THÔNG TIN SINH VIÊN</th>
            
            <td style="border-collapse: collapse; background-color: #82ce34; width: 80px;" > <a href="../login/index.php">Đăng xuất</a></td>


        </tr>



    </table>

    <?php
    
    if (isset($_POST['ketqua'])) {
        $kq = "";
    $id_phieu = $_POST['id_phieu'];
    foreach ($_POST['ketqua'] as $ket_qua) {
        $subArray = implode('|', $ket_qua);
        $kq .= $subArray . "|";
      
    }
    
    $status =  $phieukhaosatgv->phieukhaosatgv__Update_KQ($id_phieu, $kq);
    }
    ?>

    <form action="" method="post">
        
        <input type="hidden" name="id_phieu" value="<?=$id?>"/>
        
        
        <table>
            <thead>
                <tr>
                    <th style="text-align: center; width: 200px;">Tên đánh giá</th>
                    <th style="text-align: center;">Câu hỏi Đánh Giá</th>
                    <th style="text-align: center; width: 590px;">Sinh Viên Tự Chấm</th>

                </tr>
            </thead>
            <tbody>
                <?php $i = 0?>
              
                    <tr>
                        <th style="text-align: center;">
                            <?= $item_1->tenkhaosat0 ?>
                        </th>
                        <td>
                            <?php foreach ($nhomcauhoi->nhomcauhoi__Get_By_Id_tenkhaosat($item_1->id_tenkhaosat) as $item_2): ?>
                                <h4 class="text-left border-custom box-1">
                                    <?= $item_2->tennhomcauhoi ?>
                                </h4>
                                <?php foreach ($cauhoi->cauhoi__Get_By_Id_nhom($item_2->id_nhomcauhoi) as $item_3): ?>
                                    <p class="text-left border-custom box-2">
                                        <?= $item_3->tencauhoi ?>
                                    </p>
                                <?php endforeach ?>

                            <?php endforeach ?>
                        </td>
                        <td>
                            <?php foreach ($nhomcauhoi->nhomcauhoi__Get_By_Id_tenkhaosat($item_1->id_tenkhaosat) as $item_2): ?>
                                <h4 class="text-left border-custom box-1-set">

                                </h4>
                                <?php foreach ($cauhoi->cauhoi__Get_By_Id_nhom($item_2->id_nhomcauhoi) as $item_3): ?>
                                    <?php $phieukhaosatgv__Get_By_Id = $phieukhaosatgv->phieukhaosatgv__Get_By_Id($id);
                                    $phieukhaosatgv__Get_By_Id_chuoi = $phieukhaosatgv->phieukhaosatgv__Get_By_Id_chuoi(isset($phieukhaosatgv__Get_By_Id->ketqua) ? $phieukhaosatgv__Get_By_Id->ketqua : "|");
                                    ?>
                            
                            <?php if($item_3->is_text == 1): ?>
                             <p class="text-left border-custom box-2-set">
                                 <input type="text" name="ketqua[<?= $item_3->id_cauhoi ?>][]" id="" value="<?= isset($phieukhaosatgv__Get_By_Id_chuoi[$i]) ? $phieukhaosatgv__Get_By_Id_chuoi[$i] : ""?>" class="form-control">
                             </p>
                            <?php else:?>
                           
                                    <p class="text-left border-custom box-2-set">
                                        <input type="radio" name="ketqua[<?= $item_3->id_cauhoi ?>][]" id="" value="1" <?=isset($phieukhaosatgv__Get_By_Id_chuoi[$i]) ? ($phieukhaosatgv__Get_By_Id_chuoi[$i] == 1 ? "checked" : "") : ""?> class="form-control" required>
                                        <label for="<?php echo $item_3->id_cauhoi ?>">không hài lòng</label>
                                        <input type="radio" name="ketqua[<?= $item_3->id_cauhoi ?>][]" id="" value="2" <?=isset($phieukhaosatgv__Get_By_Id_chuoi[$i]) ? ($phieukhaosatgv__Get_By_Id_chuoi[$i] == 2 ? "checked" : "") : ""?> class="form-control" required>
                                        <label for="<?php echo $item_3->id_cauhoi ?>">ít hài lòng</label>
                                        <input type="radio" name="ketqua[<?= $item_3->id_cauhoi ?>][]" id="" value="3" <?=isset($phieukhaosatgv__Get_By_Id_chuoi[$i]) ? ($phieukhaosatgv__Get_By_Id_chuoi[$i] == 3 ? "checked" : "") : ""?> class="form-control" required>
                                        <label for="<?php echo $item_3->id_cauhoi ?>">khá hài lòng</label>
                                        <input type="radio" name="ketqua[<?= $item_3->id_cauhoi ?>][]" id="" value="4" <?=isset($phieukhaosatgv__Get_By_Id_chuoi[$i]) ? ($phieukhaosatgv__Get_By_Id_chuoi[$i] == 4 ? "checked" : "") : ""?> class="form-control" required>
                                        <label for="<?php echo $item_3->id_cauhoi ?>">hài lòng</label>
                                        <input type="radio" name="ketqua[<?= $item_3->id_cauhoi ?>][]" id="" value="5" <?=isset($phieukhaosatgv__Get_By_Id_chuoi[$i]) ? ($phieukhaosatgv__Get_By_Id_chuoi[$i] == 5 ? "checked" : "") : ""?> class="form-control" required>
                                        <label for="<?php echo $item_3->id_cauhoi ?>">rất hài lòng</label>
                                    </p>
                                    <?php endif?>
                                    <?php $i++ ?>
                                <?php endforeach ?>
                            <?php endforeach ?>
                        </td>

                    </tr>
            </tbody>

        </table>

        <button class="button">Cập nhật</button>

    </form>
    <script>
        window.addEventListener('load', function () {
            let box_1 = document.querySelectorAll('.box-1');
            let box_1_set = document.querySelectorAll('.box-1-set');
            for (let i; i < box_1.length; i++) {
                document.querySelectorAll('.box-1-set')[i].style.height = "1000px";
            }
            let box_2 = document.querySelectorAll('.box-2');
            let box_2_set = document.querySelectorAll('.box-2-set');
            for (let i; i < box_2.length; i++) {
                document.querySelectorAll('.box-2-set')[i].style.height = document.querySelectorAll('.box-2')[i].offsetHeight;
            }
        })
    </script>




</body>

</center>

</html>