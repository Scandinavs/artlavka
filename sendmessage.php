<?php
$sendto      = "candybouquet@mail.ru";
$name        = $_POST['orderFormName'];
$usermail    = $_POST['orderFormEmail'];
$tel         = $_POST['orderFormPhone'];
$content     = nl2br($_POST['orderFormMsg']);
$productName = $_POST['productName'];

$subject  = "Новый заказ на букет из конфет";
$headers  = "From: " . strip_tags($usermail) . "\r\n";
$headers .= "Reply-To: ". strip_tags($usermail) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";

$msg  = "<html><body style='font-family:Arial,sans-serif;'>";
$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Новый заказ на букет из конфет</h2>\r\n";
$msg .= "<p><strong>Имя:</strong> ".$name."</p>\r\n";
$msg .= "<p><strong>Телефон:</strong> ".$tel."</p>\r\n";
$msg .= "<p><strong>Email:</strong> ".$usermail."</p>\r\n";
$msg .= "<p><strong>Название товара:</strong> ".$productName."</p>\r\n";
$msg .= "<p><strong>Комментарий к заказу:</strong> ".$content."</p>\r\n";
$msg .= "</body></html>";


if(@mail($sendto, $subject, $msg, $headers)) {
	echo "true";
} else {
	echo "false";
}
?>