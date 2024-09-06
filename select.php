<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    
</head>

<body>

    <table style='border:1px solid'>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>comment</th>
            <th>time</th>
        </tr>
        <?php
        ini_set('display_errors', "On");

        //コネクションを開く
        $link = mysqli_connect("localhost", "root", "mariadb","forum");

        //文字コードを設定する
        mysqli_set_charset($link, "utf8mb4");

        //SELECTを発行する
        $result = mysqli_query($link, "SELECT *FROM sam;");

        //レコードセットを繰り返し取得する
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row["id"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["name"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["comment"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["time"]) . "</td>";
            echo "</tr>";
        }
        //レコードセットを開放する
        mysqli_free_result($result);

        //コネクションを閉じる
        mysqli_close($link);

        ?>
    </table>
    <a href="index.php" class="login">ログイン</a>
</body>

</html>