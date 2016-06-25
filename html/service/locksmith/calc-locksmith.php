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
				<a href="/html/service.php">Сервис</a>
				<span>/</span>
			</div>
		</div>

		<div class="container">
			<h1>Калькулятор слесарных работ</h1>
			<hr class="headline">
			<div class="content-block-with-nav clearfix">
				<section class="main-column">
					<div class="calc-locksmith__select-car">
						<div class="select-block">
							<span>1. Марка</span>
							<select name="" id="">
								<option value="">Выберите марку</option>
							</select>
						</div>
						<div class="select-block">
							<span>2. Модель</span>
							<select name="" id="">
								<option value="">Выберите модель</option>
							</select>
						</div>
						<span>3. Выберите нужные работы</span>
					</div>
				</section>
			</div>

			<div class="content-block-with-nav calc-locksmith__table-block clearfix">
				<section class="main-column">
					<table class="calc-table calc-locksmith-table">

						<thead>
							<tr>
								<td>Общие работы</td>
								<td>Цена</td>
								<td></td>
								<td></td>
							</tr>
						</thead>

						<tbody>
							<tr>
								<td>Замена свечей зажигания</td>
								<td></td>
								<td><input type="checkbox" name="front-bumper" id="front-bumper--painting" class="calc-table-radio">
								<label class="label-for-checkbox" for="front-bumper--painting"></label></td>
								<td><label class="sign-for-work" for="front-bumper--painting">Записаться</label></td>
							</tr>
							<tr>
								<td>Замена картера (снятие/установка)</td>
								<td></td>
								<td><input type="checkbox" name="carter-remove-install" id="carter-remove-install" class="calc-table-radio">
								<label class="label-for-checkbox" for="carter-remove-install"></label></td>
								<td><label class="sign-for-work" for="carter-remove-install">Записаться</label></td>
							</tr>
							<tr>
								<td>Заправка масла ДВС</td>
								<td></td>
								<td><input type="checkbox" name="oil-loading" id="oil-loading" class="calc-table-radio">
								<label class="label-for-checkbox" for="oil-loading"></label></td>
								<td><label class="sign-for-work" for="oil-loading">Записаться</label></td>
							</tr>
							<tr>
								<td>Тонировка автостекол</td>
								<td></td>
								<td><input type="checkbox" name="tinting-glass" id="tinting-glass" class="calc-table-radio">
								<label class="label-for-checkbox" for="tinting-glass"></label></td>
								<td><label class="sign-for-work" for="tinting-glass">Записаться</label></td>
							</tr>
						</tbody>

						<tfoot>

							<tr>
								<td>Итого</td>
								<td colspan="3" class="in-total">10 000 руб.</td>
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