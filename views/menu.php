<?php
/**
 * Created by PhpStorm.
 * User: izaitere
 * Date: 2017-01-17
 * Time: 12:02
 */
?>
    <nav>
        <ul>
            <li><a href="compte.php">Mon compte</a></li>
            <li><a href="details.php">Mon panier</a></li>
        </ul>
    </nav>
<img src="images/logo-flower-design.png">
    <nav>
        <ul>
            <li class="<?php if($page_title== 'accueil'){
                 echo 'active'; } ?> "  ><a href="index.php">Accueil</a></li>
            <li><a href="catalog.php">Thèmes</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="livraison.php">Livraison</a></li>
            <li><a href="apropos.php">A Propos</a></li>
        </ul>
    </nav>

