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
			<div class="content-block-with-nav  clearfix">
				<section class="main-column">
					<div class="rubric-button-block clearfix">
						<a href="/html/used-cars/used-cars-in-stock.php" class="rubric-button rubric-button__used-cars--1">Автомобили <br>в наличии</a>
						<a href="" class="rubric-button rubric-button__used-cars--2">Trade-in (обмен)</a>
						<a href="" class="rubric-button rubric-button__used-cars--3">Утилизация</a>
						<a href="" class="rubric-button rubric-button__used-cars--4">Комиссия</a>
					</div>
				</section>
				<div class="nav-column used-cars__nav-column clearfix">
					<?php
					include $_SERVER['DOCUMENT_ROOT'].'/html/php/popup-btn/trade-in.php'
					?>
					<?php
					include $_SERVER['DOCUMENT_ROOT'].'/html/php/popup-btn/utilization.php'
					?>
					<?php
					include $_SERVER['DOCUMENT_ROOT'].'/html/php/popup-btn/comission.php'
					?>
<?php
					include $_SERVER['DOCUMENT_ROOT'].'/html/php/popup-btn/feedback.php'
					?>
				</div>
				<section class="main-column">
					<h2>Продажа авто с пробегом</h2>
					<hr class="headline">
					<input type="checkbox" name="paragraph__show-content" id="paragraph__checkbox--1" class="paragraph__checkbox-show-more">
					<div class="paragraph__collapsing-content paragraph__checkbox--1">
						<p>Продажа авто с пробегом через официального дилера – лучший вариант приобретения транспортного средства. Такая покупка поможет сэкономить и обеспечить достойное техническое состояние автомобиля с пробегом. Компания , реализующая автомобили б/у, в обязательном порядке проводит полноценную диагностику технического состояния автомобиля. Подготовка к продаже машины также включает в себя оценку юридической чистоты и грамотности всей соответствующей документации.</p>
 
						<p>Приобретение подержанного авто через автосалоны нашей компании позволит Вам получить индивидуальную консультацию специалиста и провести тест-драйв заинтересовавшей Вас модели.</p>
						 
						<p><strong>Преимущества покупки подержанного автомобиля в салонах компании:</strong></p>
							<ul>
								<li>Возможность приобретения б/у авто в кредит. Если Вы не имеете достаточных средств для приобретения подержанного автомобиля по полной цене, мы предоставим Вам возможность покупки в кредит на самых выгодных условиях и в срочном порядке;</li>
								<li>Широкий выбор моделей в любом автосалоне дилерской сети;</li>
								<li>Качественное послегарантийное обслуживание в технических центрах . Любой постгарантийный ремонт выполняется в сжатые сроки и за приемлемую плату;</li>
								<li>Юридическая помощь в оформлении покупки;</li>
							</ul>

						<p>Покупая машину с пробегом в Торгмаш, Вы приобретаете надежный и проверенный транспорт, который обязательно станет Вам хорошим другом и помощником!</p>
					</div>				
					<label for="paragraph__checkbox--1" class="paragraph__label-show-more paragraph__label--1">Показать больше</label>
					<h2>Автомобили с пробегом в наличии</h2>
					<hr class="headline">
					<div class="new-cars__goods-block clearfix">

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

					</div>	
					<h2>Где можно воспользоваться Trade-in</h2>
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