<?php

function connect(){
    try{
        $dsn = "sqlite" . __DIR__ . "/db.sqlite";
        $db = new PDO($dsn);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
        return $db;
    } catch(PDOException $e){
        echo $e->errorInfo;
        exit();
    }
}

