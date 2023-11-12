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
</style>

<?php
$conn = mysqli_connect("localhost", "root", "", "duanmau2023");

// Thực hiện truy vấn SQL để tính tổng số lượng đơn hàng cho mỗi sản phẩm
$sql_total_orders = "SELECT namePD, SUM(1) AS total_orders
                    FROM donhang
                    GROUP BY namePD";

$result_total_orders = mysqli_query($conn, $sql_total_orders);

// Thực hiện truy vấn SQL để tính tổng giá tiền cho mỗi sản phẩm
$sql_total_price = "SELECT namePD, SUM(pricePD) AS total_price
                    FROM donhang
                    GROUP BY namePD";

$result_total_price = mysqli_query($conn, $sql_total_price);

// Kiểm tra xem có dữ liệu trả về không
if (mysqli_num_rows($result_total_orders) > 0 && mysqli_num_rows($result_total_price) > 0) {
    // Hiển thị kết quả
    echo '<table>';
    echo '<tr><th>Tên Sản Phẩm</th><th>Tổng Số Đơn Hàng</th><th>Tổng Giá Tiền</th></tr>';
    
    while ($row_orders = mysqli_fetch_assoc($result_total_orders)) {
        $row_price = mysqli_fetch_assoc($result_total_price); // Lấy kết quả của truy vấn tổng giá tiền
        echo '<tr>';
        echo '<td><strong>' . $row_orders["namePD"] . '</strong></td>';
        echo '<td><strong>' . $row_orders["total_orders"] . '</strong></td>';
        echo '<td><h3 style="color:red">' . $row_price["total_price"] . '</h3></td>';
        echo '</tr>';
    }
    
    echo '</table>';
} else {
    echo "Không có dữ liệu đơn hàng.";
}

// Đóng kết nối
mysqli_close($conn);
?>
