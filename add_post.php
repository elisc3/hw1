<?php
require_once('db.php');
header('Content-Type: application/json');

session_start();

$conn = mysqli_connect($db_mirador['host'], $db_mirador['user'], $db_mirador['password'], $db_mirador['name']) or die(mysqli_error($conn));

if (!isset($_POST['title']) || !isset($_POST['content'])) {
    echo json_encode(["success" => false, "message" => "Dati mancanti"]);
    exit;
}

$title = mysqli_real_escape_string($conn, $_POST['title']);
$content = mysqli_real_escape_string($conn, $_POST['content']);
$username= mysqli_real_escape_string($conn, $_SESSION['_mirador_username']);
$user_id = mysqli_real_escape_string($conn, $_SESSION['_mirador_user']);

/* Modo alternativo di effetuare la query senza uso dello user_id
$query= "INSERT INTO posts (title, author_id, content, created_at)
            SELECT $title, id, $content, NOW()
            FROM utenti
            WHERE username = $username;";*/
$query= "INSERT INTO posts ( title, author_id, content, created_at) VALUES( '$title', '$user_id', '$content', NOW())";

mysqli_query($conn, $query);


echo json_encode(["success" => true, "message" => "Articolo salvato"]);

mysqli_close($conn);

header('Location: blog.php');
?>