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
			<h1>Каталог запчастей УАЗ</h1>
			<hr class="headline">

			<div class="content-block-with-nav clearfix">
				<section class="main-column clearfix">

					<section class="good-block clearfix">
						<a href="/html/parts/uaz/uaz-patriot.php"><img src="/img/cars/patriot.png" alt="" class="photo"></a>
						<a href="/html/parts/uaz/uaz-patriot.php"><h3 class="description">УАЗ Патриот</h3></a>
					</section>

					<section class="good-block clearfix">
						<a href=""><img src="/img/cars/patriot.png" alt="" class="photo"></a>
						<a href=""><h3 class="description">УАЗ Патриот</h3></a>
					</section>

					<section class="good-block clearfix">
						<a href=""><img src="/img/cars/patriot.png" alt="" class="photo"></a>
						<a href=""><h3 class="description">УАЗ Патриот</h3></a>
					</section>

					<section class="good-block clearfix">
						<a href=""><img src="/img/cars/patriot.png" alt="" class="photo"></a>
						<a href=""><h3 class="description">УАЗ Патриот</h3></a>
					</section>

					<section class="good-block clearfix">
						<a href=""><img src="/img/cars/patriot.png" alt="" class="photo"></a>
						<a href=""><h3 class="description">УАЗ Патриот</h3></a>
					</section>

					<section class="good-block clearfix">
						<a href=""><img src="/img/cars/patriot.png" alt="" class="photo"></a>
						<a href=""><h3 class="description">УАЗ Патриот</h3></a>
					</section>
					
				</section>
				<div class="nav-column autocredit-nav-column clearfix">	
					<?php
					include $_SERVER['DOCUMENT_ROOT'].'/html/php/popup-btn/parts.php'
					?>
					<?php
					include $_SERVER['DOCUMENT_ROOT'].'/html/php/popup-btn/feedback.php'
					?>
				</div>		

				<section class="main-column clearfix">

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

				</section>

			</div>		

		</div>

	</main>

	<?php
	include $_SERVER['DOCUMENT_ROOT'].'/html/php/footer.php'
	?>

</body>

</html>