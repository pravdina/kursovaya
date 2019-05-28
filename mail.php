<?php
$to = "pravdina.tanya99@gmail.com"; // емайл получателя данных из формы 
$tema = "Заказ с сайта"; // тема полученного емайла 
$message = "Название товара: ".$_POST['tovar']."<br>"."<br>";
$message .= "Имя: ".$_POST['imya']."<br>";//присвоить переменной значение, полученное из формы name=name
$message .= "E-mail: ".$_POST['email']."<br>"; //полученное из формы name=email
$message .= "Номер телефона: ".$_POST['phone']."<br>"; //полученное из формы name=phone
$message .= "Детали заказа: ".$_POST['message']."<br>"; //полученное из формы name=message
$headers  = 'MIME-Version: 1.0' . "\r\n"; // заголовок соответствует формату плюс символ перевода строки
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; // указывает на тип посылаемого контента
mail($to, $tema, $message, $headers); //отправляет получателю на емайл значения переменных
?>
<html>
    <head>
	<meta charset="UTF-8">
	<title>Спасибо за заказ!</title>
</head>
<body style="background-image: url(img/thankYou2.jpg); background-size: 100vw auto">
</body>
</html>	