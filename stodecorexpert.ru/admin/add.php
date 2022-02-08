<?php require '../db/db.php'; ?>

<?
if (isset($_POST['title']) && isset($_POST['text']) && isset($_POST['text'])){

    // Переменные с формы
    $title = $_POST['title'];
    $text = $_POST['text'];
    $img = $_POST['img'];

   $result = $db->query("INSERT INTO `news` (`id`, `title`, `img`, `text`) VALUES  (NULL,'$title','$img','$text')");
    
    if ($result == true){
    	echo "Информация занесена в базу данных";
    }else{
    	echo "Информация не занесена в базу данных";
    }



}

if($_FILES["filename"]["size"] > 1024*3*1024)
   {
     echo ("Размер файла превышает три мегабайта");
     exit;
   }
   // Проверяем загружен ли файл
   if(is_uploaded_file($_FILES["filename"]["tmp_name"]))
   {
     // Если файл загружен успешно, перемещаем его
     // из временной директории в конечную
     move_uploaded_file($_FILES["filename"]["tmp_name"], "../news/".$_FILES["filename"]["name"]);
   } else {
      echo("Ошибка загрузки файла");
   }
?>