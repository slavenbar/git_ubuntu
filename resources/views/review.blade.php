@extends('layouts.base')
@section('title')Отзывы@endsection
@section('main_header')
<div class="container">
	<br>
	<h1>Форма добавления отзыва</h1>

	@if($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
			
		</div>

	@endif
	<form method="post" action="/review/check">
		@csrf
		<input type="email" name="email" id="email" placeholder="Введите email" class="form-control"><br>
		<input type="text" name="subject" id="subject" placeholder="Введите отзыв" class="form-control"><br>
		<textarea name="message" id="message" placeholder="Введите сообщение" class="form-control"></textarea><br>
		<button type="submit" class="btn btn-success">Отправить</button><br>
	</form>
	<h2>Все отзывы</h2>
	@foreach($reviews as $rw)
		<div class="alert alert-warning">
			<p>{{ $rw->email }} - {{ $rw->message }}</p>
		</div>

	@endforeach
</div>
@endsection