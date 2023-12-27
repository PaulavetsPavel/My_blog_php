<?php
include "../../path.php";
include "../../app/controllers/posts.php";
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/admin.css">
</head>
<body>
<!--HEADER-->
<?php include("../../app/include/header-admin.php"); ?>

<div class="container">
    <!-- SIDEBAR -->
    <?php include("../../app/include/sidebar-admin.php"); ?>

    <div class="posts col-9">
        <div class="button row">
            <a href="<?php echo BASE_URL . "admin/posts/create.php" ?>" class="col-3 btn btn-success">Создать</a>
            <span class="col-1"></span>
            <a href="<?php echo BASE_URL . "admin/posts/index.php" ?>" class="col-3 btn btn-warning">Редактировать</a>
        </div>
        <h2>Создание записи</h2>
        <div class="w-100"></div>
        <div class="mb-12 col-12 col-md-12 err">
            <p><?= $errorMsg ?></p>
        </div>
        <div class="w-100"></div>
        <div class="row add-post">
            <form action="create.php" method="post">
                <div class="col mb-4">
                    <input type="text" name="title" class="form-control" placeholder="Title"
                           aria-label="Название статьи">
                </div>
                <div class="col">
                    <label for="editor" class="form-label">Содержимое записи</label>
                    <textarea name="content" class="form-control" id="editor" rows="6"></textarea>
                </div>
                <div class="input-group col mb-4 mt-4">
                    <input type="file" name="img" class="form-control" id="inputGroupFile">
                    <label class="input-group-text" for="inputGroupFile">Upload</label>
                </div>
                <select name="topic" class="form-select mb-4" aria-label="Default select example">
                    <option selected>Выберите категорию:</option>
                    <?php
                    foreach ($topics as $key => $topic): ?>
                        <option value="<?= $topic['id']; ?>"><?= $topic['name']; ?></option>
                    <?php endforeach; ?>
                </select>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" id="flexCheckChecked" name="publish" checked>
                    <label class="form-check-label" for="flexCheckChecked">Publish</label>
                </div>

                <div class="col col-6">
                    <button name="add_post" class="btn btn-primary" type="submit">Добавить запись</button>
                </div>

            </form>
        </div>

    </div>
</div>
</div>


<!-- FOOTER -->
<?php include("../../app/include/footer.php"); ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/11907d8763.js" crossorigin="anonymous"></script>
// Добавление визуального редактора ckEditor к textarea
<script src="https://cdn.ckeditor.com/ckeditor5/40.2.0/classic/ckeditor.js"></script>
<script src="../../assets/js/script.js"></script>
</body>
</html>


