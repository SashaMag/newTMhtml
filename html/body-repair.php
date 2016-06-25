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
			<h1>Кузовной ремонт</h1>
			<hr class="headline">
<!--			<div class="two-banner-block">-->
<!--				<div class="banner"><img src="/img/banners/banner.jpg" alt=""></div>-->
<!--				<div class="banner"><img src="/img/banners/banner.jpg" alt=""></div>-->
<!--			</div>-->

			<div class="content-block-with-nav clearfix">
				<section class="main-column">
					<div class="rubric-button-block clearfix">
						<a href="/service/kuzovnoj-remont/kalkuljator-na-kuzovnoj-remont-i-okrasku.html" class="rubric-button rubric-button__body-repair--1">Калькулятор<br>кузовного ремонта</a>
						<a href="" class="rubric-button rubric-button__body-repair--2 trigger" data-popup="service">Запись<br>в сервис</a>
						<a href="" class="rubric-button rubric-button__body-repair--3">Бесплатная<br>дефектовка</a>
						<a href="" class="rubric-button rubric-button__body-repair--4">Спецпредложения по<br>кузовному ремонту</a>
						<a href="" class="rubric-button rubric-button__body-repair--5">Гарантийный<br>сертификат</a>
						<a href="" class="rubric-button rubric-button__body-repair--6">Эвакуатор</a>
						<a href="" class="rubric-button rubric-button__body-repair--7">Памятка ДТП</a>

					</div>
				</section>
				<div class="nav-column autocredit-nav-column clearfix">	
					<a href="/service/kuzovnoj-remont/kalkuljator-na-kuzovnoj-remont-i-okrasku.html">Калькулятор кузовных работ</a>
					<a href="">Оценка работ по фото</a>
					<a href="" class="trigger" data-popup="service">Запись в сервис</a>
<?php
					include $_SERVER['DOCUMENT_ROOT'].'/html/php/popup-btn/feedback.php'
					?>
				</div>
				<section class="main-column autocredit-content-block">
					
					<p>Наполнение кузовного ремонта</p>

					<h2>Куда обратиться касательно кузовного ремонта</h2>
					<hr class="headline">
					<?php
					include $_SERVER['DOCUMENT_ROOT'].'/html/php/address-block.php'
					?>

					<h2>Запись в сервис</h2>
					<hr class="headline">
					<?php
					include $_SERVER['DOCUMENT_ROOT'].'/html/php/forms/form-service-page.php'
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