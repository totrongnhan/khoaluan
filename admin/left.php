<!DOCTYPE html>
<html>
    <title>W3.CSS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <body>

        <!-- Sidebar -->
        <div class="w3-sidebar w3-bar-block" style="display:none;z-index:5;" id="mySidebar">
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
            <a href="index.php?req=lietkeketqua" style="color: #ffffff; background-color: #585858;" class="w3-bar-item w3-button">Kết quả</a>
            <a href="index.php?req=index" style="color: #ffffff; background-color: #585858;" class="w3-bar-item w3-button">Import sv</a>
        </div>

        <!-- Page Content -->
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
        </script>

    </body>
</html>
