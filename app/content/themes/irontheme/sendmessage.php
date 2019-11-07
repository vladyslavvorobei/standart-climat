<?php
if (isset($_SERVER['HTTP_REFERER'])) 
{
	$sendto  = 'secretlines@yandex.ru';
	$from  = 'info@st-ovk.ru';
	$subject  = 'Заявка (Стандарт Климат)';
	$headers  = "From: ".$from."\r\n";
	$headers .= "Reply-To: ".$from."\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html;charset=utf-8 \r\n";
	$msg  = "<html><body style='font-family:Arial,sans-serif;'>";
	$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>".$subject."</h2>\r\n";
	if (isset($_POST['name']))
	{
		if ($_POST['name']!=='') {
			$msg .= "<p><strong>Имя:</strong> ".$_POST['name']."</p>\r\n";
		}
	}
	if (isset($_POST['phone']))
	{
		if ($_POST['phone']!=='') {
			$msg .= "<p><strong>Телефон:</strong> ".$_POST['phone']."</p>\r\n";
		}
	}
	if (isset($_POST['building']))
	{
		if ($_POST['building']!=='') {
			$msg .= "<p><strong>Вид помещения:</strong> ".$_POST['building']."</p>\r\n";
		}
	}
	if (isset($_POST['area']))
	{
		if ($_POST['area']!=='') {
			$msg .= "<p><strong>Примерная площадь помещения:</strong> ".$_POST['area']."</p>\r\n";
		}
	}
	if (isset($_POST['ventilation']))
	{
		if ($_POST['ventilation']!=='') {
			$msg .= "<p><strong>Тип системы вентиляции:</strong> ".$_POST['ventilation']."</p>\r\n";
		}
	}
	if (isset($_POST['project']))
	{
		if ($_POST['project']!=='') {
			$msg .= "<p><strong>Есть ли уже проект?:</strong> ".$_POST['project']."</p>\r\n";
		}
	}
	if (isset($_POST['conditioning']))
	{
		if ($_POST['conditioning']!=='') {
			$msg .= "<p><strong>Тип внутренних блоков кондиционирования:</strong> ".$_POST['conditioning']."</p>\r\n";
		}
	}
	if (isset($_POST['distance']))
	{
		if ($_POST['distance']!=='') {
			$msg .= "<p><strong>Как далеко от МКАД:</strong> ".$_POST['distance']."</p>\r\n";
		}
	}
	if (isset($_POST['date']))
	{
		if ($_POST['date']!=='') {
			$msg .= "<p><strong>Когда нужно установить вентиляцию:</strong> ".$_POST['date']."</p>\r\n";
		}
	}
	if (isset($_POST['form']))
	{
		if ($_POST['form']!=='') {
			$msg .= "<p><strong>Форма:</strong> ".$_POST['form']."</p>\r\n";
		}
	}
	$msg .= "</body></html>";
	if (@mail($sendto, $subject, $msg, $headers))   {
		echo "true";
	} else {
		echo "false";
	}
}
?>