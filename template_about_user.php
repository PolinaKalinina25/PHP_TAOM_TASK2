<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О пользователе</title>
</head>
<body>
    <h1>Добро пожаловать, <?php echo htmlspecialchars(string: $user['name']); ?>!</h1>
    <p><strong>Логин: </strong><?php echo htmlspecialchars(string: $user['login']); ?></p>
    <h2>ДАнные сервера:</h2>
    <pre><?php print_r(value: $_SERVER); ?></pre>
    <a href = "/account.php?count=10">Посмотреть список пользователей</a>
</body>
</html>