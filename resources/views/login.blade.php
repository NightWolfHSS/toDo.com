<!DOCTYPE html>
<html lang="en">
@include("parts.header")

<!-- alert error if error - success redirect your profile -->

<section  style="margin: 50px 0;">
	<div class="container">
		<h1 class="h-st" style="color: #7fa99b;">Регистрация | Вход</h1>
	    <div class="row justify-content-center fxt">
            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
	            <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Регистрация</p>

	            <form class="mx-1 mx-md-4">

	              <div class="d-flex flex-row align-items-center mb-4">
	                <i class="fas fa-user fa-lg me-3 fa-fw"></i>
	                <div class="form-outline flex-fill mb-0">
	                  <input type="text" id="form3Example1c" class="form-control" />
	                  <label class="form-label" for="form3Example1c">Ваше Имя</label>
	                </div>
	              </div>

	              <div class="d-flex flex-row align-items-center mb-4">
	                <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
	                <div class="form-outline flex-fill mb-0">
	                  <input type="email" id="form3Example3c" class="form-control" />
	                  <label class="form-label" for="form3Example3c">Почта</label>
	                </div>
	              </div>

	              <div class="d-flex flex-row align-items-center mb-4">
	                <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
	                <div class="form-outline flex-fill mb-0">
	                  <input type="password" id="form3Example4c" class="form-control" />
	                  <label class="form-label" for="form3Example4c">Пароль</label>
	                </div>
	              </div>

	              <div class="d-flex flex-row align-items-center mb-4">
	                <i class="fas fa-key fa-lg me-3 fa-fw"></i>
	                <div class="form-outline flex-fill mb-0">
	                  <input type="password" id="form3Example4cd" class="form-control" />
	                  <label class="form-label" for="form3Example4cd">Повторите пароль</label>
	                </div>
	              </div>

	              <div class="form-check d-flex justify-content-center mb-5">
	                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
	                <label class="form-check-label" for="form2Example3">
	                  я даю согласие на сбор персональный данных<br><a href="/sec">Правила сайта </a>
	                </label>
	              </div>

	              <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
	                <button type="button" class="btn btn-primary btn-lg">Регистрация</button>
	              </div>

	            </form>

	          </div>
	          <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
	          <img src="{{ asset('images/reg/r2.png') }}" class="img-fluid">
          </div>
        </div>
	</div>
</section>

<section  style="margin: 50px 0;">
	<div class="container">
		<hr><br>
	    <div class="row justify-content-center fxt">
            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
	            <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Вход</p>

	            <form class="mx-1 mx-md-4">

	              <div class="d-flex flex-row align-items-center mb-4">
	                <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
	                <div class="form-outline flex-fill mb-0">
	                  <input type="email" id="form3Example3c" class="form-control" />
	                  <label class="form-label" for="form3Example3c">Почта</label>
	                </div>
	              </div>

	              <div class="d-flex flex-row align-items-center mb-4">
	                <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
	                <div class="form-outline flex-fill mb-0">
	                  <input type="password" id="form3Example4c" class="form-control" />
	                  <label class="form-label" for="form3Example4c">Пароль</label>
	                </div>
	              </div>

	              <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
	                <button type="button" class="btn btn-primary btn-lg">Войти</button>
	              </div>

	            </form>

	          </div>
	          <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
			  <img src="{{ asset('images/reg/r1.png') }}" class="img-fluid">
          </div>
        </div>
	</div>
</section>



@include("parts.footer")

</body>
</html>