<?php
include "path.php";
include 'app/controllers/users.php';
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<!--HEADER-->
<?php include("app/include/header.php"); ?>
<!--form START-->
<div class="container reg_form">
    <form class="row justify-content-center" method="post" action="log.php">
        <h2>Авторизация</h2>
        <div class="mb-3 col-12 col-md-4 err">
            <p><?= $errorMsg ?></p>
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input name="email" value="<?= $email ?>" type="email" class="form-control" id="exampleInputEmail1"
                   aria-describedby="emailHelp" placeholder="Введите ваш email ...">
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
            <label for="exampleInputPassword1" class="form-label">Пароль</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="w-100"></div>
          <div class="mb-3 col-12 col-md-4">
            <button type="submit" class="btn btn-secondary" name="button-log">Войти</button>
            <a href="<?php echo BASE_URL . 'reg.php' ?>">Зарегистрироваться</a>
        </div>
    </form>
</div>

<!--form END-->

<!-- FOOTER -->
<?php include("app/include/footer.php"); ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/11907d8763.js" crossorigin="anonymous"></script>
</body>
</html>
