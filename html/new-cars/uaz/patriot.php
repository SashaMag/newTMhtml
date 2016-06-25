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
				<a href="">Новые автомобили</a>
				<span>/</span>
				<span>УАЗ</span>
			</div>
		</div>
			
		<div class="container">
			<div class="content-block-with-nav model-page container clearfix">
				<section class="main-column">
					<h1 class="model-page__headline">УАЗ Патриот</h1>
					<div class="model-page__photo-block clearfix">
						<div class="model-photoes">
							<img src="/img/cars/uaz/patriot/black.png" alt="" class="active black">		
							<img src="/img/cars/uaz/patriot/black.png" alt="" class=" green">		
							<img src="/img/cars/uaz/patriot/black.png" alt="" class=" gold">		
							<img src="/img/cars/uaz/patriot/black.png" alt="" class=" blue">		
							<img src="/img/cars/uaz/patriot/black.png" alt="" class=" yellow">		
							<img src="/img/cars/uaz/patriot/black.png" alt="" class=" white">		
							<img src="/img/cars/uaz/patriot/black.png" alt="" class=" grey">							
						</div>
						<div class="model-page__color-pick-block">
							<div data-color="black" class="color-pick color-pick--black active"></div>
							<div data-color="green" class="color-pick color-pick--green"></div>
							<div data-color="gold" class="color-pick color-pick--gold"></div>
							<div data-color="blue" class="color-pick color-pick--blue"></div>
							<div data-color="yellow" class="color-pick color-pick--yellow"></div>
							<div data-color="white" class="color-pick color-pick--white"></div>
							<div data-color="grey" class="color-pick color-pick--grey"></div>
						</div>
					</div>
					<div class="model-page__form-block form-block">
						<form action="" class="clearfix uaz">
							<div class="price-description">
								<span class="wanna-buy">Хотите приобрести УАЗ Патриот?</span>
								<div class="price-block">
									<span class="price">Цена от <span>589 000</span> руб.</span>
									<span class="credit-pay">В кредит от 15 000 руб/мес.</span>
								</div>
							</div>
							<div class="buy-method-block">
								<span class="buy-method">Выберите вариант покупки</span>
								<div class="radio-block">
									<input type="radio" name="model-page__radio" id="model-page__radio--1" value="cash" checked>
									<input type="radio" name="model-page__radio" id="model-page__radio--2" value="credit">
									<label for="model-page__radio--1" class="radio-label radio-label-1">За наличные</label>
									<label for="model-page__radio--2" class="radio-label radio-label-2">В кредит</label>
								</div>
							</div>
							<div class="select-complectation-block">
								<select name="" id="">
									<option value="">Выберите комплектацию</option>
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
								</select>
								<a href="" class="full-complectation">Полное описание комплектации</a>
							</div>
							<div class="user-contacts">
								<input type="text" name="" id="" placeholder="Ваше имя" class="model-page__input-name">
								<input type="text" name="" id="" placeholder="Телефон" class="model-page__input-phone">
								<select name="" id="" class="buy-method__select-list">
									<option value="">Обычная покупка</option>
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
								</select>
							</div>
							<button class="print"></button>
							<button class="share"></button>
							<button type="submit">Отправить заявку</button>
						</form>
					</div>
				</section>
				<div class="nav-column nav-column-uaz clearfix">
					<?php
					include $_SERVER['DOCUMENT_ROOT'].'/html/php/popup-btn/buy-car.php'
					?>
					<?php
					include $_SERVER['DOCUMENT_ROOT'].'/html/php/popup-btn/credit.php'
					?>
					<?php
					include $_SERVER['DOCUMENT_ROOT'].'/html/php/popup-btn/credit-calc.php'
					?>
					<?php
					include $_SERVER['DOCUMENT_ROOT'].'/html/php/popup-btn/test-drive.php'
					?>
					<?php
					include $_SERVER['DOCUMENT_ROOT'].'/html/php/popup-btn/trade-in.php'
					?>
					<?php
					include $_SERVER['DOCUMENT_ROOT'].'/html/php/popup-btn/feedback.php'
					?>
				</div>
			</div>
		</div>

		<div class="container">



			<div class="ionTabs" id="tabs_1" data-name="Tabs_Group_name">
		    <ul class="ionTabs__head uaz">
		        <li class="ionTabs__tab" data-target="Tab_1_name">Описание</li>
		        <li class="ionTabs__tab" data-target="Tab_2_name">Автомобили в наличии</li>
		        <li class="ionTabs__tab" data-target="Tab_3_name">Специальные предложения</li>
		        <li class="ionTabs__tab" data-target="Tab_4_name">Комплектации и цены</li>
		        <li class="ionTabs__tab" data-target="Tab_5_name">Тюнинг</li>
		        <li class="ionTabs__tab" data-target="Tab_6_name">Тех. характеристики</li>
		        <li class="ionTabs__tab" data-target="Tab_7_name">Фотоальбом</li>
		    </ul>
		    <div class="ionTabs__body">

	      <div class="ionTabs__item" data-name="Tab_1_name">
    			<h2>Комплектации и цены</h2>
					<hr class="headline">
					<?php
					include $_SERVER['DOCUMENT_ROOT'].'/html/php/model-page-table/uaz-patriot-complectation-and-price.php'
					?>

					<div class="model-page__exterior-block model-page__content-block">
						<h2>Экстерьер</h2>
						<hr class="headline">
						<input type="checkbox" name="paragraph__show-content" id="paragraph__checkbox--1" class="paragraph__checkbox-show-more">

						<div class="bxslider">						
							<?php
							include $_SERVER['DOCUMENT_ROOT'].'/html/php/model-page-photoes/uaz-patriot-exterior.php'
							?>
						</div>

						<div class="tablet-visible-block bxslider-tablet bxslider-tablet-4 clearfix">
							<?php
							include $_SERVER['DOCUMENT_ROOT'].'/html/php/model-page-photoes/uaz-patriot-exterior.php'
							?>
						</div>

						<div class="paragraph__collapsing-content paragraph__checkbox--1">

							
							<p>Специалисты, для того чтобы улучшить потребительские характеристики, в обновлённом автомобиле использовали вклеенные стёкла. В дизайне УАЗ Патриот (Patriot) нового поколения сочетаются между собой мощь, надёжность, комфорт и универсальность. Выразительную внешность автомобилю придаёт комплект из решётки радиатора V – образной формы и фар дневного хода со светодиодами. Заметным и привлекающим взгляд в потоке машин Патриот делают: в цвет кузова складывающиеся зеркала с имеющимися на них повторителями со светодиодами, противотуманные увеличенные фары и дополнительный светодиодный сигнал тормоза.</p>		
							<p>Обзавелась новинка и интегрированными подножками сбоку с объёмными нишами, при этом они не повреждаются в поездке по бездорожью. Сзади автомобиль также не остался без внимания, его преобразили за счёт нового контейнера для запаски с надписью PATRIOT серебряного цвета и современных фонарей. Для устойчивости на скорости и борьбы с кренами кузова во время совершения манёвров и поворотов Патриоту установили стабилизатор поперечной устойчивости сзади.</p>
							<p>Обзавелась новинка и интегрированными подножками сбоку с объёмными нишами, при этом они не повреждаются в поездке по бездорожью. Сзади автомобиль также не остался без внимания, его преобразили за счёт нового контейнера для запаски.</p>
						</div>				
						<label for="paragraph__checkbox--1" class="paragraph__label-show-more paragraph__label--1">Показать больше</label>
					</div>

					<div class="model-page__interion-block model-page__content-block">
						<h2>Интерьер</h2>
						<hr class="headline">
						<input type="checkbox" name="paragraph__show-content" id="paragraph__checkbox--2" class="paragraph__checkbox-show-more">
						<ul class="bxslider">						
							<?php
							include $_SERVER['DOCUMENT_ROOT'].'/html/php/model-page-photoes/uaz-patriot-interior.php'
							?>
						</ul>

						<ul class="tablet-visible-block bxslider-tablet bxslider-tablet-4 clearfix">
							<?php
							include $_SERVER['DOCUMENT_ROOT'].'/html/php/model-page-photoes/uaz-patriot-interior.php'
							?>
						</ul>
						<div class="paragraph__collapsing-content paragraph__checkbox--2">

							
							<p>Новый автомобиль имеет комфортное и современное внутреннее убранство. Качественные материалы просторного салона идеально сочетаются с набором необходимых функций, которые включают в себя:</p>
							<p>Мультимедийную систему с сенсорным дисплеем  размером в 7-мь дюймов, воспроизводящим Full HD видео, имеющим широкий угол обзора, идеальную читаемость<br>
							FM/AM/MP3 с USB/AUX-портами<br>
							4 динамика<br>
							Навигационную систему - Navitel с покрытием России, Украины, Белоруссии, Казахстана<br>
							Компас<br>
							Парктроник с камерой заднего вида<br>
							Приборы с датчиком, измеряющим температуру воздуха снаружи<br>
							Плафоны, имеющие функцию «вежливый свет»<br>
							Маршрутный компьютер.<br>
							Предпусковой подогреватель и возможность его программировать, а также второй отопитель салона для сидящих на заднем ряду пассажиров, имеющий отдельный вентилятор и дефлекторы обдува регулируемые, позволяющие поддерживать заданную температуру, создавая индивидуальный микроклимат сзади – это ещё пара опций, которые появились в УАЗ Патриот.</p>
							<p>Сидения также претерпели изменения: диапазон перемещения продольно расширен, наклон спинки, и подпора поясничного имеет бесступенчатую регулировку, есть и высотная регулировка – все эти функции позволяют водителю с любым телосложением устроиться комфортно. Помимо этого, спинки сидений спереди можно разложить и получить, с подушками задних кресел, хорошее спальное место.</p>
							<p>Сидения сзади оснащены актуальной для многих владельцев системой безопасного крепления кресел для детей – ISOFIX.</p>
						</div>				
						<label for="paragraph__checkbox--2" class="paragraph__label-show-more paragraph__label--2">Показать больше</label>
					</div>
							<div class="model-page__engine-type model-page__content-block">
								<h2>Варианты двигателей</h2>
								<hr class="headline">
								<p>Все варианты модели автомобиля могут комплектоваться как дизельными, так и бензиновыми моторами, которые имеют высокий крутящий момент на малых оборотах и хорошую мощность. Данные составляющие позволяют обновлённому автомобилю УАЗ Патриот с уверенностью трогаться на трассах за городом и комфортно чувствовать на городских дорогах. Скоростной максимум: бензин (ЗМЗ-40905, Евро-4, V= 2,7л.) – 150 км/ч, дизель (ЗМЗ-51432, Евро-4, V = 2,2 л.) – 135 км/ч.</p>
								<div class="engine__image-block">
									<img src="/img/temp/engines.jpg" alt="">
								</div>
							</div>

							<div class="model-page__tech-specification">
								<h2>Технические характеристики</h2>
								<hr class="headline">
								<?php
								include $_SERVER['DOCUMENT_ROOT'].'/html/php/model-page-table/uaz-patriot-tech-spec.php'
								?>
								<div class="clearfix link-view-all-block">
									<a href="" class="link-view-all">Все технические характеристики</a>
								</div>
							</div>
							 
							<div class="model-page__in-stock model-page__in-stock--collapsed">
								<h2>УАЗ Патриот в наличии</h2>
								<hr class="headline">
								<?php
								include $_SERVER['DOCUMENT_ROOT'].'/html/php/model-page-table/uaz-patriot-in-stock.php'
								?>
								<div class="clearfix link-view-all-block">
									<a href="" class="link-view-all">Все автомобили в наличии</a>
								</div>
							</div>

		        </div>



		        <div class="ionTabs__item" data-name="Tab_2_name">
		        	
		           <div class="model-page__in-stock">
								<h2>УАЗ Патриот в наличии</h2>
								<hr class="headline">
								<?php
								include $_SERVER['DOCUMENT_ROOT'].'/html/php/model-page-table/uaz-patriot-in-stock.php'
								?>
							</div>

		        </div>




		        <div class="ionTabs__item" data-name="Tab_3_name">
        			<h2>Спецпредложения</h2>
							<hr class="headline">
							<div class="special-offer__select-type-block">
								<button class="special-offer__select-offer-type-button" id="special-offer__select-offer-type--1">Продажа автомобилей</button>
								<button class="special-offer__select-offer-type-button" id="special-offer__select-offer-type--2">Сервис</button>
							</div>
							<div class="special-offer--uaz special-offer-block clearfix">
								<div class="sale-block">
									<h2>По продаже УАЗ</h2>
									<hr class="headline">
									<div class="banner-block"><img src="/img/banners/banner.jpg" alt=""><img src="/img/banners/banner.jpg" alt=""></div>
								</div>
								<div class="service-block">
									<h2>По сервису УАЗ</h2>
									<hr class="headline">
									<div class="banner-block clearfix"><img src="/img/banners/banner.jpg" alt=""><img src="/img/banners/banner.jpg" alt=""><img src="/img/banners/banner.jpg" alt=""><img src="/img/banners/banner.jpg" alt=""></div>
								</div>
							</div>

		        </div>




		        <div class="ionTabs__item" data-name="Tab_4_name">
		        	<?php
							include $_SERVER['DOCUMENT_ROOT'].'/html/php/model-page-table/uaz-patriot-complectation-and-price.php'
							?>

		        </div>




		        <div class="ionTabs__item" data-name="Tab_5_name">
          	  <h2>Стандартные пакеты тюнинга УАЗ</h2>
							<hr class="headline">

							<ul class="bxslider">						
								<?php
								include $_SERVER['DOCUMENT_ROOT'].'/html/php/tuning/uaz/standart-options.php'
								?>
							</ul>

							<ul class="tablet-visible-block bxslider-tablet clearfix">
								<?php
								include $_SERVER['DOCUMENT_ROOT'].'/html/php/tuning/uaz/standart-options.php'
								?>
							<a href="" class="link-view-all">Показать все работы</a>
							</ul>

							<h2>Примеры индивидуальных заказов по тюнингу УАЗ</h2>
							<hr class="headline">

							<ul class="bxslider">						
								<?php
								include $_SERVER['DOCUMENT_ROOT'].'/html/php/tuning/uaz/individual-options.php'
								?>
							</ul>

							<ul class="tablet-visible-block bxslider-tablet clearfix">
								<?php
								include $_SERVER['DOCUMENT_ROOT'].'/html/php/tuning/uaz/individual-options.php'
								?>
							<a href="" class="link-view-all">Все индивидуальные заказы по УАЗ</a>
							</ul>

		        </div>




		        <div class="ionTabs__item" data-name="Tab_6_name">
	            <div class="model-page__tech-specification">
								<h2>Технические характеристики</h2>
								<hr class="headline">
								<?php
								include $_SERVER['DOCUMENT_ROOT'].'/html/php/model-page-table/uaz-patriot-tech-spec.php'
								?>
							</div>

		        </div>




		        <div class="ionTabs__item" data-name="Tab_7_name">
	            <div class="model-page__exterior-block model-page__content-block">
								<h2>Экстерьер</h2>
								<hr class="headline">
								<ul class="bxslider">						
									<?php
									include $_SERVER['DOCUMENT_ROOT'].'/html/php/model-page-photoes/uaz-patriot-exterior.php'
									?>
								</ul>

								<ul class="tablet-visible-block bxslider-tablet bxslider-tablet-4 clearfix">
									<?php
									include $_SERVER['DOCUMENT_ROOT'].'/html/php/model-page-photoes/uaz-patriot-exterior.php'
									?>
								</ul>		
							
							</div>

							<div class="model-page__interion-block model-page__content-block">
								<h2>Интерьер</h2>
								<hr class="headline">								
								<ul class="bxslider">						
									<?php
									include $_SERVER['DOCUMENT_ROOT'].'/html/php/model-page-photoes/uaz-patriot-interior.php'
									?>
								</ul>

								<ul class="tablet-visible-block bxslider-tablet bxslider-tablet-4 clearfix">
									<?php
									include $_SERVER['DOCUMENT_ROOT'].'/html/php/model-page-photoes/uaz-patriot-interior.php'
									?>
								</ul>				
								
							</div>

		        </div>




		        <div class="ionTabs__preloader"></div>
			    </div>
			</div>

			<div class="model-page__tuning-block">
				<h2>Тюнинг</h2>
				<hr class="headline">

				<ul class="bxslider">						
					<?php
					include $_SERVER['DOCUMENT_ROOT'].'/html/php/model-page/uaz/tuning.php'
					?>
				</ul>

				<ul class="tablet-visible-block bxslider-tablet clearfix">
					<?php
					include $_SERVER['DOCUMENT_ROOT'].'/html/php/model-page/uaz/tuning.php'
					?>
				<a href="" class="link-view-all">Все для тюнинга УАЗ</a>
				</ul>
			</div>
			<div class="model-page__where-to-buy">
					<h2>Где купить УАЗ Патриот</h2>
					<hr class="headline">
					<?php
					include $_SERVER['DOCUMENT_ROOT'].'/html/php/address-block.php'
					?>
			</div>
			<div class="model-page__similar-auto">
				<h2>Похожие на УАЗ Патриот автомобили</h2>
				<hr class="headline">
				<?php
				include $_SERVER['DOCUMENT_ROOT'].'/html/php/model-page-table/uaz-patriot-similar-auto.php'
				?>
			</div>
			

		</div>

	</main>


	<?php
	include $_SERVER['DOCUMENT_ROOT'].'/html/php/footer.php'
	?>

</body>

</html>