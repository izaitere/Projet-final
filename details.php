<?php
require_once 'defines.php';
$page_title = 'details';

require_once 'views/page_head.php';
require_once 'views/header.php';
require_once('db/db_access.php');
require_once 'panier.php';

/*$id_cat ='';
$where = '';
if(array_key_exists(CAT_ID, $_GET)) {
    if(array_key_exists($_GET[CAT_ID], $categories)) {
        $id_cat = $_GET[CAT_ID];
        $where  = 'WHERE category_id = ' . $id_cat;
    }

}
/*var_dump('id_cat vaut'. $id_cat);
var_dump($id_cat);*/


 var_dump($_GET);
$id_art ='';
$where = '';
if(array_key_exists(ARTICLE_ID, $_GET)) {
    if(array_key_exists($_GET[ARTICLE_ID], $categories)) {
        $id_art = $_GET[ARTICLE_ID];
        $where  = " WHERE `id` = $id_art";
    }

}
/*var_dump('id_cat vaut'. $id_cat);
var_dump($id_cat);*/

$articles = get_articles($where);
//var_dump($_GET[ARTICLE_ID])
?>

<?php

?>
<main>
    <div class="wrapper">
        <section class="col-16 col-m-16 main row">
                        <h2 class="col-16"><?= utf8_encode($articles[$_GET[ARTICLE_ID]]['name'])?></h2>
            <div id="defilement" class="row col-8 col-m-8">

            Article : <span><?= $articles[$_GET[ARTICLE_ID]]['id'] ?></span>
                        <img class="col-8 col-m-8 col-s-16" src="images/<?= $articles[$_GET[ARTICLE_ID]]['image'] ?>" alt="fleurs">
                        <?= utf8_encode($articles[$_GET[ARTICLE_ID]]['description']) ?>
                    <h4 id="prix_details" class=""><?= $articles[$_GET[ARTICLE_ID]]['prix'] ?>$</h4>
                    <form class="col-8 col-m-8 col-s-8 panier_action" method="post">
                        <img src="images/shopping-cart.png" alt="panier">
                        <input id="comm-panier" type="submit" name="panier_add" value="Ajouter"/>
                        <input type="hidden" name="article_id" value="<?=  $articles[$_GET[ARTICLE_ID]]['id']?>"/>
                        <input type="hidden" name="article_name" value="<?=utf8_encode($articles[$_GET[ARTICLE_ID]]['name'])?>"/>
                    </form>
                        <div class="col-16" id="liens_details">
                        <a class="col-7" id="bouton_details" href="livraison.php">Récupérer ma commande </a>
                        <a class="col-7" id="bouton_retour" href="index.php">Continuer mes achats </a>
                    </div>
                    </div>





                        <!--<button id="bouton_details" type="submit" class="bouton-ajouter"><img src="images/icone_ajouter.png" alt="icone" /><p>Ajouter au panier</p></button>-->
                    </article>
         </section>
    </div>
</main>
<?php
require_once 'views/footer.php';
?>
</body>
</html>
