<?php include "path.php";
include "app/database/db.php";
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
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<!--HEADER-->
<?php include ("app/include/header.php");?>

<!-- блок карусели START -->
<div class="container">
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="row"><h2 class="title">Топ публикации</h2></div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/images/1.webp" class="d-block w-100" alt="...">
                <div class="carousel-caption carousel-caption-hack d-none d-md-block">
                    <h5><a href="#"> First slide label</a></h5>

                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/images/2.webp" class="d-block w-100" alt="...">
                <div class="carousel-caption carousel-caption-hack d-none d-md-block">
                    <h5><a href="#">Second slide label</a></h5>

                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/images/3.webp" class="d-block w-100" alt="...">
                <div class="carousel-caption carousel-caption-hack d-none d-md-block">
                    <h5><a href="#">Third slide label</a></h5>

                </div>
            </div>
        </div>
        <button class="carousel-control-prev carousel-control-prev-hack" type="button"
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next carousel-control-next-hack" type="button"
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

</div>
<!-- блок карусели END -->

<!--main START-->
<div class="container">

    <div class="content row">
        <!-- main CONTENT -->
        <div class="main-content col-md-9 col-12">
            <h2>Последние публикации</h2>
            <div class="post row">
                <div class="img col-12 col-md-4">
                    <img src="assets/images/i.webp" alt="sd" class="img-thumbnail">
                </div>
                <div class="post-text col-12 col-md-8">
                    <h3><a href="#">Прикольная статья на тему динамического сайта...</a></h3>
                    <i class="far fa-user">Имя автора</i>
                    <i class="far fa-calendar">Mar 11,2023</i>
                    <p class="preview-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad earum eveniet nemo perferendis
                        placeat?
                        Cum debitis dolore eaque facilis, incidunt labore minus nesciunt officia optio pariatur,
                        praesentium provident,
                        quisquam vitae.
                    </p>
                </div>
            </div>
            <div class="post row">
                <div class="img col-12 col-md-4">
                    <img src="assets/images/i.webp" alt="sd" class="img-thumbnail">
                </div>
                <div class="post-text col-12 col-md-8">
                    <h3><a href="#">Прикольная статья на тему динамического сайта...</a></h3>
                    <i class="far fa-user">Имя автора</i>
                    <i class="far fa-calendar">Mar 11,2023</i>
                    <p class="preview-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad earum eveniet nemo perferendis
                        placeat?
                        Cum debitis dolore eaque facilis, incidunt labore minus nesciunt officia optio pariatur,
                        praesentium provident,
                        quisquam vitae.
                    </p>
                </div>
            </div>
            <div class="post row">
                <div class="img col-12 col-md-4">
                    <img src="assets/images/i.webp" alt="sd" class="img-thumbnail">
                </div>
                <div class="post-text col-12 col-md-8">
                    <h3><a href="#">Прикольная статья на тему динамического сайта...</a></h3>
                    <i class="far fa-user">Имя автора</i>
                    <i class="far fa-calendar">Mar 11,2023</i>
                    <p class="preview-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad earum eveniet nemo perferendis
                        placeat?
                        Cum debitis dolore eaque facilis, incidunt labore minus nesciunt officia optio pariatur,
                        praesentium provident,
                        quisquam vitae.
                    </p>
                </div>
            </div>
        </div>

        <!-- sidebar CONTENT -->
        <div class="sidebar col-md-3 col-12">
            <div class="section search">
                <h3>Поиск</h3>
                <form action="/" method="post">
                    <input type="text" name="search-term" class="text-input" placeholder="Поиск...">
                </form>
            </div>
            <div class="section topics">
                <h3>Категории</h3>
                <ul>
                    <li><a href="#">Программирование</a></li>
                    <li><a href="#">Дизайн</a></li>
                    <li><a href="#">Визуализация</a></li>
                    <li><a href="#">Кейсы</a></li>
                    <li><a href="#">Мотивация</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- main END -->

<!-- FOOTER -->
<?php include ("app/include/footer.php");?>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/11907d8763.js" crossorigin="anonymous"></script>
</body>
</html>
