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

			<div class="content-block-with-nav clearfix">
	
				<section class="main-column">			
					<h1>Тест-драйв</h1>
					<hr class="headline">
					<p>Для того, чтобы Вы могли еще до покупки лучше познакомиться с автомобилем, мы предлагаем воспользоваться тест-драйвом. Вы можете совершить пробную поездку на специально выделенном для этого автомобиле. Пробная поездка поможет Вам сделать правильный выбор.</p>
 
					<p>Записаться на тест-драйв UAZ Патриот Вы можете, позвонив по нашим телефонам или заполнить заявку на выбранную модель</p>
					 
					<p>В первую очередь предлагаем Вам тест-драйв на флагмане марки УАЗ - УАЗ Патриот. Сегодня это самый красивый и наиболее функциональный отечественный автомобиль, обладающий большим салоном, где могут свободно разместиться пять человек. <br>
					На тест-драйве Вы опробуете УАЗ Патриот на ходу, и будете приятно удивлены. Машина уверенно, резво набирает скорость, КПП работает плавно и точно. Все это достигается корейскими сидениями, итальянской оптикой, корейской 5-ступенчатой КПП Daymos, гидроусилителем руля Delphi, немецким сцеплением Luk. В комплектациях UAZ Patriot в наличии бензиновый ЗМЗ-40 128 л.с. и дизельный ЗМЗ 51432 113 л.с.</p>
				</section>
				<div class="nav-column autocredit-nav-column clearfix">	
<?php
					include $_SERVER['DOCUMENT_ROOT'].'/html/php/popup-btn/feedback.php'
					?>
				</div>		

				<section class="main-column">
					<div class="embedded-form">
						<?php
						include $_SERVER['DOCUMENT_ROOT'].'/html/php/forms/form-test-drive.php'
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