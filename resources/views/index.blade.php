<!DOCTYPE html>
<html lang="en">
	@include("parts.header")
	<div class="content">
		<div class="container">
			<br>
			<div class="row">
				<div class="col">
					<h2>Теперь всё под контролем</h2>
					<p>Задачи стало решать легче - ведь можно делать это по этапно</p>
					<p>Приятный интерфэйс и интерактивное сохранение задачи прямо на глазах</p>
					<i>и это бесплатно!</i>
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
			<br>
			<div class="begin">
				<div class="row">
				    <div class="col align-self-start"></div>
				    <div class="col align-self-center">
				   		<div class="fl-image-box text-center">
				   			<button type="button" class="btn btn-warning">Регистрация</button>
				   		</div>
				    </div>
				    <div class="col align-self-end"></div>
				</div>
			</div>
			<br><br><Br>
		</div>
		
		<!-- <button type="button" class="btn btn-warning">не нажимать - (в разработке)</button> -->
	</div>
	@include("parts.footer")
</body>
</html>