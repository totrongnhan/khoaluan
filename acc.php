<div>QUẢN LÝ PHÂN QUYỀN<Map></Map></div>
<hr>
<div>Vui lòng hoàn thành các bước sau :</div>
<div>
    <form name="newnphanquyen" id="formreg" method="post" action="./element/mPhanquyen/phanquyenAct.php?reqact=addnew">
        <table>
            <tr>
                <td>Tên phân quyền:</td>
                <td><input type="varchar" name="tenphanquyen" /></td>
            </tr>
            <tr>
                <td>Mô tả:</td>
                <td><input type="varchar" name="mota" /></td>
            </tr>
            <tr>
                <td><input type="submit" id="btnsubmit" value="Tạo mới" /></td>
                <td><input type="reset" value="Làm lại" /><b id="noteForm"></b></td>
            </tr>
        </table>
    </form>
</div>
<hr />

<?php
require './element/mod/phanquyenCls.php';
?>
<div class="title_phannquyen">Danh sách người dùng đã đăng kí</div>
<div class="content_phanquyen">
    <?php
    $obj_Phanquyen = new phanquyen();
    $list_Phanquyen = $obj_Phanquyen->PhanquyenGetAll();
    $l = count($list_Phanquyen);
    ?>
    <p>Trong bảng có <b><?php echo $l; ?></b></p>
    <?php
    if ($l > 0) {
    ?>
        <table border="1">
            <thead>
                <tr>
                    <th> idphanquyen</th>
                    <th>Tên phân quyền</th>
                    <th>Mô tả</th>
                    <th> Quản lí</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($list_Phanquyen as $v) { ?>
                    <tr>
                        <td><?php echo $v->idphanquyen; ?></td>
                        <td><?php echo $v->tenphanquyen; ?></td>
                        <td><?php echo $v->mota; ?></td>

                        <td align="center">
                            <?php if (isset($_SESSION['ADMIN'])) { ?>
                                <a href="./element/mPhanquyen/phanquyenAct.php?reqact=deletephanquyen&idphanquyen=<?php echo $v->idphanquyen; ?>">
                                    <img class="iconimg" src="./img/idelete.png" />
                                </a>
                            <?php } else { ?>
                                <img class="iconimg" src="./img/idelete.png" />
                            <?php } ?>
                            <!--hình cập nhật-->
                            <?php if (isset($_SESSION['ADMIN']) and $v->tenphanquyen == 'admin') { ?>
                                <img class="iconimg" src="./img/update.png" />
                            <?php } else { ?>
                                <temps class="btnupdate" value="<?php echo $v->idlop; ?>">
                                    <img class="iconimg" src="./img/update.png" />
                                </temps>
                            <?php } ?>
                        </td>
                    <?php } ?>
                    </tr>
            </tbody>
        </table>
    <?php } ?>
</div>
