
                    <!-- <div class="boxtitle">Tài Khoản</div>
                    <div class="boxcontent formtaikhoan">
                        <?php
                            if (isset($_SESSION['user'])) {
                                extract($_SESSION['user']);
                            ?>
                                <div class="row mb10">
                                    Xin Chào <strong><?= $user ?></strong>
                                </div>
                                <div class="row mb10 user_item">
                                    <li>
                                        <a href="index.php?act=quenmk">Quên mật khẩu</a>
                                    </li>
                                    <li>
                                        <a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a>
                                    </li>
                                    <?php if ($role == 1) { ?>
                                        <li>
                                            <a href="admin/index.php">Đăng nhập Admin</a>
                                        </li>
                                    <?php } ?>
                                    <li>
                                        <a href="index.php?act=thoat">Thoát</a>
                                    </li>
                                </div>
                            <?php

                            } else {
                            ?>
                                <form action="index.php?act=dangnhap" method="post">
                                    <div class="row mb10 user_item">
                                        Tên đăng nhâp: <br>
                                        <input type="text" name="user">
                                    </div>
                                    <div class="row mb10 user_item">
                                        Mật Khẩu: <br>
                                        <input type="password" name="pass">
                                    </div>
                                    <div class="row mb10">
                                        <input type="checkbox" name=""> Ghi nhớ tên đăng nhập?
                                    </div>
                                    <div class="row mb10">
                                        <input type="submit" value="Đăng nhập" name="dangnhap">
                                    </div>
                                </form>
                                <li>
                                    <a href="index.php?act=quenmk">Quên mật khẩu</a>
                                </li>
                                <li>
                                    <a href="index.php?act=dangky">Đăng kí thành viên!</a>
                                </li>
                            <?php } ?>
                    </div>
                 </div> -->
                 <div class="row mb">
                    <div class="boxtitle">Danh Mục Sản Phẩm</div>
                    <div class="boxcontent2 menudoc">
                        <ul class="ul_item">
                            <?php
                            foreach ($dsdm as $dm) {
                                extract($dm);
                                $linkdm="index.php?act=sanpham&iddm=".$id;
                                echo '<a class="dm_item" href="'.$linkdm.'">'.$name.'</a>';
                            };
                            ?>
                        </ul>
                    </div>
                    <div class="boxfooter searbox">
                        <form action="index.php?act=sanpham" method="post">
                             <input type="text" name="kyw" placeholder="Tìm kiếm"  class="search">
                             <input type="submit" value="Tìm kiếm" name="timkiem" class="btn_search">
                        </form>
                    </div>
                 </div>
                
