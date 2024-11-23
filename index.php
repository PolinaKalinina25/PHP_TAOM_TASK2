<?php
session_start(); //Запусается сессия, позволяя сохранять данные между запросами(информацию об авторизованном пользователи)
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $login = trim(string: $_POST['login']);
    $password = trim(string: $_POST['password']);
    if (empty($login) || empty($password)){
        $error = 'Все поля обязательны для заполнения';
    }
    $users = json_decode(json: file_get_contents(filename: 'users.json'), associative: true);
    $foundUser = null;
    foreach ($users as $user){
        if ($user['login'] === $login && $user['password'] === $password){
            $foundUser = $user;
            break;
        }
    }
    if ($foundUser){
        $_SESSION['user'] = $foundUser;
        header(header: 'Location: about.php');
        exit();
    }
    else{
        $error = 'Неверный логин или пароль';
    }
}
require 'template_login_form.php';