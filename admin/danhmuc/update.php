<?php
    if(is_array($dm)) {
        extract($dm);
    }
?>
<div class="row ">
            <div class="row frmtitle">
                <H1>Cập nhập loại hàng hoá</H1>
            </div>
            <div class="row formcontent">
                <form action="index.php?act=updatedm" method="post">
                    <div class="row mb10">
                        Mã loại<br>
                        <input type="text" name="maloai" disabled>
                    </div>
                    <div class="row mb10">
                        Tên loại<br>
                        <input type="text" name="tenloai" value="<?php if(isset($name)&& ($name!="")) echo $name ?>">
                    </div>
                    <div class="row mb20">
                        <input type="hidden" name="id" value="<?php if(isset($id)&& ($id >0)) echo $id ?>">
                        <input type="submit" name="capnhat" value="Cập Nhật">
                        <input type="submit" value="Nhập lại">
                        <a href="index.php?act="><input type="button" value="Danh Sách"></a>
                    </div>
                    <?php 
                    if(isset($thongbao) && ($thongbao != "")) echo $thongbao;
                    ?>
                </form>
            </div>
        </div>
    </div>