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
				<a href="/html/index.php">Тюнинг</a>
				<span>/</span>
				<a href="/html/index.php">Тюнинг УАЗ</a>
				<span>/</span>
			</div>
		</div>

		<div class="container">
			<h1>Тюнинг УАЗ</h1>
			<hr class="headline">

			<div class="content-block-with-nav clearfix">
				<section class="main-column">
					<div class="rubric-button-block clearfix">
						<a href="" class="rubric-button rubric-button__tuning-uaz-page--1">Запрос на тюнинг УАЗ</a>
						<a href="" class="rubric-button rubric-button__tuning-uaz-standart-page--1">УАЗ Патриот Profi</a>
						<a href="" class="rubric-button rubric-button__tuning-uaz-standart-page--2">УАЗ Патриот Lux</a>
						<a href="" class="rubric-button rubric-button__tuning-uaz-standart-page--3">УАЗ Хантер Profi</a>
						<a href="" class="rubric-button rubric-button__tuning-uaz-standart-page--4">УАЗ Хантер Командирский</a>
						<a href="" class="rubric-button rubric-button__tuning-uaz-standart-page--5">УАЗ Хантер 33</a>
						<a href="/html/tuning/uaz/standart-options/beach.php" class="rubric-button rubric-button__tuning-uaz-standart-page--6">УАЗ Хантер Beach</a>
						<a href="" class="rubric-button rubric-button__tuning-uaz-standart-page--7">УАЗ "Буханка" Охотник</a>
					</div>
				</section>
				<div class="nav-column autocredit-nav-column clearfix">	
					<?php
					include $_SERVER['DOCUMENT_ROOT'].'/html/php/popup-btn/tuning-request.php'
					?>
<?php
					include $_SERVER['DOCUMENT_ROOT'].'/html/php/popup-btn/feedback.php'
					?>
				</div>
				<section class="main-column autocredit-content-block">

					<h2>Стандартные пакеты тюнинга УАЗ</h2>
					<hr class="headline">

					<div class="bxslider">						
						<?php
						include $_SERVER['DOCUMENT_ROOT'].'/html/php/tuning/uaz/standart-options.php'
						?>
					</div>

					<div class="tablet-visible-block bxslider-tablet bxslider-tablet clearfix">
						<?php
						include $_SERVER['DOCUMENT_ROOT'].'/html/php/tuning/uaz/standart-options.php'
						?>
					</div>

					<div class="bxslider">						
						<?php
						include $_SERVER['DOCUMENT_ROOT'].'/html/php/tuning/uaz/standart-options.php'
						?>
					</div>

					<div class="tablet-visible-block bxslider-tablet bxslider-tablet clearfix">
						<?php
						include $_SERVER['DOCUMENT_ROOT'].'/html/php/tuning/uaz/standart-options.php'
						?>
					</div>

					<div class="bxslider">						
						<?php
						include $_SERVER['DOCUMENT_ROOT'].'/html/php/tuning/uaz/standart-options.php'
						?>
					</div>

					<div class="tablet-visible-block bxslider-tablet bxslider-tablet clearfix">
						<?php
						include $_SERVER['DOCUMENT_ROOT'].'/html/php/tuning/uaz/standart-options.php'
						?>
					</div>

					<h2>Полный каталог тюнинга УАЗ</h2>
					<hr class="headline">

					<div class="bxslider">						
						<?php
						include $_SERVER['DOCUMENT_ROOT'].'/html/php/tuning/uaz/full-catalog.php'
						?>
					</div>

					<div class="tablet-visible-block bxslider-tablet bxslider-tablet clearfix">
						<?php
						include $_SERVER['DOCUMENT_ROOT'].'/html/php/tuning/uaz/full-catalog.php'
						?>
					</div>

					<h2>Где сделать тюнинг УАЗ</h2>
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