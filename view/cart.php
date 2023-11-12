<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 0 auto;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        .output {
            font-weight: bold;
        }

        .output a {
            text-decoration: none;
            color: #007bff;
        }

        .output a:hover {
            text-decoration: underline;
        }
        .cart {
            height: 300px;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .text_title {
            width: 100%;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .text_title h1 {
            font-size: 1.8rem;
            width: 200px;
            text-transform: uppercase;
            border-bottom: 4px solid #ccc;
        }

        .btn_cart {
            display:flex;
            align-items:center;
            justify-content:center;
            flex-direction:row;
            padding: 21px;
        }

        .item {
            border-radius: 0;
            background-color: black;
            color: white;
            border: none;
            padding: 10px 12px;
            margin:0 5px;
        }
        .btn_cart input:hover {
            opacity: 0.8;
            cursor: pointer;
        }
        .clonehihi {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 40px;
        }
    </style>
</head>
<body>
<div class="text_title">
    <h1>Đặt hàng</h1>
</div>
<div class="cart">
    <table>
        <?php
            $sessionData = $_SESSION;
            extract($sanpham);
            $doDaiChuoi = 4;
            $chuoiNgauNhien = bin2hex(random_bytes($doDaiChuoi));
            $madonHang = "DAM_" . $chuoiNgauNhien;
        ?>
        <tr>
            <th>Thông tin người mua</th>
            <th>mã đơn hàng</th>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th>SĐT</th>
            <th>Địa chỉ nhận hàng</th>
            <th>Ngày đặt</th>
            <th>ACTION</th>
        </tr>
        
        <tr>
            <td><?php echo $sessionData['user']['user']; ?></td>
            <td><?php echo $madonHang; ?></td>
            <td style="font-weight: 600;"><?php echo $name; ?></td>
            <td style="color:red;font-weight: 500;"><?php echo $price ?>VNĐ</td>
            <td><?php echo $sessionData['user']['tel']; ?></td>
            <td><?php echo $sessionData['user']['address']; ?></td>
            <td><?php
                date_default_timezone_set('Asia/Ho_Chi_Minh');
                $ngayDat = date("Y-m-d H:i:s");
                echo $ngayDat;
                ?></td>
            <td>
                <?php
                echo '
                    <a href="index.php?act=edit_taikhoan"><input type="button" class="item" value="Cập nhập tài khoản"></input></a>
                    ';
                ?>
            </td>
        </tr>
    </table>
</div>
<form method="post" class="clonehihi">
    <input type="hidden" name="madonhang" value="<?php echo $madonHang; ?>">
    <input type="hidden" name="id" value="<?php echo $sessionData['user']['id']; ?>">
    <input type="hidden" name="nameuser" value="<?php echo $sessionData['user']['user']; ?>">
    <input type="hidden" name="namePD" value="<?php echo $name; ?>">
    <input type="hidden" name="pricePD" value="<?php echo $price; ?>">
    <input type="hidden" name="phone" value="<?php echo $sessionData['user']['tel']; ?>">
    <input type="hidden" name="adr" value="<?php echo $sessionData['user']['address']; ?>">
    <input type="hidden" name="timeDH" value="<?php echo $ngayDat; ?>">
    <input type="submit" name="xacnhan" class="item" value="Xác nhận">
</form>
<?php
if(isset($_POST['xacnhan'])){
    // Lấy các giá trị từ biểu mẫu sau khi nhấn nút "Xác nhận"
    $madonhang = $_POST['madonhang'];
    $idKH = $_POST['id'];
    $nameuser = $_POST['nameuser'];
    $namePD = $_POST['namePD'];
    $pricePD = $_POST['pricePD'];
    $phone = $_POST['phone'];
    $adr = $_POST['adr'];
    $timeDH = $_POST['timeDH'];

    // Thực hiện thêm các giá trị này vào cơ sở dữ liệu
    // Điều này cần phụ thuộc vào cách bạn đã thiết lập kết nối và truy vấn cơ sở dữ liệu.

    // Ví dụ sử dụng PDO để thêm dữ liệu vào MySQL:
    $pdo = new PDO("mysql:host=localhost;dbname=duanmau2023", "root", "");
    $sql = "INSERT INTO donhang (idKH,madonhang, nameuser, namePD,pricePD, phone, adr, timeDH) 
            VALUES (:idKH, :madonhang, :nameuser, :namePD,:pricePD, :phone, :adr, :timeDH)";
    $stmt = $pdo->prepare($sql);
    $result = $stmt->execute(array(
        ':idKH' => $idKH,
        ':madonhang' => $madonhang,
        ':nameuser' => $nameuser,
        ':namePD' => $namePD,
        ':pricePD' => $pricePD,
        ':phone' => $phone,
        ':adr' => $adr,
        ':timeDH' => $timeDH
    ));

    // Kiểm tra xem truy vấn đã thành công hay chưa
    if ($result) {
        // Nếu thành công, thông báo và chuyển hướng về trang chủ
        echo '<h1 style="text-align:center;margin:20px;color:red">Thêm dữ liệu thành công!</h1>';
        exit; // Dừng việc thực thi mã PHP tiếp theo
    } else {
        // Nếu không thành công, thông báo lỗi hoặc thực hiện các xử lý khác
        echo "<span>Có lỗi xảy ra khi thêm dữ liệu.</span>";
    }
}
?>
<!-- JS Cho slide show -->
<script src="https://kit.fontawesome.com/b8d3f92d8d.js" crossorigin="anonymous"></script>
<script src="./view/js/boxright.js"></script>
</body>
</html>
</body>
</html>
