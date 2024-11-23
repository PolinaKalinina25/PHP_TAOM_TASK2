<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
</head>
<body>
    <?php if (!empty($error)): ?>
        <p style = "color: red;"><?php echo htmlspecialchars(string: $error); ?></p>
    <?php endif; ?>
    <form method="POST" action ="">
        <lable>
            Логин:
            <input type = "text" name = "login">
        </lable>
        <br>
        <label>
            Пароль:
            <input type = "password" name = "password">
        </label>
        <br>
        <button type ="submit">Войти</button>
    </form>
</body>
</html>