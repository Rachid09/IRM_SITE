<?php

define('__ROOT__', dirname(dirname(__FILE__)));
require(__ROOT__ . '/site_irm/includes/functions/connect.php');

if (isset($_POST["submit"])) {
    # code...

    try {
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $email = $_POST["email"];
        $password = $_POST['password'];
        $tele = $_POST["tele"];
        $cne = $_POST["cne"];
        $pays = $_POST["pays"];
        $annee_bac = $_POST['annee_bac'];
        $serie_bac = $_POST['serie_bac'];
        $etab_prev = $_POST['etab_prev'];
        $diplome = $_POST['diplome'];
        $civilite = $_POST['civilite'];


        $query = 'SELECT count(*) as nbrlignes  FROM info_etudiants where email=? and cne=?';
        $stmt = $db->prepare($query);
        $stmt->bindValue(1, $email, PDO::PARAM_STR);
        $stmt->bindValue(2, $cne, PDO::PARAM_STR);
        $stmt->execute();
        $etud = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($etud['nbrlignes'] == 0) {


            $query = "INSERT INTO info_etudiants values (?,?,?,?,?,?,?,?,?,?,?,?)";
            $stmt = $db->prepare($query);


            $hashed_password = password_hash($_POST['password'], PASSWORD_DEFAULT);


            $stmt->bindValue(1, $cne, PDO::PARAM_STR);
            $stmt->bindValue(2, $nom, PDO::PARAM_STR);
            $stmt->bindValue(3, $prenom, PDO::PARAM_STR);
            $stmt->bindValue(4, $pays, PDO::PARAM_STR);
            $stmt->bindValue(5, $tele, PDO::PARAM_STR);
            $stmt->bindValue(6, $email, PDO::PARAM_STR);
            $stmt->bindValue(7, $hashed_password, PDO::PARAM_STR);
            $stmt->bindValue(8, $annee_bac, PDO::PARAM_INT);
            $stmt->bindValue(9, $serie_bac, PDO::PARAM_STR);
            $stmt->bindValue(10, $etab_prev, PDO::PARAM_STR);
            $stmt->bindValue(11, $diplome, PDO::PARAM_STR);
            $stmt->bindValue(12, $civilite, PDO::PARAM_STR);
            $result = $stmt->execute();

            header('Location:candidature.php?reg_err=success');
            die();
        } else {
            header('Location:candidature.php?reg_err=already');
            die();

            $db = null;
        }
    } catch (PDOException $e) {
        echo 'the error is :' . $e->getMessage();
    }
}

?>



<?php
include 'includes/templates/head.php';
include 'includes/templates/navbar.php';

?>
<?php

include 'includes/templates/statistiques.php';
?>

<section class="condidature">
    <h1 class="heading-primary mb-6">Formulaire de pré-inscription</h1>
    <div class="condidature__container">
        <figure class="condidature__image">
            <img src="./layout/img/8.jpg" alt="" />
            <img src="./layout/img//1 2.jpg" alt="" srcset="" />
        </figure>
        <?php
        if (isset($_GET['reg_err'])) {
            $err = htmlspecialchars($_GET['reg_err']);

            switch ($err) {
                case 'success':
        ?>
                    <div class="alert alert-success">
                        <strong>Succès</strong> inscription réussie !
                    </div>
                    <?php
                    break;
                    ?>
                <?php
                case 'already':
                ?>
                    <div class="alert alert-danger">
                        <strong>Erreur</strong> compte deja existant
                    </div>
        <?php

            }
        }
        ?>
        <div class="condidature__form">
            <form action="candidature.php" method="post">
                <select name="civilite" class="form__input">
                    <option value="">Civilité*</option>
                    <option value="Mr">Mr</option>
                    <option value="Mme">Mme</option>
                    <option value="Mlle">Mlle</option>
                </select>
                <input class="form__input" name="nom" type="text" placeholder="Nom" />
                <input type="text" class="form__input" placeholder="Prenom" name="prenom" />
                <input type="text" class="form__input" placeholder="CNE*" name="cne" />
                <select name="pays" class="form__input">
                    <option value="">Pays*</option>
                    <option value="MAROC">maroc</option>
                    <option value="MALI">Mali</option>
                    <option value="SENEGAL">Senegal</option>
                </select>

                <input type="text" class="form__input" placeholder="Tele" name="tele" />
                <input type="email" class="form__input" placeholder="Email*" name="email" />
                <input class="form__input" name="password" type="password" placeholder="Password" />

                <select name="serie_bac" class="form__input">
                    <option value="">Série du Baccalauréat*</option>
                    <option value="PC">physique</option>
                    <option value="SM">Science maths</option>
                    <option value="inter">international</option>
                </select>
                <select name="annee_bac" class="form__input">
                    <option value="">Année du Baccalauréat*</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                </select>

                <input type="text" class="form__input" placeholder="Etablissement superieur précédente" name="etab_prev" />
                <input type="text" class="form__input" placeholder="Diplome supérieur obtenu" name="diplome" />
                <input type="submit" class="form__input cta-btn" name="submit" value="Je condidate" />
            </form>
        </div>
    </div>
</section>

<?php

include 'includes/templates/footer.php';
?>