<?php
    class Model { // модель для всех операций с БД
        private $mysqli; // поле для MySQLi

        public function __construct() {
            $this->mysqli = new mysqli('localhost', 'gogby_denis', 'denis12345', 'gogby_php'); // подключение к БД
            $this->mysqli->set_charset("utf8"); // установка кодировки
        }

        public function getInfo ($id) { // получение данных о странице по id
            $info = $this->mysqli->query("SELECT * FROM info WHERE id = ".$id);
            return $info->fetch_assoc();
        }

        public function getProducts () { // получение всех данных о товарах
            $products = $this->mysqli->query("SELECT * FROM product");
            return $products;
        }

        public function getContacts () { // получение всех контактов
            $settings = $this->mysqli->query("SELECT * FROM contact");
            return $settings;
        }
    }