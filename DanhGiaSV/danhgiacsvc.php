<?php
session_start();
require '../models/getModel.php';
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
    <center>



        <table border="0" width="1500px;">
        </table>



        <h3 class="H3">KHẢO SÁT VÀ ĐÁNH GIÁ TRƯỜNG TÂY ĐÔ CỦA SINH VIÊN<br> HK1-NĂM-2022-2023 </h3>
        <h1 style="font-size: 25PX; margin-bottom: -1px; margin-top: -15px; text-align: end; color: #000;">Xin Chào: <b
                style="color: red;">
                    <?php echo $_SESSION['name'] ?>
            </b></h1>
        <?php
        $hocphan = "Lớp công nghệ thông tin k14";
        $hocky = "học kỳ 1, năm học 2022-2023";
        $khoa = "Khoa kỹ thuật công nghệ"
        ?>

    </body>
    <table border="1">
        <tr>

            <th style="text-align: center; background-color: #82ce34;">THÔNG TIN SINH VIÊN</th>


        </tr>



    </table>

    <?php
    if (isset($_POST['ketqua'])) {
        foreach ($_POST['ketqua'] as $item) {
            echo $item . "|";
        }
    }
    ?>


    <form action="" method="post">
        <table>
            <thead>
                <tr>
                    <th style="text-align: center;">Tên đánh giá</th>
                    <th style="text-align: center;">Câu hỏi Đánh Giá</th>
                    <th style="text-align: center;">Sinh Viên Tự Chấm</th>

                </tr>
            </thead>
            <tbody>
                <?php foreach ($tenkhaosat->tenkhaosat__Get_All() as $item_1): ?>
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
                                    <p class="text-left border-custom box-2-set">
                                        <input type="radio" name="ketqua[]" id="" class="form-control" required>
                                        <input type="radio" name="ketqua[]" id="" class="form-control" required>
                                        <input type="radio" name="ketqua[]" id="" class="form-control" required>
                                        <input type="radio" name="ketqua[]" id="" class="form-control" required>
                                        <input type="radio" name="ketqua[]" id="" class="form-control" required>
                                    </p>
                                <?php endforeach ?>
                            <?php endforeach ?>
                        </td>

                    </tr>
                <?php endforeach ?>
            </tbody>

        </table>

        <button type="submit">aaa</button>

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