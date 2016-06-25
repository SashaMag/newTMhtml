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
				<a href="/html/additional-services.php">Услуги</a>
				<span>/</span>
			</div>
		</div>

		<div class="container">
			<h1>Эвакуатор и автовоз</h1>
			<hr class="headline">

			<div class="content-block-with-nav clearfix">
				<section class="main-column">
					<p>Если у вас сломался или поврежден автомобиль так, что на нем невозможно или не целесообразно передвигаться своим ходом, мы готовы предоставить услугу эвакуатора. Вместе с этим мы будем готовы провести как слесарный так и кузовной ремонт автомобиля любой сложности.</p>
					<p>Для компаний мы также можем доставить автомобили автовозом.</p>
				</section>
				<div class="nav-column autocredit-nav-column clearfix">
					<?php
					include $_SERVER['DOCUMENT_ROOT'].'/html/php/popup-btn/evac.php'
					?>	
					<?php
					include $_SERVER['DOCUMENT_ROOT'].'/html/php/popup-btn/avtovoz.php'
					?>	
<?php
					include $_SERVER['DOCUMENT_ROOT'].'/html/php/popup-btn/feedback.php'
					?>
				</div>		

				<section class="main-column embedded-form">
					<?php
					include $_SERVER['DOCUMENT_ROOT'].'/html/php/forms/form-evac.php'
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