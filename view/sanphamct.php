<style>
    .nameProcduct h1 {
        font-size: 2rem;
        letter-spacing: 4px;
        text-transform: uppercase;
        margin-top: 10px;
    }
    .span span {
        color: red;
        font-weight: 500;
    }
</style>
<div class="row mb">
            <div class="boxtrai ">
                <div class="row mb">
                    <?php
                        extract($onesp);
                    ?>
                    <div class="boxtitle">Sản Phẩm Chi tiết</div>
                    <div style="display: flex;
                        flex-direction: column;
                        align-items: center;" class="row ">
                        <div class="nameProcduct">
                            <h1><?=$name?></h1>
                        </div>
                        <div class="span">
                            <h1>Giá:</h1><span><?=$price?>VNĐ</span>
                        </div>
                        <?php
                        
                            $img=$img_path.$img;
                            $cart = "index.php?act=cart&id=".$id; 
                            echo '<div class="row mb sanphamct"><img src="'.$img.'"> </div>';
                            echo '<div class="color">
                            <div style="background-color: white;" class="color-item"></div>
                            <div style="background-color: black;" class="color-item"></div>
                            <div style="background-color: pink;" class="color-item"></div>
                            <div style="background-color: yellow;" class="color-item"></div>
                            <div style="background-color: grey;" class="color-item"></div>
                            </div>
                            <div class="quantity">
                                <button class="minus">-</button>
                                <div class="number">0</div>
                                <button class="plus">+</button>
                            </div>
                            <div class="mota mb">
                                <h1>Mô tả:</h1>
                                <p>'.$mota.'</p>
                            </div>
                            <div class="btn_pay_ct">
                                <a href="'.$cart.'"><input class="btn_pay" type="subimit" name="addtocart" value="Thêm vào giỏ hàng"></a>
                            </div>';
                            ?>
                    </div>
                </div>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                <script>
                $(document).ready(function() {
                    $("#binhluan").load("view/binhluan/binhluanform.php", {
                    idpro: <?= $id ?>
                    });
                });
                </script>
                <div class="row mb">
                    <div class="row" id="binhluan"></div>
                </div>
                <div style="background-color:#F5F5F7" class="row mb">
                    <div class="tile_toppd"><h1>TOP SẢN PHẨM</h1></div>
                        <div class="container_toppd">
                            <?php
                                foreach ($dstop10 as $sp) {
                                    extract($sp);
                                    $linksp = "index.php?act=sanphamct&idsp=". $id;
                                    $img = $img_path.$img;
                                    $linkdm="index.php?act=sanpham&iddm=".$id;
                                    echo '<div class="top_item">
                                            <a href="'.$linksp.'"><img src="'.$img.'" alt=""></a>
                                            <a class="nameProduct" href="'.$linksp.'">'.$name.'</a>
                                        </div>';
                                };
                            ?>
                        </div>
                    </div> 
                </div>
            </div>
        </div>