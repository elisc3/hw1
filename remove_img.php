<?php
require_once('db.php');
header('Content-Type: application/json');

if (!isset($_GET['id']) ) {
    echo json_encode(["success" => false, "message" => "Dati mancanti"]);
    exit;
}
// print_r("SONO NEL FILE");
session_start();

$conn = mysqli_connect($db_mirador['host'], $db_mirador['user'], $db_mirador['password'], $db_mirador['name']) or die(mysqli_error($conn));

$user_id = mysqli_real_escape_string($conn, $_SESSION['_mirador_user']);
$img_id = mysqli_real_escape_string($conn, $_GET['id']);

// Controlla se l'immagine selezionata e' presente tra le preferite dell'utente
$query= "SELECT * FROM immagini_preferiti WHERE id_img=$img_id AND user_id=$user_id";
$res=mysqli_query($conn, $query);
if (mysqli_num_rows($res)==0) {
    echo json_encode(["success" => false, "message" => "Immagine non presente tra i preferiti"]);
    exit;
}

mysqli_free_result($res);

// Viene rimossa il record dal DB con l'immagine selezionata dall'utente
$query= "DELETE FROM immagini_preferiti WHERE id_img=$img_id AND user_id=$user_id";
$res=mysqli_query($conn, $query);

echo json_encode(["success" => true, "message" => "Immagine eliminata"]);

mysqli_close($conn);

?>