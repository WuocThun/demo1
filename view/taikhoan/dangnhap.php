    <style>
        .title_dn {
            text-align: center;
            font-size: 2rem;
        }

        .title_dn strong {
            font-size: 2rem;
        }
        .list_cn {
            margin: 10px 0 10px 200px;
            text-transform: uppercase;
            font-size: 1.5rem;
            font-weight: 600;
            width: 700px;
        }
        .box_dn {
            height: 300px;
            margin: 10px 0 10px 230px;
        }
        .box_dn li a {
            color: #3e2525;
        }
    </style>
                        <?php
                            if (isset($_SESSION['user'])) {
                                extract($_SESSION['user']);
                            ?>
                                <div class="title_dn">
                                    Xin Chào  <strong><?= $user ?></strong>
                                </div>
                                <div class="list_cn">
                                    các chức năng:
                                </div>
<div class="box_dn">
        <div class="row mb10 user_item">
            <li>
                <a href="index.php?act=quenmk">Quên mật khẩu</a>
            </li>
            <li>
                <a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a>
            </li>
            <?php if ($role == 1) { ?>
                <li>
                    <a href="admin/index.php?act=home">Đăng nhập Admin</a>
                </li>
            <?php } ?>
            <li>
                <a href="index.php?act=thoat">Thoát</a>
            </li>
        </div>
    <?php

    } else {
    ?>
        <form class="form_dn" style="width:100%" action="index.php?act=dangnhap" method="post">
            <div class="input_dn">
                Tên đăng nhâp: <br>
                <input type="text" name="user">
            </div>
            <div class="input_dn">
                Mật Khẩu: <br>
                <input type="password" name="pass">
            </div>
            <div>
                <input type="checkbox" name=""> Ghi nhớ tên đăng nhập?
            </div>
            <div class="btn_dn">
                <input type="submit" value="Đăng nhập" name="dangnhap">
            </div>
        </form>
        <div class="form_dn_2">
            <li>
                <a href="index.php?act=quenmk">Quên mật khẩu</a>
            </li>
            <li>
                <a href="index.php?act=dangky">Đăng kí thành viên!</a>
            </li>
        </div>
    <?php } ?>
    <style>
        .form_dn {
            height: 300px;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .form_dn_2 {
            height: 100px;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .form_dn_2 li a {
            color: black;
        }
        .form_dn_2 li {
            list-style: none;
        }

        .form_dn_2 li a:hover {
            opacity: 0.8;
        }

        .btn_dn input{
            padding: 8px 12px;
            background-color: black;
            color: white;
            margin: 20px;
        }

        .input_dn {
            font-size: 1.1rem;
            font-weight: 600;
        }

        .input_dn input {
            padding: 7px 10px;
            margin: 10px;
            width: 400px;
        }
    </style>
</div>