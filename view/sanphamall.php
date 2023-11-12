<div class="row mb">
    <div class="boxtrai">
        <div class="box_title_pd_all"><div class="tile_toppd"><h1>Sản Phẩm</h1></div><div class="w90"></div></div>
        <div class="row mb container_sp">
            <!-- <div class="row boxcontent"> -->
                <?php
                    $i = 0;
                    foreach ($dssp as $sp) {
                        extract($sp);
                        $linksp = "index.php?act=sanphamct&idsp=". $id;
                        $hinh = $img_path.$img;
                        if(($i == 2) || ($i == 5) || ($i == 8)){
                            $mr = "";
                        }else{
                            $mr = "mr";
                        }
                        $cart = "index.php?act=cart&id=".$id; 
                        echo '<div class="boxsp">
                                <a href="'.$linksp.'"><img src="'.$hinh.'" alt="" width="180px"></a>
                                <a class="nameProduc" href="'.$linksp.'">'.$name.'</a>
                                <span class="price">'.$price.' VNĐ</span>
                                <a href="'.$cart.'"><input class="btn_pay" type="subimit" name="addtocart" value="Thêm vào giỏ hàng"></a>

                            </div>';
                        $i = $i +1;
                    }   
                ?>
            <!-- </div> -->
        </div>
        <div class="article_bottom">
            <div class="width_article_color"></div>
            <ul class="page">
                <li><a class="element-to-avoid-page-break" href="#">1</a></li>
                <li><a class="element-to-avoid-page-break" href="#">2</a></li>
                <li><a class="element-to-avoid-page-break" href="#">3</a></li>
                <li><a class="element-to-avoid-page-break" href="#">4</a></li>
                <li><a class="element-to-avoid-page-break" href="#">5</a></li>
                <li><a style="font-weight: bold;" href="#">>></a></li>
            </ul>
        </div>
        <div class="top_footer">
            <img src="./img/phone-1.png" alt="">
            <span>Support / Purchase :</span>
            <a href="#">0933 800 190</a>
        </div>
    </div>
</div>