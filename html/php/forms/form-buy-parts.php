<form action="" id="form-buy-parts-popup-form-<?= rand(0, 15); ?>" form-name="Запрос на запчасти" 
      class="form-buy-parts popup-form">
    <h2>Запрос на запчасти</h2>
    <span class="closing-cross closing-cross-up"></span>
    <hr class="headline">
    <span class="block-headline">Опишите ваш автомобиль - </span>
    <div class="clearfix">
        <div class="clearfix user-car">

            <select name="" id="" field-name="Марка" class="getModel">

                <option value="">Выберите марку</option>
                <option value="2">УАЗ</option>
                <option value="14">УАЗ Коммерческие</option>
                <option value="127">УАЗ Спецавтомобили</option>
                <option value="165">Geely</option>
                <option value="219">Chevrolet</option>

            </select>

            <select name="" id="" field-name="Модель" class="modelsCar">

            </select>

            <input type="text" name="" id="" field-name="Год выпуска" placeholder="Год выпуска" class="year-of-issue">
            <input type="text" name="" id="" field-name="VIN" placeholder="VIN" class="VIN">
        </div>
        <div class="buying-parts">
            <span>Перечислите необходимые запчасти</span>
            <textarea name="" id="" field-name="Требуемые запчасти" class="describe-parts"></textarea>
        </div>
    </div>
    <div class="contact-info-block">
        <select name="" id="" field-name="Дилерский Центр">
            <option value="" disabled selected>Выберите автосалон</option>
            <option value="">88км МКАД</option>
            <option value="">ул. Иловайская, 2Б</option>
        </select>

        <input type="text" name="" id="" field-name="Имя" placeholder="Ваше имя">
        <input type="text" name="" id="" field-name="Телефон" placeholder="Телефон*" required
               class="text_required numbersOnly">
        <input type="text" name="" id="" field-name="Почта" placeholder="E-mail">

    </div>
    <span class="error-message-block"></span>
    <button type="submit" class="generalSubmitMail">Отправить заявку</button>
    <span class="closing-cross closing-cross-down">Закрыть</span>
</form>