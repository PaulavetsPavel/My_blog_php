<?php

include SITE_ROOT . "/app/database/db.php";

if (!$_SESSION) {
    header('location:' . BASE_URL . 'log.php');
}

$errorMsg = [];
$id = '';
$title = '';
$content = '';
$img = '';
$topic = '';

// Получение всех категорий для html
$topics = selectAll('topics');
$posts = selectAll('posts');
$postsAdm = selectAllFromPostsWithUsers('posts', 'users');

// Код для формы создания записи

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_post'])) {

    if (!empty($_FILES['img']['name'])) {
        $imgName = time() . "_" . $_FILES['img']['name'];
        $fileTmpName = $_FILES['img']['tmp_name'];
        $destination = ROOT_PATH . "\assets\images\posts\\" . $imgName;
        $fileType = $_FILES['img']['type'];

        if (strpos($fileType, 'image') === false) {

            array_push($errorMsg, "Файл не является изображением!");

        } else {
            $result = move_uploaded_file($fileTmpName, $destination);
            if ($result) {
                $_POST['img'] = $imgName;
            } else {
                array_push($errorMsg, 'Ошибка загрузки изображения!');
            }
        }

    } else {
        array_push($errorMsg, 'Ошибка получения изображения!');
    }
    // trim удаление пробелов
    $title = trim($_POST['title']);
    $content = trim($_POST['content']);
    $topic = trim($_POST['topic']);
    $publish = $_POST['publish'] !== null ? 1 : 0;

    if ($title === '' || $content === '' || $topic === '') {
        array_push($errorMsg, 'Не все поля заполнены!');
    } else if (mb_strlen($title, 'utf8') < 7) {
        array_push($errorMsg, 'Название должно быть более 7 символов!');
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

//if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
//    $id = $_GET['id'];
//    $topic = selectOne('topics', ['id' => $id]);
//    $id = $topic['id'];
//    $name = $topic['name'];
//    $description = $topic['description'];
//}

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



