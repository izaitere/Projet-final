<?php
require_once 'defines.php';
$page_title = 'Accueil';
?>

<?php
require_once 'views/page_head.php';
require_once 'views/header.php';
?>
<main>
    <div class="wrapper">
        <div class="row col-16">
            <aside class="col-4">
                <h2>Thèmes</h2>
                <ul>
                    <li>Mariage</li>
                    <li>Naissance</li>
                    <li>Anniversaires</li>
                    <li>Fêtes des mères</li>
                    <li>Saint Valentin</li>
                    <li>Bal des initiés</li>
                    <li>Noel</li>
                    <li>Paques</li>
                    <li>Toute occasion</li>
                    <li>Personnalisé</li>
                    <li>Deuil</li>
                </ul>
            </aside>
            <div id="catalogue" class="col-12">
                <section id="art" class="row col-16">
                    <article class="col-4">
                        <h2>Bouquet Blanc</h2>
                        <p>Bouquet de la mariée</p>
                    </article>
                    <article class="col-4">
                        <h2>Bouquet Pinky</h2>
                        <p>Bouquet Saint Valentin</p>
                    </article>

                    <article class="col-4">
                        <h2>Bouquet Ivoire</h2>
                        <p>Bouquet Anniversaire</p>
                    </article>
                    <article class="col-4">
                        <h2>Bouquet Passion</h2>
                        <p>Bouquet Naissance.</p>
                    </article>
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
