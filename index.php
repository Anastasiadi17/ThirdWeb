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
	<form action="/"
      method="POST">
      <label>
        <b>Введите имя:</b><br />
        <input  type="text" name="field1"
          value="Jack" />
      </label><br />
      <label>
        <b>Введите свой email:</b><br />
        <input type="text" name="field2"
          value="example@mail.ru"
          type="email" />
      </label><br />
      <label>
        <b>Дата рождения:</b><br />
        <input type="date" name="field3"
          value="2002-03-22"
          type="date" />
      </label><br />
      <b>Пол:</b><br />
      <label><input type="radio" checked="checked" name="r1" value="1" />мужской</label>
      <label><input type="radio" name="r1" value="2" />женский</label><br />
	  <b>Количество конечностей:</b><br />
      <label><input type="radio" name="r2" value="1" />2 ноги, 2 руки</label>
	  <label><input type="radio" name="r2" value="2" />2 ноги, 1 рука</label>
	  <label><input type="radio" name="r2" value="3" />1 нога,  2 руки</label>
      <label><input type="radio" checked="checked" name="r2" value="4" />1 рука, 1 нога</label><br />	
	  <b>Сверхспособности:</b><br />
        <label><select name="field4"
          multiple="multiple">
          <option value="1">Бессмертие</option>
          <option value="2" selected="selected">Прохождение скозь стены</option>
		  <option value="3">Левитация</option>
          <option value="4">Чтение мыслей</option>
        </select>
      </label><br />
	  <label>
        <b>Биография:</b><br />
        <textarea name="field5">Напишите о себе</textarea>
      </label><br />
      <label><input type="checkbox" name="check1" /> <b>С контрактом ознакомлен (а)</b> </label><br />
      <p><button type="submit" value="send">Отправить</p>
    </form>
  
  </body>

</html>