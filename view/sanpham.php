<div class="row mb">
            <div class="boxtrai mr">
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
                                echo '<div class="boxsp">
                                        <a href="'.$linksp.'"><img src="'.$hinh.'" alt="" width="180px"></a>
                                        <a class="nameProduc" href="'.$linksp.'">'.$name.'</a>
                                        <span class="price">'.$price.' VNĐ</span>
                                        <input class="btn_pay" type="subimit" name="addtocart" value="Thêm vào giỏ hàng">
                                    </div>';
                                $i = $i +1;
                            }   
                        ?>
                    <!-- </div> -->
                </div>
            </div>
        </div>