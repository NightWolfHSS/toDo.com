<!DOCTYPE html>
<html lang="en">
@include("parts.header")


<div class="au-wrapper">
	
	<div class="container">
		<div class="fix-content">
			<h1>Обо мне</h1>
			<p>какой то текст</p>
		</div>
		<div class="au-image">
			<img src="{{ asset('images/h6.jpg') }}" class="img-fluid">
		</div>

		<div class="custom-video">
			<div class="content-fix">
				<h1>Я разработчик:</h1>
				<p>Люблю делать сайты и заниматься программированием</p>
				<p>Я не дизайнер</p>
				<p>В прошлом фуллстак, иногда и сейчас но только для того что бы не потерять некоторые навыки </p>
			</div>
			<div class="content-media-box">
				<div class="hide-video">
					 <video width="100%" autoplay muted loop>
						<source src="{{ asset('media/f1.mov') }}" type="video/mp4">
						Обновите браузер !
					</video>
				</div>
			</div>
		</div>
	</div>
<br>
</div>

<div class="container">
	
	<div class="box-secont-content">
		<h3>Это мнималистичный сайт...</h3>
		<p>Он конечно же сделан для фортфолио</p>
		<p>я также разрабатываю нативные php приложения - сайты, это</p>
		<ul>
			<li>cms созданые - самописные системы управления</li>
			<li>сайты в которых уже есть админка для управления контентом</li>
			<li>адаптация</li>
			<li>CRUD система - restApi</li>
		</ul>
		<p>SQL - работа с запросами - сложные или простые запросы</p>
		<p>Javascript - css - html  - различные библиотеки и так далее</p>
	</div>

</div>

<!-- не хотите посесить наш магазин? -->


@include("parts.footer")
</body>
</html>