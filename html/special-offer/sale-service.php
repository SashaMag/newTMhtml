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
				<a href="/html/special-offers.php">Спецпредложения</a>
				<span>/</span>
			</div>
		</div>

		<div class="container">
			<h1>Скидочная система по запчастям</h1>
			<hr class="headline">

			<div class="content-block-with-nav clearfix">
				<section class="main-column">
					
				</section>
				<div class="nav-column autocredit-nav-column clearfix">	
					<a href="" class="trigger" data-popup="service">Запись в сервис</a>
					<?php
					include $_SERVER['DOCUMENT_ROOT'].'/html/php/popup-btn/feedback.php'
					?>
				</div>
				<section class="main-column autocredit-content-block">
					
					<img src="/img/special-offer/u87.png" alt="">

					<p>Скидка 7% на сервисные работы, МКАД 88</p>

					<h2>Адреса автосалонов Торгмаш</h2>
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