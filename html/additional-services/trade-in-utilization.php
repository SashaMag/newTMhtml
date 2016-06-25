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
			<h1>Программа обновления парка автомобилей</h1>
			<hr class="headline">

			<div class="content-block-with-nav clearfix">
				<section class="main-column">
					<div class="rubric-button-block clearfix">
						<a href="/html/additional-services/trade-in-utilization/trade-in.php" class="rubric-button rubric-button__additional-services--5">Заявка на Trade-in</a>
						<a href="/html/additional-services/trade-in-utilization/utilization.php" class="rubric-button rubric-button__additional-services--6">Заявка на утилизацию</a>
					</div>
				</section>
				<div class="nav-column autocredit-nav-column clearfix">	
					<?php
					include $_SERVER['DOCUMENT_ROOT'].'/html/php/popup-btn/trade-in.php'
					?>
					<?php
					include $_SERVER['DOCUMENT_ROOT'].'/html/php/popup-btn/utilization.php'
					?>
<?php
					include $_SERVER['DOCUMENT_ROOT'].'/html/php/popup-btn/feedback.php'
					?>
				</div>		

				<section class="main-column">
					<p>Программа утилизации и обновления парка автомобилей</p>
 
					<p>ПРОДОЛЖАЕТСЯ ПРОГРАММА УТИЛИЗАЦИИ и ОБНОВЛЕНИЯ ПАРКА АВТОМОБИЛЕЙ, которая дает уникальную возможность приобрести новый автомобиль с внушительной выгодой.</p>
 
					<p>Автосалон ТОРГМАШ предлагает Вам обменять свой старый автомобиль по программе TRADE-IN либо сдать его на утилизацию и получить при приобретении нового автомобиля, скидку: <br>
					-при покупке нового автомобиля до 120 000 рублей;</p>
					 
					<p>Нужно только заполнить заявку и выбрать новый автомобиль. <br>
					Ответ на заявку займёт всего несколько минут.
					После того, как все графы будут заполнены и заявка отправлена, менеджеры нашего автосалона свяжутся с Вами в течение нескольких минут</p>
					 
					<p>Покупка в кредит
					У Вас есть возможность приобрести новый автомобиль и в кредит, при этом получив по программе утилизации положенную компенсацию. <br>
					Все остальное мы сделаем сами:</p>
					 
					<p>По программе УТИЛИЗАЦИИ<br>
					-Бесплатно снимем с учета в органах ГИБДД;<br>
					-Бесплатно доставим до пункта утилизации;<br>
					-Бесплатно утилизируем.</p>
					 
					<p>По программе TRADE-IN <br>
					Вы можете стать участником программы и получить скидку на новый автомобиль: <br>
					- Сдав, в нашем автосалоне, Ваш старый автомобиль в зачет стоимости нового автомобиля <br>
					- При оформлении, в нашем автосалоне, договора купли-продажи Вашего старого автомобиля, на покупателя которого Вы нашли сами.</p>
				</section>

			</div>		

		</div>

	</main>

	<?php
	include $_SERVER['DOCUMENT_ROOT'].'/html/php/footer.php'
	?>

</body>

</html>