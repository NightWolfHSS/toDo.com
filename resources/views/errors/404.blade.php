<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>toDo.com 404 page not found</title>
	<link rel="icon" href="{{ URL::asset('/images/fav/favicon.ico') }}" type="image/x-icon"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/404.css') }}">
	<script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
	<div class="content">
		<div class="container controll-resolution">
			<div class="row">
				<div class="col">
					<div class="error-box"></div>
				</div>
				<div class="col">
					<div class="d-flex h-100 justify-content-center">
					    <div class="row justify-content-center align-self-center custom">
					    	<h1>Привал ! - страница ошибки, 404 </h1>
						<p>Похоже вы заблудились !</p>
						<p>Ничего страшного - вернутся обратно можно в один клик!</p>
					    	<a href="/" class="btn btn btn-dark" role="button" aria-pressed="true">Вернутся!</a>
					    </div>
					</div>
				</div>
			</div>
		</div>
		<div class="controll-res-mob">
			<div class="d-flex flex-column">
			    <div class="p-2">
			    	<div class="error-box-mob"></div>
			    </div>
			    <div class="p-2">
			    	<div class="custom-mob">
				    	<h1>Привал ! - страница ошибки, 404 </h1>
						<p>Похоже вы заблудились !</p>
						<p>Ничего страшного - вернутся обратно можно в один клик!</p>
					    <a href="/" class="btn btn btn-dark" role="button" aria-pressed="true">Вернутся!</a>
					</div>
			    </div>
			</div>
		</div>
	</div>
</body>
</html>
