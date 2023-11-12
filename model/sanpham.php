<?php 
    function insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm) {
        $sql = "INSERT INTO sanpham(name,price,img,mota,iddm) VALUES ('$tensp','$giasp','$hinh','$mota','$iddm')";
        pdo_execute($sql);
    }

    function delete_sanpham($id) {
        $sql = "delete from sanpham where id=".$_GET['id'];
        pdo_execute($sql);
    }

    function loadAll_sanpham_top10() {
        $sql = "select * from sanpham where 1 order by view desc limit 0,10";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }

    function loadAll_sanpham_home() {
        $sql = "SELECT * FROM sanpham ORDER BY id DESC LIMIT 12";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }

    function loadAll_sanpham($kyw = "",$iddm = 0) {
        $sql = "select * from sanpham where 1";
        if ($kyw != "") {
            $sql .= " and name like '%" . $kyw . "%'";
        }
        if ($iddm > 0) {
            $sql .= " and iddm like '%" . $iddm . "%'";
        }
        $sql .= " order by id desc";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }

    function load_sanpham_cungloai ($id,$iddm) {
        $sql = "select * from sanpham where iddm = ".$iddm." AND id <>".$id;
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }

    function load_ten_danhmuc ($iddm) {
        if($iddm > 0) {
            $sql = "select * from danhmuc where id=".$iddm;
            $dm = pdo_query_one($sql);
            extract($dm);
            return $name; 
        }else {
            return "";
        }
    }

    function loadOne_sanpham ($id) {
        $sql = "select * from sanpham where id=".$id;
        $dm = pdo_query_one($sql);
        return $dm; 
    }
    function  update_sanpham($id, $iddm, $tensp, $giasp, $mota, $hinh)
    {
       if ($hinh != "")
          $sql = "update sanpham set iddm='" . $iddm . "',name='" . $tensp . "',price='" . $giasp . "',mota='" . $mota . "',img='" . $hinh . "' where id=" . $id;
       else
          $sql = "update sanpham set iddm='" . $iddm . "',name='" . $tensp . "',price='" . $giasp . "',mota='" . $mota . "' where id=" . $id;
       // print_r($sql);
       pdo_execute($sql);
    }

    function loadAll_sanpham_tc($kyw = "",$iddm = 0) {
        $sql = "SELECT * FROM sanpham ORDER BY id DESC LIMIT 5";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }

?>

