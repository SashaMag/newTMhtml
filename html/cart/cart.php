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
			<h1>Корзина</h1>
			<hr class="headline">

			<div class="content-block-with-nav clearfix">
				<div class="nav-column autocredit-nav-column clearfix">	
					<a href="">Оформить заказ</a>
					<a href="">Продолжить покупки</a>
				</div>
				<section class="main-column autocredit-content-block">		

				<h2>Покупки</h2>

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

					<h2>Заказ каталожных позиций</h2>

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

				</section>				

			</div>		

		</div>

	</main>

	<?php
	include $_SERVER['DOCUMENT_ROOT'].'/html/php/footer.php'
	?>

</body>

</html>