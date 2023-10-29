<?php
include "db.php";

$userid  = $_SESSION['userId'];
$category = $_POST["category"];
echo "선택한 카테고리: " . $category;

?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>물품 목록</title>
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

        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f1f1f1;
            font-weight: bold;
        }
        .button-container {
            margin-top: 20px;
            display: flex;
            justify-content: center;
        }
        button {
            cursor: pointer;
        }
    </style>
    <script>
        const itemsPerPage = 10;

        let currentPage = 1;
        //let items = [...Array(100)].map((_, i) => `물건 ${i + 1}`); // 임시 데이터 생성

        function showPrevButton() {
            const prevButton = document.getElementById('prevButton');
            if (currentPage > 1) {
                prevButton.style.display = 'inline-block';
            } else {
                prevButton.style.display = 'none';
            }
        }

        function showNextButton() {
            const nextButton = document.getElementById('nextButton');
            const numPages = Math.ceil(items.length / itemsPerPage);
            if (currentPage < numPages) {
                nextButton.style.display = 'inline-block';
            } else {
                nextButton.style.display = 'none';
            }
        }

        function updateTable() {
            const startIndex = (currentPage - 1) * itemsPerPage;
            const endIndex = startIndex + itemsPerPage;
            const visibleItems = items.slice(startIndex, endIndex);

            const tableBody = document.querySelector('tbody');
            tableBody.innerHTML = '';

            for (const item of visibleItems) {
                const row = document.createElement('tr');
                const nameCell = document.createElement('td');
                nameCell.textContent = item;
                row.appendChild(nameCell);

                for (let i = 0; i < 5; i++) {
                    const cell = document.createElement('td');
                    cell.innerHTML = '&nbsp;';
                    row.appendChild(cell);
                }

                tableBody.appendChild(row);
            }
        }

        function changePage(newPage) {
            currentPage = newPage;
            showPrevButton();
            showNextButton();
            updateTable();
        }

        window.addEventListener('load', () => {
            showPrevButton();
            showNextButton();
            updateTable();
        });

    </script>
</head>
<body>
    <header>
        <h2>물품 목록</h2>
        <form method="POST" action="productcheck3.php">
                <input type="button" value="뒤로 가기" onclick="history.back()">
            
            <input type="hidden" name="category" value="<?php echo $category ?>">
            <input type="submit" value="내 물품 보기">
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
    <table>
        <thead>
          <tr>
              <th>물품명</th>
              <th>제조일자</th>
              <th>수량</th>
              <th>소비기한</th>
              <th>냉장/냉동</th>
              <th>소유자</th>
          </tr>
        </thead>
        <tbody>
        <?php

        /*$find = "SELECT * FROM product WHERE product_category = '$category';";
        $sel = "SELECT * FROM product WHERE category = '$category';";*/
        $find = "SELECT * FROM product A , category B, user C  WHERE B.category = A.category AND C.userid = A.userid AND A.category = '$category' ORDER BY expireddate ASC;;";
        $result = mysqli_query($conn, $find);
        /*$sresult = mysqli_query($conn, $sel);
        $srow = mysqli_fetch_array($sresult);*/

        while ($row = mysqli_fetch_array($result)) {
            
            echo '<tr>';
            echo '<td>'.$row['productname'].'</td>';
            echo '<td>'.$row['madedate'].'</td>';
            echo '<td>'.$row['productnumber'].'</td>';
            echo '<td>'.$row['expireddate'].'</td>';
            echo '<td>'.$row['productstate'].'</td>';
            echo '<td>'.$row['username'].'</td>';
            echo '</tr>';
         
        }
        ?>
        </tbody>
    </table>
    <div class="button-container">
        <button id="prevButton" onclick="changePage(currentPage - 1);">이전</button>&nbsp;
        <button id="nextButton" onclick="changePage(currentPage + 1);">다음</button>
    </div>
</body>
</html>
