
<!DOCTYPE html>
<html>
    <title>W3.CSS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <body>

        <div class="w3-sidebar w3-bar-block w3-light-grey w3-card" style="width:160px;">
            <a href="#" class="w3-bar-item w3-button">Trang chủ</a>
            <button class="w3-button w3-block w3-left-align" onclick="myAccFunc()">
                Quản lý phiếu <i class="fa fa-caret-down"></i>
            </button>
            <div id="demoAcc" class="w3-hide w3-white w3-card">
                <a href="index.php?req=lietkedotkhaosat" class="w3-bar-item w3-button">Đợt khảo sát</a>
                <a href="index.php?req=lietkedoituongapdung" class="w3-bar-item w3-button">Đối tượng áp dụng</a>
                <a href="index.php?req=lietkephieukhaosat" class="w3-bar-item w3-button">Phiếu khảo sát sinh viên</a>
                <a href="index.php?req=lietkephieukhaosatgv" class="w3-bar-item w3-button">Phiếu khảo sát giảng viên</a>
                <a href="index.php?req=lietketenkhaosat" class="w3-bar-item w3-button">Tên khảo sát</a>
                <a href="index.php?req=lietkecauhoi" class="w3-bar-item w3-button">Câu hỏi</a>
                <a href="index.php?req=lietkenhomcauhoi" class="w3-bar-item w3-button">Nhóm câu hỏi</a>
                <a href="index.php?req=thongkeketquasv" class="w3-bar-item w3-button">Thống kê kết quả sinh viên</a>
            </div>

            <div class="w3-dropdown-click">
                <button class="w3-button" onclick="myDropFunc()">
                    Quản lý tài khoản <i class="fa fa-caret-down"></i>
                </button>
                <div id="demoDrop" class="w3-dropdown-content w3-bar-block w3-white w3-card">
                    <a href="index.php?req=lietketaikhoan" class="w3-bar-item w3-button">Tài khoản</a>
                    <a href="index.php?req=lietkesinhvien" class="w3-bar-item w3-button">Sinh viên</a>
                    <a href="index.php?req=lietkegiangvien" class="w3-bar-item w3-button">Giảng viên</a>
                    <a href="index.php?req=lietkephannhom" class="w3-bar-item w3-button">Phân nhóm</a>
                    <a href="index.php?req=lietkephanquyen" class="w3-bar-item w3-button">Phân quyền</a>
                </div>
            </div>

            <div class="w3-dropdown-click">
                <button class="w3-button" onclick="myDropFunc1()">
                    Quản lý chung <i class="fa fa-caret-down"></i>
                </button>
                <div id="demoDrop1" class="w3-dropdown-content w3-bar-block w3-white w3-card">
                    <a href="index.php?req=lietkelophoc" class="w3-bar-item w3-button">Lớp học</a>
                    <a href="index.php?req=lietkedonvi" class="w3-bar-item w3-button">Đơn vị</a>
                    <a href="index.php?req=lietketrinhdo" class="w3-bar-item w3-button">Trình độ</a>
                    <a href="index.php?req=lietkenganhhoc" class="w3-bar-item w3-button">Ngành học</a>
                    <a href="index.php?req=lietkekhoahoc" class="w3-bar-item w3-button">Khóa học</a>
                    <a href="index.php?req=lietkenamhoc" class="w3-bar-item w3-button">Năm học</a>
                    <a href="index.php?req=lietkehocky" class="w3-bar-item w3-button">Học kỳ</a>
                </div>
            </div>

        </div>



        <script>
            function myAccFunc() {
                var x = document.getElementById("demoAcc");
                if (x.className.indexOf("w3-show") == -1) {
                    x.className += " w3-show";
                    x.previousElementSibling.className += " w3-green";
                } else {
                    x.className = x.className.replace(" w3-show", "");
                    x.previousElementSibling.className =
                            x.previousElementSibling.className.replace(" w3-green", "");
                }
            }

            function myDropFunc() {
                var x = document.getElementById("demoDrop");
                if (x.className.indexOf("w3-show") == -1) {
                    x.className += " w3-show";
                    x.previousElementSibling.className += " w3-green";
                } else {
                    x.className = x.className.replace(" w3-show", "");
                    x.previousElementSibling.className =
                            x.previousElementSibling.className.replace(" w3-green", "");
                }
            }
            function myDropFunc1() {
                var x = document.getElementById("demoDrop1");
                if (x.className.indexOf("w3-show") == -1) {
                    x.className += " w3-show";
                    x.previousElementSibling.className += " w3-green";
                } else {
                    x.className = x.className.replace(" w3-show", "");
                    x.previousElementSibling.className = x.previousElementSibling.className.replace(" w3-green", "");
                }
            }
        </script>

    </body>
