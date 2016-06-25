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
				<a href="/html/service/service-price.php">Расценки на ТО</a>
				<span>/</span>
			</div>
		</div>

		<div class="container">
			<h1>Техническое обслуживание УАЗ</h1>
			<hr class="headline">
			<div class="two-banner-block">
				<div class="banner"><img src="/img/banners/banner.jpg" alt=""></div>
				<div class="banner"><img src="/img/banners/banner.jpg" alt=""></div>
			</div>

			<div class="content-block-with-nav clearfix">
				
				<h2>ТО УАЗ Патриот Бензин</h2>
				<hr class="headline">

				<section class="main-column">				

					<?php
					include $_SERVER['DOCUMENT_ROOT'].'/html/php/maintenance-table/uaz-petrol.php'
					?>
					
					<h2>ТО УАЗ Патриот Дизель</h2>
					<hr class="headline">

					<?php
					include $_SERVER['DOCUMENT_ROOT'].'/html/php/maintenance-table/uaz-diesel.php'
					?>

				</section>
				<div class="nav-column parts-nav-column clearfix">	
					<a href="" class="trigger" data-popup="service">Запись на ТО</a>
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