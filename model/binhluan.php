<?php
     function insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan){
       if ($iduser > 0) {
         $sql="insert into binhluan(noidung,iduser,idpro,ngaybinhluan) values('$noidung','$iduser','$idpro','$ngaybinhluan')";
         pdo_execute($sql);
       }else {
         echo"Vui lòng đăng nhập.";
       }
     }
     function loadall_binhluan($idpro){
        $sql="select * from binhluan where 1";
        if($idpro>0) $sql.= " AND $idpro='".$idpro."'";
        $sql.= " order by id desc";
        $listbl=pdo_query($sql);
         return $listbl;
     }

     function delete_binhluan($id) {
      $sql = "delete from binhluan where id=".$_GET['id'];
      pdo_execute($sql);
  }
?>