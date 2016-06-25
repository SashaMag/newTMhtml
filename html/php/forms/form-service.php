<?php
$r = rand(0, 15);
?>
<form action="" class="popup-form service-form" id="popup-form-service-form-popup-<?=$r++;?>" form-name="Запись в сервис">
	<h2>Запись в сервис</h2>
	<span class="closing-cross closing-cross-up"></span>
	<hr class="headline">
	<span class="block-headline">Выберите одну или несколько услуг</span>
	<div>
		<input type="checkbox" name="" id="service-form__maintenance" field-name="Техобслуживане" value="+">
		<label for="service-form__maintenance" class="checkbox-label service-form__maintenance">Техобслуживание</label>
		<input type="checkbox" name="" id="service-form__locksmith" field-name="Слесарные работы"  value="+">
		<label for="service-form__locksmith" class="checkbox-label service-form__locksmith">Слесарные работы</label>
		<input type="checkbox" name="" id="service-form__warranty" field-name="По гарантии"  value="+">
		<label for="service-form__warranty" class="checkbox-label service-form__warranty" >По гарантии</label>
		<input type="checkbox" name="" id="service-form__body-repair" field-name="Кузовной ремонт"  value="+">
		<label for="service-form__body-repair" class="checkbox-label service-form__body-repair" >Кузовной ремонт</label>
	</div>
	<div class="clearfix">
		<input type="text" name="" id="" field-name="Марка, модель авто" placeholder="Марка, модель авто">
		<textarea name="" id="" field-name="Комментарии" placeholder="Комментарии"></textarea>
		<input type="text" name="" id="" field-name="Удобные вам дата и время" placeholder="Удобные вам дата и время">
	</div>
	<select name="" id="" field-name="Дилерский Центр">
		<option value="" disabled selected>Выберите автосалон</option>
		<option value="">88км МКАД</option>
		<option value="">ул. Иловайская, 2Б</option>
	</select>
	<div class="contact-info-block">
		<input type="text" name="" id="" field-name="Имя" placeholder="Ваше имя">
		<input type="text" name="" id="" field-name="Телефон" placeholder="Телефон" class="text_required numbersOnly">
		<input type="text" name="" id="" field-name="Почта" placeholder="E-mail">
	</div>
	<span class="error-message-block"></span>
	<button type="submit" class="generalSubmitMail">Отправить заявку</button>
	<span class="closing-cross closing-cross-down">Закрыть</span>
</form>