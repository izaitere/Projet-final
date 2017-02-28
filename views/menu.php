<?php
/**
 * Created by PhpStorm.
 * User: izaitere
 * Date: 2017-01-17
 * Time: 12:02
 */
?>
<div class="wrapper">
    <nav>
        <ol>
            <li><a href="compte.php">Mon compte </a></li>
            <li><img src="images/man.png" alt="compte"></li>
            <li><a href="details.php">Mon panier </a></li>
            <li><img src="images/shopping-cart.png" alt="panier"></a></li>
        </ol>

        <!--<div><form action="" method="post" id="search_mini_form">
            <input type="search" name="text" id="" value="" placeholder="Rechercher">
            <a href="catalogue.php"><img src="images/loupe.png" alt="loupe"></a>
        </form>
        </div>-->
    </nav>
    <nav>
        <img src="images/logo-flower-design.png" alt="logo fleuriste flower design">

        <ul>

            <li class="<?php if($page_title== 'accueil'){
                 echo 'active'; } ?> "  ><a href="index.php">Accueil</a></li>
            <li><a href="catalog.php">Thèmes</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="livraison.php">Livraison</a></li>
            <li><a href="apropos.php">A Propos</a></li>
        </ul>
    </nav>
</div>


