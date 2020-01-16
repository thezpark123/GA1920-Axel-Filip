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

function runQuery($query){
    $db = connect();
    var_dump($query);
    $stmt = $db->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $result;

}