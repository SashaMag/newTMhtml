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
				<a href="/html/additional-services/trade-in-utilization.php">Трейд-ин и утилизация</a>
				<span>/</span>
			</div>
		</div>

		<div class="container">

			<div class="content-block-with-nav clearfix">
				<section class="main-column">
					<h1>Заявка на трейд-ин</h1>
					<hr class="headline">
					<div class="embedded-form">
						<?php
						include $_SERVER['DOCUMENT_ROOT'].'/html/php/forms/form-trade-in.php'
						?>
					</div>
				</section>
				<div class="nav-column autocredit-nav-column clearfix">	
<?php
					include $_SERVER['DOCUMENT_ROOT'].'/html/php/popup-btn/feedback.php'
					?>
				</div>		
			</div>		

		</div>

	</main>

	<?php
	include $_SERVER['DOCUMENT_ROOT'].'/html/php/footer.php'
	?>

</body>

</html>