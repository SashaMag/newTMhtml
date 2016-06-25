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
				<a href="/html/service.php">Сервис</a>
				<span>/</span>	
			</div>
		</div>
		
		<div class="container">
			<h1>Расценки на техническое обслуживание</h1>
			<hr class="headline">
			<div class="content-block-with-nav service-page clearfix">
				<section class="main-column">
					<div class="clearfix service-price-page__brand-block">
						<a href="" class="brand brand-1">УАЗ</a>
						<a href="" class="brand brand-2">SsangYong</a>
						<a href="" class="brand brand-3">Geely</a>
						<a href="" class="brand brand-4">ТАГАЗ</a>
						<a href="" class="brand brand-5">Chery</a>
						<a href="" class="brand brand-6">Богдан</a>
						<div class="brand-block-small clearfix">
							<a href="" class="brand brand-7">Fiat</a>
							<a href="" class="brand brand-8">ZAZ</a>
						</div>
						<a href="" class="brand brand-9">Hyundai</a>
					</div>
				</section>
				<div class="nav-column service-page__nav-column clearfix">
					<a href="" class="trigger" data-popup="service">Запрос на ТО</a>
					<a href="" class="trigger" data-popup="service">Заявка на техосмотр</a>
					<?php
					include $_SERVER['DOCUMENT_ROOT'].'/html/php/popup-btn/feedback.php'
					?>
				</div>
				<section class="main-column">
					<h2>Запись в сервис</h2>
					<hr class="headline">
					<div class="embedded-form">
						<?php
						include $_SERVER['DOCUMENT_ROOT'].'/html/php/forms/form-service.php'
						?>
					</div>
				</section>
			</div>

		</main>

		<?php
		include $_SERVER['DOCUMENT_ROOT'].'/html/php/footer.php'
		?>

	</div>

</body>

</html>