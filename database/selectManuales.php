<?php
    require "./conexionDB.php";

    function selectAnuncio($baseDatos, $tabla="manuales",$col1="idManual",$col2="idAscensor",$col3="modeloAscensor"){
        $datos = array();
        $statement = $baseDatos->query("SELECT $col1,$col2,$col3 FROM $tabla");
        while($row = $statement->fetch()){
            array_push($datos, [$row["$col1"],$row["$col2"],$row[$col3]]);//Array Bidimensional
        }
        return $datos;
    }
    $datos=selectAnuncio($baseDatos,"manuales","idManual","idAscensor","modeloAscensor");
    echo json_encode($datos);
?>