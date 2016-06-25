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
				<a href="/html/tuning.php">Тюнинг</a>
				<span>/</span>
				<a href="/html/tuning/uaz.php">Тюнинг УАЗ</a>
				<span>/</span>
				<a href="/html/tuning/uaz/catalog.php">Полный каталог тюнинга УАЗ</a>
				<span>/</span>
			</div>
		</div>

		<div class="container">
			<h1>Ковры автомобильные</h1>
			<hr class="headline">

			<div class="content-block-with-nav clearfix">
				<div class="nav-column autocredit-nav-column clearfix">	
<?php
					include $_SERVER['DOCUMENT_ROOT'].'/html/php/popup-btn/feedback.php'
					?>
				</div>
				<section class="main-column autocredit-content-block">					

					<?php
					include $_SERVER['DOCUMENT_ROOT'].'/html/php/tuning/uaz/standart-options/beach.php'
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