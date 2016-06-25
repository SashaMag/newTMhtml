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
			<h1>Услуги</h1>
			<hr class="headline">

			<div class="content-block-with-nav clearfix">
				<section class="main-column">
					<div class="rubric-button-block clearfix">
						<a href="" class="rubric-button rubric-button__additional-services--1">Страхование</a>
						<a href="" class="rubric-button rubric-button__additional-services--2">Продление<br>страховки</a>
						<a href="" class="rubric-button rubric-button__additional-services--3">Постановка<br>на учет в ГАИ</a>
						<a href="/html/additional-services/test-drive.php" class="rubric-button rubric-button__additional-services--4">Тест-драйв</a>
						<a href="/html/additional-services/trade-in-utilization/trade-in.php" class="rubric-button rubric-button__additional-services--5">Trade-in</a>
						<a href="/html/additional-services/trade-in-utilization/utilization.php" class="rubric-button rubric-button__additional-services--6">Утилизация</a>
						<a href="/html/additional-services/comission.php" class="rubric-button rubric-button__additional-services--7">Комиссия</a>
						<a href="/html/corporate/leasing.php" class="rubric-button rubric-button__additional-services--8">Лизинг</a>
						<a href="" class="rubric-button rubric-button__additional-services--9">Государственный<br>техосмотр</a>
						<a href="/html/additional-services/evacuator.php" class="rubric-button rubric-button__additional-services--10">Эвакуатор</a>
						<a href="/html/additional-services/avtovoz.php" class="rubric-button rubric-button__additional-services--11">Автовоз</a>
					</div>
				</section>
				<div class="nav-column autocredit-nav-column clearfix">	
					<?php
					// to do
					//include $_SERVER['DOCUMENT_ROOT'].'/html/php/popup-btn/buy-car.php'
					?>
					<a href="" class="trigger" data-popup="service">Записаться в сервис</a>
<?php
					include $_SERVER['DOCUMENT_ROOT'].'/html/php/popup-btn/feedback.php'
					?>
				</div>		

			</div>		

		</div>

	</main>

	<?php
	include $_SERVER['DOCUMENT_ROOT'].'/html/php/footer.php'
	?>

</body>

</html>