<?php
include __DIR__ . "/../../app/database/db.php";

// Получение всех категорий для html
$topics = selectAll('topics');

$errorMsg = '';
$id = '';
$name = '';
$description = '';


// Код для формы создания категории

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['topic-create'])) {

    // trim удаление пробелов
    $name = trim($_POST['name']);
    $description = trim($_POST['description']);

    if ($name === '' || $description === '') {
        $errorMsg = 'Не все поля заполнены!';
    } else if (mb_strlen($name, 'utf8') < 2) {
        $errorMsg = 'Название должно быть более 2 символов!';
    } else {
        $existence = selectOne('topics', ['name' => $name]);
        if ($existence['name'] === $name) {
            $errorMsg = 'Такая категория уже существует!';
        } else {

            $topic = [
                'name' => $name,
                'description' => $description,
            ];

            $id = insert('topics', $topic);
            header('location: ' . BASE_URL . 'admin/topics/index.php');

        }
    }
} else {
    $name = '';
    $description = '';
}


// Редактирование категории

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $topic = selectOne('topics', ['id' => $id]);
    $id = $topic['id'];
    $name = $topic['name'];
    $description = $topic['description'];
}

// Код для формы редактирования категории

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['topic-edit'])) {

    // trim удаление пробелов
    $name = trim($_POST['name']);
    $description = trim($_POST['description']);

    if ($name === '' || $description === '') {
        $errorMsg = 'Не все поля заполнены!';
    } else if (mb_strlen($name, 'utf8') < 2) {
        $errorMsg = 'Название должено быть более 2 символов!';
    } else {
        $topic = [
            'name' => $name,
            'description' => $description,
        ];
        $id = $_POST['id'];
        $topic_id = update('topics', $id, $topic);
        header('location: ' . BASE_URL . 'admin/topics/index.php');
    }
}

// Удаление категории

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['del_id'])) {
    $id = $_GET['del_id'];
    delete('topics', $id);
    header('location: ' . BASE_URL . 'admin/topics/index.php');
}



