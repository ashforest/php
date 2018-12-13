<?php

include_once('../model/index.php');

class ControllerContact { // контроллер для страницы контактов

    public function index() {
        $id = "contacts"; // для переключения меню в хедере
        $index = new Model;
        $results = $index->getContacts(); // получение всех контактов
        $contacts = array(); // создание массива для контактов
        while ($result = $results->fetch_array()) {
            $contacts[] = $result;
        }
        include_once('../view/contact.php'); // подключение view страницы контактов
    }
}

include_once('../view/header.php');
$page = new ControllerContact();
$page->index();
include_once('../view/footer.php');