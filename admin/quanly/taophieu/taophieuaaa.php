<?php
require("../models/getModel.php");
$doituongapdung__Get_All = $doituongapdung->doituongapdung__Get_All();
$dotchamdiem__Get_All = $dotchamdiem->dotchamdiem__Get_All();
$mauphieu__Get_All = $mauphieu->mauphieu__Get_All();
$phannhom__Get_All = $phannhom->phannhom__Get_All();
$hocky__Get_All = $hocky->hocky__Get_All();
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liệt kê danh sách Mục</title>
    <div class="content-wrapper">
        <section class="content-header">

            <h1>
                Quản lý
                <small>đối tượng áp dụng</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">






                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Quản lý đối tượng áp dụng </h3>
                            <form action="./quanly/taophieu/taophieuAct.php?req=add" method="post">
                                <div class="form-group">
                                    <label for="tendot" style="font-size: 20px;">Tên Đợt</label>
                                    <input type="text" class="form-control" name="tendot" id="tendot">
                                </div>
                                <div class="form-group">
                                    <label for="tgian_bd" style="font-size: 20px;">Thời gian bắt đầu</label>
                                    <input type="datetime-local" class="form-control" name="tgian_bd" id="tgian_bd">
                                </div>
                                <div class="form-group">
                                    <label for="tgian_kt" style="font-size: 20px;">Thời gian kết thúc</label>
                                    <input type="datetime-local" class="form-control" name="tgian_kt" id="tgian_kt">
                                </div>
                                <div class="form-group">
                                    <label for="ghichu" style="font-size: 20px;">Ghi chú</label>
                                    <input type="text" class="form-control" name="ghichu" id="ghichu">
                                </div>
                                <div class="form-group">
                                    <label for="id_hocky" style="font-size: 20px;"> id học kỳ</label>
                                    <select class="form-control" aria-label="Default select example" name="id_hocky"
                                        required>
                                        <option selected value="">Chọn học kỳ</option>
                                        <?php foreach ($hocky__Get_All as $item): ?>
                                            <option value="<?= $item->id_hocky ?>">
                                                <?= $item->tenhocky ?>
                                            </option>
                                        <?php endforeach ?>
                                    </select>
                                </div>

                        </div>
                        <div class="form-group">
                            <label for="id_mauphieu" style="font-size: 20px;"> id mẫu phiếu</label>
                            <select class="form-control" aria-label="Default select example" name="id_mauphieu"
                                required>
                                <option selected value="">Chọn mẫu phiếu</option>
                                <?php foreach ($mauphieu__Get_All as $item): ?>
                                    <option value="<?= $item->id_mauphieu ?>">
                                        <?= $item->tenmauphieu ?>
                                    </option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="id_Phan_Nhom" style="font-size: 20px;"> id nhóm</label>
                            <select class="form-control" aria-label="Default select example" name="id_Phan_Nhom"
                                required>
                                <option selected value="">Chọn phân nhóm</option>
                                <?php foreach ($phannhom__Get_All as $item): ?>
                                    <option value="<?= $item->id_Phan_Nhom ?>">
                                        <?= $item->Ten_Phan_Nhom ?>
                                    </option>
                                <?php endforeach ?>
                            </select>
                        </div>

                        <button class="btn btn-success">Thêm đối tượng áp dụng</button>
                        </form>
                    </div>




                </div><!-- /.box-header -->
                <div class="box-body">

                    <table style="border: 2px solid black;" id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr style=" background-color: #3399ff; border: 2px solid black;">
                                <th style="text-align: center; border: 2px solid black;">id áp dụng </th>
                                <th style="text-align: center; border: 2px solid black;">id đợt </th>
                                <th style="text-align: center; border: 2px solid black;">id mẫu phiếu </th>
                                <th style="text-align: center; border: 2px solid black;">id phân nhóm</th>
                                <th style="text-align: center; border: 2px solid black;">Hành Động</th>
                            </tr>

                        <tbody>
                            <?php foreach ($doituongapdung__Get_All as $item): ?>
                                <tr style="border: 2px solid black;">
                                    <td style="border: 2px solid black;">
                                        <?php echo $item->id_apdung ?>
                                    </td>
                                    <td style="text-align: center; border: 2px solid black;">
                                        <?php echo $item->id_dot ?>
                                    </td>
                                    <td style="text-align: center; border: 2px solid black;">
                                        <?php echo $item->id_mauphieu ?>
                                    </td>
                                    <td style="text-align: center; border: 2px solid black;">
                                        <?php echo $item->id_Phan_Nhom ?>
                                    </td>

                                    <td>
                                        <center>
                                            <a href="?req=suadoituongapdung&id=<?php echo $item->id_apdung; ?>"
                                                class="btn btn-primary">Sửa</a>
                                            <a onclick="return confirm('Bạn có muốn xóa mục này không');"
                                                href="./quanly/doituongapdung/doituongapdungAct.php?req=delete&id_apdung=<?php echo $item->id_apdung; ?>"
                                                class="btn btn-danger">Xóa</a>
                                        </center>
                                    </td>
                                </tr>

                            <?php endforeach ?>

                        </tbody>

                    </table>
                </div>
            </div>
    </div>

    <!-- The Modal -->

    </body>

</html>