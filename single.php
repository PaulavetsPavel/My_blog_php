<?php include ("path.php");?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Post</title>
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

<!--main START-->

<div class="container">

    <div class="content row">
        <!-- single CONTENT -->
        <div class="main-content col-md-9 col-12">
            <h2>Прикольная статья на тему динамического сайта...</h2>
            <div class="single-post row">
                <div class="img col-12">
                    <img src="assets/images/i.webp" alt="sd" class="img-thumbnail">
                </div>
                <div class="single_post-text col-12 ">
                    <div class="info">
                        <i class="far fa-user">Имя автора</i>
                        <i class="far fa-calendar">Mar 11,2023</i>
                    </div>
                    <p class="preview-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad earum eveniet nemo perferendis
                        placeat?
                        Cum debitis dolore eaque facilis, incidunt labore minus nesciunt officia optio pariatur,
                        praesentium provident,
                        quisquam vitae.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Aut earum eveniet officiis quae voluptates?
                        A adipisci assumenda consequatur deserunt ea eaque et id impedit magni,
                        neque nihil porro possimus, quasi quo voluptatem? Assumenda impedit magnam minima
                        ratione rem repellat sunt. Magnam, placeat sit! Accusamus animi aspernatur et
                        nulla quibusdam quidem ratione repudiandae voluptatum. Alias cumque ea, facilis,
                        hic incidunt iure libero minima, molestias nisi nobis non nulla placeat soluta
                        temporibus velit veritatis voluptate? Aspernatur consectetur excepturi
                        exercitationem facere incidunt libero molestiae, quaerat suscipit.
                        Accusamus commodi dignissimos eligendi, eum fuga iure modi molestias
                        nulla obcaecati pariatur quo quod, repellat soluta tempore.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad earum eveniet nemo perferendis
                        placeat?
                        Cum debitis dolore eaque facilis, incidunt labore minus nesciunt officia optio pariatur,
                        praesentium provident,
                        quisquam vitae.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Aut earum eveniet officiis quae voluptates?
                        A adipisci assumenda consequatur deserunt ea eaque et id impedit magni,
                        neque nihil porro possimus, quasi quo voluptatem? Assumenda impedit magnam minima
                        ratione rem repellat sunt. Magnam, placeat sit! Accusamus animi aspernatur et
                        nulla quibusdam quidem ratione repudiandae voluptatum. Alias cumque ea, facilis,
                        hic incidunt iure libero minima, molestias nisi nobis non nulla placeat soluta
                        temporibus velit veritatis voluptate? Aspernatur consectetur excepturi
                        exercitationem facere incidunt libero molestiae, quaerat suscipit.
                        Accusamus commodi dignissimos eligendi, eum fuga iure modi molestias
                        nulla obcaecati pariatur quo quod, repellat soluta tempore.
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
