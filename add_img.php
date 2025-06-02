<?php
require_once('db.php');
header('Content-Type: application/json');

if (!isset($_GET['id']) || !isset($_GET['l'])) {
    echo json_encode(["success" => false, "message" => "Dati mancanti"]);
    exit;
}
// print_r("SONO NEL FILE");
session_start();

$conn = mysqli_connect($db_mirador['host'], $db_mirador['user'], $db_mirador['password'], $db_mirador['name']) or die(mysqli_error($conn));

$user_id = mysqli_real_escape_string($conn, $_SESSION['_mirador_user'] );
$img_id = mysqli_real_escape_string($conn, $_GET['id']);
$link = mysqli_real_escape_string($conn, $_GET['l']);

// Controlla se l'immagine selezionata e' tra le preferite dell'utente
$query= "SELECT * FROM immagini_preferiti WHERE id_img=$img_id AND user_id=$user_id";
$res=mysqli_query($conn, $query);
if (mysqli_num_rows($res)>0) {
    echo json_encode(["success" => false, "message" => "Immagine esistente"]);
    exit;
}

mysqli_free_result($res);

// Viene inserito nel DB il riferimento all'immagine per l'utente nella sessione
$query= "INSERT INTO immagini_preferiti ( id_img, user_id, link) VALUES( '$img_id', '$user_id', '$link')";
$res=mysqli_query($conn, $query);

echo json_encode(["success" => true, "message" => "Immagine salvata"]);

// mysqli_free_result($res);
mysqli_close($conn);

?>