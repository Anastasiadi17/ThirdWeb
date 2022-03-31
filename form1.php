<?php
header('Content-Type: text/html; charset=UTF-8');

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
 
  if (!empty($_GET['save'])) {

    print('Спасибо, результаты сохранены.');
  }

  include('index.html');

  exit();
}

$errors = FALSE;
if (empty($_POST['name'])) {
  print('Заполните имя.<br/>');
  $errors = TRUE;
}

if (empty($_POST['email']) or !(strpos($_POST['email'], '@'))) {
  print('Введите e-mail.<br/>');
  $errors = TRUE;
}

if (empty($_POST['date'])) {
  print('Выберите год рождения.<br/>');
  $errors = TRUE;
}

if (empty($_POST['pol'])) {
  print('Укажите ваш пол.<br/>');
  $errors = TRUE;
}


if (empty($_POST['konechn'])){
    print ('Выберите количество конечностей.<br>');
    $errors = true;

}

if (empty($_POST['super'])){
    print ('Выберите одну или несколько сверхспособностей.<br>');
    $errors = true;

}
else {
  $field4 = serialize($_POST['super']);
}

if (empty($_POST['info'])){
    print ('Расскажите о себе.<br>');
    $errors = true;
}

if (empty($_POST['check1'])){
    print ('Вы не можете отправить форму, не ознакомившись с контрактом.<br>');
    $errors = true;
}

if ($errors) {
  exit();
}

$user = 'u47562';
$pass = '2542084';
$db = new PDO('mysql:host=localhost;dbname=u47562', $user, $pass, array(PDO::ATTR_PERSISTENT => true));

try {
  $stmt = $db->prepare("INSERT INTO application SET name = ?, email = ?, date = ?, pol = ?, konechn = ?, info = ?, check1 = ?");
  $stmt -> execute(array(
		$_POST['name'],
        $_POST['email'],
        $_POST['date'],
        $_POST['pol'],
        $_POST['konechn'],
        $_POST['info'],
		$_POST[true],
	));
	
  $stmt = $db->prepare("INSERT INTO Superpowers SET name = ?, sup_id =: per");
  $sppe->bindParam(':per', $id);
  $stmt -> execute(array(
		$_POST['super'] = implode(', ', $_POST['super']),
	));
}
catch(PDOException $e){
  print('Error: ' . $e->getMessage());
  exit();
}
header('Location: ?save=1');
