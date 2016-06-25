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
			<h1>Контакты</h1>
			<hr class="headline">
			<div class="content-block-with-nav clearfix">
				<section class="main-column">
					<div class="contacts__address-block clearfix">
						<span class="title">Адреса</span>
						<div class="address--1">
							<div class="address">
								<span class="center-name">1. Торгмаш 88км МКАД</span>
								<span class="center-address"> МКАД 88 километр, вл.2 стр.1 — внешняя сторона</span>
							</div>
							<div class="time-block">
								<span class="description">Время работы<br> автосалона</span>
								<div class="days">
									<span class="weekdays">пн-сб: 9:00-21:00</span>
									<span class="weekend">вс: 9:00-19:00</span>
								</div>
							</div>
						</div>
						<div class="address--2">
							<div class="address">
								<span class="center-name">2. Торгмаш в Марьино</span>
								<span class="center-address">Москва, ул. Иловайская 2Б, стр. 1</span>
							</div>
							<div class="time-block">
								<span class="description">Время работы<br> автосалона</span>
								<div class="days">
									<span class="weekdays">пн-сб: 9:00-21:00</span>
									<span class="weekend">вс: 9:00-19:00</span>
								</div>
							</div>
						</div>
					</div>
				</section>
				<div class="nav-column contacts__nav-column clearfix">	
					<?php
					//to do
					include $_SERVER['DOCUMENT_ROOT'].'/html/php/popup-btn/buy-car.php'
					?>
					<a href="" class="trigger" data-popup="service">Записаться в сервис</a>
