    <?php 
        require '../../models/getModel.php';
        $id_sinh_vien = $_POST['id_sinhvien'];
        $sinhvien__Get_By_Id = $sinhvien->sinhvien__Get_By_Id($id_sinhvien);
        $lophoc__Get_All = $lophoc->lophoc__Get_All();
    ?>

    <form class="row form" action="quan-ly-sinh-vien/action.php?req=update" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_sinh_vien" value="<?=$sinhvien__Get_By_Id->id_sinhvien?>">
        <div class="col-12">
            <div class="card card-danger">
                <div class="card-header">
                    <h3 class="card-title">Cập nhật</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Mã sinh viên <span class="color-crimson">(*)</span></label>
                                <input type="text" id="ma_sinhvien" name="ma_sinhvien" class="form-control" required
                                    value="<?=$sinhvien__Get_By_Id->ma_sinhvien?>" placeholder="Nhập mã sinh viên">
                            </div>
                            <div class="form-group">
                                <label for="">Tên sinh viên <span class="color-crimson">(*)</span></label>
                                <input type="text" id="ten_sinhvien" name="ten_sinhvien" class="form-control" required
                                    value="<?=$sinhvien__Get_By_Id->ten_sinhvien?>" placeholder="Nhập tên sinh viên">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Giới tính <span class="color-crimson">(*)</span></label>
                                <select class="form-control" name="gioitinh" required>
                                    <option value="0" <?=$sinhvien__Get_By_Id->gioitinh == 1 ? "selected" : ""?>>Nữ
                                    </option>
                                    <option value="1" <?=$sinhvien__Get_By_Id->gioitinh == 0 ? "selected" : ""?>>Nam
                                    </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Ngày sinh <span class="color-crimson">(*)</span></label>
                                <input type="date" id="ngaysinh" name="ngaysinh" class="form-control" required
                                    value="<?=$sinhvien__Get_By_Id->ngaysinh?>"
                                    min="<?=date('Y-m-d', strtotime('-100 years'))?>"
                                    max="<?=date('Y-m-d', strtotime('-10 years'))?>" placeholder="Nhập ngày sinh">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Email <span class="color-crimson">(*)</span></label>
                                <input type="email" id="email" name="email" class="form-control" required
                                    value="<?=$sinhvien__Get_By_Id->email?>" placeholder="Nhập email">
                            </div>
                            <div class="form-group">
                                <label for="">Số điện thoại 1 <span class="color-crimson">(*)</span></label>
                                <input type="sdt1" id="so_dien_thoai_1" name="sdt1"
                                    pattern="[0][0-9]{8-9}" class=" form-control" required
                                    value="<?=$sinhvien__Get_By_Id->sdt1?>"
                                    title="Số điện thoại có 10 hoặc 11 số" placeholder="Nhập số điện thoại 1"
                                    minlength="10" max="11">
                            </div>
                            <div class="form-group">
                                <label for="">Số điện thoại 2 <span class="color-crimson">(*)</span></label>
                                <input type="sdt2" id="sdt2" name="sdt2"
                                    pattern="[0][0-9]{8-9}" class=" form-control" required
                                    value="<?=$sinhvien__Get_By_Id->sdt2?>"
                                    title="Số điện thoại có 10 hoặc 11 số" placeholder="Nhập số điện thoại 2"
                                    minlength="10" max="11">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Địa chỉ liên lạc <span class="color-crimson">(*)</span></label>
                                <input type="diachilienlac" id="diachilienlac" name="diachilienlac"
                                    class="form-control" required value="<?=$sinhvien__Get_By_Id->diachilienlac?>"
                                    placeholder="Nhập địa chỉ liên lạc">
                            </div>
                            <div class="form-group">
                                <label for="">Địa chỉ thường trú <span class="color-crimson">(*)</span></label>
                                <input type="diachilienlac" id="diachilienlac" name="diachilienlac"
                                    class="form-control" required value="<?=$sinhvien__Get_By_Id->diachilienlac?>"
                                    placeholder="Nhập địa chỉ thường trú">
                            </div>
                            
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Lớp học <span class="color-crimson">(*)</span></label>
                                <select class="form-control" name="id_lophoc" required>
                                    <option value="<?=$sinhvien__Get_By_Id->id_lop_hoc?>">
                                        <?=$lophoc->lophoc__Get_By_Id($sinhvien__Get_By_Id->id_lophoc)->tenlophoc?>
                                    </option>
                                    <?php foreach($lophoc__Get_All as $item):?>
                                    <?php if($item->id_lophoc != $sinhvien__Get_By_Id->id_lophoc):?>
                                    <option value="<?=$item->id_lophoc?>"><?=$item->tenlophoc?></option>
                                    <?php endif; ?>
                                    <?php endforeach;?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <input type="submit" value="Cập nhật" class="btn btn-danger float-right">
                </div>
            </div>
            <!-- /.card -->
        </div>
    </form>