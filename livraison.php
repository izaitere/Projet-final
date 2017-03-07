<?php
require_once 'defines.php';
$page_title = 'livraison';
?>

<?php
require_once 'views/page_head.php';
require_once 'views/header.php';
require_once('db/db_access.php');
require_once 'panier.php';

?>
<main>
    <div class="row wrapper">


        <div class="col-16 panier-lis">
            <?php if ( ! empty($panier)) { // Des items sont présents ?>
            <table id="details" class="panier_liste col-8 col-m-16">
                <tr>
                    <th>Désignation</th>
                    <th>Quantité</th>
                    <th>Supprimer du panier</th>
                </tr>
                    <?php foreach ($panier as $article_id => $article) { ?>
                        <tr>
                        <td class="panier_article">
                            <span class="panier_article_name"><?= $article['name']?> </span>
                        </td>
                        <td class="panier_article">

                            <span class="panier_article_quantite">(<?= $article['qty']?>)</span>
                        </td>

                          <td> <form class="row col-16 panier_action" method="post">
                                <input class="ui-button ui-widget ui-corner-all ui-button-icon-only" type="submit" name="panier_remove" value="X"/>
                                <input type="hidden" name="article_id" value="<?=$article_id?>"/>
                            </form></td></tr>
                    <?php } ?>

            </table>
                <form class="col-4 panier_action" method="post">
                    <input type="submit" name="panier_empty" value="vider le panier">
                    <span><a class="liens" href="contact.php">Livraison</a></span>
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
