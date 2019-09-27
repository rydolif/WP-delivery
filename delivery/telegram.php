<?php

/* https://api.telegram.org/bot771477628:AAGT7LztX5L-rdvKMZF7cW8jghDLroEd2HQ/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['mail'];
$textarea = $_POST['textarea'];
$token = "771477628:AAGT7LztX5L-rdvKMZF7cW8jghDLroEd2HQ";
$chat_id = "-359740686";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Email' => $email,
  'Комментарий' => $textarea
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: /');
} else {
  echo "Error";
}
?>