<?php
/**
 *
 */
define('DB_HOST', '127.0.0.1'); // Host DB
define('DB_USERNAME', 'root'); // Host DB
define('DB_PASSWORD', ''); // Host DB
define('DB_NAME', 'fleurs'); // Host DB

$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
if ($mysqli->connect_errno) {
    echo "Echec lors de la connexion à MySQL : ", $mysqli->connect_error;
}


$query_str = 'SELECT * FROM category'; // Sélection de tous les articles

$res = $mysqli->query($query_str); // xécution de la requête

// Chargement des données, ligne par ligne (boucle while)
$categories = array();
if ($res && ($res->num_rows > 0)) {
    while ($cat = $res->fetch_assoc()) {
        $categories[$cat['id']] = $cat;
    }
}
//var_dump($categories);

//

function get_articles($where = ''){

global $mysqli;
// Rédaction de la requete sur les articles
    $query_str = 'SELECT * FROM articles ' . $where; // Sélection de tous les articles

    $res = $mysqli->query($query_str); // xécution de la requête

// Chargement des données, ligne par ligne (boucle while)
    $data = array();
    if ($res && ($res->num_rows > 0)) {
        while ($article = $res->fetch_assoc()) {
            $data[$article['id']] = $article;
        }
    }
    return $data;
}
// Rédaction de la requete



