<?php
include "../../path.php";
include "../../app/database/db.php";

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
    <!-- SIDEBAR -->
    <?php include("../../app/include/sidebar-admin.php"); ?>

        <div class="posts col-9">
            <div class="button row">
                <a href="<?php echo BASE_URL . "admin/users/create.php" ?>" class="col-3 btn btn-success">Создать</a>
                <span class="col-1"></span>
                <a href="<?php echo BASE_URL . "admin/users/index.php" ?>" class="col-3 btn btn-warning">Редактировать</a>
            </div>
            <h2>Создание пользователя</h2>

            <div class="row add-post mb-4">
                <form action="create.php" method="post">
                    <div class="col mb-4 ">
                        <label for="formGroupExampleInput" class="form-label">Логин</label>
                        <input name="login" value="" type="text" class="form-control"
                               id="formGroupExampleInput"
                               placeholder="Введите ваш логин">
                    </div>

                    <div class="col mb-4">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input name="email" value="" type="email" class="form-control"
                               id="exampleInputEmail1"
                               aria-describedby="emailHelp" placeholder="Введите ваш email ...">
                    </div>

                    <div class="col mb-4">
                        <label for="exampleInputPassword1" class="form-label">Пароль</label>
                        <input name="pass-first" type="password" class="form-control" id="exampleInputPassword1">
                    </div>

                    <div class="col mb-4">
                        <label for="exampleInputPassword2" class="form-label">Повторите пароль</label>
                        <input name="pass-second" type="password" class="form-control" id="exampleInputPassword2">
                    </div>
                    <select class="form-select mb-4" aria-label="Default select example">
                        <option selected>User</option>
                        <option value="Admin">Admin</option>

                    </select>
                    <div class="col">
                        <button class="btn btn-primary" type="submit">Создать</button>
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
</body>
</html>



