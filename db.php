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

function getAll($options){
$allowed = [
    "sortby" => ['caption']
];
$query = "SELECT * from posts";
if ($options["caption"] ?? null){
    if(in_array($options["caption"], $allowed["caption"])){
        $query .= "WHERE caption = '" . $options["caption"] . "'";
    }
}
$success = runQuery($query);
return $success;
}

function newPost($data){
        var_dump($data);
        $result = runQuery("SELECT MAX(id) FROM posts");
        $id = $result[0]['MAX(id)']+1;
        $caption = $data['caption'] ?? null;
        $img = $data['img'] ?? null;



        $query = "INSERT INTO posts VALUES (
                              $id,
                              '$caption',
                              '$img',
                             
)";
        $success = runQuery($query);
        return $success;
}