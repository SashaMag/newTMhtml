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
			<h1>Продажа УАЗ</h1>
			<hr class="headline">
			<div class="new-cars__select-brand-block clearfix">
				<a href="" class="brand-block active uaz">
					<span class="brand-name">УАЗ</span>
				</a>
				<a href="" class="brand-block sy">
					<span class="brand-name">SsangYong</span>
				</a>
				<a href="" class="brand-block geely">
					<span class="brand-name">Geely</span>
				</a>
				<a href="" class="brand-block che">
					<span class="brand-name">Haima</span>
				</a>
			</div>

			<article class="new-cars__all-cars-section">
				<h1>УАЗ</h1>
				<hr class="headline">
				<div class="new-cars__goods-block clearfix">
					<section class="good-block good-block--uaz clearfix">
						<a href="/html/new-cars/uaz/patriot.php"><img src="/img/cars/uaz-small/patriot/1.png" alt="" class="photo"></a>
						<a href="/html/new-cars/uaz/patriot.php"><h3 class="description">УАЗ Патриот</h3></a>
						<span class="price"><span class="rouble-before">от</span> 947 000 <span class="rouble-sign">руб.</span><span class="stripe-1"></span><span class="stripe-2"></span><span class="stripe-3"></span></span>
						<span class="credit">в кредит дешевле</span>
						<span class="sale"> скидка до 120 000 руб.</span>
					</section>
					<section class="good-block good-block--uaz clearfix">
						<a href=""><img src="/img/cars/uaz-small/pickup/1.png" alt="" class="photo"></a>
						<a href=""><h3 class="description">УАЗ Пикап</h3></a>
						<span class="price"><span class="rouble-before">от</span> 947 000 <span class="rouble-sign">руб.</span><span class="stripe-1"></span><span class="stripe-2"></span><span class="stripe-3"></span></span>
						<span class="credit">в кредит дешевле</span>
						<span class="sale"> скидка до 120 000 руб.</span>
					</section>
					<section class="good-block good-block--uaz clearfix">
						<a href=""><img src="/img/cars/uaz-small/hunter/1.png" alt="" class="photo"></a>
						<a href=""><h3 class="description">УАЗ Хантер</h3></a>
						<span class="price"><span class="rouble-before">от</span> 947 000 <span class="rouble-sign">руб.</span><span class="stripe-1"></span><span class="stripe-2"></span><span class="stripe-3"></span></span>
						<span class="credit">в кредит дешевле</span>
						<span class="sale"> скидка до 120 000 руб.</span>
					</section>
					<section class="good-block good-block--uaz clearfix">
						<a href=""><img src="/img/cars/uaz-small/cargo/1.png" alt="" class="photo"></a>
						<a href=""><h3 class="description">УАЗ Карго</h3></a>
						<span class="price"><span class="rouble-before">от</span> 947 000 <span class="rouble-sign">руб.</span><span class="stripe-1"></span><span class="stripe-2"></span><span class="stripe-3"></span></span>
						<span class="credit">в кредит дешевле</span>
						<span class="sale"> скидка до 120 000 руб.</span>
					</section>
					<section class="good-block good-block--uaz clearfix">
						<a href=""><img src="/img/cars/uaz-small/commerce/1.png" alt="" class="photo"></a>
						<a href=""><h3 class="description">УАЗ Коммерческий</h3></a>
						<span class="price"><span class="rouble-before">от</span> 947 000 <span class="rouble-sign">руб.</span><span class="stripe-1"></span><span class="stripe-2"></span><span class="stripe-3"></span></span>
						<span class="credit">в кредит дешевле</span>
						<span class="sale"> скидка до 120 000 руб.</span>
					</section>
					<section class="good-block good-block--uaz clearfix">
						<a href=""><img src="/img/cars/uaz-small/spec/1.png" alt="" class="photo"></a>
						<a href=""><h3 class="description">Спецтехника УАЗ</h3></a>
						<span class="price"><span class="rouble-before">от</span> 947 000 <span class="rouble-sign">руб.</span><span class="stripe-1"></span><span class="stripe-2"></span><span class="stripe-3"></span></span>
						<span class="credit">в кредит дешевле</span>
						<span class="sale">скидка до 120 000 руб.</span>
					</section>
				</div>			

			</article>

			<article class="clearfix">
				<h2>Где купить УАЗ</h2>
				<hr class="headline">
				<?php
				include $_SERVER['DOCUMENT_ROOT'].'/html/php/address-block.php'
				?>
			</article>

			<section class="index__tuning-block index__content-block clearfix">
				<h2>Тюнинг ателье по индвидиуальным заказам</h2>
				<hr class="headline">

					<div class="bxslider">						
						<?php
						include $_SERVER['DOCUMENT_ROOT'].'/html/php/tuning/new-cars/uaz.php'
						?>
					</div>

					<div class="tablet-visible-block bxslider-tablet bxslider-tablet-4 clearfix">
						<?php
						include $_SERVER['DOCUMENT_ROOT'].'/html/php/tuning/new-cars/uaz.php'
						?>
					</div>

				<a href="" class="link-view-all">Показать все работы</a>
			</section>

			<p>Текст про продажу УАЗ в Торгмаш</p>
			

		</div>

	</main>

	<?php
	include $_SERVER['DOCUMENT_ROOT'].'/html/php/footer.php'
	?>

</body>

</html>