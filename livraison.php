<?php
require_once 'defines.php';
$page_title = 'livraison';
?>

<?php
require_once 'views/page_head.php';
require_once 'views/header.php';
?>
<main>
    <div class="wrapper">
        <div class="panier">
            <h3 id="details_commande" class="col-16">Détails de votre commande</h3>
            <table id="details" class="col-16">

                <tr>
                    <th>Désignation</th>
                    <th>Quantité</th>
                    <th>Total</th>
                </tr>
                <tr>
                    <td>Produit A</td>
                    <td>3</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>Produit B</td>
                    <td>2</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>Produit C</td>
                    <td>1</td>
                    <td>1</td>
                </tr>
                <tr>
                    <th colspan="2">Total</th>
                </tr>
            </table>
        </div>
        <div id="form_livr" class="row">
            <div class="panier">
                <?php if ( ! empty($panier)) { // Des items sont présents ?>
                    <table class="panier_liste">
                        <?php foreach ($panier as $article_id => $article) { ?>
                            <tr class="panier_article">
                             <td class="panier_article_name"><?= $article[PS_PANIER_ITEM_NAME]?></td>
                              <td>  <span class="panier_article_quantite">(<?= $article[PS_PANIER_ITEM_QTY]?>)</span></td>
                                <form class="panier_action" method="post">
                                    <input class="comm-panier" class="ui-button ui-widget ui-corner-all ui-button-icon-only" type="submit" name="panier_remove" value="X"/>
                                    <input type="hidden" name="article_id" value="<?=$article_id?>"/>
                                </form>
                            </tr>
                        <?php } ?>
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
