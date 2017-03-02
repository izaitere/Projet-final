<?php
$page_title = 'Accueil';

require_once 'views/page_head.php';
require_once 'views/header.php';
require_once 'defines.php';
require_once('db/db_access.php');
define('CAT_ID','catid');
$id_cat ='';
$where = '';
if(array_key_exists(CAT_ID, $_GET)) {
    if(array_key_exists($_GET[CAT_ID], $categories)) {
        $id_cat = $_GET[CAT_ID];
        $where  = 'WHERE category_id = ' . $id_cat;
    }

}
/*var_dump('id_cat vaut'. $id_cat);
var_dump($id_cat);*/

$articles = get_articles($where);

?>

<?php

?>
<main>
    <div class="row wrapper">
        <section class="row col-16 col-s-16">
            <section id="slider">
                <input type="radio" name="slider" id="slide1" checked/>
                <input type="radio" name="slider" id="slide2"/>
                <input type="radio" name="slider" id="slide3"/>
                <input type="radio" name="slider" id="slide4"/>
                <input type="radio" name="slider" id="slide5"/>
                <!--carroussel-->
                <div id="slides">
                    <div id="overflow">
                        <div class="inner">
                            <article>
                                <div class="info"><h3>Les roses sous toutes leurs formes</h3></div>
                                <img src="images/slider1.jpg" alt="bouquet de roses multicolores">
                            </article>
                            <article>
                                <div class="info"><h3>Les orchidées</h3></div>
                                <img src="images/bouqslider10.jpg" alt="les orchidées">
                            </article>
                            <article>
                                <div class="info"><h3>Le bouquet haut en couleurs</h3></div>
                                <img src="images/bouqslider11.jpg" alt="bouquet fleuri">
                            </article>
                            <article>
                                <div class="info"><h3>Exprimez votre passion</h3></div>
                                <img src="images/bouqslider15.jpg" alt="Les roses rouge passion">
                            </article>
                            <article>
                                <div class="info"><h3>Bouquet Pinky pour les plus féminines</h3></div>
                                <img src="images/bouqslider5.jpg" alt="Bouquet de roses">
                            </article>
                        </div>
                    </div>
                </div>
                <!--les boutons de controle-->
                <div id="active">
                    <label for="slide1"></label>
                    <label for="slide2"></label>
                    <label for="slide3"></label>
                    <label for="slide4"></label>
                    <label for="slide5"></label>
                </div>
                <!--END ACTIVE-->
                <!--end slider-->
            </section>
        </section>
        <div class="row col-16">
            <aside class="col-4 col-m-4 col-s-4">


                    <h3><a href="index.php">Thèmes</a></h3>

                    <div id="accordion">

                    <ul><h4><a href="index.php?catid=1">Mariage</a></h4>
                        <li><a href="details.php">Bouquet Nature</a></li>
                        <li><a href="details.php">Bouquet Blanc</a></li>

                    </ul>
                       <h4><a href="index.php?catid=2">Fiancailles</a></h4>
                        <ul>
                        <li><a href="details.php">Bouquet Blanc</a></li>
                        <li><a href="details.php">Bouquet Champêtre</a></li>
                    </ul>

                    <ul><h4><a href="index.php?catid=3">Naissance</a></h4>
                        <li><a href="details.php">Bouquet happy</a></li>
                        <li><a href="details.php">Bouquet Champêtre</a></li>
                    </ul>

                    <ul><h4><a href="index.php?catid=4">Fêtes des mères</a></h4>
                        <li><a href="details.php">Bouquet unique</a></li>
                        <li><a href="details.php">Bouquet Champêtre</a></li>

                    </ul>

                    <ul><h4><a href="index.php?catid=5">Convalescence</a></h4>
                        <li><a href="details.php">Bouquet Blanc</a></li>
                        <li><a href="details.php">Bouquet Champêtre</a></li>
                    </ul>

                    <ul><h4><a href="index.php?catid=6">Deuil</a></h4>
                        <li><a href="details.php">Bouquet Nature</a></li>
                        <li><a href="details.php">Bouquet Blanc</a></li>
                        <li><a href="details.php">Bouquet Champêtre</a></li>

                    </ul>

                    <ul><h4><a href="index.php?catid=7">Anniversaires</a></h4>
                        <li><a href="details.php">Bouquet Nature</a></li>
                        <li><a href="details.php">Bouquet Champêtre</a></li>
                    </ul>

                    <ul><h4><a href="index.php?catid=8">Occasions Spéciales</a></h4>
                        <li><a href="details.php">Bouquet Nature</a></li>
                        <li><a href="details.php">Bouquet Blanc</a></li>
                    </ul>

                    <ul><h4><a href="index.php?catid=9">Saint Valentin</a></h4>
                        <li><a href="details.php">Bouquet Nature</a></li>
                        <li><a href="details.php">Bouquet Champêtre</a></li>
                    </ul>

                    <ul><h4><a href="index.php?catid=8">Bal des initiés</a></h4>
                        <li><a href="details.php">Bouquet Blanc</a></li>
                        <li><a href="details.php">Bouquet Champêtre</a></li>
                    </ul>

                    <ul><h4><a href="index.php?catid=4">Noel</a></h4>
                        <li><a href="details.php">Bouquet Nature</a></li>
                        <li><a href="details.php">Bouquet Blanc</a></li>

                    </ul>

                    <ul><h4><a href="index.php?catid=8">Paques</a></h4>
                        <li><a href="details.php">Bouquet Nature</a></li>
                        <li><a href="details.php">Bouquet Champêtre</a></li>

                    </ul>

                    <ul><h4><a href="index.php?catid=8">Votre bouquet personnalisé</a></h4>
                        <li><a href="details.php">Bouquet Nature</a></li>
                        <li><a href="details.php">Bouquet Champêtre</a></li>
                    </ul>
                    </div>


            </aside>
            <div id="catalogue" class="col-12">
                <section id="art" class="row col-16">
                    <?php foreach ($articles as $id => $article) { ?>
                    <article class="row art col-4 col-m-8 col-s-16">
                        <h4><?= utf8_encode($article['name']) ?></h4>
                        <img src="images/<?= $article['image'] ?>" alt="bouquet mariage">
                        <p><?= utf8_encode($article['description']) ?></p>
                        <div class="row col-16 col-m-16 col-s-16 shopping">
                        <p><?= utf8_encode($article['prix']) ?>$can</p>
                            <form class="panier_action" method="post">
                                <input id="comm-panier" type="submit" name="panier_add" value="Ajouter"/>
                                <input type="hidden" name="article_id" value="<?= $id ?>"/>
                                <input type="hidden" name="article_name" value="<?=utf8_encode($article['name'])?>"/>
                            </form>
                        <a href="livraison.php"><img src="images/shopping-cart.png" alt="panier"></a>

                        </div>
                        <div class="row res-soc col-m-16 col-s-16">
                            <img src="images/facebook.png" alt="facebook">
                            <img src="images/google-plus.png" alt="google plus">
                            <img src="images/twitter.png" alt="twitter">
                            <img src="images/youtube.png" alt="you tube">

                        </div>

                    </article>
                    <?php } ?>

                </section>
            </div>

        </div>
    </div>
</main>
<?php
require_once 'views/footer.php';
?>

</body>
<!--<script>
    $( function() {
        $( "#accordion" ).accordion();
    } );
</script>-->
<script type="text/javascript">
    $(function ($) {
        $('.menu-btn').click(function () {
            $('.responsive-menu').toggle('expand')

        })

    })
</script>
</html>
