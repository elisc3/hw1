<?php 
    /* Controlla che l'username sia unico*/
    require_once 'db.php';

    if (!isset($_GET["q"])) {
        echo "Errore";
        exit;
    }

    header('Content-Type: application/json');
    
    $conn = mysqli_connect($db_mirador['host'], $db_mirador['user'], $db_mirador['password'], $db_mirador['name']);

    $username = mysqli_real_escape_string($conn, $_GET["q"]);

    $query = "SELECT username FROM utenti WHERE username = '$username'";

    $res = mysqli_query($conn, $query) or die(mysqli_error($conn));

    echo json_encode(array('exists' => mysqli_num_rows($res) > 0 ? true : false));

    mysqli_close($conn);
?>