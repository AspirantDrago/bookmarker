<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width,minimum-scale=1.0,maximum-scale=1.0" name="viewport">
    <title>Bookmarker</title>
        <script type="text/javascript" src="//www.gstatic.com/firebasejs/3.6.8/firebase.js"></script>
        <script type="text/javascript" src="/firebase_subscribe.js"></script>
        <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
        <script>
            window.OneSignal = window.OneSignal || [];
            OneSignal.push(function() {
                OneSignal.init({
                    appId: "214345c2-acf3-484c-a440-bc8d68aa5ae8",
                });
            });
        </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link href="css/style.css" rel="stylesheet">
</head>
<body class="d-flex flex-column h-100">
<div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
        <h5 class="text-white h4">Collapsed content</h5>
        <span class="text-muted">Toggleable via the navbar brand.</span>
    </div>
</div>
<nav class="navbar navbar-dark sticky-top">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <h1>Bookmarker</h1>
        <img src="icon_android.png" alt="" height="35px">
    </div>
</nav>
<main class="flex-shrink-0">
    <div class="container main-list">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">АНГЛИЙСКИЙ НА СЛУХ</h5>
                <p class="card-text">Слушаем и разбираем речь Billie Eilish (Билли Эйлиш/Айлиш) на английском языке...</p>
                <p class="card-text"><small class="text-muted">25 мин 34 сек</small></p>
                <div class="row justify-content-between">
                    <a href="https://www.youtube.com/watch?v=JtmZ2e6mDL4" class="btn btn-primary col-5">Открыть</a>
                    <a href="#" class="btn btn-secondary col-5">Удалить</a>
                </div>
            </div>
            <a href="https://www.youtube.com/watch?v=JtmZ2e6mDL4">
                <img src="https://img.youtube.com/vi/JtmZ2e6mDL4/maxresdefault.jpg" class="card-img-bottom" alt="...">
            </a>
        </div>
        <br>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Введение в Data Science и машинное обучение</h5>
                <p class="card-text">Курс знакомит слушателей с основами машинного обучения и рассчитан в первую...</p>
                <div class="row justify-content-between">
                    <a href="https://stepik.org/course/4852/promo" class="btn btn-primary col-5">Открыть</a>
                    <a href="#" class="btn btn-secondary col-5">Удалить</a>
                </div>
            </div>
        </div>
        <br>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Представление налоговой и бухгалтерской отчётности</h5>
                <p class="card-text">ОБЩАЯ ИНФОРМАЦИЯ Налоговая отчетность включает в себя совокупность документов, ...</p>
                <p class="card-text"><small class="text-muted">≈ 4 мин (8 987 знаков)</small></p>
                <div class="row justify-content-between">
                    <a href="https://www.nalog.ru/rn77/taxation/submission_statements/" class="btn btn-primary col-5">Открыть</a>
                    <a href="#" class="btn btn-secondary col-5">Удалить</a>
                </div>
            </div>
        </div>
        <br>

    </div>
</main>

<nav class="navbar fixed-bottom">
    <div class="container-fluid">
        <div class="btn-group row" role="group" aria-label="Basic example">
            <button type="button" class="btn col-4">Список <span class="badge bg-white text-primary">3</span></button>
            <button type="button" class="btn col-4 addmark"><span>+</span></button>
            <button type="button" class="btn col-4">Профиль</button>
        </div>
    </div>
</nav>
</body>
</html>
