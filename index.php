<?php
    session_start();
    include "model/pdo.php";
    include "model/danhmuc.php";
    include "model/sanpham.php";
    include "model/taikhoan.php";
    include "view/header.php";
    include "global.php";

    $spnew = loadAll_sanpham_home();
    $dsdm=loadAll_danhmuc();
    $dstop10=loadAll_sanpham_top10();

    if((isset($_GET['act'])) && ($_GET['act'] !="")) {
        $act = $_GET['act'];
        switch ($act) {
            case 'sanpham':
                if((isset($_POST['kyw'])) && ($_POST['kyw'] != "")) {
                    $kyw = $_POST['kyw'];
                }else {
                    $kyw = "";
                }
                if((isset($_GET['iddm'])) && ($_GET['iddm']>0) ){
                    $iddm = $_GET['iddm'];
                    
                }else {
                    $iddm = 0;
                }
                $name = load_ten_danhmuc ($iddm);
                $dssp = loadAll_sanpham($kyw,$iddm);
                include "view/sanpham.php";
                break;
            case 'sanphamct':
                if((isset($_GET['idsp'])) && ($_GET['idsp']>0) ){
                    $id = $_GET['idsp'];
                    $onesp = loadOne_sanpham ($id);
                    extract($onesp);
                    $sp_cungloai = load_sanpham_cungloai ($id,$iddm);
                    include "view/sanphamct.php";
                }else {
                    include "view/home.php";
                }
                break;

            case 'dangky':
                if((isset($_POST['email'])) && (isset($_POST['user'])) 
                && ($_POST['email'] != "")&& ($_POST['user'] != "")
                && (isset($_POST['pass']))&& ($_POST['pass'] != "")  ){
                    if(isset($_POST['dangky'])&&($_POST['dangky']>0)){
                        $email=$_POST['email'];
                        $user=$_POST['user'];
                        $pass=$_POST['pass'];
                        insert_taikhoan($email,$user,$pass);
                        $thongbao="Đã đăng ký thành công. Vui lòng đăng nhập";
                    }

                }else {
                    $thongbao="Vui lòng nhập đầy đủ thông tin";
                }
                include "view/taikhoan/dangky.php";
                break;
            case 'dangnhap';
                if(isset($_POST['dangnhap'])&&($_POST['dangnhap']>0)){
                    if((isset($_POST['user'])) && (isset($_POST['pass'])) && ($_POST['user'] != "")&& ($_POST['pass'] != "") ){

                        $user=$_POST['user'];
                        $pass=$_POST['pass'];
                        $checkuser=checkuser($user,$pass);
                        $check = 0;
                        if(is_array($checkuser)){
                            $_SESSION['user']=$checkuser;
                            $_SESSION['check'] = 1;
                            // $thongbao="Bạn đăng nhập thành công";
                                header('location: index.php');
                            $check = 1;
                        }else{
                            $thongbao='<h3 style="color:red">Tài khoản không tồn tại</h3>';
                            include "view/taikhoan/dangky.php";
                            $check = 0;
                        }
                    }else {
                        $error = '<h3 style="color:red;text-align:center;margin:10px">Vui lòng nhập thông tin đầy đủ</h3>';
                        include "view/taikhoan/dangnhap.php";
                        echo $error;
                    }
            }
            break;   

            case 'edit_taikhoan';
                if(isset($_POST['capnhat'])&&($_POST['capnhat']>0)){
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    $email=$_POST['email'];
                    $address=$_POST['address'];
                    $tel=$_POST['tel'];
                    $id=$_POST['id'];

                    update_taikhoan($id,$user,$pass,$email,$address,$tel,);
                    $_SESSION['user']=checkuser($user,$pass);
                    header('location: index.php?act=edit_taikhoan');
                }
                    include"view/taikhoan/edit_taikhoan.php";   
                break;

            case 'quenmk';
                if(isset($_POST['guiemail'])&&($_POST['guiemail']>0)){
                    $email=$_POST['email'];

                    $checkemail=checkemail($email);
                    if(is_array($checkemail)){
                    $thongbao="Mật khẩu của bạn là: ".$checkemail['pass'];
                    }else{
                    $thongbao="Email ko tồn tại";
                    }
                }
                include"view/taikhoan/quenmk.php";
                break;

            case 'thoat';
                session_unset();
                header('location: index.php?act=login');
                break;  
                
            case 'login':
                include "view/taikhoan/dangnhap.php";
                break;
            case 'register':
                include "view/taikhoan/dangky.php";
                break;

            case 'cart':
                if(!isset($_SESSION['check'])){
                    echo "<h1 style='weight:75%;text-align:center;color:red;font-size:20px;'>Vui lòng đăng ký</h1>";
                    include "view/taikhoan/dangky.php";
                }else if($_SESSION['check'] == 1) {
                    $sanpham = loadOne_sanpham ($_GET['id']);
                    include "view/cart.php";
                }
                break;

            case 'giohang':
                include "view/giohang.php";
                break;

            case 'sanphamAll':
                if((isset($_POST['kyw'])) && ($_POST['kyw'] != "")) {
                    $kyw = $_POST['kyw'];
                }else {
                    $kyw = "";
                }
                if((isset($_GET['iddm'])) && ($_GET['iddm']>0) ){
                    $iddm = $_GET['iddm'];
                    
                }else {
                    $iddm = 0;
                }
                $name = load_ten_danhmuc ($iddm);
                $dssp = loadAll_sanpham($kyw,$iddm);
                include "view/sanphamall.php";
                break;  
            // case 'xoadonhang':
            //     if(isset($_GET['id'])&&($_GET['id']>0)){
            //         delete_sanpham($_GET['id']);
            //     }
            //     $listsanpham = loadAll_sanpham("",0);
            //     include "sanpham/list.php";
            //     break;  
            default:
                include "view/home.php";
                break;
        }
    }else {
        include "view/home.php";
    }
    include "view/footer.php";

?>