<?php
    // $k = ["id" => 1,"name" => "Long"];

    // $l = json_encode($k, JSON_PRETTY_PRINT);

    // $z = [
    //     "username"          => $l,
    //     "favorite_number"   => "10"
    // ];
    // echo json_encode($z, JSON_PRETTY_PRINT);

    // $username = $_POST['username'];
    // $id = $_POST['id'];
    // $last= $_GET['last'];
    $content = trim(file_get_contents("php://input"));
    $decoded = json_decode($content, true);
    $id = $decoded['id'];
    $username = $decoded['username'];
    $k = ["id" => $id,"name" => $username];
    $l = json_encode($k, JSON_PRETTY_PRINT);
    echo $l;
?>