<?php
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/taikhoan.php";
    include "../model/binhluan.php";
    include "../model/cart.php";
    include "../model/thongke.php";

    include "header.php";
    //controller

    if(isset($_GET['act'])) {
        $act = $_GET['act'];
        switch ($act) {
            case 'adddm':
                // kiểm tra xem người dùng có add hay không
                if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                    if(isset($_POST['tenloai']) && $_POST['tenloai'] != "") {
                        $tenloai = $_POST['tenloai'];
                        insert_danhmuc($tenloai);
                        $thongbao="Thêm thành công";
                    }else {
                        $thongbao="Vui lòng nhập đủ thông tin.";
                    }
                }

                include "danhmuc/add.php";
                break;
            case 'listdm':
                $listdanhmuc = loadAll_danhmuc();
                include "danhmuc/list.php";
                break;

            case 'xoadm':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_danhmuc($_GET['id']);
                }
                $listdanhmuc = loadAll_danhmuc();
                include "danhmuc/list.php";
                break;

            case 'suadm':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $dm = loadOne_danhmuc($_GET['id']);
                }

                include "danhmuc/update.php";
                break;

            case 'updatedm':
                if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                    $tenloai = $_POST['tenloai'];
                    $id = $_POST['id'];
                    update_danhmuc($id,$tenloai);
                }
                $listdanhmuc = loadAll_danhmuc();
                include "danhmuc/list.php";
                break;
            
            /*Controller Sản Phẩm */


            case 'addsp':
                // kiểm tra xem người dùng có add hay không
                if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                    if((isset($_POST['tensp'])) && ($_POST['tensp'] != "") &&
                        (isset($_POST['giasp'])) && ($_POST['giasp'] != "")
                    ) 
                    {
                        $iddm = $_POST['iddm'];
                        $tensp = $_POST['tensp'];
                        $giasp = $_POST['giasp'];
                        $mota = $_POST['mota'];
                        $hinh = $_FILES['hinh']['name'];
                        $target_dir = "../upload/";
                        $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                        if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                            // echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                        } else {
                            // echo "Sorry, there was an error uploading your file.";
                        }

                        insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm);
                        $thongbao="Thêm thành công";
                    }else {
                        $thongbao="Vui lòng điền đủ dữ liệu.";
                    }

                }
                $listdanhmuc = loadAll_danhmuc();
                include "sanpham/add.php";
                break;
            case 'listsp':
                if(isset($_POST['listok']) && ($_POST['listok'])){
                    $kyw = $_POST['kyw'];
                    $iddm = $_POST['iddm'];
                }else {
                    $kyw = "";
                    $iddm = 0;
                }
                $listdanhmuc = loadAll_danhmuc();
                $listsanpham = loadAll_sanpham($kyw,$iddm);
                include "sanpham/list.php";
                break;
            case 'xoasp':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_sanpham($_GET['id']);
                }
                $listsanpham = loadAll_sanpham("",0);
                include "sanpham/list.php";
                break;

            case 'suasp':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $sanpham = loadOne_sanpham($_GET['id']);
                }
                $listdanhmuc = loadAll_danhmuc();
                include "sanpham/update.php";
                break;

            case 'updatesp':
                if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                    $id = $_POST['id'];
                    $iddm = $_POST['iddm'];
                    $tensp = $_POST['tensp'];
                    $giasp = $_POST['giasp'];
                    $mota = $_POST['mota'];
                    $hinh = $_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                    } else {
                        // echo "Sorry, there was an error uploading your file.";
                    }

                    update_sanpham($id,$iddm,$tensp,$giasp,$mota,$hinh);
                }
                $listdanhmuc = loadAll_danhmuc();
                $listsanpham = loadAll_sanpham();
                include "sanpham/list.php";
                break;
                
            case 'dskh':
                $listtaikhoan = loadall_taikhoan();
                include "taikhoan/list.php";
                break;

            case 'dsbl':
                $listbinhluan = loadall_binhluan(0);
                include "binhluan/list.php";
                break;
            case 'xoatk':
            if(isset($_GET['id']) && ($_GET > 0)){
                delete_taikhoan($_GET['id']);
            }
                $listtaikhoan = loadall_taikhoan();
                include "taikhoan/list.php";
                break;
            case 'xoabl':
                if(isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_binhluan($_GET['id']);
                }
                $listbinhluan = loadall_binhluan(0);
                include "binhluan/list.php";
                break;
            
            case 'suatk':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        $tk = loadOne_taikhoan($_GET['id']);
                    }
                    include "taikhoan/updateTK.php";
                break;
                
                case 'updatetk':
                    if(isset($_POST['id']) && ($_POST['id'] > 0)){
                        $id = $_POST['id'];
                        $email = $_POST['email'];
                        $user = $_POST['username'];
                        $pass = $_POST['pass'];
                        $address = $_POST['adr'];
                        $tel = $_POST['tel'];
                        update_taikhoan_admin ($email,$user,$pass,$address,$tel,$id);
                    }
                    $listtaikhoan = loadall_taikhoan();
                    include "taikhoan/list.php";
                break;

                case 'home' :
                    $listdanhmuc = loadAll_danhmuc();
                    include "danhmuc/list.php";
                    if(isset($_POST['listok']) && ($_POST['listok'])){
                        $kyw = $_POST['kyw'];
                        $iddm = $_POST['iddm'];
                    }else {
                        $kyw = "";
                        $iddm = 0;
                    }
                    $listdanhmuc = loadAll_danhmuc();
                    $listsanpham = loadAll_sanpham_tc($kyw,$iddm);
                    include "sanpham/list.php";
                    break;
                    case 'tk' :
                        $tongdanhmuc = tongdanhmuc();
                        $tongSanPham = tongsanpham();
                        $tongkhachhang = tongkhachhang();
                        $tongview = tongview();
                        $tongbl = tongbl();
                        $tongdanhthu = tongdanhthu ();
                        $tongdon = tongdon ();
                        include "thongke/danhsach.php";
                        break;
                    
                    case 'doanhso' :
                        include "thongke/chitietdanhso.php";
                        break;

            default:
                include "home.php";
                break;
        }
    }else {
        include "home.php";
    }



    include "footer.php";
?>