<?php
include_once('config.php'); //подключаем настройки
//проверяем, передан ли параметр модуля, иначе используем модуль pages
$module = isset($_GET['mod']) ? $_GET['mod']: 'pages';
//проверяем, передан ли параметр раздела, иначе использует раздел по-умолчанию
$action = isset($_GET['action']) ? $_GET['action']: 'index.php';
//путь к подключаемому файлу (где находится index.php)
$path = $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . $module . DIRECTORY_SEPARATOR .
    $action;
//Если файл физически не существует – пишем ошибку.
if (!file_exists($path)) die ("Ошибка: файл $path не найден") ;
//Добавляем шапку сайта
include('app\header.php');
//Если это не главная страница – добавляем хлебные крошки
if ($module) include('breadcrumbs.php');
//Добавляем подвал
include('app\footer.php');