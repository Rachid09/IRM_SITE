<?php
if (isset($_POST['cne']) && !empty($_POST['cne'])) {
    session_start();

    define('__ROOT__', dirname(dirname(__FILE__)));
    require(__ROOT__ . '/site_irm/includes/functions/connect.php');
    try {

        $req = "SELECT * FROM info_etudiants WHERE cne=?";
        $stmt = $db->prepare($req);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute(array($_POST['cne']));
        $info = $stmt->fetch(PDO::FETCH_ASSOC);
        $_SESSION['cne'] = $_POST['cne'];
        $_SESSION['prenom'] = $info['prenom'];
        $_SESSION['nom'] = $info['nom'];
        $_SESSION['email'] = $info['email'];


        if (password_verify($_POST["password"], $info['password'])) {
            header('location:profile.php');
        } else {
            echo "ERREUR de mot de passe!!!";
            echo '<a href="candidature.php">Retourner à la page d inscription</a>';
        }
        $db = null;
    } catch (PDOException $e) {

        echo "ERREUR :" . $e->getMessage();
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


<section class="authentication">
    <h1 class="heading-primary text-center mt-4 mb-6">Login</h1>
    <div class="authentication__container">
        <div class="authentication__form">
            <div class="logo">
                <img src="./layout/img/Frame.png" alt="" />
            </div>
            <form action="login.php" method="post">
                <input type="text" class="form__input" placeholder="CNE*" name="cne" />
                <input class="form__input" name="password" type="password" placeholder="Password" />

                <input type="submit" class="form__input cta-btn" placeholder="" name="submit" value="Se connecter" />
            </form>
        </div>
    </div>
</section>


<?php

include 'includes/templates/footer.php';
?>