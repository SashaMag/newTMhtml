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
				<a href="/html/additional-services.php">Услуги</a>
				<span>/</span>
			</div>
		</div>

		<div class="container">
			<h1>Авто на комиссию в Москве</h1>
			<hr class="headline">

			<div class="content-block-with-nav clearfix">
				<section class="main-column">
					<p>Комиссионная продажа авто является для Вас оптимальным вариантом, если Вы цените собственное время и желаете сдать авто на комиссию, осуществив сделку по действительно выгодной цене и обезопасить себя от всевозможных неприятностей.</p>
 
					<p>Комиссионная продажа автомобиля в компании Торгмаш это :</p>

					<ul>
						<li>возможность безопасно и максимально быстро продать автомобиль;</li>
						<li>размещение рекламы в самых известных автомобильных изданиях;</li>
						<li>предоставление бесплатной стоянки на весь срок реализации;</li>
						<li>бесплатная предпродажная подготовка автомобиля;</li>
						<li>фиксированная комиссионная наценка;</li>
						<li>удобное расположение автосалонов;</li>
						<li>квалифицированность персонала;</li>
						<li>гарантия юридической чистоты.</li>
					</ul>
				</section>
				<div class="nav-column autocredit-nav-column clearfix">
					<?php
					include $_SERVER['DOCUMENT_ROOT'].'/html/php/popup-btn/comission.php'
					?>	
<?php
					include $_SERVER['DOCUMENT_ROOT'].'/html/php/popup-btn/feedback.php'
					?>
				</div>		

				<section class="main-column">
					<div class="embedded-form">
						<?php
						include $_SERVER['DOCUMENT_ROOT'].'/html/php/forms/form-utilization.php'
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