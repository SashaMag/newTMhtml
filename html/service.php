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

			<h1>Сервис</h1>
			<hr class="headline">
<!--			<div class="two-banner-block">-->
<!--				<div class="banner"><img src="/img/banners/banner.jpg" alt=""></div>-->
<!--				<div class="banner"><img src="/img/banners/banner.jpg" alt=""></div>-->
<!--			</div>-->

			<div class="content-block-with-nav service-page clearfix">
				<section class="main-column">
					<div class="rubric-button-block clearfix">
						<a href="#" data-popup="service" class="rubric-button rubric-button__service-page--1 trigger">Запись в сервис</a>
						<a href="/tehobsluzhivanie/rascenki-na-to.html" class="rubric-button rubric-button__service-page--2">Расценки на ТО</a>
						<a href="/servis/slesarnyj-remont.html" class="rubric-button rubric-button__service-page--3">Слесарный ремонт</a>
						<a href="/servis/kuzovnoj-remont.html" class="rubric-button rubric-button__service-page--4">Кузовной ремонт</a>
						<a href="/service/tehobsluzhivanie/garantijnoe-obsluzhivanie.html" class="rubric-button rubric-button__service-page--5">Гарантийное<br>обслуживание</a>
						<a href="/specpredlozhenija/service/skidka-10-na-servisnye-raboty-dm-sh-.html" class="rubric-button rubric-button__service-page--6">Специальные<br>предложения</a>
						<a href="" class="rubric-button rubric-button__service-page--7">Заявка на<br>техосмотр</a>
						<a href="" class="rubric-button rubric-button__service-page--8">Дополнительные<br>услуги</a>
					</div>
				</section>
				<div class="nav-column service-page__nav-column clearfix">
					<a href="" class="trigger" data-popup="service">Запись в сервис</a>
					<a href="" class="trigger" data-popup="service">Запись на ТО</a>
					<?php
					include $_SERVER['DOCUMENT_ROOT'].'/html/php/popup-btn/parts.php'
					?>
					<a href="" class="trigger" data-popup="service">Заявка на техосмотр</a>
					<?php
					include $_SERVER['DOCUMENT_ROOT'].'/html/php/popup-btn/feedback.php'
					?>
				</div>
			</div>

			<div class="content-block-with-nav service-page clearfix">
				<section class="main-column">

					<img src="/files/images/banner_uaz.jpg" alt="Диагностика Уаз за 500р.">

					<h2>Обслуживаемые марки</h2>
					<hr class="headline">
					<p>Техническое обслуживание в слесарном цехе ТоргМаш опроводится по широкому ряду автомобильных марок. По ним есть все необходимое оборудование, документация и конечно большой опыт мастеров по работе именно с этими марками.</p>
					<div class="service-page__maintained-brands-logos">					
						<div><img src="/img/logo/uaz-small.png" alt="" class="logo logo--1"></div>
						<div><img src="/img/logo/sy-small.png" alt="" class="logo logo--2"></div>
						<div><img src="/img/logo/geely-small.png" alt="" class="logo logo--3"></div>
						<div><img src="/img/logo/chery-small.png" alt="" class="logo logo--4"></div>
						<div><img src="/img/logo/haima-small.png" alt="" class="logo logo--5"></div>
						<div><img src="/img/logo/hyundai-small.png" alt="" class="logo logo--6"></div>
						<div><img src="/img/logo/bogdan-small.png" alt="" class="logo logo--7"></div>
						<div><img src="/img/logo/fiat-small.png" alt="" class="logo logo--8"></div>
					</div>
					<p>В <strong class="color-blue">кузовном цехе</strong> ТоргМаш осуществляется ремонт любой сложности <strong class="color-red">любых марок автомобилей</strong> с высоким качеством и гарантией на выполненные работы.</p>
					
					<h2>Телефоны</h2>
					<hr class="headline">

					<?php
					include $_SERVER['DOCUMENT_ROOT'].'/html/php/phones-block.php'
					?>

					<h2>Описание сервиса</h2>
					<hr class="headline">
					<div class="clearfix">
						<div class="service-page__description-text">
							<p>Автосервис Торгмаш предлагаем вам техобслуживание вашего автомобиля</p>
							<p><strong>Техобслуживание включает в себя следующие виды услуг:</strong></p>
							<ul>
								<li>замена масляного фильтра</li>
								<li>замена масла в двигателе и КПП</li>
								<li>замена топливного фильтра</li>
								<li>проверка/замена воздушного фильтра</li>
								<li>проверка/замена свечей зажигания</li>
								<li>проверка/замена тормозных колодок</li>
								<li>проверка/замена тормозной жидкости</li>
							</ul>
						</div>
						<div class="service-page__photo-block clearfix">
							<img src="/img/temp/service-1.jpg" alt="">
							<img src="/img/temp/service-2.jpg" alt="">
						</div>
						<div class="service-page__description-text">
							<p>Специалисты нашего автосервиса посоветуют вам какие работы следует провести с вашим автомобилем, порекомендуют и предложат качественные расходные материалы именно для вашего автомобиля.<br>
							На нашем складе всегда есть в наличии запчасти и материалы для проведения ТО автомобилей.</p>
						</div>
					</div>
					<h2>Запись в сервис</h2>
					<hr class="headline">
					<div class="embedded-form">

						<?php
						include $_SERVER['DOCUMENT_ROOT'].'/html/php/forms/form-service.php'
						?>

					</div>

				</section>
				<div class="nav-column clearfix">
				</div>
			</div>
		</div>
	</main>	


	<?php
	include $_SERVER['DOCUMENT_ROOT'].'/html/php/footer.php'
	?>



</body>
</html>