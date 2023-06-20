<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Welcome toDo task manager toDo.com</title>
	<link rel="icon" href="{{ URL::asset('/images/fav/favicon.ico') }}" type="image/x-icon"/>
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