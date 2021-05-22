<?php

define('__ROOT__', dirname(dirname(__FILE__)));
require(__ROOT__ . '/site_irm/includes/functions/connect.php');
session_start();

if (
    isset($_POST["submit"])  && !empty($_POST['cne'])
    && !empty($_POST['nom'])
    && !empty($_POST['prenom'])
    && !empty($_POST['email'])
    && !empty($_POST['password'])
    && !empty($_POST['tele'])
    && !empty($_POST['pays'])
    && !empty($_POST['annee_bac'])
    && !empty($_POST['serie_bac'])
    && !empty($_POST['etab_prev'])
    && !empty($_POST['diplome'])
    && !empty($_POST['civilite'])

) {
    echo $_POST['img_profile'];
    # code...

    try {
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $email = $_POST["email"];
        $password = $_POST['password'];
        $tele = $_POST["tele"];
        $filename = $_FILES["img_profile"]["name"];
        $tempname = $_FILES["img_profile"]["tmp_name"];
        $folder = "layout/uploads/" . $filename;
        $cne_candidat = $_POST["cne"];
        $pays = $_POST["pays"];
        $annee_bac = $_POST['annee_bac'];
        $serie_bac = $_POST['serie_bac'];
        $etab_prev = $_POST['etab_prev'];
        $diplome = $_POST['diplome'];
        $civilite = $_POST['civilite'];



        $query = 'SELECT count(*) as nbrlignes  FROM info_etudiants where cne=? or email=?';
        $stmt = $db->prepare($query);
        $stmt->bindValue(2, $email, PDO::PARAM_STR);
        $stmt->bindValue(1, $cne_candidat, PDO::PARAM_STR);
        $stmt->execute();
        $etud = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($etud['nbrlignes'] == 0) {
            $query = "INSERT INTO info_etudiants values (?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $stmt = $db->prepare($query);

            $hashed_password = password_hash($_POST['password'], PASSWORD_DEFAULT);


            $stmt->bindValue(1, $cne_candidat, PDO::PARAM_STR);
            $stmt->bindValue(2, $nom, PDO::PARAM_STR);
            $stmt->bindValue(3, $prenom, PDO::PARAM_STR);
            $stmt->bindValue(4, $pays, PDO::PARAM_STR);
            $stmt->bindValue(5, $tele, PDO::PARAM_STR);
            $stmt->bindValue(6, $email, PDO::PARAM_STR);
            $stmt->bindValue(7, $hashed_password, PDO::PARAM_STR);
            $stmt->bindValue(8, $filename, PDO::PARAM_STR);
            $stmt->bindValue(9, $annee_bac, PDO::PARAM_INT);
            $stmt->bindValue(10, $serie_bac, PDO::PARAM_STR);
            $stmt->bindValue(11, $etab_prev, PDO::PARAM_STR);
            $stmt->bindValue(12, $diplome, PDO::PARAM_STR);
            $stmt->bindValue(13, $civilite, PDO::PARAM_STR);
            if (move_uploaded_file($tempname, $folder)) {
                $result = $stmt->execute();
            } else {
                echo 'image not uploded';
            }


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
function redirect()
{
    header('location: index.php');
}
if (isset($_SESSION['cne'])) {
    redirect();
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
    <?php
    if (isset($_GET['reg_err'])) {
        $err = htmlspecialchars($_GET['reg_err']);

        switch ($err) {
            case 'success':
    ?>
                <div style=" margin:0 auto; border-radius:4px; padding:1.2rem 1rem; width:70%;margin-bottom:1rem ;   background-color: #d7fadf;
">
                    <h1 style="color:#2aa539 ;font-size:0.9rem;">Inscription réussite</h1>
                </div>
                <?php
                break;
                ?>
            <?php
            case 'already':
            ?>
                <div style=" margin:0 auto; border-radius:4px; padding:1.2rem 1rem; width:70%;margin-bottom:1rem ;   background-color: antiquewhite;
">
                    <h1 style="color:brown ;font-size:0.9rem;">Ce compte existe deja</h1>
                </div>
    <?php


        }
    }
    ?>
    <div class="condidature__container">
        <figure class="condidature__image">
            <img src="./layout/img/8.jpg" alt="" />
            <img src="./layout/img//1 2.jpg" alt="" srcset="" />
        </figure>
        <div class="condidature__form">
            <form action="candidature.php" method="post" enctype='multipart/form-data'>
                <select name="civilite" class="form__input" required>
                    <option value="">Civilité*</option>
                    <option value="Mr">Mr</option>
                    <option value="Mme">Mme</option>
                    <option value="Mlle">Mlle</option>
                </select>
                <input class="form__input" name="nom" type="text" placeholder="Nom" required />
                <input type="text" class="form__input" placeholder="Prenom" name="prenom" required />
                <input type="text" class="form__input" placeholder="CNE*" name="cne" required />
                <select name="pays" class="form__input" required>
                    <option value="">Pays*</option>
                    <option value="MAROC">maroc</option>
                    <option value="MALI">Mali</option>
                    <option value="SENEGAL">Senegal</option>
                </select>

                <input type="text" class="form__input" placeholder="Tele" name="tele" required />
                <input type="email" class="form__input" placeholder="Email*" name="email" required />
                <input class="form__input" name="password" type="password" placeholder="Password" required />
                <input class="form__input" name="img_profile" type="file" placeholder="upload votre image" required />

                <select name="serie_bac" class="form__input" required>
                    <option value="">Série du Baccalauréat*</option>
                    <option value="PC">physique</option>
                    <option value="SM">Science maths</option>
                    <option value="inter">international</option>
                </select>
                <select name="annee_bac" class="form__input" required>
                    <option value="">Année du Baccalauréat*</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                </select>

                <input type="text" class="form__input" placeholder="Etablissement superieur précédente" name="etab_prev" required />
                <input type="text" class="form__input" placeholder="Diplome supérieur obtenu" name="diplome" required />
                <input type="submit" class="form__input cta-btn" name="submit" value="Je condidate" />
            </form>
        </div>
    </div>
</section>

<?php

include 'includes/templates/footer.php';
?>