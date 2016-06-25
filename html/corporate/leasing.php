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
			</div>
		</div>

		<div class="container">
			<h1>Лизинг</h1>
			<hr class="headline">
			<div class="two-banner-block">
				<div class="banner"><img src="/img/banners/banner.jpg" alt=""></div>
				<div class="banner"><img src="/img/banners/banner.jpg" alt=""></div>
			</div>

			<div class="content-block-with-nav clearfix">
				<section class="main-column">
				</section>
				<div class="nav-column autocredit-nav-column clearfix">	
					<?php
					include $_SERVER['DOCUMENT_ROOT'].'/html/php/popup-btn/leasing.php'
					?>
<?php
					include $_SERVER['DOCUMENT_ROOT'].'/html/php/popup-btn/feedback.php'
					?>
				</div>
				<section class="main-column autocredit-content-block">
					
					<p>Лизинг автомобилей — это финансовый инструмент, позволяющий предприятиям приобретать и обновлять основные фонды для осуществления предпринимательской деятельности.</p>
					<p>По сути, лизинг - это долгосрочная аренда имущества с последующим правом выкупа, обладающая налоговыми преференциями.</p>

					<img src="/img/corporate/leasing/leasing.jpg" alt="" class="leasing-picture">
					 
					<p>Лизинг автотранспорта - оптимальное решение
					для бизнеса</p>
					 
					<p>Экономично и выгодно
					Приобретая автомобиль в лизинг, Вы экономите
					на налогах:</p>
					<p>На прибыль - лизинговые платежи полностью
					относятся на себестоимость.
					Если Вы плательщик НДС – Вы получаете зачет
					НДС по лизинговым платежам.</p>
					 
					<p>Эффективно и без обременений
					Приобретая автомобиль в лизинг, Вы сохраняете оборотные средства в компании.
					Вам не потребуется «затягивать пояс» или брать кредиты. Автомобили финансируются за счет лизинга, лизинговые платежи постепенно выплачиваются не создавая обременения для бизнеса.
					Мы приобретем для вас автомобили и позволим вашему бизнесу продолжать эффективно развиваться.</p>
					 
					<p>Доступно и быстро
					В отличие от кредита, для лизинговой сделки не требуется залога и открытия счетов.</p>
					 
					<p>Мы знаем как порой трудно общаться с банкирами и как долго занимает процесс получения решения на кредитном комитете банка.</p>
					 
					<p>Мы поможем Вам быстро найти нужный автомобиль.</p>

					

					<h2>Наши партнеры</h2>
					<hr class="headline">
					<div class="autocredit__partners-logos-block">
						<div class="logo"><img src="/img/banners/sberbank.png" alt=""></div>
						<div class="logo"><img src="/img/banners/sberbank.png" alt=""></div>
						<div class="logo"><img src="/img/banners/sberbank.png" alt=""></div>
						<div class="logo"><img src="/img/banners/sberbank.png" alt=""></div>
						<div class="logo"><img src="/img/banners/sberbank.png" alt=""></div>
						<div class="logo"><img src="/img/banners/sberbank.png" alt=""></div>
						<div class="logo"><img src="/img/banners/sberbank.png" alt=""></div>
						<div class="logo"><img src="/img/banners/sberbank.png" alt=""></div>
						<div class="logo"><img src="/img/banners/sberbank.png" alt=""></div>
						<div class="logo"><img src="/img/banners/sberbank.png" alt=""></div>
						<div class="logo"><img src="/img/banners/sberbank.png" alt=""></div>
						<div class="logo"><img src="/img/banners/sberbank.png" alt=""></div>
						<div class="logo"><img src="/img/banners/sberbank.png" alt=""></div>
						<div class="logo"><img src="/img/banners/sberbank.png" alt=""></div>
						<div class="logo"><img src="/img/banners/sberbank.png" alt=""></div>
						<div class="logo"><img src="/img/banners/sberbank.png" alt=""></div>
						<div class="logo"><img src="/img/banners/sberbank.png" alt=""></div>
						<div class="logo"><img src="/img/banners/sberbank.png" alt=""></div>
						<div class="logo"><img src="/img/banners/sberbank.png" alt=""></div>
						<div class="logo"><img src="/img/banners/sberbank.png" alt=""></div>
					</div>

					<h2>Телефоны</h2>
					<hr class="headline">
					<?php
					include $_SERVER['DOCUMENT_ROOT'].'/html/php/phones-block-corporate.php'
					?>

					<h2>Адреса салонов Торгмаш</h2>
					<hr class="headline">
					<?php
					include $_SERVER['DOCUMENT_ROOT'].'/html/php/address-block.php'
					?>

					<h2>Заявка на лизинг</h2>
					<hr class="headline">
					<div class="embedded-form">
						<?php
						include $_SERVER['DOCUMENT_ROOT'].'/html/php/forms/form-leasing.php'
						?>
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