<?php

    include_once('../model/index.php'); // подключение модели

    class ControllerIndex { // контроллер для информационной страницы

        public function index() {
            $info_id = $_GET['id'] ?? 0; // id страницы из get-запроса
            $index = new Model; // создание объекта модели
            $info = $index->getInfo($info_id); // получение информации о странице
            extract($info); // извлечение информации из массива в переменные
            include_once('../view/index.php'); // подключение view для вывода
        }
    }

    include_once('../view/header.php'); // view хедера
    $page = new ControllerIndex(); // создание объекта контроллера
    $page->index(); // вызов метода контроллера для генерации контента
    include_once('../view/footer.php'); // view футера