<style>
        .formtaikhoan form h1 {
        margin: 10px 0;
    }

    .formtaikhoan form .btn_dk {
        margin: 10px 0;
        border-radius: 0px !important;
        background-color: black;
        color: white;
        padding: 10px;
    }
</style>
<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">
            <div class="row boxcontent formtaikhoan">
                <form action="index.php?act=quenmk" method="post">

                    <h1>Email</h1>
                    <div class="row mb10">
                        <input type="email" name="email">
                    </div><div class="row mb10">
                        <input class="btn_dk" type="submit" value="Gửi" name="guiemail">
                        <input class="btn_dk" type="reset" value="Nhập lại">
                    </div>
                </form>
                <h2 class=thongbao>
                    <?php
                    if (isset($thongbao) && ($thongbao != "")) {
                        echo $thongbao;
                    }
                    ?>
                </h2>
            </div>
        </div>

    </div>
</div>