<?php

echo "Test require manager depuis ImmobilierManager";

abstract class Manager {

    private static $pdo;

    private static function setBdd(){
        self::$pdo = new PDO("mysql:host=localhost;dbname=immobilier;charset=utf8","root","");
        self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }

    protected function getBdd(){

        if(self::$pdo === null){
        self::setBdd();
        }
        return self::$pdo;
    }

}