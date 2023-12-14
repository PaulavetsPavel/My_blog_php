<?php
include "app/database/db.php";


$errorMsg = '';
$regStatus = false;
function userAuth($user)
{
    $_SESSION['id'] = $user['id'];
    $_SESSION['login'] = $user['user_name'];
    $_SESSION['admin'] = $user['is_admin'];
    // редирект на главную страницу
    if ($_SESSION['admin']) {
        header('location: ' . BASE_URL . 'admin/posts/index.php');
    } else {
        header('location: ' . BASE_URL);
    }
}


//  код для формы регистрации
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-reg'])) {
    $admin = 0;
    // trim удаление пробелов
    $login = trim($_POST['login']);
    $email = trim($_POST['email']);
    $passF = trim($_POST['pass-first'], PASSWORD_DEFAULT);
    $passS = trim($_POST['pass-second'], PASSWORD_DEFAULT);


    if ($login === '' || $email === '' || $passF === '') {
        $errorMsg = 'Не все поля заполнены!';
    } else if (mb_strlen($login, 'utf8') < 2) {
        $errorMsg = 'Логин должен быть более 2 символов!';
    } else if ($passF !== $passS) {
        $errorMsg = 'Введенные пароли должны совпадать!';
    } else {
        $existence = selectOne('users', ['user_email' => $email]);
        if ($existence) {
            $errorMsg = 'Пользователь с таким email уже существует!';
        } else {
            $pass = password_hash($passF, PASSWORD_DEFAULT);
            $user = [
                'is_admin' => $admin,
                'user_name' => $login,
                'user_email' => $email,
                'user_password' => $pass
            ];

            $id = insert('users', $user);
            $user = selectOne('users', ['id' => $id]);
            userAuth($user);
        }
    }
} else {
    $login = '';
    $email = '';
}

//  код для формы авторизации
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-log'])) {

    $email = trim($_POST['email']);
    $pass = trim($_POST['password']);


    if ($email === '' || $pass === '') {
        $errorMsg = 'Не все поля заполнены!';
    } else {
        $existence = selectOne('users', ['user_email' => $email]);
        if ($existence && password_verify($pass, $existence['user_password'])) {
            //  Авторизация
            userAuth($existence);
        } else {
            // Ошибка
            $errorMsg = 'Почта или пароль введены не верно!!!!!!!!!!!!!!!!!!!';


        }
    }
} else {
    $email = '';
}