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
				<a href="/html/service/extra-services.php">Дополнительные услуги</a>
				<span>/</span>
			</div>
		</div>

		<div class="container">
			<h1>Шиномонтаж</h1>
			<hr class="headline">

			<div class="content-block-with-nav clearfix">
				<section class="main-column autocredit-content-block">
					<p>В автотехцентрах ТоргМаш предоставляются весь комплекс шиномонтажных работ</p>
					<ul>
						<li>сезонная смена шин</li>
						<li>балансировка колес</li>
						<li>монтаж-демонтаж шин</li>
						<li>мойка колес</li>
						<li>ремонт шин</li>
						<li>правка дисков</li>
						<li>покраска дисков</li>
					</ul>
					<p><strong>АКЦИЯ! С 1 ПО 30 ОКТЯБРЯ - сделай шиномонтаж и получи проверки сход развал или скидочную карту техосмотра в подарок!</strong></p>
				</section>
				<div class="nav-column autocredit-nav-column clearfix">	
					<a href="">Калькулятор шиномонтажа</a>
<?php
					include $_SERVER['DOCUMENT_ROOT'].'/html/php/popup-btn/feedback.php'
					?>
				</div>
				<section class="main-column autocredit-content-block">
					

				</section>				

			</div>		

		</div>

	</main>

	<?php
	include $_SERVER['DOCUMENT_ROOT'].'/html/php/footer.php'
	?>

</body>

</html>