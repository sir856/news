<?php
function connectDB(){
    $servername = "localhost";
    $username = "root";
    $password = "Enigma";
    $db_name = "news";
    $connection = new mysqli($servername, $username, $password, $db_name);

    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }
    return $connection;
}

function removeArticle($id){
    $connection = connectDB();
    $query = "DELETE FROM news WHERE id= '".$id."'";
    $res = $connection->query($query) or die($connection->error);
    $connection->close();
}

function addArticle($title, $text){
    $connection = connectDB();
    $title = mysqli_real_escape_string($connection, $title);
    $text = mysqli_real_escape_string($connection, $text);
    if ($text != NULL && $title != NULL){
        $query = "INSERT INTO news (text, title, date) VALUES ('".$text."', '".$title."', NOW())";
        $res = $connection->query($query) or die($connection->error);
    }
    $connection->close();
}