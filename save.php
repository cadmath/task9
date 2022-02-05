<?php
$dns = 'mysql:host=localhost;dbname=home';
$db = new PDO($dns, 'root', '');

//получаем данные если кнопка нажата
$name = trim(htmlspecialchars($_POST['name']));
$text = trim(htmlspecialchars($_POST['text']));
//Записываем данные в БД
if(!empty($name) and !empty($text)){
$insert = 'INSERT INTO text (name, text, date) VALUES (:name, :text, :date)';
$date = $db->prepare($insert);
$date->execute(['name'=>$name, 'text'=>$text, 'date'=>date('Y/m/d h:i:s', time())]);
header('Location: task_9.php');
}else{
    header('Location: task_9.php');
}

?>