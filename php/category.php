<?php
include "db.php";
?>
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>카테고리 확인</title>
    <script>
        function goToPage(pageName) {
            window.location.href = pageName + '.html';
        }
    </script>

    <style>
        h2 {
            text-align: center;
        }
        
        .right_align {
            text-align: right;
        }

        .center_align {
            text-align: center;
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
        <h2>카테고리</h2>
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
    <form method="POST" action="productcheck.php">
  <div class="form_btn">
    <button class="btn" type="submit" name="category" value="과일/채소">과일/채소</button>
    <button class="btn" type="submit" name="category" value="육류">육류</button>
    <button class="btn" type="submit" name="category" value="수산물">수산물</button>
    </div>
    <div class="form_btn">
    <button class="btn" type="submit" name="category" value="유제품">유제품</button>
    <button class="btn" type="submit" name="category" value="냉동">냉동</button>
    </form>
<form method="POST" action="productcheck2.php">
    <button class="btn" type="submit" name="category" value="내 전체 물품">내 전체 물품</button>
  </div>
</form>
</body>

</html>