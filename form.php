<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="jquery-ui.min.css">
    <title>Document</title>
</head>

<body>
<?php
$host ="localhost";
$user="root";
$password ="mariadb";
$database ="forum";

$link = mysqli_connect("localhost", "root", "mariadb","forum");
?>

    <h1>投稿フォーム</h1>
    <form action="select.php" method="post">
        <label for="name">名前</label>
        <input type="text" name="name" required><br>
        <label for="comment">コメント</label>
        <textarea name="comment" rows="3" cols="50" required></textarea><br>
        <input type="submit" value="投稿する">
    </form>
</body>

</html>