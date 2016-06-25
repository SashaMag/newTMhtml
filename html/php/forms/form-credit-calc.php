<form action="" id="form-credit-calc-full-2" form-name="Запрос с кредитного кальк." class="popup-form form-credit-calc">
	<h2>Кредитный калькулятор</h2>
	<span class="closing-cross closing-cross-up"></span>
	<hr class="headline">
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

	</div>

<!--	<span class="block-headline choose-color">Выберите цвет</span>-->
<!--	<div class="model-page__color-pick-block">-->
<!--		<div class="color-pick color-pick--black active"></div>-->
<!--		<div class="color-pick color-pick--green"></div>-->
<!--		<div class="color-pick color-pick--gold"></div>-->
<!--		<div class="color-pick color-pick--blue"></div>-->
<!--		<div class="color-pick color-pick--yellow"></div>-->
<!--		<div class="color-pick color-pick--white"></div>-->
<!--		<div class="color-pick color-pick--grey"></div>-->
<!--	</div>-->

	<div class="first-pay-block">
		<span class="block-headline">Первоначальный взнос</span>
		<input type="text" name=""  field-name="Первоначальный взнос руб." id="" class="first-pay-summ calcCredit" placeholder="0 руб.">
	</div>
	<div class="timing-block">
		<div class="time">

			<span class="block-headline">Срок мес.</span>
			<select name="" id="" class="credit-period calcCredit" field-name="Срок мес.">
				<option value="6">6</option>
				<option value="12">12</option>
				<option value="18">18</option>
				<option value="24">24</option>
				<option value="30">30</option>
				<option value="36">36</option>
				<option value="42">42</option>
				<option value="48">48</option>
				<option value="54">54</option>
				<option value="60">60</option>
			</select>

		</div>		
		<div class="monthly-pay">
			<span class="block-headline span-monthly-paid">Ежемес. платеж</span>
			<input type="text" name="" id="" disabled class="credit-result" field-name="Ежемес. платеж" placeholder="0 руб.">
		</div>
	</div>
	<div class="contact-info-block">
		<select name="" id="">
			<option value="" disabled selected>Выберите автосалон</option>
			<option value="">88км МКАД</option>
			<option value="">ул. Иловайская, 2Б</option>
		</select>
		<input type="text" name="" id="" field-name="Имя" placeholder="Ваше имя">
		<input type="text" name="" id="" placeholder="Телефон*" field-name="Телефон"  required="required" class="text_required numbersOnly">
		<input type="text" name="" id="" placeholder="E-mail" field-name="Почта">
	</div>
	<span class="error-message-block"></span>
	<button type="submit" class="generalSubmitMail" formnovalidate name=cancel value="Cancel">Отправить заявку</button>
	<span class="closing-cross closing-cross-down">Закрыть</span>
</form>