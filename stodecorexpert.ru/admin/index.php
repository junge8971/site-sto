
<?php require '../admin/add.php'; ?>
<html>
<head>
  <title></title>
</head>
<body>
<br><br> <br><a href="../index.php"> На главную</a><br><br> <br>

<div>
	<p>1. загрузить изображение</p>
	<p>1.1 изображение должно быть горизонтальным</p>
	<p>1.2 имена изображений не должны повторятся</p>
	<p>1.3 изображение не должно превышать 3 мб</p>
</div>


<form action="" method="post" enctype="multipart/form-data">
      <input type="file" name="filename"><br> 
      <input type="submit" value="Загрузить"><br>
      </form>
      <br>
      <br>
      <br>

<div>
	<p>2. Добавление новости</p>
	<p>2.1 все поля для формы добавления необходимо заполнить</p>
	<p>2.3 в поле для добавления изображения необходимо вставить надпись         <div>news/</div></p>
	<p>2.4 имя изображения необходимо вставлять без пробелов и других символов</p>
	<p>2.5 имя изображения необходимо указывать полностью, месте с разширением. Например .png или .jpg</p>
</div>    

<form method="POST" action="">
  <input name="title" type="text" placeholder="Заголовок"/><br>
  <input name="img" type="text" placeholder="Название картинки"/><br>
  <input name="text" type="text" placeholder="Текст"/><br>
  <br> 
  <input type="submit" value="Отправить"/>
 </form>
</body>
</html>