<?php
include "db.php";

$userid = $_POST['userid'];
$userpw = $_POST['userpw'];

$sql = "SELECT * FROM user WHERE userid ='{$userid}'";
$result = mysqli_query($conn, $sql);

if($result === false){
    ?>
    <script>
        alert("로그인에 실패하였습니다");
        location.href = "index.php";
    </script>
<?php
}

$row = mysqli_fetch_array($result);
//$row['userid'];

foreach($row as $key => $r){
    echo "{$key} : {$r} <br>";
}

$hasheduserpw = password_hash($userpw, PASSWORD_DEFAULT);
$userpw = $row['userpw'];


if (password_verify($userpw, $hasheduserpw)) {
    session_start();
    $_SESSION['userId'] = $row['userid'];
    print_r($_SESSION);
    echo $_SESSION['userId'];
?>
    <script>
        alert("로그인에 성공하였습니다.")
        location.href = "main_login.php";
    </script>
<?php
} else {
?>
    <script>
        alert("로그인에 실패하였습니다");
        location.href = "index.php";
    </script>
<?php
}
?>