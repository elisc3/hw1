<?php
    $err = json_encode(["success" => false, "message" => "Dati mancanti"]);
    $apiKey = 'secret'; 
    $query = '';
    if (isset($_GET['q']))
        $query = $_GET['q'];
    $perPage = 10;

    $url = "https://api.pexels.com/v1/search?query=".urlencode($query)."&per_page=".$perPage;
//print_r($url);
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ["Authorization: $apiKey"]);

    $response = curl_exec($ch);
    // print_r($response);

    if (curl_errno($ch)) {
        $err = json_encode(["success" => false, "message" => "Errore curl"]);
        echo($err);
    } else {
        $decoded = json_decode($response, true);
        

        if (isset($decoded['photos']) && count($decoded['photos']) > 0) {
            echo($response);
        } else {
            $err = json_encode(["success" => false, "message" => "Nessuna foto trovata o risposta inattesa"]);
            echo( $err );
        }
    }

    curl_close($ch);
?>