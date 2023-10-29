<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>메인 화면(로그인 안 된)</title>

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
    </header>
        <form method="POST" action="loginprocess.php" class="right_align">
            <label for="login_userid">ID:</label>
            <input type="text" id="login_userid" name="userid" required> &nbsp;
            <label for="login_userpw">PW:</label>
            <input type="password" id="login_userpw" name="userpw" required> &nbsp;
            <input type="submit" value="로그인"> &nbsp;
            <a href="signup.php"><input type="button" value="회원가입"></a> &nbsp;
            <br><br>
        </form>
    

    <form class="form_btn">
    <button class="btn" onclick="productOption()">물품 등록</button>
        <button class="btn" onclick="productOption()">물품 확인</button>
    </form>

        <script>
            function productOption() {
                alert("로그인이 필요한 서비스입니다.");
            }
        </script>
</body>

</html>