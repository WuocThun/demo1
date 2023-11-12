<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DirtyCha</title>
    <link rel="icon" href="//bizweb.dktcdn.net/100/369/010/themes/914385/assets/brand4.png?1697129517725" type="image/x-icon" />
    <link rel="stylesheet" href="view/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="boxcenter">
        <div class="row header">
            <a href="#"><img src="https://bizweb.dktcdn.net/100/369/010/themes/914385/assets/logo.png?1691735709699" alt="Logo"></a>
        </div>
        <div class="row mb menu">
            <ul>
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="index.php?act=sanphamAll">SẢn phẩm </a></li>
                <li><a href="index.php?act=giohang">Giỏ Hàng </a></li>
                <li><a href="index.php?act=login">Đăng Nhập</a></li>
                <li><a href="index.php?act=register">Đăng Ký</a></li>
            </ul>
            <div class="wcl"></div>
            <div class="icon">
                <?php
                if(isset($_SESSION['user']) && is_array($_SESSION['user'])) {
                    extract($_SESSION['user']);
                    if(isset($user) && $user != "") {
                        echo 'Chào <a class="user" href="index.php?act=edit_taikhoan"> ' . $user . '</a>';
                    } else {
                        echo '<a class="user" href="index.php?act=dangnhap">Vui lòng đăng nhập</a>';
                    }
                } else {
                    // Xử lý trường hợp khi $_SESSION['user'] không phải là mảng hoặc không tồn tại.
                }                
                ?>
            </div>
        </div>