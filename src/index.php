<?php
require_once('config.php'); //подключаем настройки
require_once('items_config.php'); //настроки подмены информации по item'ам разделов
//проверяем, передан ли параметр модуля, иначе используем модуль pages
$module = isset($_GET['mod']) ? $_GET['mod']: 'pages';
//проверяем, передан ли параметр раздела, иначе использует раздел по-умолчанию
$action = isset($_GET['action']) ? $_GET['action']: 'index.php';
//проверяем, передан ли параметр айтема, иначе использует айтем по-умолчанию
$itempath = isset($_GET['item']) ? $_GET['item']: '404';
if ($action == 'item.php' && $itempath == 404){
    $path = $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'pages' . DIRECTORY_SEPARATOR .
        '404.php';
}else {
//путь к подключаемому файлу (где находится index.php)
    $path = $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . $module . DIRECTORY_SEPARATOR .
        $action;
}
//Если файл физически не существует – пишем ошибку.
if (!file_exists($path)) die ("Ошибка: файл $path не найден") ;
//Добавляем шапку сайта
include('app/header.php');
//Приправим крошками наш проект
include('app/breadcrumbs.php');
//Добавляем нужную страницу в зависимости от параметров
include($path);
//Добавляем подвал
include('app/footer.php');