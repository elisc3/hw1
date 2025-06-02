<?php
require_once('db.php');
header('Content-Type: application/json');

session_start();

$conn = mysqli_connect($db_mirador['host'], $db_mirador['user'], $db_mirador['password'], $db_mirador['name']) or die(mysqli_error($conn));

$user_id = mysqli_real_escape_string($conn, $_SESSION['_mirador_user']);

// Estrae tutte le immagini preferite dell'utente
$query= "SELECT * FROM immagini_preferiti WHERE user_id=$user_id";
$res=mysqli_query($conn, $query);
if (mysqli_num_rows($res)==0) {
    echo json_encode(["success" => false, "message" => "Nessuna immagine tra i preferiti"]);
    exit;
}

$pref=[];
while( $elem=mysqli_fetch_assoc( $res)){
    $pref[]=$elem;
}
echo json_encode($pref);
mysqli_free_result( $res );
mysqli_close($conn);

?>
