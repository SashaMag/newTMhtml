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
				<a href="/html/body-repair.php">Кузовной ремонт</a>
				<span>/</span>
			</div>
		</div>

		<div class="container">
			<div class="content-block-with-nav clearfix">
				<section class="main-column">
					<h1>Калькулятор кузовных работ</h1>
					<hr class="headline">
					<p><strong>1. Выберите вариант автомобиля</strong></p>
					<div class="calc-body__select-car-block">
						<select name="" id="" class="calc-body__select-car">
							<option value="">Выберите вариант автомобиля</option>
							<option value=""></option>
							<option value=""></option>
							<option value=""></option>
							<option value=""></option>
						</select>
					</div>
					<p><strong>2. Выберите нужные работы</strong></p>
				</section>
				<div class="nav-column clearfix">					
				</div>
			</div>

			<div class="content-block-with-nav calc-body__table-block clearfix">
				<section class="main-column">
					<table class="calc-table calc-body-table">
						<thead>
							<tr>
								<td></td>
								<td>Окраска</td>
								<td>Объем ремонта</td>
								<td>Замена</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Передний бампер</td>
								<td>
									<input type="radio" name="front-bumper" id="front-bumper--painting" class="calc-table-radio">
									<label for="front-bumper--painting"></label>
								</td>
								<td>
									<select name="" id="">
										<option value="0">Выберите объем</option>
										<option value="1">Малый</option>
										<option value="2">Средний</option>
										<option value="3">Большой</option>
									</select>
								</td>
								<td>
									<input type="radio" name="front-bumper" id="front-bumper--change" class="calc-table-radio">
									<label for="front-bumper--change"></label>
								</td>
							</tr>
							<tr>
								<td>Передняя панель (телевизор)</td>
								<td>
									<input type="radio" name="front-panel" id="front-panel--painting" class="calc-table-radio">
									<label for="front-panel--painting"></label>
								</td>
								<td>
									<select name="" id="">
										<option value="0">Выберите объем</option>
										<option value="1">Малый</option>
										<option value="2">Средний</option>
										<option value="3">Большой</option>
									</select>
								</td>
								<td>
									<input type="radio" name="front-panel" id="front-panel--change" class="calc-table-radio">
									<label for="front-panel--change"></label>
								</td>
							</tr>
							<tr>
								<td>Капот</td>
								<td>
									<input type="radio" name="hood" id="hood--painting" class="calc-table-radio">
									<label for="hood--painting"></label>
								</td>
								<td>
									<select name="" id="">
										<option value="0">Выберите объем</option>
										<option value="1">Малый</option>
										<option value="2">Средний</option>
										<option value="3">Большой</option>
									</select>
								</td>
								<td>
									<input type="radio" name="hood" id="hood--change" class="calc-table-radio">
									<label for="hood--change"></label>
								</td>
							</tr>
							<tr>
								<td>Капот</td>
								<td>
									<input type="radio" name="hood" id="hood--painting" class="calc-table-radio">
									<label for="hood--painting"></label>
								</td>
								<td>
									<select name="" id="">
										<option value="0">Выберите объем</option>
										<option value="1">Малый</option>
										<option value="2">Средний</option>
										<option value="3">Большой</option>
									</select>
								</td>
								<td>
									<input type="radio" name="hood" id="hood--change" class="calc-table-radio">
									<label for="hood--change"></label>
								</td>
							</tr>
						</tbody>
						<tfoot>
							<tr>
								<td colspan="3">Стоимость</td>
								<td data-finalsum=""></td>
							</tr>
						</tfoot>
					</table>
				</section>

				<div class="nav-column calc-body__nav-column clearfix">					
					<a href="">Заявка на ремонт</a>
					<div class="calc-body__final-price">
						<span class="title"></span>
						<span class="price"></span>
					</div>
				</div>

				<section class="main-column">
					<h2>Телефоны</h2>
					<hr class="headline">
					<?php
					include $_SERVER['DOCUMENT_ROOT'].'/html/php/phones-block.php'
					?>

					<h2>Адреса сервис-центров</h2>
					<hr class="headline">
					<?php
					include $_SERVER['DOCUMENT_ROOT'].'/html/php/address-block.php'
					?>
				</section>
			</div>

		</div>

	</main>

	<?php
	include $_SERVER['DOCUMENT_ROOT'].'/html/php/footer.php'
	?>

</body>

</html>