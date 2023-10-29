<?php
include "db.php";
/*
$sql = "SELECT * FROM user";

$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_array($result)) {
    echo
    '<p>'
     .$row['username']
     .$row['userid']
     .$row['userpw']
    .'<p>'
;}
*/
?> 


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>

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

    </style>
</head>

<body>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
    <header>
        <h2>회원가입</h2>

        <form class="right_align">
            <a href="index.php"><input type="button" value="HOME"></a> &nbsp;
            <br><br>
        </form>
    </header>

    <form method="POST" action="method.php" class="center_align">
        
        <div>
            <label for="signup_name">이름 : &nbsp;</label>
            <input type="text" id="signup_name" name='username' required><br><br>
        </div>

        <div>
            <label for="signup_id">아이디 : &nbsp;</label>
            <input type="text" id="signup_id" name='userid' required><br><br>
        </div>

        <div>
            <label for="signup_password">비밀번호 : &nbsp;</label>
            <input type="password" id="signup_password" name='userpw' required><br><br>
        </div>
   
        <!--
        <div>
            <label for="signup_password_confirm">비밀번호 확인 : &nbsp;</label>
            <input type="password" id="signup_password_confirm" name="signup_password_confirm" required>
            <br><br>
        </div>
        -->
        <input type="submit" value="회원가입">
        
    </form>

</body>
</html>