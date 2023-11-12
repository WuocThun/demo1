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

    .morePD_admin {
        width: 200px;
        padding: 10px;
        border: 1px solid black;
        background-color: black;
        margin: 10px;
    }

    .morePD_admin a {
        color: white;
        text-decoration: none;
    }
</style>

<div class="morePD_admin">
    <a href="index.php?act=doanhso">Xem chi tiết từng sản phẩm</a>
</div>
<div class="thongke">
    <div style="margin: 60px 0;" class="title">
        <h1>Thống kê</h1>
    </div>
<table border="1">
    <tr>
        <th>Tổng Danh mục</th>
        <th>Tổng sản phẩm</th>
        <th>Lượt xem sản phẩm</th>
        <th>Lượt bình luận</th>
        <th>Tổng tài khoản</th>
    </tr>
    <tr>
        <td><?php echo '<div class="output"><a href="index.php?act=listdm" >'.$tongdanhmuc.' Danh mục.</a></div>'?></td>
        <td><?php echo '<div class="output"><a href="index.php?act=listsp" >'.$tongSanPham.' sản phẩm.</a></div>'?></td>
        <td><?php echo '<div class="output"><a href="index.php?act=listsp" >'.$tongview.' Lượt xem.</a></div>'?></td>
        <td><?php echo '<div class="output"><a href="index.php?act=dsbl">'.$tongbl.' bình luận.</a></div>'?></td>
        <td><?php echo '<div class="output"><a href="index.php?act=dskh">'.$tongkhachhang.' khách hàng.</a></div>'?></td>
    </tr>
</table>
<div style="margin: 60px 0;" class="title">
    <h1>Tổng danh thu</h1>
</div>
<table>
    
    <tr>
        <th>Tổng danh thu</th>
        <th>Tổng đơn</th>
    </tr>

    <tr>
        <td><?php echo '<div class="output"><a href="#" >'.$tongdanhthu.' VNĐ.</a></div>'?></td>
        <td><?php echo '<div class="output"><a href="#" >'.$tongdon.' Đơn.</a></div>'?></td>
    </tr>
</table>

<div style="margin: 60px 0;" class="title">
    <h1>Tổng đơn hàng:</h1>
</div>
<table>
    
<tr>
        <th>ID ĐƠN HÀNG</th>
        <th>ID KHÁCH HÀNG</th>
        <th>MÃ ĐƠN HÀNG</th>
        <th>USER NAME NGƯỜI MUA</th>
        <th>TÊN SẢN PHẨM</th>
        <th>GIÁ</th>
        <th>SĐT</th>
        <th>ĐỊA CHỈ NHẬN HÀNG</th>
        <th>NGÀY ĐẶT HÀNG</th>

    </tr>

    <tr>
    <?php
// Kết nối đến cơ sở dữ liệu
$conn = mysqli_connect("localhost", "root", "", "duanmau2023");

// Thực hiện truy vấn SQL
$sql = "SELECT * FROM donhang";
$result = mysqli_query($conn, $sql);

// Kiểm tra xem có dữ liệu trả về không
if (mysqli_num_rows($result) > 0) {
    // Đóng kết nối
    mysqli_close($conn);

    // Sử dụng vòng lặp foreach để hiển thị thông tin đơn hàng
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '
            <td>' . $row["id"] . '</td>
            <td>' . $row["idKH"] . '</td>
            <td>' . $row["madonhang"] . '</td>
            <td>' . $row["nameuser"] . '</td>
            <td>' . $row["namePD"] . '</td>
            <td>' . $row["pricePD"] . '</td>
            <td>' . $row["phone"] . '</td>
            <td>' . $row["adr"] . '</td>
            <td>' . $row["timeDH"] . '</td>
        ';
        echo '</tr>';
    }
} else {
    echo "Không có đơn hàng nào.";
}
?>
</tr>
</table>

<div style="margin: 60px 0;" class="title">
</div>