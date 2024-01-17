<?
$data = $_POST;
$errors = [];

if (!isset($data['EMAIL']))
	$errors['EMAIL'] = 'Поле EMAIL не заполнено';
if (!isset($data['TEXT']))
	$errors['TEXT'] = 'Поле TEXT не заполнено';

if (!empty($errors))
	echo json_encode(['errors' => $errors]);


foreach($data as $field => $value){
	$value = trim($value);
	if (!$value){
		$errors[$field] = 'Поле заполнено не верно';
	} else {
		$data[$field] = $value;
	}
}

if (!empty($errors))
	echo json_encode(['errors' => $errors]);


// $pattern = '/([a-z0-9\-_]{2,40})(@[a-z0-9\-_]{2,12})(\.[a-z0-9\-]{2,12})/ui';
// $replacement = '${1}${2}${3}';
// echo preg_replace($pattern, $replacement, $data['EMAIL']);

preg_match('/([a-z0-9\-_]{2,40})(@[a-z0-9\-_]{2,12})(\.[a-z0-9\-]{2,12})/ui', $data['EMAIL'], $matches_email);

if (!empty($matches_email)) {
	$data['EMAIL'] = $matches_email[0];
} else {
	$errors['EMAIL'] = 'Поле не соответствует требованиям';
}

preg_match('/[а-я0-9\-_ ,\.]+/ui', $data['TEXT'], $matches_text);
if (!empty($matches_text)) {
	$data['TEXT'] = $matches_text[0];
} else {
	$errors['TEXT'] = 'Поле не соответствует требованиям';
}

if (!empty($errors))
	echo json_encode(['errors' => $errors]);

$text_mail = "User mail - ".$data['EMAIL']."<br> text - ".$data['TEXT'];

if(mail('test@mail.ru','mail', $text_mail,
	"Content-Type: text/html; charset=UTF-8")){
	echo json_encode(['success' => true]);
} else {
	echo json_encode(['success' => false]);
}

?>