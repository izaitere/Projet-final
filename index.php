<?php
$page_title = 'Accueil';

require_once 'views/page_head.php';
require_once 'views/header.php';
require_once 'defines.php';
require_once('db/db_access.php');
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
        <section class="row col-16 col-m-16 col-s-16">
            <div id="slider">
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
                                <img src="images/slider2.jpg" alt="les orchidées">
                            </article>
                            <article>
                                <div class="info"><h3>Le bouquet haut en couleurs</h3></div>
                                <img src="images/slider3.jpg" alt="bouquet fleuri">
                            </article>
                            <article>
                                <div class="info"><h3>Exprimez votre passion</h3></div>
                                <img src="images/slider4.jpg" alt="Les roses rouge passion">
                            </article>
                            <article>
                                <div class="info"><h3>Bouquet Pinky pour les plus féminines</h3></div>
                                <img src="images/slider6.jpg" alt="Bouquet de roses">
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
            </div>
        </section>
        <div class="main row col-16">
            <aside class="col-4 col-m-6 col-s-6">


                    <h3><a href="index.php">Thèmes</a></h3>

                    <div id="accordion">

                    <ul><h4><a href="index.php?catid=1">Mariage</a></h4>
                        <li><a href="details.php?id_art=1">Bouquet Nature</a></li>
                        <li><a href="details.php?id_art=2">Bouquet Blanc</a></li>
                    </ul>
                    <ul><h4><a href="index.php?catid=2">Fiancailles</a></h4>
                        <li><a href="details.php?id_art=9">Bouquet Blanc</a></li>
                        <li><a href="details.php?id_art=10">Bouquet Champêtre</a></li>
                    </ul>
                    <ul><h4><a href="index.php?catid=3">Naissance</a></h4>
                        <li><a href="details.php?id_art=16">Bouquet happy</a></li>
                        <li><a href="details.php?id_art=17">Bouquet Champêtre</a></li>
                    </ul>
                    <ul><h4><a href="index.php?catid=4">Fête des mères</a></h4>
                         <li><a href="details.php?id_art=23">Bouquet happy</a></li>
                         <li><a href="details.php?id_art=24">Bouquet Champêtre</a></li>
                    </ul>
                   <ul><h4><a href="index.php?catid=5">Convalescence</a></h4>
                        <li><a href="details.php?id_art=30">Bouquet Blanc</a></li>
                        <li><a href="details.php?id_art=31">Bouquet Champêtre</a></li>
                    </ul>
                    <ul><h4><a href="index.php?catid=6">Deuil</a></h4>
                        <li><a href="details.php?id_art=44">Bouquet Nature</a></li>
                        <li><a href="details.php?id_art=45">Bouquet Blanc</a></li>
                        <li><a href="details.php?id_art=46">Bouquet Champêtre</a></li>
                    </ul>
                    <ul><h4><a href="index.php?catid=7">Anniversaires</a></h4>
                        <li><a href="details.php?id_art=51">Bouquet Nature</a></li>
                        <li><a href="details.php?id_art=52">Bouquet Champêtre</a></li>
                    </ul>
                    <ul><h4><a href="index.php?catid=8">Occasions Spéciales</a></h4>
                        <li><a href="details.php?id_art=58">Bouquet Nature</a></li>
                        <li><a href="details.php?id_art=59">Bouquet Blanc</a></li>
                    </ul>
                    <ul><h4><a href="index.php?catid=9">Saint Valentin</a></h4>
                        <li><a href="details.php?id_art=65">Bouquet Nature</a></li>
                        <li><a href="details.php?id_art=66">Bouquet Champêtre</a></li>
                    </ul>
                    <ul><h4><a href="index.php?catid=4">Noel</a></h4>
                        <li><a href="details.php?id_art=72">Bouquet Nature</a></li>
                        <li><a href="details.php?id_art=73">Bouquet Blanc</a></li>
                    </ul>



            </aside>
            <div id="catalogue" class="col-12 col-m-10 col-s-10">
                <section id="art" class="row col-16 col-m-16 col-s-16">
                    <?php foreach ($articles as $id => $article) { ?>
                    <article class="row art col-4 col-m-8 col-s-16">
                        <h4><?= utf8_encode($article['name']) ?></h4>
                       <a href="details.php?id_art=<?= $id ?>"><img src="images/<?= $article['image'] ?>" alt="bouquet mariage"></a>
                        <p><?= utf8_encode($article['description']) ?></p>
                        <div class="row col-16 col-m-16 col-s-16 shopping">
                        <p class="col-8 col-m-8 col-s-8"><?= utf8_encode($article['prix']) ?>$can</p>
                         <span class="col-8 col-m-8 col-s-8" ><a href="details.php"><img src="images/shopping-cart.png" alt="panier"></a></span>

                        </div>
                        <div class="row res-soc col-16 col-m-16 col-s-16">
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

</html>
