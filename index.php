<!DOCTYPE html>

<html lang="ru">

  <head>
    <meta charset="utf-8">
    <title>Моя страница</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
   <div id="form">
    	<h1><b>Форма</b></h1>
	<form action="form1.php" method="POST">
      <label>
        <b>Введите имя:</b><br />
        <input  type="text" name="name"
          value="Jack" />
      </label><br />
      <label>
        <b>Введите свой email:</b><br />
        <input type="text" name="email"
          value="example@mail.ru"
          type="email" />
      </label><br />
      <label>
        <b>Дата рождения:</b><br />
        <input type="date" name="date"
          value="2002-03-22"
          type="date" />
      </label><br />
      <b>Пол:</b><br />
      <label><input type="radio" checked="checked" name="pol" value="male" />мужской</label>
      <label><input type="radio" name="pol" value="female" />женский</label><br />
	  <b>Количество конечностей:</b><br />
      <label><input type="radio" name="konechn" value="1" />1</label>
	  <label><input type="radio" name="konechn" value="2" />2</label>
	  <label><input type="radio" name="konechn" value="3" />3</label>
      <label><input type="radio" checked="checked" name="konechn" value="4" />4</label><br />	
	  <b>Сверхспособности:</b><br />
        <label><select name="super[]"
          multiple="multiple">
          <option value="bessmertie">Бессмертие</option>
          <option value="Steny" selected="selected">Прохождение скозь стены</option>
		  <option value="Levitation">Левитация</option>
          <option value="Mysli">Чтение мыслей</option>
        </select>
      </label><br />
	  <label>
        <b>Биография:</b><br />
        <textarea name="info">Напишите о себе</textarea>
      </label><br />
      <label><input type="checkbox" value="check1" name="check1" /> <b>С контрактом ознакомлен (а)</b> </label><br />
      <p><button type="submit" value="send">Отправить</p>
    </form>
  
  </body>
</html>
