<div>QUẢN LÝ NGƯỜI DÙNG</div>
<hr>
<div>Vui lòng hoàn thành các bước sau :</div>
<div>
    <form name="newuser" id="formreg" method="post" action="./element/tai-khoan/action.php?reqact=addnew">
        <table>
            <tr>
                <td>Tên đăng nhập:</td>
                <td><input type="text" name="username" /></td>
            </tr>

            <tr>
                <td>Mật khẩu:</td>
                <td><input type="password" name="password" /></td>
            </tr>
            <tr>
                <td>Họ tên:</td>
                <td><input type="text" name="hoten" /></td>
            </tr>

            <tr>
                <td>Giới tính:</td>
                <td>
                    Nam<input type="radio" name="gioitinh" value="1" checked="true" />
                    Nữ<input type="radio" name="gioitinh" value="0" />
                    Khác<input type="radio" name="gioitinh" value="2" />
                </td>
            </tr>

            <tr>
                <td>Ngày sinh:</td>
                <td><input type="date" name="ngaysinh" /></td>
            </tr>


            <tr>
                <td>Email:</td>
                <td><input type="text" name="email" /></td>
            </tr>

            <tr>
                <td>Địa chỉ:</td>
                <td><input type="text" name="diachi" /></td>
            </tr>

            <tr>
                <td>Điện thoại:</td>
                <td><input type="tel" name="dienthoai" /></td>
            </tr>
            
            <tr>
                <td>Phân quyền:</td>
                <td><input type="text" name="phanquyen" /></td>
            </tr>
            
            <tr>
                <td>Phân nhóm:</td>
                <td><input type="text" name="phannhom" /></td>
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
require '../mod/Cls.php';
?>
<div class="title_user">Danh sách người dùng đã đăng kí</div>
<div class="content_user">
    <?php
    $obj_User = new taikhoan();
    $list_User = $obj_User->UserGetAll();
    $l = count($list_User);
    ?>
    <p>Trong bảng có <b><?php echo $l; ?></b></p>
    <?php
    if ($l > 0) {
    ?>
        <table border="1">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Họ tên</th>
                    <th>Giới tính</th>
                    <th>Ngày Sinh</th>
                    <th>Email</th>
                    <th>Địa chỉ</th>
                    <th>Điện thoại</th>
                    <th>Phân quyền</th>
                    <th>Phân nhóm</th>
                    <th>Hoạt động</th>
                    <th>Khóa</th>
                    <th>Quản lí</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($list_User as $v) {
                ?>
                    <tr>
                        <td><?php echo $v->iduser; ?></td>
                        <td><?php echo $v->username; ?></td>
                        <td><?php echo $v->password; ?></td>
                        <td><?php echo $v->hoten; ?></td>
                        <td align="center">
                            <?php
                            if ($v->gioitinh == 0) {
                            ?>
                                <img class="iconimg" src="./img/nu.png" />
                            <?php
                            } else {
                            ?>
                                <img class="iconimg" src="./img/nam.png" />
                            <?php

                            }
                            ?>
                        </td>
                        <td><?php echo $v->ngaysinh; ?></td>
                        <td><?php echo $v->email; ?></td>
                        <td><?php echo $v->diachi; ?></td>
                        <td><?php echo $v->dienthoai; ?></td>
                        <td><?php echo $v->phanquyen; ?></td>
                        <td><?php echo $v->phannhom; ?></td>
                        <td><?php echo $v->ngaydangki; ?></td>
                        <td align="center">
                            <?php
                            if (isset($_SESSION['ADMIN'])) {
                                if ($v->ability == 0) {
                            ?>
                                    <a href="./element/mUser/userAct.php?reqact=setlock&iduser=<?php echo $v->iduser; ?>&ability=<?php echo $v->ability; ?>">
                                        <img class="iconimg" src="./img/lock.png" />
                                    </a>
                                <?php
                                } else {
                                ?>
                                    <a href="./element/mUser/userAct.php?reqact=setlock&iduser=<?php echo $v->iduser; ?>&ability=<?php echo $v->ability; ?>">
                                        <img class="iconimg" src="./img/unlock.png" />
                                    </a>
                                <?php
                                }
                            } else {
                                if ($v->ability == 0) {
                                ?>
                                    <img class="iconimg" src="./img/lock.png" />
                                <?php
                                } else {
                                ?>
                                    <img class="iconimg" src="./img/unlock.png" />
                            <?php
                                }
                            }
                            ?>
                        </td>
                        <td align="center">
                            <?php
                            if (isset($_SESSION['ADMIN'])) {
                            ?>
                                <a href="./element/mUser/userAct.php?reqact=deleteuser&iduser=<?php echo $v->iduser; ?>">
                                    <img class="iconimg" src="./img/idelete.png" />
                                </a>
                            <?php
                            } else {
                            ?>
                                <img class="iconimg" src="./img/idelete.png" />
                            <?php
                            }
                            ?>
                            <!--hình cập nhật-->
                            <?php
                            if (isset($_SESSION['ADMIN']) and $v->username == 'admin') {
                            ?>
                                <img class="iconimg" src="./img/update.png" />
                            <?php
                            } else {
                            ?>
                                <temps class="btnupdate" value="<?php echo $v->iduser; ?>">
                                    <img class="iconimg" src="./img/update.png" />
                                </temps>
                            <?php
                            }
                            ?>
                        </td>
                    <?php
                }
                    ?>
                    </tr>
            </tbody>
        </table>
    <?php
    }
    ?>
</div>