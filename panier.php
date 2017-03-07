<?php
/**
 * gestion du panier
 */
session_start();
define('PS_PANIER','panier'); // Nom du panier en session
define('PS_PANIER_ITEM_QTY','qty'); // Qté article dans le panier
define('PS_PANIER_ITEM_NAME','desc'); // Nom pour l'utilisateur

//creation panier s il n existe pas
if(!array_key_exists(PS_PANIER,$_SESSION)){
    $_SESSION[PS_PANIER]= array();//creation du panier s il n existe pas
}
//ref (alias) sur le panier en session
$panier = & $_SESSION[PS_PANIER];

//var_dump($_POST); //enleveer apres

//ajout item

function panier_get_count() {
    global $panier;
    $resultat = 0;
    foreach ($panier as $item) {
        $resultat+= $item[PS_PANIER_ITEM_QTY];
    }
    return $resultat;
}

if(array_key_exists('panier_add', $_POST)
    && array_key_exists('article_id', $_POST)
    && array_key_exists('article_name', $_POST)){
    // ob cle premier elem
    $article_id = $_POST['article_id'];
    $article_name = $_POST['article_name'];
    if(array_key_exists($article_id, $panier) && array_key_exists('qty', $panier[$article_id])){
        $panier[$article_id]['qty']++;

    }else{ // n existe pas je le cree
        $panier[$article_id]= array(
            'name' => $article_name,
            'qty' => 1,
        );
    }
}


//supprimer item
if (array_key_exists('panier_remove', $_POST) && array_key_exists('article_id', $_POST)){
    $article_id = $_POST['article_id'];
    unset($panier[$article_id]);

}




//vider le panier
if (array_key_exists('panier_empty', $_POST)){
    $panier = array();
}


//var_dump($panier);