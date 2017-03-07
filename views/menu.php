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
            <li><a href="livraison.php">Mon panier </a></li>
            <li><a><span class="panier_count"><?= panier_get_count() ?><img src="images/shopping-cart.png" alt="panier">
</span></a></li>
            <li><a href="compte.php">Mon compte </a></li>
            <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

            <div id="id01" class="modal">

                <form class="modal-content animate" action="/action_page.php">
                    <div class="imgcontainer">
                        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                        <img src="images/man.png" alt="compte">
                    </div>

                    <div class="container">
                        <label><b>Nom utilisateur</b></label>
                        <input id="use_name" class="modallog" type="text" placeholder="Entrer nom utilisateur" name="uname" required>

                        <label><b>Mot de passe</b></label>
                        <input class="modallog" type="password" placeholder="Entrer mot de passe" name="psw" required>

                        <button type="submit">Login</button>
                        <input type="checkbox" checked="checked"> se rappeler de moi
                    </div>

                    <div class="container" style="background-color:#f1f1f1">
                        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Annuler</button>
                        <span class="psw"><a href="#"> mot de passe oublié?</a></span>
                    </div>
                </form>
            </div>
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
            <li><a href="livraison.php">Livraison</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="compte.php">Mon Compte</a></li>
            <li><a href="#">A Propos</a></li>
        </ul>
            </div>
    </nav>
</div>


