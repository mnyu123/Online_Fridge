<?php
include "db.php";

$name = $_POST['username'];
$id = $_POST['userid'];
$pw = $_POST['userpw'];

$sql = "INSERT INTO user VALUES('".$name."', '".$id."', '".$pw."')";
/*
$table = "CREATE TABLE $id (
  p_name              VARCHAR(20) PRIMARY KEY,
  purchasedate        DATE,
  usedate             INT(11),
  p_number            INT(11),
  s_state             CHAR(10),
  p_category          CHAR(15)
)";
*/
$result = mysqli_query($conn,$sql);
//$create = mysqli_query($conn,$table);


if($result === false){
  echo 'ERROR';
  error_log(mysqli_error($conn));
} else{
  ?>
  <script>
        alert("회원가입에 성공하였습니다.")
        location.href = "index.php";
    </script>
    <?php
//echo '회원가입 되었습니다. <a href="index.php">처음으로</a>';

}
mysqli_close($conn);
?>
