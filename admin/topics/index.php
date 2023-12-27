<?php
include "../../path.php";
include "../../app/controllers/topics.php";
session_start();
?>
<!doctype html>
<html lang="en">
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
    <div class="row">
        <!-- SIDEBAR -->
        <?php include("../../app/include/sidebar-admin.php"); ?>

        <div class="posts col-9">
            <div class="button row">
                <a href="<?php echo BASE_URL . "admin/topics/create.php" ?>" class="col-3 btn btn-success">Создать</a>
                <span class="col-1"></span>
                <a href="<?php echo BASE_URL . "admin/topics/index.php" ?>"
                   class="col-3 btn btn-warning">Редактировать</a>
            </div>
            <h2>Управление категориями</h2>
            <div class="row title-table">

                <div class="col-1">ID</div>
                <div class="col-5">Название</div>
                <div class="col-4">Управление</div>
            </div>
            <?php
            foreach ($topics as $key => $topic):        ?>

                <div class="row post">
                    <div class="id col-1"><?= $key + 1; ?></div>
                    <div class="title col-5"><?= $topic['name']; ?></div>
                    <div class="red col-2"><a href="edit.php?id=<?= $topic['id']; ?>">edit</a></div>
                    <div class="del col-2"><a href="edit.php?del_id=<?= $topic['id']; ?>">delete</a></div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>


<!-- FOOTER -->
<?php include("../../app/include/footer.php"); ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/11907d8763.js" crossorigin="anonymous"></script>
</body>
</html>


