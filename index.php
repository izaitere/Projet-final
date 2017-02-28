<?php
$page_title = 'Accueil';

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
require_once 'views/page_head.php';
require_once 'views/header.php';
?>
<main>
    <div class="wrapper">
        <section class="row col-16">
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
            <aside class="col-4">
                <h2>Thèmes</h2>
                <ul>
                    <li><a href="index.php?catid=1">Mariage</a></li>
                   <li><a href="index.php?catid=2">Fiancailles</a></li>
                    <li><a href="index.php?catid=3">Naissance</a></li>
                    <li><a href="index.php?catid=4">Fêtes des mères</a></li>
                    <li><a href="index.php?catid=5">Convalescence</li>
                    <li><a href="index.php?catid=6">Deuil</li>
                    <li><a href="index.php?catid=7">Anniversaires</li>
                    <li><a href="index.php?catid=8">Occasions Spéciales</li>
                    <li><a href="index.php?catid=9">Saint Valentin</li>
                    <li>Bal des initiés</li>
                    <li>Noel</li>
                    <li>Paques</li>
                    <li>Votre bouquet personnalisé</li>
                </ul>
            </aside>
            <div id="catalogue" class="col-12">
                <section id="art" class="row col-16">
                    <?php foreach ($articles as $id => $article) { ?>
                    <article class="col-4">
                        <h2><?= utf8_encode($article['name']) ?></h2>
                        <img src="images/<?= $article['image'] ?>" alt="bouquet mariage">
                        <p><?= utf8_encode($article['description']) ?></p>
                        <div class="row shopping">
                        <p><?= utf8_encode($article['prix']) ?>$can</p>
                        <a href="livraison.php"><img src="images/shopping-cart.png" alt="panier"></a>
                        </div>
                        <div class="row res-soc">
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
</html>
