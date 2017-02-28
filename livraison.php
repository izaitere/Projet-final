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
        <div id="mon_total" class="row">
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



    </div>
</main>
<?php
require_once 'views/footer.php';
?>
</body>
</html>
