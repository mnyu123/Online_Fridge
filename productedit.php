<?php
include "db.php";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>수정</title>
    <style>
        h2 {
            text-align: center;
        }

        .right_align {
            text-align: right;
        }

        .btn {
            padding: 50px 60px;
            margin: 5px;
        }

        .form_btn {
            display: flex;
            justify-content: center;
        }
        
        .editForm {
            margin: 0 auto;
            text-align: center;
        }
        label {
            display: inline-block;
            margin-top: 10px;
        }
        input[type="text"], input[type="number"] {
            margin-top: 10px;
            border: 1px solid #cccccc;
            border-radius: 4px;
            padding: 4px;
        }
        button {
            display: block;
            margin-top: 20px;
            background-color: #7c7c7c;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            cursor: pointer;
            width: 250px;
        }
    </style>
</head>
<body>
</head>

<body>
    <header>
        <h2>수량 수정</h2>

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
    <form method="POST" action="update.php" class="editForm">
        <label for="productName">물품 이름:</label>
        <input type="text" id="productName" name="productName">&nbsp;
        <label for="productnumber">수량:</label>
        <input type="number" id="productnumber" name="productnumber"><br><br>

        <button class="editForm" type="submit">수정 정보 저장</button>
    </form>
    <script>
        function saveChanges(event) {
            event.preventDefault();
            const productName = document.getElementById('productName').value;
            const productnumber = document.getElementById('productnumber').value;

            if (!productName || !productnumber) {
                alert('아이템 이름 및 수량을 모두 입력하세요.');
                return;
            }
            
            alert(`수량이 수정되었습니다.\n아이템 이름: ${productName}\n수량: ${productnumber}`);
        }
    </script>
</body>
</html>
