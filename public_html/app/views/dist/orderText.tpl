Данные заказа: Имя: <?= $name ?> Фамилия: <?= $lastname ?> Отчество: <?= $patronymic ?> Страна: Россия Область (край), район: <?= $region ?> Город/село: <?= $city ?> Адрес (улица, дом, квартира...): <?= $address ?> Почтовый индекс: <?= $index ?> Мобильный телефон (для подтверждения заказа): <?= $mobile ?> <?php foreach ($watches as $key => $value): ?> Модель: <?= $key ?>, количество: <?= $value ?> <?php endforeach; ?> E-mail: <?= $email ?> От себя: <?= $message ?> IP: <?= $ip ?> Дата по UTC + 0: <?= $date ?>