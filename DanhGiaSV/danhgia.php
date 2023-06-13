
<?php
    session_start();
    
    

require("../models/getModel.php");
$id_sinhvien = $_SESSION['user']->id_sinhvien;
$id_dot =$dotkhaosat->dotkhaosat__Get_Last()->id_dot;
$tenkhaosat__Get_By_Id_sinhvien = $tenkhaosat->tenkhaosat__Get_By_Id_sinhvien($id_sinhvien,$id_dot);


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
            
        </style>
    </head>
    <?php
        include('../include/header_1.php');
        ?>
    <center>



        <table border="0" width="1500px;">
        </table>



<!--        <div class="dnn_banner bannerg">            
            <img src="../assets/img/bannertruong.jpg" style="width: 1400px;"/>
            <nav class="navbar" style="background-color: 5fbf00;">
                <div class="container-fluid">
                    <a class="navbar-brand" href="../danhgia/danhgia.php>">Trang chủ</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <form class="d-flex">
                        
                        <a style="font-size: 25px; margin-left: 1200px; color: red; margin-top: 50px; " class="dropdown-item">Xin chào:<?= isset($_SESSION['user'])?$_SESSION['user']->tensinhvien:"chuadapnhap" ;?>
                        </a>
                        <a class="dropdown-item" href="../login/index.php">Đăng xuất</a>


                    </form>
                </div>
        </div>-->
        <table border="1">
        



    </table>
        

    </body>


    

    <form action="" method="post">
        
        <table>
            <thead>
                <tr>
                    <th style="text-align: center; background-color: #82ce34;">Tên đánh giá</th>
                    <th style="text-align: center; background-color: #82ce34;">Thực hiện</th>

                </tr>
            </thead>
            <tbody>
                <?php foreach ($tenkhaosat__Get_By_Id_sinhvien as $item_1): ?>
    <tr>
        <th style="text-align: center;">
            <?= $item_1->tenkhaosat0 ?>
        </th>
        <td>
             <center> <img style="margin-bottom: -2px; margin-right: 5px;" <i style="color: #ffffff;"><a href="danhgiacsvc.php?id=<?=$item_1->id_phieu?>" style="color: red;">Khảo sát</a> </center>

        </td>
        
    </tr>
<?php endforeach ?>


            </tbody>

        </table>



    </form>
    <script>
      
    </script>




</body>

</center>

</html>