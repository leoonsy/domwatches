Данные заказа: <br /> 
Имя: <?= $name ?> <br />
Фамилия: <?= $lastname ?> <br />
Отчество: <?= $patronymic ?> <br />
Страна: Россия <br />
Область (край), район: <?= $region ?> <br />
Город/село: <?= $city ?> <br />
Адрес (улица, дом, квартира...): <?= $address ?> <br />
Почтовый индекс: <?= $index ?> <br />
Мобильный телефон (для подтверждения заказа): <?= $mobile ?> <br /> 
Часы: <br /> 
<?php foreach ($watches as $key => $value): ?>
Модель: <?= $key ?>, количество: <?= $value ?> <br /> 
<?php endforeach; ?> 
<br />
Цена: <?= $price ?> <br />
E-mail: <?= $email ?> <br />
От себя: <?= $comment ?> <br />
<br />
IP: <?= $ip ?> <br />
Дата по UTC: <?= $date ?>