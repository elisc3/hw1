<?php
    session_start();

    // Memorizzo la pagina da cui e' stato fatto il logout
    $prev_page=$_SESSION["page"];
    $args="";
    if ($prev_page=="descrizione.php")
        $args=$_SESSION["args"]
;    // Distruggo la sessione attuale
    session_destroy();
    // Ripristino la pagina da cui e' stato fatto il logout
    header('Location: '.$prev_page.$args);
?>