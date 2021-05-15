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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="css/style.css" rel="stylesheet">
</head>
<nav class="navbar navbar-dark sticky-top">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <h2>Bookmarker</h2>
    <img src="icon_android.png" alt="" height="35px">
</nav>

<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
        <a class="nav-link active" id="alllist-tab" data-toggle="pill" href="#alllist" role="tab" aria-controls="pills-home" aria-selected="true">Всё</a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link" id="videolist-tab" data-toggle="pill" href="#videolist" role="tab" aria-controls="pills-home" aria-selected="true">Видео</a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link" id="articlelist-tab" data-toggle="pill" href="#articlelist" role="tab" aria-controls="pills-home" aria-selected="true">Статьи</a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link" id="musiclist-tab" data-toggle="pill" href="#musiclist" role="tab" aria-controls="pills-home" aria-selected="true">Музыка</a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link" id="podcastlist-tab" data-toggle="pill" href="#podcastlist" role="tab" aria-controls="pills-home" aria-selected="true">Подкасты</a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link" id="noteslist-tab" data-toggle="pill" href="#noteslist" role="tab" aria-controls="pills-home" aria-selected="true">Заметки</a>
    </li>
</ul>

<main class="flex-shrink-0">
    <nav class="navbar navbar-light bg-light">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                    Новое
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Старое</a></li>
                    <li><a class="dropdown-item" href="#">Избранное</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Рекомендации</a></li>
                </ul>
            </li>
        </ul>
        <form class="d-flex" style="max-width: 50%;">
            <input class="form-control" type="search" placeholder="Я ищу..." aria-label="Search">
            <button class="btn btn-outline-success" style="display: none" type="submit">Поиск</button>
        </form>
    </nav>

    <div class="container main-list">
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="alllist" role="tabpanel" aria-labelledby="alllist-tab">
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
            <div class="tab-pane fade" id="videolist" role="tabpanel" aria-labelledby="videolist-tab">
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
            </div>
            <div class="tab-pane fade" id="articlelist" role="tabpanel" aria-labelledby="pills-contact-tab">
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
            <div class="tab-pane fade active show" id="musiclist" role="tabpanel" aria-labelledby="pills-contact-tab">
                <h5 class="text-center">
                    Пока здесь пусто...
                </h5>
                <img src="img/empty.png" alt="Пока здесь пусто" class="w-100">
            </div>
            <div class="tab-pane fade" id="podcastlist" role="tabpanel" aria-labelledby="pills-contact-tab">
                <h5 class="text-center">
                    Пока здесь пусто...
                </h5>
                <img src="img/empty.png" alt="Пока здесь пусто" class="w-100">
            </div>
            <div class="tab-pane fade" id="noteslist" role="tabpanel" aria-labelledby="pills-contact-tab">
                <h5 class="text-center">
                    Пока здесь пусто...
                </h5>
                <img src="img/empty.png" alt="Пока здесь пусто" class="w-100">
            </div>
        </div>

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
