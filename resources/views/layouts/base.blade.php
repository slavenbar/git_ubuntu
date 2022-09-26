<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
      hr {
        height: 2px;
        background-color: #ffffff;
        border: none;
      }
    </style>
    <title>Главная</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-dark">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Hackweb</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
               <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Главная</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="/about">О нас</a>
               </li>
            </ul>
            </div>
            <a class="btn btn-warning" href="/">Отзывы</a>
        </div>
        <hr>
    </nav>
    <h1>Хедер</h1>
    @yield('main_header')
</body>
</html>
