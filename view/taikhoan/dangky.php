<div class="row mb">
            <div class="boxtrai mr">
                <div class="row mb ">
                <style>
                    .formtaikhoan form h1 {
                        margin: 10px 0;
                    }

                    .formtaikhoan form .btn_dk {
                        margin: 10px 0;
                        border-radius: 0px !important;
                        background-color: black;
                        color: white;
                        padding: 10px;
                    }
                </style>
                    <div class="row formtaikhoan boxcontent">
                        <form action="index.php?act=dangky" method="post" class="user">
                            <h1>Email:</h1>
                            <input type="email" name="email" placeholder="Email">
                            <h1>User Name:</h1>
                            <input type="text" name="user" placeholder="Username">
                            <h1>Mật khẩu:</h1>
                            <input type="password" name="pass" placeholder="Password">
                            <input class="btn_dk" type="submit" value="Đăng ký" name="dangky">
                            <input class="btn_dk" type="reset" value="Nhập lại">
                        </form>
                        <a style="color:black" href="index.php?act=quenmk">Quên mật khẩu</a>
                        <?php 
                            if(isset($thongbao) && ($thongbao!="")){
                                echo '<h3 style="color:red;margin:20px">'.$thongbao.'</h3>';
                            }
                        ?>
                    </div>
                </div>
            </div>
</div>