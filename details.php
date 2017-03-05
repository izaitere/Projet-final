<?php
require_once 'defines.php';
$page_title = 'details';
?>

<?php
require_once 'views/page_head.php';
require_once 'views/header.php';
require_once('db/db_access.php');
require_once 'panier.php';
$id_art ='';
$where = '';
if(array_key_exists(ARTICLE_ID, $_GET)) {
    $id_art = $_GET[ARTICLE_ID];
    $where  = 'WHERE id = ' . $id_art;
} else {
    /*redirection*/

}
/*var_dump('id_art vaut'. $id_art);
var_dump(id_art);*/

/*$articles = get_articles($where);*/
//var_dump($articles);
/*if (empty($articles)) { }*/

    /*L'article numéro $id_art*/
    // redirection page accuel


$article = $articles[$id_art];
var_dump($article);

?>
<main>
    <div class="wrapper">
        <section class="col-16 col-m-16 main row">
            <div id="bloc_details">
                <div id="" class="row col-16 col-m-16">

                    <div id="defilement" class="row col-8 col-m-8">
                        <h2><?= utf8_encode($article['name'])?></h2>
                        Catégorie : <span><?= $article['id'] ?></span>
                        <img class="col-8 col-m-8" src="images/<?= $article['image'] ?>" class="col-8 col-m-8" alt="fleurs">
                        <?= utf8_encode($article['description']) ?>
                    </div>
                    <h4 id="prix_details" class=""><?= $article['prix'] ?>$</h4>
                    <a id="bouton_details" href="livraison.php"><span class=""></span>Récupérer ma commande </a>

                    <form class="col-8 col-m-8 col-s-8 panier_action" method="post">
                        <img src="images/shopping-cart.png" alt="panier">
                        <input id="comm-panier" type="submit" name="panier_add" value="Ajouter"/>
                        <input type="hidden" name="article_id" value="<?= $id_art ?>"/>
                        <input type="hidden" name="article_name" value="<?=utf8_encode($article['name'])?>"/>
                    </form>


                </div>



                        <!--<button id="bouton_details" type="submit" class="bouton-ajouter"><img src="images/icone_ajouter.png" alt="icone" /><p>Ajouter au panier</p></button>-->
                    </article>
            </div>
         </section>
    </div>
</main>
<?php
require_once 'views/footer.php';
?>
</body>
</html>
