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
				<a href="/html/index.php">Тюнинг</a>
				<span>/</span>
				<a href="/html/index.php">Тюнинг УАЗ</a>
				<span>/</span>
			</div>
		</div>

		<div class="container">
			<h1>Полный каталог тюнинга УАЗ</h1>
			<hr class="headline">

			<div class="content-block-with-nav clearfix">
				<div class="nav-column autocredit-nav-column clearfix">	
					<?php
					include $_SERVER['DOCUMENT_ROOT'].'/html/php/popup-btn/tuning-request.php'
					?>
<?php
					include $_SERVER['DOCUMENT_ROOT'].'/html/php/popup-btn/feedback.php'
					?>
				</div>
				<section class="main-column autocredit-content-block clearfix">

					<div class="content-with-aside-collage">
						<h2>Интерьер</h2>
						<ul>
							<li><a href="">Ковры автомобильные (кликабельно)</a></li>
							<li><a href="">Ковры автомобильные</a></li>
							<li><a href="">Ковры автомобильные</a></li>
							<li><a href="">Ковры автомобильные</a></li>
							<li><a href="">Ковры автомобильные</a></li>
							<li><a href="">Ковры автомобильные</a></li>
						</ul>
						<br>

						<h2>Экстерьер</h2>
						<ul>
							<li><a href="">Антикор, антишум</a></li>
							<li><a href="">Антикор, антишум</a></li>
							<li><a href="">Антикор, антишум</a></li>
							<li><a href="">Антикор, антишум</a></li>
							<li><a href="">Антикор, антишум</a></li>
							<li><a href="">Антикор, антишум</a></li>
						</ul>
					</div>

					<div class="tuning-aside-collage"><img src="/img/temp/collage.jpg" alt=""></div>

				</section>				

			</div>		

		</div>

	</main>

	<?php
	include $_SERVER['DOCUMENT_ROOT'].'/html/php/footer.php'
	?>

</body>

</html>