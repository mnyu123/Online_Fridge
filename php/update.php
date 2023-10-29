<?php
include "db.php";

if(mysqli_connect_errno()){
    echo "연결실패".mysqli_connect_errno();
  }

$userid  = $_SESSION['userId'];
$name = $_POST['productName'];
$num = $_POST['productnumber'];

if($num <= 0){
    
    $del = mysqli_query($conn,"DELETE FROM product WHERE productname = '$name';");
    if($del === false){
        echo 'ERROR';
        error_log(mysqli_error($conn));
      } else{
        ?>
    <script>
          alert("삭제되었습니다.")
          location.href = "category.php";
      </script>
      <?php
      //echo '삭제되었습니다. <a href="category.php">처음으로</a>';
      }
}else{

$update = "UPDATE product SET productnumber = $num WHERE productname = '$name';";

$result = mysqli_query($conn, $update);


if($result === false){
    echo 'ERROR';
    error_log(mysqli_error($conn));
  } else{
    ?>
    <script>
          alert("변경되었습니다.")
          location.href = "category.php";
      </script>
      <?php
  //echo '변경되었습니다. <a href="category.php">처음으로</a>';
  }
}
?> 

