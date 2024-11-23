<?php
//генерируем массив полльзователей
$users =[];
for ($i = 1; $i <=100; $i++) {
    $users[] = [
        'login' => 'user'.$i, //Логин: user1, user2...
        'password' => 'pass'.$i, //Пароль: pass1, pass2...
        'name' => 'User'.$i // Имя пользователя
    ];
};
//сохраняем массив, чтобы можно было использовать как хранилище
file_put_contents(filename: 'users.json', data: json_encode(value: $users));
//file_put_contents - записывает данные в файл
//json_encode - преобразует данные дял удобства хранения и передачи

