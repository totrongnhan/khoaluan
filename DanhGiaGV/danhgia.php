
<?php
    session_start();
    
    

require("../models/getModel.php");
$id_giangvien = $_SESSION['user']->id_giangvien;
$id_dot =$dotkhaosat->dotkhaosat__Get_Last()->id_dot;
$tenkhaosat__Get_By_Id_giangvien = $tenkhaosat->tenkhaosat__Get_By_Id_giangvien($id_giangvien,$id_dot);


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
        include('../include/header_2.php');
        ?>
    <center>
        



        <table border="0" width="1500px;">
        </table>



        
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
                <?php foreach ($tenkhaosat__Get_By_Id_giangvien as $item_1): ?>
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