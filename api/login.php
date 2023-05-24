<?php

    session_start();
    require("../models/getModel.php");
    
    $email = $_POST["email"];
    $matkhau = $_POST["matkhau"];
    $status = $taikhoan->taikhoan__Check_Login($email, $matkhau);
    echo json_encode($status);

?>