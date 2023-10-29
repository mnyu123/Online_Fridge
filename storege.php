<?php
include "db.php";

$name = $_POST['name'];
$expireddate = $_POST['expireddate'];
$madedate = $_POST['madedate'];
$number = $_POST['number'];
$userid  = $_SESSION['userId'];
$state = $_POST['state'];
$category = $_POST['category'];

$sel = "SELECT * FROM product WHERE category = '$category';";
$sresult = mysqli_query($conn, $sel);
$srow = mysqli_fetch_array($sresult);
$usedate = $srow['expireddate'];

$sql = "INSERT INTO product(productname, madedate, productnumber, expireddate, productstate, category, userid)
VALUES('".$name."', '".$madedate."', $number, '".$expireddate."', '".$state."', '".$category."', '".$userid."');";
$result = mysqli_query($conn,$sql);

if($result === false){
  echo 'ERROR<br>';
  echo $name;
  echo $madedate;
  echo $number;
  echo $expireddate;
  echo $state;
  echo $category;
  echo $userid;
  error_log(mysqli_error($conn));
} else{
  ?>
  <script>
        alert("물품이 등록되었습니다.")
        location.href = "product_opt.php";
    </script>
    <?php
//echo '등록 되었습니다. <a href="product_opt.php">처음으로</a>';
}
mysqli_close($conn);
?>