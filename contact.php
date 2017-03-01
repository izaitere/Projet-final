<?php
require_once 'defines.php';
$page_title = 'contact';
?>

<?php
require_once 'views/page_head.php';
require_once 'views/header.php';

//var_dump($_POST);
//affichage initial du formulaire ? ou bien reception des donnees
$en_reception = array_key_exists('saisie_nom', $_POST) && array_key_exists('saisie_prenom', $_POST);
//reception du nom

$nom = '';
$nom_valide = true;
if(array_key_exists('saisie_nom', $_POST)) {
    //php assure le filtrage de la chaine d entree
    $nom = filter_input(INPUT_POST, 'saisie_nom', FILTER_SANITIZE_STRING);
    $nom_valide = (1 === preg_match('/\w{1,}/', $nom));
    // l antislah est un echappement
}
//reception du prenom

$prenom = '';
$prenom_valide = true;

if(array_key_exists('saisie_prenom', $_POST)){
    $prenom = filter_input(INPUT_POST, 'saisie_prenom', FILTER_SANITIZE_STRING);
    //2 caracteres dont le premier est majuscule
    $prenom_valide = (1 === preg_match('/[A-Z]\w{1,}/', $prenom));
}

if($en_reception && $nom_valide && $prenom_valide){
    //les donnees de formulaires sont valides o redirige l utilisateur
    header('location:ok.php');
    exit;
}
$email = '';
$email_valide = true;

if(array_key_exists('saisie_email', $_POST)){
    $email = filter_input(INPUT_POST, 'saisie_email', FILTER_SANITIZE_STRING);
    //2 caracteres dont le premier est majuscule
    $email_valide = (false !== filter_var($email, FILTER_VALIDATE_EMAIL));
}

if($en_reception && $nom_valide && $prenom_valide && $email_valide){
    //les donnees de formulaires sont valides o redirige l utilisateur
    header('location:ok.php');
    exit;
}

?>
<main>
    <div class="wrapper">
        <form id="formulaire" action="<?= basename(__FILE__) ?>" method="post">
            <!-- method GET par defaut, POST si précisé -->
            <div class="<?= $nom_valide ? '' : 'invalid' ?>">
                <label for="saisie_nom">Nom : </label>
                <input type="text" placeholder="(entrez votre nom)" id="saisie_nom" name="saisie_nom" value="<?= $nom ?>"/>
                <?php if ( ! $nom_valide) { ?>
                    <p>le nom doit contenir au moins un caractere</p>
                <?php } ?>
            </div>
            <div class="<?= $prenom_valide ? '' : 'invalid' ?>">
                <label for="saisie_prenom">Prénom : </label>
                <input type="text" placeholder="(entrez votre prénom)" id="saisie_prenom" name="saisie_prenom" value="<?= $prenom ?>"/>
                <?php if ( ! $prenom_valide) { ?>
                    <p>le prenom doit contenir au moins deux caracteres, le premier etant une majuscule</p>
                <?php } ?>
            </div>
            <div class="<?= $email_valide ? '' : 'invalid' ?>">
                <label for="saisie_email">Courriel : </label>
                <input type="text" placeholder="(entrez votre courriel)" id="saisie_email" name="saisie_email" value="<?= $email ?>"/>
                <?php if ( ! $email_valide) { ?>
                    <p>Vérifiez votre adresse mail </p>
                <?php } ?>
            </div>
            <div>
                <textarea name="comment" rows="5" cols="40"></textarea>
            </div>
            <div class="radio">

            <input type="radio" name="gender"
                <?php if (isset($gender) && $gender == "homme") echo "checked"; ?>
                   value="homme"> Homme
            <input type="radio" name="gender"
                <?php if (isset($gender) && $gender == "femme") echo "checked"; ?>
                   value="femme"> Femme

            </div>
            <div>
                <label for="date">Date livraison </label>
                <input type="date" name="bday">
            </div>
            <div>
                <form action="/action_page.php">
                    Enter a date before 1980-01-01:<br>
                    <input type="date" name="bday" max="1979-12-31"><br><br>
                    Enter a date after 2000-01-01:<br>
                    <input type="date" name="bday" min="2000-01-02"><br><br>
                    <input type="submit">
                </form>

                <p><strong>Note:</strong> type="date" n'est pas supportée par Firefox, ou Internet Explorer 11(versions antérieures comprises).</p>

                </body>
            </div>




            <div>
                <input type="reset">
                <input type="submit" value="Soumettre"/>
            </div>
        </form>
</main>
<?php
require_once 'views/footer.php';
?>
</body>
</html>
