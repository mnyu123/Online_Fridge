<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>물품 등록(로그인 안된 상태)</title>

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
        <form method="POST" action="loginprocess.php" class="right_align">
            <label for="login_userid">ID:</label>
            <input type="text" id="login_id" name="userid" required> &nbsp;
            <label for="login_userpw">PW:</label>
            <input type="password" id="login_password" name="userpw" required> &nbsp;
            <input type="submit" value="로그인"> &nbsp;
            <a href="signup.php"><input type="button" value="회원가입"></a> &nbsp;
            <br><br>

            <a href="index.php"><input type="button" value="HOME"></a> &nbsp;
            <br><br>
        </form>
    </header>
    
    <br><br>
    <form class="center_align">
        <div>
            <label for="product_name">상품명 : &nbsp;</label>
            <input type="text" id="product-name" name="product_name"><br><br>
        </div>

        <div>
            <label for="purchase_date">구매 일자 : &nbsp;</label>
            <input type="date" id="purchase-date" name="purchase_date"><br><br>
        </div>

        <div>
            <label for="product_quantity">제품 개수 : &nbsp;</label>
            <input type="number" id="product_quantity" name="product_quantity"><br><br>
        </div>

        <div>
            <label for="storage_option">냉장/냉동 : &nbsp;</label>
            <select id="storage_option" name="storage_option">
                <option value="옵션1">선택</option>
                <option value="옵션2">냉장</option>
                <option value="옵션3">냉동</option>
            </select><br><br>
        </div>

        <div>
            <label for="storage_option">카테고리 : &nbsp;</label>
            <select id="category" name="category">
                <option value="옵션1">선택</option>
                <option value="옵션2">과일/채소</option>
                <option value="옵션3">육류</option>
                <option value="옵션4">수산물</option>
                <option value="옵션5">유제품</option>
                <option value="옵션6">냉동</option>
            </select><br><br>
        </div>

        <button onclick="productOption()">물품 등록</button>
        <script>
            function productOption() {
                alert("물품 등록을 위해 로그인을 해주세요.");
            }
        </script>
    </form>
</body>

</html>