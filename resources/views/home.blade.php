@extends('layouts.base')
@section('title')Главная@endsection
@section('main_header')
<h1 class="text-dark text-center">Главная</h1>
<p class="text-dark text-center">Это главная страница</p>
<button type="button" class="btn btn-warning" ><a href="/" class="nav-link px-2 text-dark"> Главная>> </a></button>
<div class="container px-4 py-5" id="featured-3">
    <h2 class="pb-2 border-bottom">Наши продукты</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
      <div class="feature col">
        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
          <!-- <svg class="bi" width="1em" height="1em"><use xlink:href="/about"></use></svg> -->
          <svg  width="100" height="100"><circle cx="50" cy="50" r="40" stroke="green" stroke-width="4" fill="yellow" /></svg>
        </div>
        <h3 class="fs-2">Продукт номер 1</h3>
        <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
        <a href="/about" class="icon-link d-inline-flex align-items-center">
          Call to action
          <svg class="bi" width="1em" height="1em"><use xlink:href="/about"></use></svg>
        </a>
      </div>
      <div class="feature col">
        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
          <!-- <svg class="bi" width="1em" height="1em"><use xlink:href="#people-circle"></use></svg> -->
          <svg  width="100" height="100"><circle cx="50" cy="50" r="40" stroke="green" stroke-width="4" fill="yellow" /></svg>
        </div>
        <h3 class="fs-2">Продукт номер 2</h3>
        <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
        <a href="#" class="icon-link d-inline-flex align-items-center">
          Call to action
          <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"></use></svg>
        </a>
      </div>
      <div class="feature col">
        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
          <!-- <svg class="bi" width="1em" height="1em"><use xlink:href="#toggles2"></use></svg> -->
          <svg  width="100" height="100"><circle cx="50" cy="50" r="40" stroke="green" stroke-width="4" fill="yellow" /></svg>
        </div>
        <h3 class="fs-2">Продукт номер 3</h3>
        <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
        <a href="#" class="icon-link d-inline-flex align-items-center">
          Call to action
          <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"></use></svg>
        </a>
      </div>
    </div>
</div>
@endsection
