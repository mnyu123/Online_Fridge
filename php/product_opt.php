<?php

include "db.php";

?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>물품 등록</title>

    <style>
        h2 {
            text-align: center;
        }
        
        select {
            text-align-last: center;
        }

        option {
            text-align: center;
        }

        .right_align {
            text-align: right;
        }

        .center_align {
            text-align: center;
        }
    </style>
</head>

<body>
    <header>
        <h2>물품 등록</h2>
        <form>
            <input type="button" value="뒤로 가기" onclick="history.back()">
        </form>
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
    
    <form method="POST" action="storege.php" class="center_align">
        <div>
            <label for="product_name">상품명 : &nbsp;</label>
            <input type="text" id="product-name" name="name"><br><br>
        </div>

        <div>
            <label for="made_date">제조 일자 : &nbsp;</label>
            <input type="date" id="manufactured-date" name="madedate"><br><br>
        </div>

        <div>
            <label for="expired_date">소비 기한 : &nbsp;</label>
            <input type="number" id="expired-date" name="expireddate"><br><br>
        </div>

        <div>
            <label for="product_quantity">제품 개수 : &nbsp;</label>
            <input type="number" id="product_quantity" name="number"><br><br>
        </div>

        <div>
            <label for="storage_option">냉장/냉동 : &nbsp;</label>
            <select id="storage_option" name="state">
                <option value="선택">선택</option>
                <option value="냉장">냉장</option>
                <option value="냉동">냉동</option>
            </select><br><br>
        </div>

        <div>
            <label for="storage_option">카테고리 : &nbsp;</label>
            <select id="category" name="category">
                <option value="선택">선택</option>
                <option value="과일/채소">과일/채소</option>
                <option value="육류">육류</option>
                <option value="수산물">수산물</option>
                <option value="유제품">유제품</option>
                <option value="냉동">냉동</option>
            </select><br><br>
        </div>

        <input type="submit" value="등록">
    </form>
</body>

</html>