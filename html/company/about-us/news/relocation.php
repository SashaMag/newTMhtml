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
				<a href="/html/index.php">Контакты</a>
				<span>/</span>
				<a href="/html/company/about-us/news.php">Новости</a>
				<span>/</span>
			</div>
		</div>
		
		<section class="news-text container">
			<h1>Мы перехали</h1>
			<hr class="headline">
			<time datetime="2015-10-15">15.10.2015</time>
			<img src="/img/news/news-2.jpg" alt="" class="full-width">
			<p>Автосалон на Дмитровском шоссе переехал на МКАД 88</p>
			<p>На территории нового салона представлен большой ассортиммент УАЗ и Geely!</p>
			<p>Оборузован новый мощный цех по кузовному ремонту.</p>
			<p>Как нас найти всегда подскажет страница КОНТАКТЫ или карта ниже</p>
		</section>

	</main>

	<?php
	include $_SERVER['DOCUMENT_ROOT'].'/html/php/footer.php'
	?>

</body>

</html>