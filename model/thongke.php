<?php
function tongsanpham() {
    // Kết nối đến cơ sở dữ liệu
    $pdo = new PDO("mysql:host=localhost;dbname=duanmau2023", "root", "");

    // Chuẩn bị truy vấn SQL
    $sql = "SELECT COUNT(*) AS tongsp FROM sanpham";
    $stmt = $pdo->prepare($sql);

    // Thực hiện truy vấn
    $stmt->execute();

    // Lấy kết quả
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    // Đóng kết nối đến cơ sở dữ liệu
    $pdo = null;

    return $result['tongsp'];
}

function tongdanhmuc() {
    // Kết nối đến cơ sở dữ liệu
    $pdo = new PDO("mysql:host=localhost;dbname=duanmau2023", "root", "");

    // Chuẩn bị truy vấn SQL
    $sql = "SELECT COUNT(*) AS tongdm FROM danhmuc";
    $stmt = $pdo->prepare($sql);

    // Thực hiện truy vấn
    $stmt->execute();

    // Lấy kết quả
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    // Đóng kết nối đến cơ sở dữ liệu
    $pdo = null;

    return $result['tongdm'];
}

function tongkhachhang() {
    // Kết nối đến cơ sở dữ liệu
    $pdo = new PDO("mysql:host=localhost;dbname=duanmau2023", "root", "");

    // Chuẩn bị truy vấn SQL
    $sql = "SELECT COUNT(*) AS tongkh FROM taikhoan";
    $stmt = $pdo->prepare($sql);

    // Thực hiện truy vấn
    $stmt->execute();

    // Lấy kết quả
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    // Đóng kết nối đến cơ sở dữ liệu
    $pdo = null;

    return $result['tongkh'];
}

function tongview() {
    // Kết nối đến cơ sở dữ liệu
    $pdo = new PDO("mysql:host=localhost;dbname=duanmau2023", "root", "");

    // Chuẩn bị truy vấn SQL
    $sql = "SELECT SUM(view) AS tongview FROM sanpham";
    $stmt = $pdo->prepare($sql);

    // Thực hiện truy vấn
    $stmt->execute();

    // Lấy kết quả
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    // Đóng kết nối đến cơ sở dữ liệu
    $pdo = null;

    return $result['tongview'];
}

function tongbl() {
    // Kết nối đến cơ sở dữ liệu
    $pdo = new PDO("mysql:host=localhost;dbname=duanmau2023", "root", "");

    // Chuẩn bị truy vấn SQL
    $sql = "SELECT COUNT(*) AS tongbl FROM binhluan";
    $stmt = $pdo->prepare($sql);

    // Thực hiện truy vấn
    $stmt->execute();

    // Lấy kết quả
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    // Đóng kết nối đến cơ sở dữ liệu
    $pdo = null;

    return $result['tongbl'];
}

function tongdonhang () {
        // Kết nối đến cơ sở dữ liệu
        $pdo = new PDO("mysql:host=localhost;dbname=duanmau2023", "root", "");

        // Chuẩn bị truy vấn SQL
        $sql = "SELECT * FROM donhang";
        $stmt = $pdo->prepare($sql);
    
        // Thực hiện truy vấn
        $stmt->execute();
    
        // Lấy kết quả
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
        // Đóng kết nối đến cơ sở dữ liệu
        $pdo = null;
    
        return $result['donhang'];
}

function tongdanhthu () {
    // Kết nối đến cơ sở dữ liệu
    $pdo = new PDO("mysql:host=localhost;dbname=duanmau2023", "root", "");

    // Chuẩn bị truy vấn SQL
    $sql = 'SELECT SUM(pricePD) AS total_amount FROM donhang';
    $stmt = $pdo->prepare($sql);

    // Thực hiện truy vấn
    $stmt->execute();

    // Lấy kết quả
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    // Đóng kết nối đến cơ sở dữ liệu
    $pdo = null;

    return $result['total_amount'];
}

function tongdon () {
    // Kết nối đến cơ sở dữ liệu
    $pdo = new PDO("mysql:host=localhost;dbname=duanmau2023", "root", "");

    // Chuẩn bị truy vấn SQL

    $sql = "SELECT COUNT(*) AS total_amount FROM donhang";
    $stmt = $pdo->prepare($sql);

    // Thực hiện truy vấn
    $stmt->execute();

    // Lấy kết quả
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    // Đóng kết nối đến cơ sở dữ liệu
    $pdo = null;

    return $result['total_amount'];
}

?>