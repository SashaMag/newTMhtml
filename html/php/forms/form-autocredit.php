<form action="" id="auto-credit-full-form" form-name="Запрос на автокредит" class="autocredit-form">
	<h2>Заявка на автокредит</h2>
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
		</select>

		<select name="" id="" field-name="Комплектация" class="complCars calcCredit">
			<option value="">Выберите комплектацию</option>
			<option value=""></option>
			<option value=""></option>
		</select>


	</div>
	<div class="contact-info-block">

		<select name="" id="" field-name="Дилерский Центр">
			<option value=""  disabled selected>Выберите автосалон</option>
			<option value="">88км МКАД</option>
			<option value="">ул. Иловайская, 2Б</option>
		</select>

		<input type="text" name="" id="" field-name="Имя" placeholder="Ваше имя">
		<input type="text" name="" id="" placeholder="Телефон*" field-name="Телефон"  required="required" class="text_required numbersOnly">
		<input type="text" name="" id="" placeholder="E-mail" field-name="Почта">

	</div>
	<span class="error-message-block"></span>
	<button type="submit" class="generalSubmitMail">Отправить заявку</button>
</form>