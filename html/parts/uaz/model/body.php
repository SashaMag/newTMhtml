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
				<a href="/html/index.php">Запчасти</a>
				<span>/</span>
				<a href="/html/index.php">УАЗ</a>
				<span>/</span>
				<a href="/html/index.php">Модель</a>
				<span>/</span>
			</div>
		</div>

		<div class="container">
			<h1>Кузов в сборе</h1>
			<hr class="headline">

			<div class="content-block-with-nav clearfix">
				<section class="main-column autocredit-content-block">	
					<div class="interactive-parts-page"></div>
				</section>
				<div class="nav-column autocredit-nav-column clearfix">	
					<a href="">Оформить заказ</a>
					<a href="">Продолжить покупки</a>
				</div>
				<section class="main-column autocredit-content-block">		


					<h2>Оригинальный каталог</h2>
					<hr class="headline">

					<table class="parts-table">
						<thead>
							<tr>
								<td>#</td>
								<td>Артикул</td>
								<td>Товар</td>
								<td></td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>31622-5400010</td>
								<td>Автодиск КиК Калахари</td>
								<td><button>Убрать</button></td>
							</tr>
							<tr>
								<td>2</td>
								<td>31622-5400010</td>
								<td>Автодиск КиК Калахари</td>
								<td><button>Убрать</button></td>
							</tr>
						</tbody>
					</table>

					<h2>Прайс-лист</h2>
					<hr class="headline">
					<p>Внимание! Запчасти в прайс-листе отсортированы по номеру артикула. Вы можете изменить сортировку по ссылкам в названиях столбцов.</p>
					<p>Оригинальный номер детали состоит обычно из трех частей: номера двигателя или модели автомобиля, номера детали, а также при необходимости номер заменяемости. По номеру детали вы сможете узнать предварительную цену. Чтобы точно узнать наличие и цену, отправьте заявку с нужынми деталями </p>

					<table class="parts-order-table">
						<thead>
							<tr>
								<td>Артикул</td>
								<td>Товар</td>
								<td>Фото</td>
								<td>Цена</td>
								<td>Кол-во</td>
								<td></td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>31622-5400010-15</td>
								<td>Каркас безопастности вместо штатного (3151 тент)(без дверных надставок)(без тента)</td>
								<td></td>
								<td>76100</td>
								<td><input type="number"></td>
								<td><button>Купить</button></td>
							</tr>
							<tr>
								<td>31622-5400010-15</td>
								<td>Каркас безопастности вместо штатного (3151 тент)(без дверных надставок)(без тента)</td>
								<td></td>
								<td>76100</td>
								<td><input type="number"></td>
								<td><button>Купить</button></td>
							</tr>
						</tbody>
					</table>

					<h2>Где купить запчасти</h2>
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