<?php
include_once 'base de datos/nivel.php';

class nivelesApi
{
    function verMisNiveles()
    {
        $levelClass = new levelClass();
        $res = $levelClass->verMisNiveles($_GET["curso"]);

        $rows = array();
        while ($r = mysqli_fetch_assoc($res)) {
            $rows[] = $r;
        }

        return $rows;
    }
}