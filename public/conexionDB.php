<?php
    $host="eu-cdbr-west-02.cleardb.net";
    $dbname="heroku_31fca26549d8c3";
    $user="b5c64696c8bc52";
    $pass="74f50844";

    $baseDatos = conectar($host,$dbname,$user,$pass);

    function conectar($host,$dbname,$user,$pass){
        try {
            $baseDatos= new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
            return $baseDatos;
        }
        catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

    function select($baseDatos, $tabla,$columna){
        $categorias = array();
        $statement = $baseDatos->prepare("SELECT $columna FROM $tabla");
        $statement->execute();
        
        while($row = $statement->fetch()) {
            array_push($categorias, $row["$columna"]);
        }
        return($categorias);
    }
?>