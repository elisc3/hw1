<?php
require_once('db.php');
header('Content-Type: application/json');


$conn = mysqli_connect($db_mirador['host'], $db_mirador['user'], $db_mirador['password'], $db_mirador['name']) or die(mysqli_error($conn));


// Estrae tutte gli elementi relative alle sale dal DB
$query= "SELECT * FROM sale";
$res=mysqli_query($conn, $query);


$sala=[];
while( $elem=mysqli_fetch_assoc( $res)){
    $sala[]=$elem;
}
echo json_encode($sala);
mysqli_free_result( $res );
mysqli_close($conn);

?>
