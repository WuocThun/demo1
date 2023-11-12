                    <style>
                        *{
                            font-family: 'Montserrat', sans-serif;

                        }
                        .row_css {
                            text-align: center;
                            display: flex;
                            gap: 15px;
                            justify-content: center;
                            align-items: center;
                        }

                        .form_css {
                            width: 100%;
                            display:flex;
                            align-items:center;
                            justify-content:center;
                            flex-direction:column;
                        }

                        .row_form {
                            display: flex;
                            flex-direction: column;
                            width: 50%;
                            align-items: center;
                            justify-content: center;
                            margin: 10px auto;
                            font-weight: 600;
                            letter-spacing: 2px;
                            text-transform: uppercase;
                        }

                        .row_form input {
                            padding: 20px !important;

                        }

                        .custom-file-input{
                            width: 500px;
                            font-weight: 500;
                        }

                        .custom-file-input::-webkit-file-upload-button {
                         visibility: hidden;
                        }
                        .custom-file-input::before {
                            content: 'Select some files';
                            display: inline-block;
                            background: linear-gradient(top, #f9f9f9, #e3e3e3);
                            border: 1px solid #999;
                            border-radius: 3px;
                            padding: 5px 8px;
                            outline: none;
                            white-space: nowrap;
                            -webkit-user-select: none;
                            cursor: pointer;
                            text-shadow: 1px 1px #fff;
                            font-weight: 700;
                            font-size: 10pt;
                        }
                        .custom-file-input:hover::before {
                            border-color: black;
                        }
                        .custom-file-input:active::before {
                            background: -webkit-linear-gradient(top, #e3e3e3, #f9f9f9);
                        }

                        .input_text {
                            border: none !important;
                            border-bottom: 2px solid black !important;
                        }

                        .input_text:focus {
                            border: 2px solid black !important;

                        }

                        .row_form_btn {
                            display: flex !important;
                            flex-direction:  row;
                            gap: 5px;
                            justify-content: center;
                            align-items: center;
                        }

                        .row_form_btn input {
                            border: #0096FF solid 1px !important;
                            border-radius: 0 !important;
                            padding: 8px 12px !important;
                            color: white !important;
                            background-color: #0096FF !important;
                            font-weight: 500;
                        }

                        .row_form_btn input:hover {
                            opacity: 0.8 !important;
                        }

                        .text_form {
                            width: 400px;
                            height: 150px;
                            padding: 10px;
                            margin: 20px;
                        }

                    </style>
    <div class="row ">
            <div class="row frmtitle">
                <H1>Thêm mới sản phẩm</H1>
            </div>
            <div class="row formcontent updatePD">
                <form class="form_css" action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                    <div class="row mb10 row_css">
                        <strong>Danh mục</strong><br>
                        <select name="iddm">
                            <?php
                                foreach ($listdanhmuc as $danhmuc) {
                                    extract($danhmuc);
                                    echo '<option value="' . $id . '">' . $name . '</option>';
                                }
                            ?>
                            
                        </select>   
                    </div>
                    <div class="row mb10 row_form">
                        Tên sản phẩm<br>
                        <input class="input_text" type="text" name="tensp">
                    </div>
                    <div class="row mb10 row_form">
                        Giá sản phẩm<br>
                        <input class="input_text" type="text" name="giasp">
                    </div>
                    <div class="row mb10 row_form">
                        Hình sản phẩm<br>
                        <input placeholder="Thêm ảnh" class="custom-file-input" type="file" name="hinh">

                    </div>
                    <div class="row mb10 row_form">
                        Mô tả sản phẩm<br>
                        <textarea class="text_form" name="mota" cols="30" rows="10" placeholder="Nhập mô tả tại đây..."></textarea>
                    </div>
                    <div class="row mb20 row_form_btn">
                        <input type="submit" name="themmoi" value="Thêm nút">
                        <input type="submit" value="Nhập lại">
                        <a href="index.php?act=listsp"><input type="button" value="Danh Sách"></a>
                    </div>
                    <?php 
                    if(isset($thongbao) && ($thongbao != "")) 
                    echo '<div class="thongbao" >'.$thongbao.'</div>';
                    ?>
                </form>
            </div>
        </div>
    </div>