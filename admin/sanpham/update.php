<?php
    if(is_array($sanpham)) {
        extract($sanpham);
    }
    $hinhpath = "../upload/".$img;
        if(is_file($hinhpath)) {
            $hinh ="<img src='".$hinhpath."' height='80'>";
        }else {
            $hinh = "No photo";
        }
?>
    <div class="row ">
            <div class="row frmtitle">
                <H1>Cập nhập loại hàng hoá</H1>
            </div>
            <div class="row formcontent">
                <style>
                    .form_ud{ 
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        flex-direction: column;
                        width: 50%;
                        margin: auto;
                        text-align: center;
                    }

                    .form_ud .row {
                        font-weight: 500;
                        font-size: 1.3rem;
                        text-transform: uppercase;
                        margin: 10px;
                    }
                </style>
                    <form class="form_ud" action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                        <div class="row mb10">
                            <select name="iddm">
                                <option value="0" selected>Tất cả</option>
                                <?php
                                    foreach ($listdanhmuc as $danhmuc) {
                                        if ($iddm == $id) echo '<option value="' . $danhmuc['id'] . '" selected>' . $danhmuc['name'] . '</option>';
                                        else echo '<option value="' . $danhmuc['id'] . '" >' . $danhmuc['name'] . '</option>';   
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="row mb10">
                            Tên sản phẩm<br>
                            <input type="text" name="tensp" value="<?=$name?>">
                        </div>
                        <div class="row mb10">
                            Giá sản phẩm<br>
                            <input type="text" name="giasp" value="<?=$price?>">
                        </div>
                        <div class="row mb10">
                            Hình sản phẩm<br>
                            <input type="file" name="hinh">
                            <?=$hinh?>
                        </div>
                        <div class="row mb10">
                            Mô tả sản phẩm<br>
                            <textarea style="padding:10px" name="mota" cols="30" rows="10" ><?=$mota?></textarea>
                        </div>
                        <div class="row mb20 row_form_btn">
                            <input type="hidden" name="id" value="<?=$id?>">
                            <input type="submit" name="capnhat" value="Cập Nhật">
                            <input type="submit" value="Nhập lại">
                            <a href="index.php?act=listsp"><input type="button" value="Danh Sách"></a>
                        </div>
                        <?php 
                        if(isset($thongbao) && ($thongbao != "")) echo $thongbao;
                        ?>
                    </form>
            </div>
        </div>
    </div>