<?php
require_once 'defines.php';
$page_title = 'livraison';
?>

<?php
require_once 'views/page_head.php';
require_once 'views/header.php';
require_once('db/db_access.php');

?>
<main>
    <div class="wrapper">

            <div class="panier">
                <h3 id="details_commande" class="col-16">Détails de votre commande</h3>

                <?php if ( ! empty($panier)) { // Des items sont présents ?>
                    <table id="details" class="col-16 panier_liste">
                        <tr>
                            <th>Désignation</th>
                            <th>Quantité</th>
                            <th>Total</th>
                        </tr>
                        <?php foreach ($panier as $article_id => $article) { ?>
                            <tr class="panier_article">
                             <span class="panier_article_name"><?= $article[PS_PANIER_ITEM_NAME]?></span>
                              <span class="panier_article_quantite">(<?= $article[PS_PANIER_ITEM_QTY]?>)</span>
                              <form class="panier_action" method="post">
                                    <input class="comm-panier" class="ui-button ui-widget ui-corner-all ui-button-icon-only" type="submit" name="panier_remove" value="X"/>
                                    <input type="hidden" name="article_id" value="<?=$article_id?>"/>
                                </form>
                            </tr>
                        <?php } ?>
                        <tr>
                            <th colspan="2">Total</th>
                        </tr>
                    </table>
                    <form class="panier_action" method="post">
                        <input class="comm-panier" type="submit" name="panier_empty" value="Vider le panier" />
                    </form>
                <?php } else { // panier vide ?>
                    <p>Votre panier est vide.</p>
                <?php } ?>
            </div>
    </div>
</main>
<?php
require_once 'views/footer.php';
?>
</body>
</html>
