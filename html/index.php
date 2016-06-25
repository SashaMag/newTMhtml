<?php
header("HTTP/1.1 301 Moved Permanently"); // отправляем заголовок состояния (в нашем случае - это редирект 301)
header("Location: http://torgmash-avto.ru"); // редирект на другую страницу блога
exit();

?>

<!DOCTYPE html>
<html>

<head>
	<meta name="robots" content="noindex"/>

	<?php
	include $_SERVER['DOCUMENT_ROOT'].'/html/php/head.php'
	?>

</head>

<body>

	<?php
	include $_SERVER['DOCUMENT_ROOT'].'/html/php/header.php'
	?>

	<main>

		<!-- две колонки -->
		<div class="content-block-with-nav container">
			<section class="main-column">
				<div class="example-banner">

				</div>
			</section>
			<div class="nav-column clearfix">
				<?php
					include $_SERVER['DOCUMENT_ROOT'].'/html/php/popup-btn/buy-car.php'
					?>
				<a href="" class="trigger" data-popup="service">Запись в сервис</a>
				<?php
					include $_SERVER['DOCUMENT_ROOT'].'/html/php/popup-btn/feedback.php'
					?>
			</div>
		</div>

		<div class="container">
			<section class="banner-block clearfix">
				<h2>Спецпредложения</h2>
				<hr class="headline">
				<div class="two-banner-block">
					<div class="banner"><img src="/img/banners/banner.jpg" alt=""></div>
					<div class="banner"><img src="/img/banners/banner.jpg" alt=""></div>
				</div>
				<a href="" class="link-view-all">Все акции и предложения</a>
			</section>

			<section class="index__tuning-block index__content-block clearfix">
				<h2>Наши работы по тюнингу</h2>
				<hr class="headline">

					<div class="bxslider">						
						<?php
						include $_SERVER['DOCUMENT_ROOT'].'/html/php/tuning/index-block.php'
						?>
					</div>

					<div class="tablet-visible-block bxslider-tablet bxslider-tablet-4 clearfix">
						<?php
						include $_SERVER['DOCUMENT_ROOT'].'/html/php/tuning/index-block.php'
						?>
					</div>

				<a href="" class="link-view-all">Показать все работы</a>
			</section>

			<section class="index__news-block news-block  clearfix">
				<h2>Новости</h2>
				<hr class="headline">
				<div class="clearfix">

				<article class="news-item">
					<time datetime="2015-10-24">24.10.2015</time>
					<img src="/img/news/news.jpg" alt="Мы переехали">
					<h2><a href="">Мы переехали</a></h2>
					<span class="description">Автосалон на Дмитровском шоссе переехал на МКАД 88</span>
					<a href="" class="view-more">Подробнее</a>
				</article>

				<article class="news-item">
					<time datetime="2015-10-20">20.10.2015</time>
					<img src="/img/news/news-2.jpg" alt="Специальное предложение на шиномонтаж">
					<h2><a href="">До 30 октября 2015</a></h2>
					<span class="description">При заказе шиномонтажа вы получаете бонусы!</span>
					<a href="" class="view-more">Подробнее</a>
				</article>

				<article class="news-item">
					<time datetime="2015-10-24">24.10.2015</time>
					<img src="/img/news/news.jpg" alt="Мы переехали">
					<h2><a href="">Мы переехали</a></h2>
					<span class="description">Автосалон на Дмитровском шоссе переехал на МКАД 88</span>
					<a href="" class="view-more">Подробнее</a>
				</article>

				<article class="news-item">
					<time datetime="2015-10-20">20.10.2015</time>
					<img src="/img/news/news-2.jpg" alt="Специальное предложение на шиномонтаж">
					<h2><a href="">До 30 октября 2015</a></h2>
					<span class="description">При заказе шиномонтажа вы получаете бонусы!</span>
					<a href="" class="view-more">Подробнее</a>
				</article>

				</div>
				<a href="" class="link-view-all">Показать все новости</a>
			</section>

			<section class="index__about-us-block index__content-block clearfix">
				<h2>О компании</h2>
				<hr class="headline">
				<div class="two-column-text">
					<p>Компания «Торгмаш» занимается продажей и обслуживанием автомобилей с 1995 года.</p>
	 
					<p>За это время десятки тысяч автомобилей нашли у нас своих хозяев. Вы можете встретить машины с логотипом «Торгмаш» в любом уголке России, в СНГ и за границей.</p>
					 
					<p><p>Мы являемся официальным дилером таких марок автомобилей как : SsangYong, УАЗ, ТАГАЗ, GEELY и Haima.</p>
					 
					<p>Особой гордостью Компании является освоение производства широкого спектра тюнинга автомобилей, в том числе и сложного технического.</p>
					 
					<p>Единый консультационный центр всегда готов ответить на Ваши вопросы и при необходимости соединить Вас с продавцом-консультантом или соответствующим специалистом.</p>
					
					<p>Гарантийное и послегарантийное обслуживание в наших дилерских центрах обеспечат отличное состояние Вашего автомобиля в течении всего срока его эксплуатации.</p>
					 
					<p>Для клиентов постоянно пользующихся услугами наших автосервисов разработана система скидок!</p>
					 
					<p>При покупке автомобиля Вы сразу же можете застраховать свой автомобиль, выбрав из широкого списка страховую компанию.</p>
					 
					<p>В автосалонах «Торгмаш» предоставлена возможность быстро и без проблем оформить кредит, выбрав банк соответствующий Вашим требованиям.</p>
					 
					<p>Постоянно развиваясь, Компания ставит перед собой цель соответствовать самым высоким стандартам и ожиданиям покупателей, чтобы наши клиенты находились в атмосфере доброжелательности, получали качественные услуги и число постоянных клиентов и Друзей Компании постоянно росло.</p>
				</div>
				<a href="" class="link-view-all clearfix">Еще информация о компании</a>
			</section>

			<section class=" clearfix">
				<h2>Адреса автосалонов Торгмаш</h2>
				<hr class="headline">
				<?php
				include $_SERVER['DOCUMENT_ROOT'].'/html/php/address-block.php'
				?>
			</section>
		</div>
	


	</main>

	<?php
	include $_SERVER['DOCUMENT_ROOT'].'/html/php/footer.php'
	?>

</body>

</html>