<?php
					include $_SERVER['DOCUMENT_ROOT'].'/html/php/popup-btn/feedback.php'
					?>
					<?php
					include $_SERVER['DOCUMENT_ROOT'].'/html/php/popup-btn/parts.php'
					?>
				</div>
				<section class="main-column">
					<h2 class="phone-and-address-title">Телефоны и адреса для писем</h2>
					<hr class="headline phone-and-address-hr">
					<div class="clearfix">
						<div class="phones-and-address-block">
							<div class="contacts__two-column-phones-block clearfix">
								<h3>Продажа <br> автомобилей</h3>
									<div class="phones">8 (495) 230-77-55 (многоканальный)<br>
									8-800-775-69-59 (бесплатно по России и с сотовых телефонов)<br>
									mail@torgmash-avto.ru</div>
							</div>
							<div class="contacts__two-column-phones-block clearfix">
								<h3>Сервис-центр<br>на МКАД 88</h3>
								<div class="phones">8 (495) 230-70-77<br>
								service@torgmash-avto.ru</div>
							</div>
							<div class="contacts__two-column-phones-block clearfix">
								<h3>Сервис-центр<br>в Марьино</h3>
								<div class="phones">8 (499) 356-10-12<br>
								service-mar@torgmash-avto.ru</div>
							</div>
							<div class="contacts__two-column-phones-block clearfix">
								<h3>Магазин<br>запчастей</h3>
								<div class="phones">Телефон: 
								8 (495) 230-77-56 (многоканальный)<br>
								Моб. телефон: 
								8 (985) 256-37-70<br>
								shop@tm-auto.ru</div>
							</div>
							<div class="contacts__two-column-phones-block clearfix">
								<h3></h3>
								<div class="phones">141031 Московская обл., Мытищинский р-н, пос. Нагорное, ул. Центральная вл. 2, стр. 1</div>
							</div>
						</div>
						<div class="contacts-map-block contacts-map-block--global"><script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=GSs1kcVllaaOG0hzrLk5BwoFTAisQgAN&width=100%&height=460&lang=ru_RU&sourceType=constructor"></script></div>
					</div>
					<div class="rubric-button-block clearfix">
						<a href="" class="rubric-button rubric-button__contacts--1">Как проехать в салон <br>на МКАД</a>
						<a href="" class="rubric-button rubric-button__contacts--2">Как проехать в салон<br>в Марьино</a>
						<a href="/html/company/about-us.php" class="rubric-button rubric-button__contacts--3">О компании</a>
						<a href="/html/company/about-us/news.php" class="rubric-button rubric-button__contacts--4">Новости</a>
					</div>
					<h2>Торгмаш на 88км МКАД: проезд на общественном транспорте</h2>
					<hr class="headline">
					<div class="clearfix">
						<div class="contacts-map-block"><script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=Ir2tNCsX4eIah5lHFq-Tn2hyzxg7ZSuv&width=500&height=400&lang=ru_RU&sourceType=constructor&scroll=true"></script></div>
						<div class="phones-and-address-block phones-and-address-block--way">
							<p><strong>Автостанция Мытищи</strong>: автобус №25 остановка на МКАД «Подушкино», внешняя сторона МКАД, далее к ДЦ ТоргМаш<br>
						  <strong>ж/д. станция Лобня</strong>: автобус №25 остановка на МКАД «Подушкино», внутреняя сторона МКАД, далее по переходу к ДЦ ТоргМаш<br>
						  <strong>ж/д. станция Лианозово</strong>: автобус №136, маршрутка №366М остановка на МКАД «Подушкино», внутреняя сторона МКАД, далее по переходу к ДЦ ТоргМаш<br>
							<strong>м. ВДНХ</strong>: автобус №136, маршрутка 366М остановка на МКАД «Подушкино», внешняя сторона МКАД, далее к ДЦ ТоргМаш<br>
							<strong>м. Алтуфьево</strong>: автобус №259 и №259К, маршрутка №359М до остановки «Дом культуры» на ул. Корнейчука, далее пройти 150 метров к переходу на внешнюю сторону МКАД (торговый центр «Час Пик» остается с правой стороны) к ДЦ «ТоргМаш»<br>
							<strong>м. Бибирево</strong>: автобус №290, маршрутка №290М до остановки «Дом культуры» на ул. Корнейчука, далее пройти 150 метров к переходу на внешнюю сторону МКАД (торговый центр «Час Пик» остается с правой стороны) к ДЦ «ТоргМаш»<br>
							<strong>м. Медведково</strong>: автобус №606, маршрутка №606М до остановки «Дом Культуры» на ул. Корнейчука, далее пройти 150 метров к переходу на внешнюю сторону МКАД (торговый центр «Час Пик» остается с правой стороны) к ДЦ «ТоргМаш»</p>
						</div>
						
					</div>
					<h2>Торгмаш в Марьино: проезд на общественном транспорте</h2>
					<hr class="headline">
					<div class="clearfix">
						<div class="contacts-map-block"><script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=YJQ0Sg4Fm1BWrb4l447_fBczKhKzdNYM&width=500&height=400&lang=ru_RU&sourceType=constructor&scroll=true"></script></div>
						<div class="phones-and-address-block phones-and-address-block--way">
							<p><strong>От м. Текстильщики</strong>: последний вагон из центра, на эскалаторе поднимаетесь в город. Справа остановка, маршрутные такси или автобусы № 135, 633, 641, 650. Вам нужна остановка "Учебный комбинат" на ул. Нижние Поля. Далее прямо, по ходу движения, до перекрестка (метров 20-30), поворачиваете направо и попадаете на ул. Иловайская. Прямо по ходу движения 100 метров до первого 3-х этажного здания, на здании вывески: "Автосалон", "Автомагазин". <br>
							Продажа автомобилей: УАЗ, Geely, Chevrolet <br><br>

							<strong>От пл. Перерва</strong>: выход 1-й вагон в Москву, поднимаетесь на железнодорожный мост и идете по мосту направо, спускаетесь с моста и попадаете на ул. Иловайская. Идете прямо, проходите АЗС "МТК", сразу за АЗС первое 3-х этажное здание<br><br>

							<strong>от м. Марьино</strong>: автобус или маршрутка 55, 749 до ост. "Автохозяйство", далее прямо по ходу движения 100 метров до первого 3-х этажного здания, на здании вывески: "Автосалон", "Автомагазин"</p>
						</div>
						
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