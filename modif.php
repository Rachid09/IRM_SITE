<?php
define('__ROOT__', dirname(dirname(__FILE__)));
require(__ROOT__ . '/site_irm/includes/functions/connect.php');

session_start();
$cne = $_SESSION['cne'];
$password = $_SESSION['password'];

//$req="INSERT INTO article values('',".$nom.",".$prix.")";
$req = "SELECT * FROM info_etudiants WHERE cne=?";
$stmt = $db->prepare($req);
$stmt->bindValue(1, $cne, PDO::PARAM_STR);

$stmt->execute();
$etud = $stmt->fetch(PDO::FETCH_OBJ);
if (!$etud) {
    header('location: login.php');
}
?>


<?php
include 'includes/templates/head.php';
include 'includes/templates/navbar.php';

?>

<div class="modif">
    <div class="modification__form">
        <?php
        if (isset($_GET['reg_err'])) {
            $err = htmlspecialchars($_GET['reg_err']);

            switch ($err) {
                case 'mtp_incorrect':
        ?>
                    <div class="alert alert-danger">
                        <strong>Erreur : </strong> mot de passe retapez est incorrect
                    </div>
                    <?php
                    break;
                    ?>

        <?php
            }
        }
        ?>


        <form action="save_modif.php" method="post">
            <input type="hidden" name="cne" value="<?= $etud->cne ?>">
            <div class="form-group">
                <label for="">Nom :</label>
                <input class="form__input" name="nom" type="text" placeholder="Nom" value="<?= $etud->nom ?>" required />
            </div>
            <div class="form-group">
                <label for="">Prenom :</label>
                <input type="text" class="form__input" placeholder="Prenom" name="prenom" required value="<?= $etud->prenom ?>" />
            </div>

            <div class="form-group">
                <label for="">Télé :</label>
                <input type="text" class="form__input" placeholder="Tele" name="tele" required value="<?= $etud->tele ?>" />
            </div>
            <div class="form-group">
                <label for="">Email :</label>
                <input type="email" class="form__input" placeholder="Email" name="email" required value="<?= $etud->email ?>" />
            </div>
            <div class="form-group">
                <label for="">Nouveau Mot de pass : </label>
                <input class="form__input" name="password" type="password" required placeholder="Password" value="<?= $password ?>" />
            </div>

            <div class="form-group">
                <label for="">Confirmation mot de pass :</label>
                <input class="form__input" name="R_password" type="password" required placeholder="confirmation Password" value="<?= $password ?>" />
            </div>
            <div class="form-group">
                <label for="">Serie du baccalaurèat :</label>
                <select name="serie_bac" class="form__input" required value="<?= $etud->serie_bac ?>">
                    <option value="<?= $etud->serie_bac ?>"><?= $etud->serie_bac ?></option>
                    <option value="physique">physique</option>
                    <option value="SM">Science maths</option>
                    <option value="international">international</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Année du Baccalauréat :</label>
                <select name="annee_bac" class="form__input" required>
                    <option value=" <?= $etud->annee_bac ?>"><?= $etud->annee_bac ?> </option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                </select>
            </div>
            <div class=" form-group">
                <label for="">Etablissement superieur précédente :</label>
                <input required type="text" class="form__input" placeholder="Etablissement superieur précédente" name="etab_prev" value="<?= $etud->etab_prev ?>" />
            </div>
            <div class="form-group">
                <label for="">Diplome supérieur obtenue :</label>
                <input required type="text" class="form__input" placeholder="Diplome supérieur obtenu" name="diplome" value="<?= $etud->diplome ?>" />
            </div>

            <input type="submit" class="form__input cta-btn mt-2" placeholder="" name="submit" value="Enregistrer" />
        </form>
    </div>
</div>


<?php

include 'includes/templates/footer.php';
?>