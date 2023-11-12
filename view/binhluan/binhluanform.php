<?php
session_start();
include "../../model/pdo.php";
include "../../model/binhluan.php";
$idpro = $_REQUEST['idpro'];
$dsbl = loadall_binhluan($idpro);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        body {
            margin: 0;
        }

        .binhluan {
            padding: 20px;
        }

        .binhluan table {
            width: 90%;
            margin-left: 5%;
        }

        .binhluan table td:nth-child(1) {
            width: 33%;
            text-align: center;
        }

        .binhluan table td:nth-child(2) {
            width: 33%;
            text-align: center;
        }

        .binhluan table td:nth-child(3) {
            width: 33%;
            text-align: center;
        }

        .box_comment {
            display: flex;
            flex-direction: row;
            width: 100%;
            background-color: black;
            height: 50px;
            justify-content: space-evenly;
        }

        .boxtitle2 {
            color: white;
            line-height: 50px;
            text-transform: uppercase;
            font-weight: 500;
        }
        td {
            padding: 5px;
        }

        .comment {
            margin: auto;
            width: 80%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .text_cmt {
            width: 80%;
            height: 100px;
            margin-bottom: 10px;
            padding: 10px !important;
            text-align: left !important;
            line-height: 5px !important;
        }

        .btn_cmt {
            padding: 8px 12px;
            background-color: blue;
            border: none;
            outline: none;
            cursor: pointer;
            color: white;
        }
    </style>
</head>

<body>
    <div class="row mb">
        <div class="box_comment">
            <div class="boxtitle2">Bình luận</div>
            <div class="boxtitle2">User Name</div>
            <div class="boxtitle2">Thời gian</div>
        </div>
        <div class="boxcontent2 binhluan">
            <table>
                <?php
                foreach ($dsbl as $bl) {
                    extract($bl);
                    echo '<tr><td>' . $noidung . '</td>';
                    echo '<td>' . $iduser . '</td>';
                    echo '<td>' . $ngaybinhluan . '</td></tr>';
                }
                ?>
            </table>
        </div>
        <div class="boxfooter binhluanform">
            <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                <input type="hidden" name="idpro" value="<?= $idpro ?>">
                <div class="comment">
                    <input type="text" name="noidung" class="text_cmt" placeholder="Viết bình luận tại đây">
                    <input type="submit" name="guibinhluan" class="btn_cmt" value="Gửi bình luận">
                </div>
            </form>
        </div>
        <?php
        if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
            $noidung = $_POST['noidung'];
            $idpro = $_POST['idpro'];
            $iduser=$_SESSION['user']['id'];
            $ngaybinhluan = date("h:i:sa d/m/Y");
            insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan);
            header("location: " . $_SERVER['HTTP_REFERER']);
        }
        2
        ?>
    </div>
</body>

</html>