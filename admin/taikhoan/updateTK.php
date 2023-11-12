<?php
    if(is_array($tk)) {
        extract($tk);
    }
?>
    <div class="row ">
            <div class="row frmtitle">
                <H1>Cập nhập thông tin khách hàng</H1>
            </div>
            <div class="row formcontent">
                    <form action="index.php?act=updatetk" method="post" enctype="multipart/form-data">
                        <div class="row mb10">
                            Email:<br>
                            <input type="text" name="email" value="<?php if(isset($email)&& ($email!="")) echo $email ?>">
                        </div>
                        <div class="row mb10">
                            Tên đăng nhập:<br>
                            <input type="text" name="username" value="<?=$user?>">
                        </div>
                        <div class="row mb10">
                            Mật khẩu:<br>
                            <input type="text" name="pass" value="<?=$pass?>">
                        </div>
                        <div class="row mb10">
                            Địa chỉ:<br>
                            <input type="text" name="adr" value="<?=$address?>">
                        </div>
                        <div class="row mb10">
                            Số điện thoại:<br>
                            <input type="text" name="tel" value="<?=$tel?>">
                        </div>
                        <div class="row mb20">
                            <input type="hidden" name="id" value="<?=$id?>">
                            <input type="submit" name="capnhat" value="Cập Nhật">
                            <input type="submit" value="Nhập lại">
                            <a href="index.php?act=dskh"><input type="button" value="Danh Sách"></a>
                        </div>
                    </form>
            </div>
        </div>
    </div>