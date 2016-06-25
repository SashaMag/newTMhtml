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
			<h1>Автомобили с пробегом в наличии</h1>
			<hr class="headline">

			<div class="content-block-with-nav clearfix">
				<section class="main-column clearfix">
					<section class="good-block good-block--used-cars clearfix">
							<a href=""><img src="/img/cars/patriot.png" alt="" class="photo"></a>
							<a href=""><h3 class="description">Chevrolet Lacetti</h3></a>
							<span class="price">947 000 руб.<span class="stripe-1"></span><span class="stripe-2"></span><span class="stripe-3"></span></span>
							<span class="credit"></span>
							<span class="sale">2008г, 138000км, 1.6 МКПП</span>
							<a class="used-cars__complectation-link" href="">Комплектация</a>
						</section>

						<section class="good-block good-block--used-cars clearfix">
							<a href=""><img src="/img/cars/patriot.png" alt="" class="photo"></a>
							<a href=""><h3 class="description">Opel Zafira</h3></a>
							<span class="price">947 000 руб.<span class="stripe-1"></span><span class="stripe-2"></span><span class="stripe-3"></span></span>
							<span class="credit"></span>
							<span class="sale">2008г, 138000км, 1.6 МКПП</span>
							<a class="used-cars__complectation-link" href="">Комплектация</a>
						</section>

						<section class="good-block good-block--used-cars clearfix">
							<a href=""><img src="/img/cars/patriot.png" alt="" class="photo"></a>
							<a href=""><h3 class="description">УАЗ Патриот</h3></a>
							<span class="price">947 000 руб.<span class="stripe-1"></span><span class="stripe-2"></span><span class="stripe-3"></span></span>
							<span class="credit"></span>
							<span class="sale">2008г, 138000км, 1.6 МКПП</span>
							<a class="used-cars__complectation-link" href="">Комплектация</a>
						</section>

						<section class="good-block good-block--used-cars clearfix">
							<a href=""><img src="/img/cars/patriot.png" alt="" class="photo"></a>
							<a href=""><h3 class="description">Chevrolet Lacetti</h3></a>
							<span class="price">947 000 руб.<span class="stripe-1"></span><span class="stripe-2"></span><span class="stripe-3"></span></span>
							<span class="credit"></span>
							<span class="sale">2008г, 138000км, 1.6 МКПП</span>
							<a class="used-cars__complectation-link" href="">Комплектация</a>
						</section>

						<section class="good-block good-block--used-cars clearfix">
							<a href=""><img src="/img/cars/patriot.png" alt="" class="photo"></a>
							<a href=""><h3 class="description">Opel Zafira</h3></a>
							<span class="price">947 000 руб.<span class="stripe-1"></span><span class="stripe-2"></span><span class="stripe-3"></span></span>
							<span class="credit"></span>
							<span class="sale">2008г, 138000км, 1.6 МКПП</span>
							<a class="used-cars__complectation-link" href="">Комплектация</a>
						</section>

						<section class="good-block good-block--used-cars clearfix">
							<a href=""><img src="/img/cars/patriot.png" alt="" class="photo"></a>
							<a href=""><h3 class="description">УАЗ Патриот</h3></a>
							<span class="price">947 000 руб.<span class="stripe-1"></span><span class="stripe-2"></span><span class="stripe-3"></span></span>
							<span class="credit"></span>
							<span class="sale">2008г, 138000км, 1.6 МКПП</span>
							<a class="used-cars__complectation-link" href="">Комплектация</a>
						</section>
				</section>
				<div class="nav-column autocredit-nav-column clearfix">	
					<?php
					include $_SERVER['DOCUMENT_ROOT'].'/html/php/popup-btn/trade-in.php'
					?>
					<?php
					include $_SERVER['DOCUMENT_ROOT'].'/html/php/popup-btn/comission.php'
					?>
					<?php
					include $_SERVER['DOCUMENT_ROOT'].'/html/php/popup-btn/utilization.php'
					?>
					<?php
					include $_SERVER['DOCUMENT_ROOT'].'/html/php/popup-btn/feedback.php'
					?>
				</div>
				<section class="main-column autocredit-content-block">
					
					<h2>Адреса автосалонов Торгмаш</h2>
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