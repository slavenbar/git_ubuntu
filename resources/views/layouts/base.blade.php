<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- Стиль для футера -->
    <style>
        footer {
/* Позиционируем footer внизу main */
  position: absolute;
  bottom: 0;
  width: 100%;
  /* Высота footer по умолчанию */
  height: 30px;
}
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body class="bg-white text-white">
<header class="p-3 text-bg-dark">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="/" class="nav-link px-2 text-white">Главная</a></li>
          <li><a href="/about" class="nav-link px-2 text-white">О нас</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Галерея</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Контакты</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
        </form>

        <div class="text-end">
          <button type="button" class="btn btn-outline-light me-2">Login</button>
          <button type="button" class="btn btn-warning">Sign-up</button>
        </div>
      </div>
    </div>
</header> 
<div class="w3-container w3-red" >
    @yield('main_header')
    <br>
    <br>
</div>
<div class="container">
  <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Главная</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">О нас</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Галерея</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Контакты</a></li>
    </ul>
    <p class="text-center text-muted">© 2022 Company Laravel PHP</p>
  </footer>
</div>
</body>
</html>
