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
        var_dump($data);
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


function uploadFiles(){
    if (isset($_POST['submit'])){
        $file = $_FILES['img'];

        $fileName = $_FILES['img']['name'];
        $fileTmpName = $_FILES['img']['tmp_name'];
        $fileSize = $_FILES['img']['size'];
        $fileError = $_FILES['img']['type'];
        $fileType = $_FILES['img']['Type'];

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));

        $allowed = array('jpg','jpeg','png','gif');
        if (in_array($fileActualExt, $allowed)){
            if ($fileError === 0){
                if ($fileSize < 500000){
                    $fileNameNew = uniqid('', true).".".$fileActualExt;
                    $fileDestination = 'uploads/'.$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    header("location: /home");
                }  else{
                    echo "Your file is too big!"
                    ;            }
            }
            else {
                echo "There was an error uploading your file!";
            }
        }
        else{
            echo "You can not upload this type of file!";
        }
    }
}

function getPost($id)
{
    $query = "SELECT * FROM posts WHERE id='$id'";
    $success = runQuery($query);
    return $success;

}