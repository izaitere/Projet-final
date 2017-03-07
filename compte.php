<?php
require_once 'defines.php';
$page_title = 'compte';
?>

<?php
require_once 'views/page_head.php';
require_once 'views/header.php';
?>
<main>
    <div class="wrapper">
        <section class="main row">
            <div class="content_form col-16">
                <h2>Créer un compte</h2>


                <form action="" method="post" class="form_compte">
                    <div class="col_gauche col-8" >
                        <p class="title">Nouveaux clients ? Inscrivez vous</p>

                        <button type="button" title="Créer un compte">Créer un compte</button>
                    </div>
                    <div class="col_droite col-8">
                        <p class="subtitle">Clients enregistrés ? Identfiiez vous</p>

                        <div class="row">
                            <label for="email" class="mon_email">Adresse courriel<span>*</span></label>
                            <input type="email" id="email" name="email" placeholder="email" required/>
                        </div>
                        <div class="row">
                            <label for="pass" class="mot_passe">Mot de passe<span>*</span></label>
                            <input type="password" name="" class="" id="pass" placeholder="Mot de passe">
                        </div>
                        <a href="#" class="green-link">Mot de passe oublié</a>
                        <div class="clearfix btn-gradient arrow-left">
                            <div class="middle" style="width: 116px;">
                                <button type="button" title="Créer un compte" class="submit">Se connecter</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </section>
    </div>
</main>
<?php
require_once 'views/footer.php';
?>
</body>
</html>
