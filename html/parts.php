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
			<h1>Запчасти</h1>
			<hr class="headline">
<!--			<div class="two-banner-block">-->
<!--				<div class="banner"><img src="/img/banners/banner.jpg" alt=""></div>-->
<!--				<div class="banner"><img src="/img/banners/banner.jpg" alt=""></div>-->
<!--			</div>-->

			<div class="content-block-with-nav clearfix">
				<section class="main-column">
					<div class="rubric-button-block clearfix">
						<a href="" class="rubric-button rubric-button__parts--1 trigger" data-popup="parts">Запрос на запчасти</a>
						<a href="" class="rubric-button rubric-button__parts--2 trigger" data-popup="service">Запись в сервис</a>
						<a href="" class="rubric-button rubric-button__parts--3">Подбор шин и дисков</a>
						<a href="/specpredlozhenija.html" class="rubric-button rubric-button__parts--4">Специальные<br>предложения</a>
					</div>
				</section>
				<div class="nav-column parts-nav-column clearfix">	
					<?php
					include $_SERVER['DOCUMENT_ROOT'].'/html/php/popup-btn/parts.php'
					?>
					<a href="" class="trigger" data-popup="service">Записаться в сервис</a>
					<a href="">Доверенность на представителя</a>
<?php
					include $_SERVER['DOCUMENT_ROOT'].'/html/php/popup-btn/feedback.php'
					?>
				</div>
				<section class="main-column parts-content-block">

					<h2>Запчасти по маркам</h2>
					<hr class="headline">
					<div class="clearfix parts-page__brand-block">
						<a href="/parts/#УАЗ" class="brand brand-1">УАЗ</a>
						<a href="/parts/#SsangYong" class="brand brand-2">SsangYong</a>
						<a href="/parts/#Geely" class="brand brand-3">Geely</a>
						<a href="/parts/#ТагАЗ" class="brand brand-4">ТАГАЗ</a>
						<a href="/parts/#Chery" class="brand brand-5">Chery</a>
						<a href="/parts/#ВАЗ" class="brand brand-6">Ваз</a>
						<div class="brand-block-small clearfix">
							<a href="/parts/#Фиат" class="brand brand-7">Fiat</a>
							<a href="/parts/#ZAZ" class="brand brand-8">ZAZ</a>
						</div>
						<a href="/parts/" class="brand brand-9">Hyundai</a>
					</div>
					<p>По вопросам приобретения запчастей Вы можете обращаться по телефонам, оставить заявку через электронную почту или форму заказа. Также вы можете восполььзоваться нашим <a href="/parts">онлайн каталогом запчастей</a></p>

					<h2>Контакты магазина запчастей</h2>
					<hr class="headline">
					<h3>Магазин запчастей</h3>
					<p>
						<span>Телефон: <a href="tel:84952307759">(495) 230-77-56</a> (многоканальный)</span><br>
						<span>Моб. телефон: <a href="tel:89852563770">8 (985) 256-37-70</a></span><br>
						<span><a href="mailto:shop@tm-auto.ru">shop@tm-auto.ru</a></span>
					</p>
					
					<h2>Где купить запчасти</h2>
					<hr class="headline">

					<?php
					include $_SERVER['DOCUMENT_ROOT'].'/html/php/address-block.php'
					?>

					<h2>Запрос на приобретение запчастей</h2>
					<hr class="headline">
					<div class="embedded-form">
						
					<?php
					include $_SERVER['DOCUMENT_ROOT'].'/html/php/forms/form-buy-parts.php'
					?>
					</div>

				</section>				

			</div>		

		</div>

	</main>

	<?php
	include $_SERVER['DOCUMENT_ROOT'].'/html/php/footer.php'
	?>

</body>

</html>