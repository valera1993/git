<?php

$name = htmlspecialchars ($_POST['name']);
$surname = htmlspecialchars ($_POST['surname']);
$age = htmlspecialchars ($_POST['age']);
$city = htmlspecialchars ($_POST['city']);
$email = htmlspecialchars ($_POST['email']);
$wishes = htmlspecialchars ($_POST['wishes']);



$name = check_input ($_POST['name'], "Введите ваше имя!");
$surname = check_input ($_POST['surname'], "Введите вашу фамилию!");
$age = check_input ($_POST['age'], "Введите ваш возраст!");
$city = check_input ($_POST['city'], "Введите ваш город;!");
$email = check_input ($_POST['email'], "Введите ваш email!");
$wishes = check_input ($_POST['wishes'], "Введите ваше сообщение!");



echo $name."<br />".$surname."<br />".$age."<br />".$city."<br />".$email."<br />".$wishes."<br />"; 


