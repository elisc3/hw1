<?php
require_once('db.php');

$MAX =5;

header('Content-Type: application/json');

$conn = mysqli_connect($db_mirador['host'], $db_mirador['user'], $db_mirador['password'], $db_mirador['name']) or die(mysqli_error($conn));
//print_r($conn);
$posts = array();
$query = "SELECT posts.title, posts.content, posts.created_at, utenti.username 
            FROM posts JOIN utenti on utenti.id=posts.author_id ORDER BY created_at DESC limit $MAX";
$res = mysqli_query($conn, $query);
while( $post_elem=mysqli_fetch_assoc( $res)){
    $posts[]=$post_elem;
}

echo json_encode( $posts);

mysqli_free_result( $res );
mysqli_close($conn);

?>