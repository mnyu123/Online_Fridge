<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>메인 화면(로그인된)</title>

    <style>
        h2 {
            text-align: center;
        }

        .right_align {
            text-align: right;
        }

        .btn {
            width: 300px;
            height: 200px;
            margin: 10px;
        }

        .form_btn {
            display: flex;
            justify-content: center;
        }
    </style>

</head>

<body>
    <header>
        <h2>메인 화면</h2>

        <form class="right_align">
            <?php
            if (isset($_SESSION['userId'])) {
                echo "{$_SESSION['userId']}님 환영합니다  ";
            }
            ?>
            <a href="index.php"><input type="button" value="로그아웃"></a> &nbsp;
            <a href="main_login.php"><input type="button" value="HOME"></a> &nbsp;
            <br><br>
        </form>
    </header>

    <form class="form_btn">
        <div>
            <a href="product_opt.php"><input type="button" value="물품 등록" class="btn"></a>
        </div>
        <div>
            <a href="category.php"><input type="button" value="물품 확인" class="btn"></a>
        </div>
    </form>
</body>

</html>