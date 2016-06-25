<form action="" class="popup-form buy-form" id="specialForm_1" form-name="Купить авто">
	<h2>Заявка на покупку автомобиля</h2>

	<span class="closing-cross closing-cross-up"></span>
	<hr class="headline">
	<span class="block-headline clearfix">Выберите вариант покупки</span>
	<div class="radio-block clearfix">
		<input type="radio" name="buy-form__radio" id="buy-form__radio--1" field-name="Тип покупки" value="За наличные" checked>
		<input type="radio" name="buy-form__radio" id="buy-form__radio--2" field-name="Тип покупки" value="Кредит">
		<label for="buy-form__radio--1" class="radio-label radio-label-1">За наличные</label>
		<label for="buy-form__radio--2" class="radio-label radio-label-2">В кредит</label>
	</div>
	<div class="clearfix wanna-buy">


		<select name="" id="" field-name="Марка" class="getModel">
			<option value="">Выберите марку</option>
			<option value="2">УАЗ</option>
			<option value="14">УАЗ Коммерческие</option>
			<option value="127">УАЗ Спецавтомобили</option>
			<option value="165">Geely</option>
			<option value="219">Chevrolet</option>
		</select>
		
		<select name="" id="" field-name="Модель" class="modelsCar">
			<option value="">Выберите модель</option>
			<option value=""></option>
			<option value=""></option>
		</select>
		<select name="" id="" field-name="Комплектация" class="complCars">
			<option value="">Выберите комплектацию</option>
			<option value=""></option>
			<option value=""></option>
		</select>
<!--		<input type="text" name="" id="" class="price" placeholder="Цена">-->
	</div>
	<!--
	<span class="block-headline choose-color">Выберите цвет</span>
	 <div class="model-page__color-pick-block">
		<div class="color-pick color-pick--black active"></div>
		<div class="color-pick color-pick--green"></div>
		<div class="color-pick color-pick--gold"></div>
		<div class="color-pick color-pick--blue"></div>
		<div class="color-pick color-pick--yellow"></div>
		<div class="color-pick color-pick--white"></div>
		<div class="color-pick color-pick--grey"></div>
	</div> -->
	<div class="contact-info-block">
		<select name="" id="" field-name="Дилерский Центр">
			<option value="" disabled selected>Выберите автосалон</option>
			<option value="">88км МКАД</option>
			<option value="">ул. Иловайская, 2Б</option>
		</select>
		<input type="text" name="" id="" field-name="Ваше имя" placeholder="Ваше имя">
		<input type="text" id="phone_us_buy" placeholder="Телефон*" class="text_required">
		<input type="text" name="" id="" placeholder="E-mail">
	</div>
	<span class="error-message-block"></span>
	<button type="submit" class="generalSubmitMail">Отправить заявку</button>
	<span class="closing-cross closing-cross-down">Закрыть</span>
</form>