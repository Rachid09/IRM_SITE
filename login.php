<?php
session_start();
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


<section class="authentication">
    <h1 class="heading-primary text-center mt-4 mb-6">Login</h1>
    <div class="authentication__container">
        <div class="authentication__form">
            <div class="logo">
                <img src="./layout/img/Frame.png" alt="" />
            </div>
            <form action="login_traitement.php" method="post">
                <?php
                if (isset($_GET['login_err'])) {
                    $err = htmlspecialchars($_GET['login_err']);

                    switch ($err) {
                        case 'mtp_incorrect':
                ?>
                            <div style="padding:1rem 1rem; border-radius:4px; width:100%; margin-bottom:1rem;    background-color: antiquewhite;
">
                                <h1 style="color:brown; font-size:1rem;">mot de passe ou cne incorrect</h1>
                            </div>
                            <?php
                            break;
                            ?>

                <?php
                    }
                }
                ?>
                <input type="text" class="form__input" placeholder="CNE*" name="cne" />
                <input class="form__input" name="password" type="password" placeholder="Password*" required />

                <input type="submit" class="form__input cta-btn" required placeholder="" name="submit" value="Se connecter" />
            </form>
        </div>
    </div>
</section>


<?php

include 'includes/templates/footer.php';
?>