<?php

include_once('../model/index.php');

class ControllerCatalog { // контроллер для страницы каталога

    public function index() {
        $id = "catalog"; // для переключения меню в хедере
        $index = new Model;
        $results = $index->getProducts(); // получение информации о всех товарах
        $products = array(); // создание массива для товаров
        while ($result = $results->fetch_array()) { // для каждой полученной из БД записи
            $products[] = $result; // добавление записи в массив
        }
        include_once('../view/catalog.php'); // подключение view каталога
    }
}

include_once('../view/header.php');
$page = new ControllerCatalog();
$page->index();
include_once('../view/footer.php');