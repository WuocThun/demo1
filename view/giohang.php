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

        .giohang {
            height: 500px;
        }
        
        .title_cart {
            margin-bottom: 40px;
            width: 30%;
            text-align: center;
        }
        
        .title_cart h1 {
            font-size: 30px;
            text-transform: uppercase;
        }
        .namePD,.price {
            color: red;
            font-weight: 600;
        }
        .namePD {
            color: black;
        }
        .thongbao {
            color: red;
            margin: 20px 0;
            width: 100%;
            text-align: center;
            font-weight: 600;
        }
        .btn_remove {
            background-color: black;
            color: white;
            padding: 7px 10px;
            cursor: pointer;
           border: none;
           outline: none; 
        }
    </style>
    
<div class="giohang">
    <div class=" title_cart">
        <h1>Giỏ Hàng</h1>
    </div>
    <form action="" method="post">
        <table>
            <tr>
                <th>Mã đơn hàng</th>
                <th>tên đơn hàng</th>
                <th>Giá sản phẩm</th>
                <th>Ngày đặt</th>            
                <th>Action</th>            
            </tr>
            <?php
            
            if (isset($_SESSION['user'])) {
                $giohang = $_SESSION['user'];
            
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "duanmau2023";
                $conn = new mysqli($servername, $username, $password, $database);
            
                if ($conn->connect_error) {
                    die("Kết nối không thành công: " . $conn->connect_error);
                }
            
                if (isset($giohang['id'])) {
                    $idKH = $giohang['id'];
            
                    $sql = "SELECT * FROM donhang WHERE idKH = $idKH";
            
                    $result = $conn->query($sql);
            
                    if ($result->num_rows > 0) {
                        // In ra kết quả
                        while ($row = $result->fetch_assoc()) {
                            echo '
                            <tr>
                                <td>
                                    '.$row["madonhang"].'
                                    <input type="hidden" name="madonhang" value="'.$row["madonhang"].'">    
                                </td>
                                <td class="namePD">'.$row["namePD"].'</td>
                                <td class="price">'.$row["pricePD"].'VNĐ</td>
                                <td>'.$row["timeDH"].'</td>
                                <td><button class="btn_remove" name="btn_remove" value="'.$row["madonhang"].'">Hủy đơn hàng.</button></td>
                            </tr>';
                            echo '<script>
                                        document.addEventListener("DOMContentLoaded", function() {
                                            var btnRemove = document.querySelectorAll(".btn_remove");
                                            for (var i = 0; i < btnRemove.length; i++) {
                                                btnRemove[i].addEventListener("click", function() {
                                                    location.reload();
                                                });
                                            }
                                        });
                                    </script>';
                        }
                    } else {
                        echo "<div class='thongbao'><span>Không có đơn hàng nào.</span></div>";
                    }
                } else {
                    echo "<div class='thongbao'><span>Không tìm thấy ID khách hàng.</span></div>";
                }
            
                // Đóng kết nối
                $conn->close();
            } else {
                echo "<div class='thongbao'><span>Không tìm thấy bất kỳ dữ liệu nào.</span></div>";
            }
            ?>
        </table>
    </form> 
</div>
        <?php 
            if(isset($_POST['btn_remove'])){    
                $maDH = $_POST['btn_remove'];
                // Kết nối đến cơ sở dữ liệu
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "duanmau2023";
                $conn = new mysqli($servername, $username, $password, $database);
            
                if ($conn->connect_error) {
                    die("Kết nối không thành công: " . $conn->connect_error);
                }
                $sql = "DELETE FROM donhang WHERE madonhang = '$maDH'";
                $thongbao = '<div class="thongbao">Đã xóa thành công.</div>';
                if ($conn->query($sql) === TRUE) {
                    // header('location: index.php');
                    
                    echo $thongbao;
                } else {
                    echo "Lỗi trong quá trình xóa đơn hàng: " . $conn->error;
                }
                $conn->close();
            }            
        ?>

