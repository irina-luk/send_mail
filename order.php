<?php
if ($_POST) { // если передан массив POST
    $name = htmlspecialchars($_POST["name"]); // пишем данные в переменные и экранируем спецсимволы
    $email = htmlspecialchars($_POST["email"]);
    $phone = htmlspecialchars($_POST["phone"]);
	
    $json = array(); // подготовим массив ответа
    if (!$name or !$email or !$phone) { // если хоть одно поле оказалось пустым
        $json['error'] = 'Вы заполнили не все поля! Обмануть решили? =)'; // пишем ошибку в массив
        echo json_encode($json); // выводим массив ответа 
        die(); // умираем
    }
    if(!preg_match("|^[-0-9a-z_\.]+@[-0-9a-z_^\.]+\.[a-z]{2,6}$|i", $email)) { // проверим email на валидность
        $json['error'] = 'Не верный формат email! >_<'; // пишем ошибку в массив
        echo json_encode($json); // выводим массив ответа
        die(); // умираем
    }

//    $address = "taras_fedorenko@mail.ru";
    $address2 = "13irina07@mail.ru";
    $sub = "Заказ консультации";
    $mes = "Я, $name \nТелефон: $phone \nE-mail: $email, \nхочу получить бесплатную пошаговую консультацию о бизнесе в интернет-торговле.";
	
//	mail($address, $sub, $mes,"Content-type: text/plain; charset=utf-8");
	mail($address2, $sub, $mes,"Content-type: text/plain; charset=utf-8");
    echo json_encode($json); // выводим массив ответа
} else { // если массив POST не был передан
    echo 'GET LOST!'; // высылаем
}