<?php
/**
 * Created by PhpStorm.
 * User: izaitere
 * Date: 2017-01-17
 * Time: 12:02
 */
include 'panier.php';

?>
<div class="wrapper">
    <nav>
        <ol>
            <li><a><span class="panier_count"><?= panier_get_count() ?><img src="images/shopping-cart.png" alt="panier">
</span></a></li>
            <li><a href="livraison.php">Mon panier </a></li>
            <li><a href="compte.php">Mon compte </a></li>
            <li><img src="images/man.png" alt="compte"></li>
        </ol>
    </nav>
    <div id="logo"><a href="index.php"><img src="images/logo-flower-design.png" alt="logo fleuriste flower design"></a>
    </div>
    <nav>
        <div class="mobile-nav">
            <!-- menu hamburger -->
            <div class="menu-btn" id="menu-btn">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <!-- END menu hamburger	 -->
            <div class="responsive-menu">
        <ul>

            <li class="<?php if($page_title== 'accueil'){
                 echo 'active'; } ?> "  ><a href="index.php">Accueil</a></li>
            <li><a href="details.php">Details</a></li>
            <li><a href="livraison.php">Livraison</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="apropos.php">A Propos</a></li>
        </ul>
            </div>
    </nav>
</div>