</html>

<!-- Sidebar -->
<!--        <div class="w3-sidebar w3-bar-block" style="display:none;z-index:5;" id="mySidebar">
            <button style="color: #ffffff; background-color: #000000;" class="w3-bar-item w3-button w3-xxlarge" onclick="w3_close()">Quản lý</button>
            <a href="index.php?req=lietketaikhoan" style="color: #ffffff; background-color: #585858;" class="w3-bar-item w3-button">Tài Khoản</a>          
            <a href="index.php?req=lietkegiangvien" style="color: #ffffff; background-color: #585858;" class="w3-bar-item w3-button">Giảng Viên</a>
            <a href="index.php?req=lietkesinhvien" style="color: #ffffff; background-color: #585858;" class="w3-bar-item w3-button">Sinh viên</a>          
            <a href="index.php?req=lietkekhoahoc" style="color: #ffffff; background-color: #585858;" class="w3-bar-item w3-button">Khóa học</a>
            <a href="index.php?req=lietkenganhhoc" style="color: #ffffff; background-color: #585858;" class="w3-bar-item w3-button">Ngành học</a>          
            <a href="index.php?req=lietkelophoc" style="color: #ffffff; background-color: #585858;" class="w3-bar-item w3-button">Lớp</a>
            <a href="index.php?req=lietkephanquyen" style="color: #ffffff; background-color: #585858;" class="w3-bar-item w3-button">Phân Quyền</a>          
            <a href="index.php?req=lietkephannhom" style="color: #ffffff; background-color: #585858;" class="w3-bar-item w3-button">Phân nhóm</a>
            <a href="index.php?req=lietketrinhdo" style="color: #ffffff; background-color: #585858;" class="w3-bar-item w3-button">Trình Độ</a>          
            <a href="index.php?req=lietkedonvi" style="color: #ffffff; background-color: #585858;" class="w3-bar-item w3-button">Đơn Vị</a>
            <a href="index.php?req=lietkecauhoi" style="color: #ffffff; background-color: #585858;" class="w3-bar-item w3-button">Câu hỏi</a>          
            <a href="index.php?req=lietkenhomcauhoi" style="color: #ffffff; background-color: #585858;" class="w3-bar-item w3-button">Nhóm Câu hỏi</a>
            <a href="index.php?req=lietketenkhaosat" style="color: #ffffff; background-color: #585858;" class="w3-bar-item w3-button">Tên khảo sát</a>          
            <a href="index.php?req=lietkenamhoc" style="color: #ffffff; background-color: #585858;" class="w3-bar-item w3-button">Năm học</a>
            <a href="index.php?req=lietkehocky" style="color: #ffffff; background-color: #585858;" class="w3-bar-item w3-button">Học kỳ</a>          
            <a href="index.php?req=lietkedotkhaosat" style="color: #ffffff; background-color: #585858;" class="w3-bar-item w3-button">Đợt khảo sát</a>
            <a href="index.php?req=lietkedoituongapdung" style="color: #ffffff; background-color: #585858;" class="w3-bar-item w3-button">Đối tượng áp dụng</a>          
            <a href="index.php?req=lietkephieukhaosat" style="color: #ffffff; background-color: #585858;" class="w3-bar-item w3-button">Phiếu khảo sát</a>
            <a href="index.php?req=lietkephieukhaosatgv" style="color: #ffffff; background-color: #585858;" class="w3-bar-item w3-button">Phiếu khảo sát gv</a>
                        <a href="index.php?req=taophieu" style="color: #ffffff; background-color: #585858;" class="w3-bar-item w3-button">Tạo phiếu</a>
            <a href="index.php?req=thongkeketquasv" style="color: #ffffff; background-color: #585858;" class="w3-bar-item w3-button">Thống kê kết quả sv</a>
            <a href="index.php?req=index" style="color: #ffffff; background-color: #585858;" class="w3-bar-item w3-button">Import sv</a>
        </div>

         Page Content 
        <div class="w3-overlay" onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>

        <div>
            <button class="w3-button w3-white w3-xxlarge" onclick="w3_open()">&#9776;</button>

        </div>

        <script>
            function w3_open() {
                document.getElementById("mySidebar").style.display = "block";
                document.getElementById("myOverlay").style.display = "block";
            }

            function w3_close() {
                document.getElementById("mySidebar").style.display = "none";
                document.getElementById("myOverlay").style.display = "none";
            }
        </script>-->


