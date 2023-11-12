<div class="row ">
    <div class="row frmtitle mb">
        <H1>Danh Sách Tài Khoản</H1>
    </div>
    <div class="row mb10 frmdsloai">
        <table>
            <tr>
                <th></th>
                <th>Mã tk</th>
                <th>Tên đăng nhập</th>
                <th>Mật khẩu</th>
                <th>Email</th>
                <th>Địa chỉ</th>
                <th>Điện thoại</th>
                <th>Vai trò</th>
                <th></th>
            </tr>
            <?php
                foreach ($listtaikhoan as $taikhoan) {
                    extract($taikhoan);
                    $suatk = "index.php?act=suatk&id=" . $id;
                    $xoatk = "index.php?act=xoatk&id=" . $id;
                    echo '<tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>' . $id . '</td>
                            <td>' . $user . '</td>
                            <td>' . $pass . '</td>
                            <td>' . $email . '</td>
                            <td>' . $address . '</td>
                            <td>' . $tel . '</td>
                            <td>' . $role . '</td>
                            <td><a href="' . $suatk . '"><input type="button" class="btn-act" value="Sửa"></a> <a href="' . $xoatk . '"><input type="button" class="btn-act" value="xoá"></a></td>
                        </tr>';
                }
            ?>

        </table>
    </div>
    <div class="row mb10">

    </div>
    <div class="row mb20 row_form_btn">
                
        <input type="button" value="Xoá các mục đã chọn">
    </div>
    <div class="row formcontent">
    </div>
</div>