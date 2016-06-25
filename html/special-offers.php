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
			<h1>Спецпредложения</h1>
			<hr class="headline">
			<div class="special-offer__select-type-block">
				<button class="special-offer__select-offer-type-button" id="special-offer__select-offer-type--1">Продажа автомобилей</button>
				<button class="special-offer__select-offer-type-button" id="special-offer__select-offer-type--2">Сервис</button>
			</div>
			<div class="special-offer--uaz special-offer-block clearfix">
				<div class="sale-block">
					<h2>По продаже УАЗ</h2>
					<hr class="headline">
					<div class="banner-block"><img src="/img/banners/banner.jpg" alt=""><img src="/img/banners/banner.jpg" alt=""></div>
				</div>
				<div class="service-block">
					<h2>По сервису УАЗ</h2>
					<hr class="headline">
					<div class="banner-block clearfix"><img src="/img/banners/banner.jpg" alt=""><img src="/img/banners/banner.jpg" alt=""><img src="/img/banners/banner.jpg" alt=""><img src="/img/banners/banner.jpg" alt=""></div>
				</div>
			</div>
			<div class="special-offer--sy special-offer-block clearfix">
				<div class="sale-block">
					<h2>По продаже SsangYong</h2>
					<hr class="headline">
					<div class="banner-block"><img src="/img/banners/banner.jpg" alt=""><img src="/img/banners/banner.jpg" alt=""></div>
				</div>
				<div class="service-block">
					<h2>По сервису SsangYong</h2>
					<hr class="headline">
					<div class="banner-block"><img src="/img/banners/banner.jpg" alt=""><img src="/img/banners/banner.jpg" alt=""></div>
				</div>
			</div>
		</div>

	</main>

	<?php
	include $_SERVER['DOCUMENT_ROOT'].'/html/php/footer.php'
	?>

</body>

</html>