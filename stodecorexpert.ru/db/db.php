<?php 


	$dbhost = "localhost"; //адрес сервера
	$dbname = ""; //имя базы данных
	$username = "";// имя пользователя бд
	$password = ""; // пороль от бд
	$db_table = ""; // Имя Таблицы БД

	$db = new PDO("mysql:host=$dbhost; dbname=$dbname",$username,$password);



	function get_news_all() {
		global $db;
		$news = $db->query("SELECT * FROM `//db_table` ORDER BY `id` DESC");
		return $news;
	}




?>