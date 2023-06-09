<?php
session_start();
include('../../models/configs/config.php');
error_reporting(0);
if (isset($_POST['signup'])) {
//Code for student ID
    $count_my_page = ("iduser.txt");
    $hits = file($count_my_page);
    $hits[0]++;
    $fp = fopen($count_my_page, "w");
    fputs($fp, "$hits[0]");
    fclose($fp);
    $id = $hits[0];
    $mot = $_POST['mot'];
    $hai = $_POST['hai'];
    $ba = $_POST['ba'];
    $bon = $_POST['bon'];
    $nam = $_POST['nam'];
    $sau = $_POST['sau'];
    $bay = $_POST['bay'];
    $tam = $_POST['tam'];
    $chin = $_POST['chin'];
    $review = $_POST['review'];
    $sql = "INSERT INTO  danhgiacsvc(id,mot,hai,ba,bon,nam,sau,bay,tam,chin,review) VALUES(:id,:mot,:hai,:ba,:bon,:nam,:sau,:bay,:tam,:chin,:review)";
    $query = $dbh->prepare($sql);
    $query->bindParam(':id', $id, PDO::PARAM_STR);
    $query->bindParam(':mot', $mot, PDO::PARAM_STR);
    $query->bindParam(':hai', $hai, PDO::PARAM_STR);
    $query->bindParam(':ba', $ba, PDO::PARAM_STR);
    $query->bindParam(':bon', $bon, PDO::PARAM_STR);
    $query->bindParam(':nam', $nam, PDO::PARAM_STR);
    $query->bindParam(':sau', $sau, PDO::PARAM_STR);
    $query->bindParam(':bay', $bay, PDO::PARAM_STR);
    $query->bindParam(':tam', $tam, PDO::PARAM_STR);
    $query->bindParam(':chin', $chin, PDO::PARAM_STR);
    $query->bindParam(':review', $review, PDO::PARAM_STR);

    $query->execute();
    $lastInsertId = $dbh->lastInsertId();
    if ($lastInsertId) {
        echo '<script>alert("Đánh giá thành công ")</script>';
    } else {
        echo "<script>alert('Xãy ra lỗi, vui lòng thử lại');</script>";
    }
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <meta mot="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <meta mot="description" content="" />
        <meta mot="author" content="" />
        <title>Trang đánh giá cơ sở vật chất</title>
        <link rel="shortcut icon" href="../../assets/img/logotaydo.png" >
            <link href="assets/css/bootstrap.css" rel="stylesheet" />
            <link href="assets/css/font-awesome.css" rel="stylesheet" />
            <link href="assets/css/style.css" rel="stylesheet" />
            <link href="assets/img" rel="stylesheet" />
            <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.15/dist/css/uikit.min.css" />
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

                </head> 

                <body>
                    <div class="dnn_banner bannerg">
                        <img id="dnn_banner" src="../../assets/img/bannertruong.jpg" alt=""/>
                        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                            <div class="container-fluid">
                                <a class="navbar-brand" href="../../danhgia/danhgia.php">Trang chủ</a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <form class="d-flex">

                                    <a class="dropdown-item" href="../../login/index.php">Đăng xuất</a>

                                </form>
                            </div>
                    </div>
                    <form name="signup" method="post" onSubmit="return valid();">
                        <div class="product-add-review">
                            <h4 class="title">Đánh Giá Của Sinh Viên</h4>
                            <div class="review-table">
                                <div class="table-responsive">
                                    <table class="table table-bordered">	
                                        <thead>
                                            <tr>
                                                <th class="cell-label">Nội dung đánh giá về cơ sở vật chất</th>

                                                <th>Không hài lòng</th>
                                                <th>Ít hài lòng</th>
                                                <th>Khá hài lòng</th>
                                                <th>Hài lòng</th>
                                                <th>Rất hài lòng</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td class="cell-label">Bạn có hài lòng về tình trạng tòa nhà giảng đường hiện tại của trường đại học không?</td>
                                                <td><input type="radio" name="mot" class="radio" value="1"></td>
                                                <td><input type="radio" name="mot" class="radio" value="2"></td>
                                                <td><input type="radio" name="mot" class="radio" value="3"></td>
                                                <td><input type="radio" name="mot" class="radio" value="4"></td>
                                                <td><input type="radio" name="mot" class="radio" value="5"></td>
                                            </tr>
                                            <tr>
                                                <td class="cell-label">Có đáp ứng đủ về công nghệ, thiết bị giảng dạy, và không gian học tập trong các tòa nhà giảng đường không?</td>
                                                <td><input type="radio" name="hai" class="radio" value="1"></td>
                                                <td><input type="radio" name="hai" class="radio" value="2"></td>
                                                <td><input type="radio" name="hai" class="radio" value="3"></td>
                                                <td><input type="radio" name="hai" class="radio" value="4"></td>
                                                <td><input type="radio" name="hai" class="radio" value="5"></td>
                                            </tr>
                                            <tr>
                                                <td class="cell-label">Thư viện của trường đại học có đáp ứng đủ về cơ sở vật chất, trang thiết bị, và dịch vụ hỗ trợ người dùng không? Bạn có hài lòng về dịch vụ thư viện hiện tại không?</td>
                                                <td><input type="radio" name="ba" class="radio" value="1"></td>
                                                <td><input type="radio" name="ba" class="radio" value="2"></td>
                                                <td><input type="radio" name="ba" class="radio" value="3"></td>
                                                <td><input type="radio" name="ba" class="radio" value="4"></td>
                                                <td><input type="radio" name="ba" class="radio" value="5"></td>
                                            </tr>

                                            <tr>
                                                <td class="cell-label">Có đáp ứng đầy đủ về cơ sở vật chất, trang thiết bị, và tiện ích cần thiết trong ký túc xá của trường đại học không?</td>
                                                <td><input type="radio" name="bon" class="radio" value="1"></td>
                                                <td><input type="radio" name="bon" class="radio" value="2"></td>
                                                <td><input type="radio" name="bon" class="radio" value="3"></td>
                                                <td><input type="radio" name="bon" class="radio" value="4"></td>
                                                <td><input type="radio" name="bon" class="radio" value="5"></td>
                                            </tr>
                                            <tr>
                                                <td class="cell-label">Sân thể thao và phòng tập gym của trường đại học có đáp ứng đủ về nhu cầu của sinh viên và nhân viên không?</td>
                                                <td><input type="radio" name="nam" class="radio" value="1"></td>
                                                <td><input type="radio" name="nam" class="radio" value="2"></td>
                                                <td><input type="radio" name="nam" class="radio" value="3"></td>
                                                <td><input type="radio" name="nam" class="radio" value="4"></td>
                                                <td><input type="radio" name="nam" class="radio" value="5"></td>
                                            </tr>
                                            <tr>
                                                <td class="cell-label">Khuôn viên của trường đại học có đáp ứng đủ về không gian xanh, khu vực ngoài trời, và khu vực thể thao không? </td>
                                                <td><input type="radio" name="sau" class="radio" value="1"></td>
                                                <td><input type="radio" name="sau" class="radio" value="2"></td>
                                                <td><input type="radio" name="sau" class="radio" value="3"></td>
                                                <td><input type="radio" name="sau" class="radio" value="4"></td>
                                                <td><input type="radio" name="sau" class="radio" value="5"></td>
                                            </tr>
                                            <tr>
                                                <td class="cell-label">Có đáp ứng đủ về số lượng và chất lượng phòng học, phòng thực hành, và phòng máy tính không?</td>
                                                <td><input type="radio" name="bay" class="radio" value="1"></td>
                                                <td><input type="radio" name="bay" class="radio" value="2"></td>
                                                <td><input type="radio" name="bay" class="radio" value="3"></td>
                                                <td><input type="radio" name="bay" class="radio" value="4"></td>
                                                <td><input type="radio" name="bay" class="radio" value="5"></td>
                                            </tr>
                                            <tr>
                                                <td class="cell-label">Hệ thống điện, nước, wifi, và các dịch vụ công nghệ thông tin khác của trường đại học hoạt động ổn định và đáp ứng đủ nhu cầu của sinh viên và nhân viên không? Bạn có hài lòng về dịch vụ công nghệ thông tin hiện tại không?</td>
                                                <td><input type="radio" name="tam" class="radio" value="1"></td>
                                                <td><input type="radio" name="tam" class="radio" value="2"></td>
                                                <td><input type="radio" name="tam" class="radio" value="3"></td>
                                                <td><input type="radio" name="tam" class="radio" value="4"></td>
                                                <td><input type="radio" name="tam" class="radio" value="5"></td>
                                            </tr>
                                            <tr>
                                                <td class="cell-label"  >Có đáp ứng đủ về nhu cầu về ăn uống và mua sắm trong khu vực của trường đại học không?</td>
                                                <td><input type="radio" name="chin" class="radio" value="1"></td>
                                                <td><input type="radio" name="chin" class="radio" value="2"></td>
                                                <td><input type="radio" name="chin" class="radio" value="3"></td>
                                                <td><input type="radio" name="chin" class="radio" value="4"></td>
                                                <td><input type="radio" name="chin" class="radio" value="5"></td>
                                            </tr>


                                    </table><!-- /.table .table-bordered -->

                                </div><!-- /.table-responsive -->
                            </div><!-- /.review-table -->
                            <div class="review-form">
                                <div class="form-container">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputReview">Ý kiến của sinh viên <span class="astk">*</span></label>
                                                <input class="form-control txt txt-review" id="exampleInputReview" rows="4" type="text" name="review"  autocomplete="off" required="required" />
                                            </div><!-- /.form-group -->
                                        </div>
                                    </div><!-- /.row -->

                                    <div class="action text-right">
                                        <button type="submit" name="signup" class="btn btn-danger" id="submit">Gửi đánh giá </button>
                                    </div>
                                </div>
                            </div>
                    </form>
                    </div>
                </body>

                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

                <script src="assets/js/jquery-1.10.2.js"></script>
                <script src="assets/js/bootstrap.js"></script>
                <script src="assets/js/custom.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.15/dist/js/uikit.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.15/dist/js/uikit-icons.min.js"></script>
                </body>

                </html>