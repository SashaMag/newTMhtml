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
				<a href="/html/corporate.php">Корпоративным клиентам</a>
				<span>/</span>
				<a href="/html/corporate/leasing.php">Лизинг</a>
				<span>/</span>
			</div>
		</div>

		<div class="container">
			<h1>Лизинг</h1>
			<hr class="headline">		
			
			<div class="embedded-form">
				<?php
				include $_SERVER['DOCUMENT_ROOT'].'/html/php/forms/form-leasing.php'
				?>
			</div>

		</div>

	</main>

	<?php
	include $_SERVER['DOCUMENT_ROOT'].'/html/php/footer.php'
	?>

</body>

</html>