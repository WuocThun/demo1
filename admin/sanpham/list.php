<div class="row ">
            <div class="row frmtitle">
                <H1>Danh Sách Sản phẩm</H1>
            </div>
            <div class="row mb10 frmdsloai">
                <form action="index.php?act=listsp" method="post" enctype="multipart/form-data">
                    <input type="text" name="kyw">
                    <select name="iddm">
                        <option value="0" selected>Tất cả</option>
                        <?php
                            foreach ($listdanhmuc as $danhmuc) {
                                extract($danhmuc);

                                if ($iddm == $id) {
                                    echo '<option value="' . $id . '" selected>' . $name . '</option>';
                                } else {
                                    echo '<option value="' . $id . '" >' . $name . '</option>';
                                }
                            }
                            ?>
                    </select>
                    <input type="submit" name ="listok" value="Go">  
                </form>
               <table>
                <tr>
                    <th></th>
                    <th>Mã loại</th>
                    <th>Tên sản phẩm</th>
                    <th>Hình</th>
                    <th>Giá</th>
                    <th>Lượt xem:</th>
                    <th></th>
                </tr>
                <?php
                    foreach ($listsanpham as $sanpham) {
                        extract($sanpham);
                        $suasp = "index.php?act=suasp&id=".$id;
                        $xoasp = "index.php?act=xoasp&id=".$id;
                        $hinhpath = "../upload/".$img;
                        if(is_file($hinhpath)) {
                            $hinh ="<img src='".$hinhpath."' height='80'>";
                        }else {
                            $hinh = "No photo";
                        }

                        echo ' <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>'.$id.'</td>
                                <td>'.$name.'</td>
                                <td>'.$hinh.'</td>
                                <td>'.$price.'</td>
                                <td>'.$view.'</td>
                                <td>
                                    <a href="'.$suasp.'"> <input class="btn-act" type="button" value="Sửa"></a> 
                                    <a href="'.$xoasp.'"><input class="btn-act" type="button" value="xoá"></a>
                                </td>
                                
                            </tr>';
                    }                
                ?>
               
                
               </table>
                </div>
                <div class="row mb10">
                
                </div>
                <div class="row mb20 row_form_btn">
                    <input type="button" value="Chọn tất cả">
                    <input type="button" value="Bỏ chọn tất cả">
                    <input type="button" value="Xoá các mục đã chọn">
                    <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a>
                </div>
            <div class="row formcontent">
            </div>
        </div>