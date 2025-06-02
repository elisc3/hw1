<?php
    /*Controlla che i l'email sia unica*/
    require_once 'db.php';
    
    // Controllo che l'accesso sia legittimo
    if (!isset($_GET["q"])) {
        echo "Errore";
        exit;
    }

    header('Content-Type: application/json');
    
    // Connessione al DB
    $conn = mysqli_connect($db_mirador['host'], $db_mirador['user'], $db_mirador['password'], $db_mirador['name']);

    // Leggo la stringa dell'email
    $email = mysqli_real_escape_string($conn, $_GET["q"]);

    // Costruisco la query
    $query = "SELECT email FROM utenti WHERE email = '$email'";

    // Eseguo la query
    $res = mysqli_query($conn, $query) or die(mysqli_error($conn));

    // Torna un JSON
    echo json_encode(array('exists' => mysqli_num_rows($res) > 0 ? true : false));

    // Chiudo la connessione
    mysqli_close($conn);
?>