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
				<a href="/html/autocredit.php">Автокредит</a>
				<span>/</span>
			</div>
		</div>

		<div class="container">
			<h1>Кредитный калькулятор</h1>
			<hr class="headline">
			<div class="content-block-with-nav clearfix">

				<section class="main-column autocredit-content-block">
					
					<div class="embedded-form">
						<?php
						include $_SERVER['DOCUMENT_ROOT'].'/html/php/forms/form-credit-calc.php'
						?>
					</div>

					
					<h2>Банковские программы</h2>
					<hr class="headline">
					<div class="autocredit__partners-logos-block">
						<div class="logo"><img src="/img/banners/sberbank.png" alt="1"></div>
						<div class="logo"><img src="/img/banners/sberbank.png" alt="2"></div>
						<div class="logo"><img src="/img/banners/sberbank.png" alt="3"></div>
						<div class="logo"><img src="/img/banners/sberbank.png" alt="4"></div>
						<div class="logo"><img src="/img/banners/sberbank.png" alt="5"></div>
<!--						<div class="logo"><img src="/img/banners/sberbank.png" alt=""></div>-->
<!--						<div class="logo"><img src="/img/banners/sberbank.png" alt=""></div>-->
<!--						<div class="logo"><img src="/img/banners/sberbank.png" alt=""></div>-->
<!--						<div class="logo"><img src="/img/banners/sberbank.png" alt=""></div>-->
<!--						<div class="logo"><img src="/img/banners/sberbank.png" alt=""></div>-->
<!--						<div class="logo"><img src="/img/banners/sberbank.png" alt=""></div>-->
<!--						<div class="logo"><img src="/img/banners/sberbank.png" alt=""></div>-->
<!--						<div class="logo"><img src="/img/banners/sberbank.png" alt=""></div>-->
<!--						<div class="logo"><img src="/img/banners/sberbank.png" alt=""></div>-->
<!--						<div class="logo"><img src="/img/banners/sberbank.png" alt=""></div>-->
<!--						<div class="logo"><img src="/img/banners/sberbank.png" alt=""></div>-->
<!--						<div class="logo"><img src="/img/banners/sberbank.png" alt=""></div>-->
<!--						<div class="logo"><img src="/img/banners/sberbank.png" alt=""></div>-->
<!--						<div class="logo"><img src="/img/banners/sberbank.png" alt=""></div>-->
<!--						<div class="logo"><img src="/img/banners/sberbank.png" alt=""></div>-->
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