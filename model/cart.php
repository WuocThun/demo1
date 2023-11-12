<?php
    function insert_donhang($madonhang,$nameUser,$namePD,$phone,$adr,$time) {
        $sql = "INSERT INTO donhang(madonhang,nameuser,namePD,phone,adr,timeDH) 
        VALUES('$madonhang'.'$nameUser','$namePD','$phone','$adr','$time')";
    }
?>