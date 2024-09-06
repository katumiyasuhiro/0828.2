<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


</head>
<body>
<div class="container">
        <h1>ログイン</h1>
        <?php if (isset($_GET['error'])): ?>
            <p class="error"><?php echo htmlspecialchars($_GET['error']); ?></p>
        <?php endif; ?>
        <form method="post" action="form.php">
            <table>
                <tr>
                    <th>ID</th>
                    <td><input type="text" name="username" required></td>
                </tr>
                <tr>
                    <th>パスワード</th>
                    <td><input type="password" name="password" required></td>
                </tr>
            </table>
            <input type="submit" value="ログイン">
    </form> 
   
</body>
</html>