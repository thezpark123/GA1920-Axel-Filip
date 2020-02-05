<?php

function connect(){
    try{
        $dsn = "sqlite:".__DIR__."/db.sqlite";
        $db = new PDO($dsn);
        $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $db;

    } catch (PDOException $e){
        echo $e->errorInfo;
        exit();
    }
}


function runQuery($query){
    $db = connect();
    $stmt = $db->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $result;

}

function fetchAll($query){
    $db=connect();
    $stmt = $db->prepare($query);
    $stmt -> execute();
    $success = $stmt ->fetchAll();
    return $success;
}

function getAll($options){
$allowed = [
    "sortBy" => ['caption']
];
$query = "SELECT * from posts where 1";
if ($options["caption"] ?? null){
    if(in_array($options["caption"], $allowed["caption"])){
        $query .= "WHERE caption = '" . $options["caption"] . "'";
    }else{
        echo "u stopid";
    }
}
    return fetchAll($query);
}

function newPost($data){
        $result = runQuery("SELECT MAX(id) FROM posts");
        $id = $result[0]['MAX(id)']+1;
        $caption = $data['caption'] ?? null;
        $img = $data['img'] ?? null;



        $query = "INSERT INTO posts VALUES (
                              $id,
                              '$caption',
                              '$img'
                             
)";
        $success = runQuery($query);
        return $success;
}

function getPost($id)
{
    $query = "SELECT * FROM posts WHERE id ='$id'";
    $success = runQuery($query);
    return $success;
}

function updatePost($data, $getId)
{
    $id = $getId['updatePost'];
    $caption = $data['caption'] ?? null;

    $query = "UPDATE posts SET caption='$caption' WHERE id=$id";

    $success = runQuery($query);
    return $success;
}

