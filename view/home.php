<div class="row mb">
            <div class="boxtrai mr">
                <div class="row">
                    <div class="banner">
                        <!-- Slideshow container -->
                        <div class="slideshow-container">

                            <!-- Full-width images with number and caption text -->
                            <div class="mySlides fade">
                                    <img src="//bizweb.dktcdn.net/100/369/010/themes/914385/assets/slide-img4.jpg?1696405561727" style="width:100%">
                            </div>

                            <div class="mySlides fade">
                                    <img src="//bizweb.dktcdn.net/100/369/010/themes/914385/assets/slide-img1.jpg?1696405561727" style="width:100%">
                            </div>

                            <div class="mySlides fade">
                                    <img src="https://bizweb.dktcdn.net/100/369/010/themes/914385/assets/slide-img2.jpg?1696405561727" style="width:100%">
                            </div>

                            <!-- Next and previous buttons -->
                                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                                <a class="next" onclick="plusSlides(1)">&#10095;</a>
                        </div>
                        <br>
                    </div>
                    <div class="section">
                        <div class="section-list">
                            <a href="">
                                <img src="https://bizweb.dktcdn.net/100/369/010/themes/914385/assets/xxx_4.jpg?1691735709699" alt="">
                            </a>
                        </div>
                        <div class="section-list">
                            <a href="">
                                <img src="https://bizweb.dktcdn.net/100/369/010/themes/914385/assets/xxx_5.jpg?1691735709699" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <style>
                    .sreach {
                        height: 300px;
                        margin-top: 20px;
                    }
                </style>
                <div class="sreach">
                    <?php 
                        include "view/boxrigth.php";
                    ?>
                </div>
                <div class="tile_toppd"><h1>Sản Phẩm Mới</h1></div>
                <div class="row container_sp">
                    <?php
                    $i = 0;
                        foreach ($spnew as $sp) {
                            extract($sp);
                            $linksp = "index.php?act=sanphamct&idsp=". $id;
                            $hinh = $img_path.$img;
                            if(($i == 2) || ($i == 5) || ($i == 8)){
                                $mr = "";
                            }else{
                                $mr = "mr";
                            }
                            $cart = "index.php?act=cart&id=".$id; 
                            echo '<div class="boxsp '.$mr.'">
                                    <a href="'.$linksp.'"><img src="'.$hinh.'" alt="" width="180px"></a>
                                    <a class="nameProduc" href="'.$linksp.'">'.$name.'</a>
                                    <p class="price">'.$price.' VNĐ</p>
                                    <br>
                                    <a href="'.$cart.'"><input class="btn_pay" type="subimit" name="addtocart" value="Thêm vào giỏ hàng"></a>
                                </div>';
                            $i = $i +1;
                        }
                    ?>
                </div>
            <div class="box_center">
                <div class="morePD">
                    <a href="index.php?act=sanphamAll">Xem thêm</a>
                </div>
            </div>
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
                 <div class="logo_footer">
                    <div class="box_img_footer">   
                        <img src="//bizweb.dktcdn.net/100/369/010/themes/914385/assets/brand1.png?1697129517725" alt="">
                        <img src="//bizweb.dktcdn.net/100/369/010/themes/914385/assets/brand4.png?1697129517725" alt="">
                        <img src="//bizweb.dktcdn.net/100/369/010/themes/914385/assets/brand6.png?1697129517725" alt="">
                        <img src="//bizweb.dktcdn.net/100/369/010/themes/914385/assets/brand7.png?1697129517725" alt="">
                    </div>
            </div>
            </div>