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
			<h1>Стандартный пакет тюнинга Хантер Beach</h1>
			<hr class="headline">

			<div class="content-block-with-nav clearfix">
				<section class="main-column">
				</section>
				<div class="nav-column autocredit-nav-column clearfix">	
					<?php
					include $_SERVER['DOCUMENT_ROOT'].'/html/php/popup-btn/tuning-request.php'
					?>
<?php
					include $_SERVER['DOCUMENT_ROOT'].'/html/php/popup-btn/feedback.php'
					?>
				</div>
				<section class="main-column autocredit-content-block">

					<div class="bxslider">						
						<?php
						include $_SERVER['DOCUMENT_ROOT'].'/html/php/tuning/uaz/standart-options.php'
						?>
					</div>

					<div class="tablet-visible-block bxslider-tablet bxslider-tablet clearfix">
						<?php
						include $_SERVER['DOCUMENT_ROOT'].'/html/php/tuning/uaz/standart-options.php'
						?>
					</div>

					<p>УАЗ 315196 в исполнении «Beach» - автомобиль с открытым кузовом, оснащенный трубчатым каркасом с мягкими накладками. Cтильный пляжный или просто развлекательный вариант, который позволит владельцу прокатиться по пляжному песку с ветерком и с брызгами под завистливые взгляды окружающих.</p>
					<p>Этот УАЗ точно не застрянет в песке у кромки воды. Оснащенный Резиной А/Т 33х12.5 R15 на хромированных дисках, лифт подвески 2” с амортизаторами Rancho.</p>
					<p>Тип кузова - фаэтон. Это четырехместный автомобиль с раздвижным или съемным верхом, как у кабриолета, но без боковых стекол.Часто как отличительную особенность фаэтона указывают особый комфорт и удобство, для этого есть удобные сидения от BMW с электроприводом и подогревом цвета «слоновая кость» Разные люди выбирают машины- по разным критериям. Для кого-то важен внешний вид, для кого-то престижность, кто-то зацикливается на мощности, а кому-то важно удобство. Есть еще один фактор – величина кайфа! И поверьте, кайфа от этой машины хоть отбавляй.</p>

					<h2>Что входит в стандартный пакет тюнинга УАЗ Хантер Beach</h2>
					<hr class="headline">

					<?php
					include $_SERVER['DOCUMENT_ROOT'].'/html/php/tuning/uaz/standart-options/beach.php'
					?>

					<h2>Где сделать тюнинг УАЗ</h2>
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