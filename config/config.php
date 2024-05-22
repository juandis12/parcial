<?php
    
    session_start();

    class Conectar{
        protected $dbh;

        protected function Conexion(){
        try{

                $conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=proyecto","juan","umd");

                return $conectar;} 
            catch (Exception $e) {
        print "iError BD!:". $e->getMessage(). "<br/>";
        die();
        }
    }

public function set_names(){
    return $this->dbh->query("SET NAMES 'utf8'");
    }

public static function ruta(){
    return "http://localhost/practico/";
    }
}

