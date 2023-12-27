<?php

include __DIR__ . "/../../app/database/db.php";

// Получение всех категорий для html
$topics = selectAll('topics');

$posts = selectAll('posts');
$postsAdm = selectAllFromPostsWithUsers('posts', 'users');
$errorMsg = '';
$id = '';
$title = '';
$content = '';
$img = '';
$topic = '';


// Код для формы создания записи

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_post'])) {

    // trim удаление пробелов
    $title = trim($_POST['title']);
    $content = trim($_POST['content']);
    $topic = trim($_POST['topic']);
    $publish = $_POST['publish'] !== null ? 1 : 0;

    if ($title === '' || $content === '' || $topic === '') {
        $errorMsg = 'Не все поля заполнены!';
    } else if (mb_strlen($title, 'utf8') < 7) {
        $errorMsg = 'Название должно быть более 7 символов!';
    } else {

        $post = [
            'id_user' => $_SESSION['id'],
            'title' => $title,
            'content' => $content,
            'img' => $_POST['img'],
            'status' => $publish,
            'id_topic' => $topic,
        ];

        $last_post = insert('posts', $post);
        header('location: ' . BASE_URL . 'admin/posts/index.php');
    }
} else {
    $title = '';
    $content = '';
    $topic = '';
}


// Редактирование записи

////if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
////    $id = $_GET['id'];
////    $topic = selectOne('topics', ['id' => $id]);
////    $id = $topic['id'];
////    $name = $topic['name'];
////    $description = $topic['description'];
////}
//
//// Код для формы редактирования записи
//
//if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['topic-edit'])) {
//
//    // trim удаление пробелов
//    $name = trim($_POST['name']);
//    $description = trim($_POST['description']);
//
//    if ($name === '' || $description === '') {
//        $errorMsg = 'Не все поля заполнены!';
//    } else if (mb_strlen($name, 'utf8') < 2) {
//        $errorMsg = 'Название должено быть более 2 символов!';
//    } else {
//        $topic = [
//            'name' => $name,
//            'description' => $description,
//        ];
//        $id = $_POST['id'];
//        $topic_id = update('topics', $id, $topic);
//        header('location: ' . BASE_URL . 'admin/topics/index.php');
//    }
//}

// Удаление записи

//if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['del_id'])) {
//    $id = $_GET['del_id'];
//    delete('topics', $id);
//    header('location: ' . BASE_URL . 'admin/topics/index.php');
//}



