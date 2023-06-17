<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Welcome toDo task manager toDo.com</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>  
	<header>
        <div class="space"></div>	
		<div class="container">
			<div class="head-box">
				<h1>toDo.com</h1>
				<p>Приложение по созданию задач - можно сказазать это генератор задач!</p>
			</div>
			<div class="space"></div>	
		</div>

		<div class="navi-background">
			<div class="container">
				<nav class="navbar navbar-expand-lg navbar-light bg-light custom-theme">
				  <a class="navbar-brand" href="#">Меню</a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>
				  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				    <div class="navbar-nav">
				      <a class="nav-item nav-link active" href="#">Главная<span class="sr-only"></span></a>
				      <a class="nav-item nav-link" href="#">Войти</a>
				      <a class="nav-item nav-link" href="#">О нас</a>
				      <a class="nav-item nav-link disabled" href="#">для спонсоров</a>
				    </div>
				  </div>
				</nav>
			</div>
		</div>
	
	</header>

	<div class="content">
		<div class="container">
			<br>
			<div class="row">
				<div class="col">
					<h2>Теперь всё под контролем</h2>
					<p>Задачи стало решать легче - ведь можно делать это по этапно</p>
				</div>
				<div class="col">
					<div class="box-image-radius">
						<img src="{{ asset('images/list2.jpg') }}" class="img-fluid">
					</div>
				</div>
			</div>

			<hr>

			<div class="row">
				<div class="col">
					<div class="box-image-radius">
						<img src="{{ asset('images/ico-l.jpg') }}" class="img-fluid">
					</div>
				</div>
				<div class="col">
					<h3><span style="color: #a2c11c;">Tutorial</span> | что надо что бы начать ?</h3>
					<p>Зарегестрироватся на сайте ведь ваши задачи будут сохранены</p>
					<p>в личном кабинете вы можете управлять своими задачами - удалять изменять добовлять </p>
					<p>собственные задачи
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down" viewBox="0 0 16 16">
						  <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z"/>
						</svg>
					</p>
				</div>
			</div>
			
			<br>


		</div>
	</div>

	<div class="content-two">
		<div class="container">
			<br>	
			<h4>Начнем?</h4>
			<img src="{{ asset('images/to-do.jpg') }}" class="img-fluid" alt="Responsive image">
			<br> <br>
			
		</div>
		<!-- <button type="button" class="btn btn-warning">не нажимать - (в разработке)</button> -->
	</div>
	<!-- картинку либо шире - внутри нее перейти в регистрацию  -->

	<footer >
		<div class="container">
			<address>
		  		<strong>Разработчик</strong><br>
				Kazakhstan<br>
				Karagandy<br>
				<abbr title="Phone">Телефон:</abbr> 8 000 999 88 22
			</address>
			<address>
			    <strong>Вячеслав - (вацап не скажу)</strong><br>
			    <p>почта: - поменяй на рабочей машине!</p>
			    <a class="orange" href="mailto:#">Exam@mail.ru</a>
			</address>
		</div>
		
	</footer>
</body>
</html>