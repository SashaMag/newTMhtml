<!DOCTYPE html>
<html>

<head>

	<?php
	include $_SERVER['DOCUMENT_ROOT'].'/html/php/head.php'
	?>

</head>

<body>

	<?php
	include $_SERVER['DOCUMENT_ROOT'].'/html/php/header.php'
	?>

	<main>

		<div class="container">
			<div class="breadcrumbs">
				<a href="/html/index.php">Главная</a>
				<span>/</span>
			</div>
		</div>

		<div class="container">
			<h1>Подбор шин и дисков</h1>
			<hr class="headline">

			<div class="content-block-with-nav clearfix">
				<section class="main-column">
					<form action="" class="tire-form">
						<div class="tire-block clearfix">
							<div class="checkbox-block">
								<input type="checkbox" name="" id="tires">
								<label for="tires" class="checkbox-label tires">Шины</label><br>
								<input type="checkbox" name="" id="discs">
								<label for="discs" class="checkbox-label discs">Диски</label>
							</div>
							<div class="select-block">
								<span>Шипы</span>
								<select name="" id="">
									<option value="">нет</option>
									<option value="">да</option>
								</select>
								<span>Тип шин</span>
								<select name="" id="">
									<option value="">Выберите тип</option>
								</select>
							</div>
						</div>
						<div class="model-block">
							<div class="select-with-label">
								<span>Марка</span>
								<select name="" id="">
									<option value="">УАЗ</option>
								</select>
							</div>
							<div class="select-with-label">
								<span>Модель</span>
								<select name="" id="">
									<option value="">Хантер</option>
								</select>
							</div>
							<div class="select-with-label">
								<span>Сезон</span>
								<select name="" id="">
									<option value="">Лето</option>
									<option value="">Зима</option>
								</select>
							</div>
						</div>
					</form>
				</section>
				<div class="nav-column autocredit-nav-column clearfix">	
					<a href="">Подобрать</a>
				</div>			

			</div>		

		</div>

	</main>

	<?php
	include $_SERVER['DOCUMENT_ROOT'].'/html/php/footer.php'
	?>

</body>

</html>