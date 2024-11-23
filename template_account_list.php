<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список пользователей</title>
</head>
<body>
    <h1>Список пользователей</h1>
    <ul>
        <?php foreach ($slicedUsers as $user): ?>
        <li>
            <?php echo htmlspecialchars(string: $user['name']);?>
            (Логин: <?php echo htmlspecialchars(string: $user['login']); ?>)
        </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>