<?php
header('Content-Type: text/html; charset=UTF-8');

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
 
  if (!empty($_GET['save'])) {

    print('Спасибо, результаты сохранены.');
  }

  include('index.php');

  exit();
}

$errors = FALSE;
if (empty($_POST['field1'])) {
  print('Заполните имя.<br/>');
  $errors = TRUE;
}

if (empty($_POST['field2']) or !(strpos($_POST['field2'], '@'))) {
  print('Введите e-mail.<br/>');
  $errors = TRUE;
}

if (empty($_POST['field3'])) {
  print('Выберите год рождения.<br/>');
  $errors = TRUE;
}

if (empty($_POST['r1'])) {
  print('Укажите ваш пол.<br/>');
  $errors = TRUE;
}


if (empty($_POST['r2'])){
    print ('Выберите количество конечностей.<br>');
    $errors = true;

}

if (empty($_POST['field4'])){
    print ('Выберите одну или несколько сверхспособностей.<br>');
    $errors = true;

}
else {
  $field4 = serialize($_POST['field4']);
}

if (empty($_POST['field5'])){
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
  $stmt = $db->prepare("INSERT INTO application SET field1 = ?, field2 = ?, field3 = ?, r1 = ?, r2 = ?, field5 = ?, check1 = ?");
  $stmt -> execute(array(
		$_POST['field1'],
        $_POST['field2'],
        $_POST['field3'],
        $_POST['r1'],
        $_POST['r2'],
        $_POST['field5'],
		$_POST[true],
	));
	
  $stmt = $db->prepare("INSERT INTO Superpowers SET field1 = ?");
  $stmt -> execute(array(
		$_POST['field4'] = implode(', ', $_POST['field4']),
	));
}
catch(PDOException $e){
  print('Error: ' . $e->getMessage());
  exit();
}
header('Location: ?save=1');
