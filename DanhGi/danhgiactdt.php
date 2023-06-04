<?php
session_start();
require '../models/getModel.php';

foreach ($nhomcauhoi->nhomcauhoi__Get_By_Id_tenkhaosat($item_1->id_tenkhaosat) as $item_2){
    foreach ($nhomcauhoi->nhomcauhoi__Get_By_Id_tenkhaosat($item_1->id_tenkhaosat) as $item_2){
        foreach ($cauhoi->cauhoi__Get_By_Id_nhom($item_2->id_nhomcauhoi) as $item_3){
            
        }
    }
}?>
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
<!--            <tbody>
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
            </tbody>-->
            <tbody>
            <?php
            $tenkhaosatList = $tenkhaosat->tenkhaosat__Get_All();
            if (!empty($tenkhaosatList)) {
                $item_1 = $tenkhaosatList[0]; // Lấy phần tử đầu tiên
                ?>
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
                                <h4 class="text-left border-custom box-1-set"></h4>
        <?php foreach ($cauhoi->cauhoi__Get_By_Id_nhom($item_2->id_nhomcauhoi) as $item_3): ?>
                                    <p class="text-left border-custom box-2-set">
                                        <input type="checkbox" name="ketqua_<?=$item_3->id_cauhoi?>" id="a<?php echo $item_3->id_cauhoi; ?>" value="0" class="form-check" required> <label for="a<?php echo $item_3->id_cauhoi ?>">không hài lòng</label>
                                        <input type="checkbox" name="ketqua_<?=$item_3->id_cauhoi?>" id="b<?php echo $item_3->id_cauhoi; ?>" value="1" class="form-check" required><label for="b<?php echo $item_3->id_cauhoi?>">ít hài lòng</label>
                                        <input type="checkbox" name="ketqua_<?=$item_3->id_cauhoi?>" id="c<?php echo $item_3->id_cauhoi; ?>" value="2" class="form-check" required><label for="c<?php echo $item_3->id_cauhoi ?>">khá hài lòng</label>
                                        <input type="checkbox" name="ketqua_<?=$item_3->id_cauhoi?>" id="d<?php echo $item_3->id_cauhoi; ?>" value="3" class="form-check" required><label for="d<?php echo $item_3->id_cauhoi ?>"> hài lòng</label>
                                        <input type="checkbox" name="ketqua_<?=$item_3->id_cauhoi?>" id="e<?php echo $item_3->id_cauhoi; ?>" value="4" class="form-check" required><label for="e<?php echo $item_3->id_cauhoi ?>">rất hài lòng</label>
                                    </p>


        <?php endforeach ?>

    <?php endforeach ?>
                        </td>
                    </tr>
                        <?php } ?>
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



    <!--    <table border="1">
                <caption align="bottom">DANH SÁCH SINH VIÊN</caption>
        <tr id="table_id" style="background-color: #82ce34;">

            <th style="text-align: center;">Điều</th>
            <th style="text-align: center;">Nội Dung Đánh Giá</th>
            <th style="text-align: center;">Sinh Viên Tự Chấm</th>

            <th style="text-align: center;">Minh Chứng</th>

        </tr>


           




           
            <th>
                <h4>Đánh giá về ý thức tham gia học tập của tài khoản(0 - 20 điểm):</h4>
            </th>

            <th></th>
            </td>

        </tr>

        <tr>

            <td>- Đi học và thực tập đầy đủ các môn học theo lịch học và thực tập (5đ); <br> nếu vi phạm bị trừ
                2đ/môn học.</br></td>
            <td>
                <from>
                    <input type="radio" name="sport" value="5đ" id="a"><label for="a"> 5đ</label>
                    <input type="radio" name="sport" value="3đ" id="b"><label for="b"> 3đ</label>
                    <input type="radio" name="sport" value="1đ" id="c"><label for="c"> 1đ</label>

                </from>
            </td>

            <th>
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    <input type="file" id="image" name="image">
                </form>
            </th>
        </tr>

        <td>- Thực hiện đúng quy chế thi, kiểm tra (5đ); nếu vi phạm bị kỷ luật từ<br> khiển trách trở lên
            (0đ).</br></td>
        <td>
            <from>
                <input type="radio" name="sport1" value="5đ" id="d">
                <lable for="d">5đ</label>

            </from>
        </td>

        <th>
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <input type="file" id="image" name="image">
            </form>

        </th>

        <tr>

            <td>- Không bị cấm thi môn học nào (3đ); nếu bị cấm thi 1 môn trở lên (0đ).</td>
            <td>
                <from>

                    <input type="radio" name="sport2" value="3đ" id="e">
                    <lable for="e">3đ</label>

                </from>
            </td>

            <th>
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    <input type="file" id="image" name="image">
                </form>

            </th>

        </tr>


        <tr>
            <td>- Vượt khó, phấn đấu trong học tập, xếp loại học tập học kỳ gần nhất từ<br> khá trở lên (3đ).</br></td>
            <td>
                <from>

                    <input type="radio" name="sport3" value="3đ" id="f">
                    <lable for="f">3đ</label>
                </from>
            </td>

            <th>
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    <input type="file" id="image" name="image">
                </form>

            </th>

        </tr>

        <tr>

            <td>- Tham gia một trong các hoạt động học thuật, nghiên cứu khoa học, các<br> kỳ thi về học thuật hoặc
                đạt một trong các kỹ năng chuẩn đầu ra theo quy<br> định của trường (riêng kỹ năng chuẩn đầu ra được
                cộng điểm qua các học<br> kỳ) (4đ).</td>
            <td>
                <from>
                    <input type="radio" name="sport4" value="4đ" id="g">
                    <lable for="g">4đ</label>

                </from>
            </td>

            <th>
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    <input type="file" id="image" name="image">
                </form>

            </th>

        </tr>

        <tr>


            <td>
                <h4>Đánh giá về ý thức chấp hành nội quy trong nhà trường (0 - 25 điểm):</h4>
            </td>
            <td>16</td>
            <th></th>

        </tr>

        <tr>

            <td>- Kết quả sinh hoạt đầu khóa, giữa khóa, cuối khóa (ĐK,GK,CK) đạt và<br> sinh hoạt lớp đầy đủ (9đ);
                kết quả sinh hoạt ĐK,GK,CK đạt nhưng có bỏ<br> sinh hoạt lớp 1 buổi (7đ), 2 buổi (4đ); kết quả sinh
                hoạt ĐK,GK,CK<br> không đạt hoặc đạt nhưng bỏ sinh hoạt lớp 3 buổi trở lên (0đ).</td>
            <td>
                <from>
                    <input type="radio" name="sport5" value="9đ" id="h">
                    <lable for="h">9đ</label>
                        <input type="radio" name="sport5" value="7đ" id="j">
                        <lable for="i">7đ</label>
                            <input type="radio" name="sport5" value="4đ" id="j">
                            <lable for="j">4đ</label>

                </from>
            </td>

            <th>
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    <input type="file" id="image" name="image">
                </form>

            </th>
        </tr>

        <tr>

            <td>- Thực hiện tốt nội quy, quy định của nhà trường (5đ); nếu vi phạm: làm<br> mất trật tự lớp học trừ
                (1đ), không mặc đồng phục trừ (2đ), làm mất vệ<br> sinh lớp học trừ (2đ); nếu vi phạm bị kỷ luật từ
                khiển trách trở lên (0đ).</td>
            <td>
                <from>
                    <input type="radio" name="sport6" value="5đ" id="k">
                    <lable for="k">5đ</label>
                        <input type="radio" name="sport6" value="4đ" id="l">
                        <lable for="l">4đ</label>
                            <input type="radio" name="sport6" value="3đ" id="m">
                            <lable for="m">3đ</label>
                                <input type="radio" name="sport6" value="2đ" id="n">
                                <lable for="n">2đ</label>

                </from>
            </td>


            <th>
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    <input type="file" id="image" name="image">
                </form>

            </th>

        </tr>

        <tr>

            <td>- Đóng học phí đúng thời gian quy định hoặc có đơn xin gia hạn được Ban<br> Giám hiệu duyệt (6đ),
                đóng học phí trễ hạn (0đ)</td>
            <td>
                <from>
                    <input type="radio" name="sport7" value="6đ" id="o">
                    <lable for="o">6đ</label>

            <th>
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    <input type="file" id="image" name="image">
                </form>

            </th>

        </tr>

        <tr>

            <td>- Tham gia nghiêm túc việc lấy ý kiến phản hồi về hoạt động giảng dạy<br> của giảng viên học kỳ 1
                năm học 2019 - 2020 (5đ).</td>
            <td>
                <from>
                    <input type="radio" name="sport8" value="5đ" id="p">
                    <lable for="p">5đ</label>
                </from>
            </td>

            <th>
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    <input type="file" id="image" name="image">
                </form>

            </th>

        </tr>

        <tr>

            <th style="text-align: center;" rowspan="6" <?php
                        if ($id_cauhoi == 1) {
                            echo 'rowspan="6"';
                        }
                        ?>><?php echo $tenkhaosat; ?></th>
            <td>
                <h4>Đánh giá về ý thức tham gia các hoạt động chính trị, xã hội (đền ơn<br> đáp nghĩa, cứu trợ, tình
                    thương…), văn hóa, văn nghệ, thể thao,<br> phòng chống tội phạm và các tệ nạn xã hội (0 - 20
                    điểm):</h4>
            </td>
            <td>16</td>
            <th></th>


        </tr>

        <tr>
            <td>-Tham gia các hoạt động công ích, tình nguyện, công tác xã hội (4đ).<br>
                -Tham gia tuyên truyền, phòng chống tội phạm và các tệ nạn xã hội (3đ).</td>
            <td>
                <from>
                    <input type="radio" name="sport9" value="9đ" id="q">
                    <lable for="q">9đ</label>
                        <input type="radio" name="sport9" value="4đ" id="r">
                        <lable for="r">4đ</label>
                            <input type="radio" name="sport9" value="3đ" id="s">
                            <lable for="s">3đ</label>
                </from>
            </td>
            <th>
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    <input type="file" id="image" name="image">
                </form>

            </th>

        </tr>

        <tr>
            <td>- Tham gia từ 3 hoạt động do lớp, chi đoàn, chi hội phát động (2đ).</td>
            <td>
                <from>
                    <input type="radio" name="sport10" value="2đ" id="t">
                    <lable for="t">2đ</label>
                </from>
            </td>

            <th>
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    <input type="file" id="image" name="image">
                </form>

            </th>

        </tr>

        <tr>
            <td>- Tham gia từ 3 hoạt động cấp khoa (bao gồm cả đoàn thể) phát động (3đ).</td>
            <td>
                <from>
                    <input type="radio" name="sport11" value="3đ" id="u">
                    <lable for="u">3đ</label>
                </from>
            </td>

            <th>
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    <input type="file" id="image" name="image">
                </form>

            </th>

        </tr>

        <tr>
            <td>- Tham gia từ 2 hoạt động cấp trường (bao gồm cả đoàn thể) phát động<br>(4đ).</td>
            <td>
                <from>
                    <input type="radio" name="sport12" value="4đ" id="v">
                    <lable for="v">4đ</label>
                </from>
            </td>

            <th>
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    <input type="file" id="image" name="image">
                </form>

            </th>

        </tr>

        <tr>
            <td>- Có giấy khen hoặc giải thưởng các hoạt động cấp khoa (bao gồm cả đoàn<br> thể) (3đ), hoặc cấp
                trường trở lên (bao gồm cả đoàn thể) (4đ).</td>
            <td>
                <from>
                    <input type="radio" name="sport13" value="4đ" id="w">
                    <lable for="w">4đ</label>
                        <input type="radio" name="sport13" value="3đ" id="w">
                        <lable for="w">3đ</label>
                </from>
            </td>

            <th>
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    <input type="file" id="image" name="image">
                </form>

            </th>

        </tr>

        <tr>

            <th style="text-align: center;" rowspan="6" <?php
                        if ($id_cauhoi == 2) {
                            echo 'rowspan="6"';
                        }
                        ?>><?php echo $tenkhaosat; ?></th>
            <td>
                <h4>Đánh giá về ý thức công dân trong quan hệ cộng đồng (0 - 25 điểm):<h4>
            </td>
            <td>16</td>
            <th></th>

        </tr>


        <tr>
            <td>- Chấp hành pháp luật của Nhà nước, quy định của địa phương thường trú,<br> tạm trú, có cập nhật
                thông tin sinh viên trên cổng sinh viên để quản lý<br> thông tin ngoại trú (10đ), nếu không nộp hoặc
                khi thay đổi địa chỉ mà<br> không khai báo lại (0đ); nếu vi phạm hành chính (0đ); nếu đang bị
                truy<br> cứu trách nhiệm hình sự thì không được đánh giá kết quả rèn luyện.</td>
            <td>
                <from>
                    <input type="radio" name="sport14" value="10đ" id="x">
                    <lable for="x">10đ</label>
                </from>
            </td>

            <th>
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    <input type="file" id="image" name="image">
                </form>

            </th>

        </tr>

        <tr>
            <td>- Tham gia các hoạt động xã hội có giấy xác nhận thành tích, được biểu<br> dương hoặc khen
                thưởng(4đ).</td>
            <td>
                <from>
                    <input type="radio" name="sport15" value="4đ" id="y">
                    <lable for="y">4đ</label>
                </from>
            </td>

            <th>
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    <input type="file" id="image" name="image">
                </form>

            </th>

        </tr>


        <tr>
            <td>-Có tinh thần chia sẻ, giúp đỡ người có khó khăn, hoạn nạn (đóng góp,<br> ủng hộ về vật chất hoặc
                tinh thần) (2đ).</td>
            <td>
                <from>
                    <input type="radio" name="sport16" value="2đ" id="z">
                    <lable for="z">2đ</label>
                </from>
            </td>

            <th>
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    <input type="file" id="image" name="image">
                </form>

            </th>

        </tr>

        <tr>
            <td>- Tham gia bảo hiểm y tế (BHYT) (7đ), bảo hiểm tai nạn (BHTN) (2đ);<br> không tham gia BHYT và BHTN
                (0đ)</td>
            <td>
                <from>
                    <input type="radio" name="sport17" value="7đ" id="A">
                    <lable for="A">7đ</label>
                        <input type="radio" name="sport17" value="2đ" id="B">
                        <lable for="B">2đ</label>
                            <input type="radio" name="sport17" value="9đ" id="C">
                            <lable for="C">9đ</label>
                </from>
            </td>

            <th>
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    <input type="file" id="image" name="image">
                </form>

            </th>


        <tr>

            <td>
                <h4>Đánh giá về ý thức và kết quả tham gia công tác cán bộ lớp, đoàn thể<br> trong nhà trường (0 -
                    10 điểm):</h4>
            </td>
            <td>16</td>
            <td></td>


        </tr>

        <tr>
            <td>- Tham gia công tác lớp là tổ trưởng, tổ phó (1đ) hoặc tham gia ban cán sự<br> lớp, ban chấp hành
                chi đoàn, chi hội và hoàn thành nhiệm vụ (3đ).</td>
            <td>
                <from>
                    <input type="radio" name="sport18" value="1đ" id="D">
                    <lable for="D">1đ</label>
                        <input type="radio" name="sport18" value=3đ" id="E">
                        <lable for="E">3đ</label>
                </from>
            </td>
            <th>
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    <input type="file" id="image" name="image">
                </form>

            </th>

        </tr>
        <tr>
            <td>- Tham gia ban chấp hành đoàn thể cấp khoa (2đ) hoặc cấp trường (3đ).</td>
            <td>
                <from>
                    <input type="radio" name="sport19" value="2đ" id="F">
                    <lable for="F">2đ</label>
                        <input type="radio" name="sport19" value=3đ" id="G">
                        <lable for="G">3đ</label>
                </from>
            </td>

            <th>
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    <input type="file" id="image" name="image">
                </form>

            </th>

        </tr>
        <tr>
            <td>- Tập thể lớp hoặc chi đoàn, chi hội được khen thưởng từ cấp khoa <br>trở lên (bao gồm cả đoàn thể)
                (4đ).</td>
            <td>
                <from>
                    <input type="radio" name="sport20" value="4đ" id="H">
                    <lable for="H">4đ</label>
                </from>
            </td>
            <th>
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    <input type="file" id="image" name="image">
                </form>


            </th>


        </tr>

        <tr>
            <th style="text-align: center;" colspan="2">Cộng Điểm từ 0 đến 100</th>
            <th></th>
            <th></th>

        </tr>








        </td>
    </table>-->
</body>

</center>

</html>