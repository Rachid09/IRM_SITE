<?php
session_start();

define('__ROOT__', dirname(dirname(__FILE__)));
require(__ROOT__ . '/site_irm/includes/functions/connect.php');
try {
    $cne = $_SESSION['cne'];
    $req = "SELECT * FROM resultats WHERE id_etud=?";
    $stmt = $db->prepare($req);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute(array($cne));
    $notes = $stmt->fetch(PDO::FETCH_ASSOC);



    $req = "SELECT * FROM info_etudiants WHERE cne=?";
    $stmt = $db->prepare($req);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute(array($cne));
    $etud = $stmt->fetch(PDO::FETCH_ASSOC);

    $db = null;
} catch (PDOException $e) {

    echo "ERREUR :" . $e->getMessage();
}

?>


<?php
include 'includes/templates/head.php';
include 'includes/templates/navbar.php';
?>


<section class="profile">
    <div class="profile__infos">
        <div class="profile__infos--avatar mb-1">
            <i class="iconsminds-male"></i>
        </div>
        <div class="profile__infos--name mb-1">
            <h1><?php echo $etud['nom'] . ' ' .  $etud['prenom']; ?></h1>
        </div>
        <div class="mb-2">
            <span class="profile__infos--cne mb-2">@<?php echo $etud['cne'] . ' .' ?></span>
            <span class="profile__infos--email"><?php echo $etud['email'] . ' .' ?></span>
        </div>

        <div class="edition-icons">
            <a href="modif.php"><i class="simple-icon-pencil"></i></a>
        </div>
    </div>
    <div class="profile__results">
        <h1 class="heading-primary">Mes Resultats</h1>
        <?php if ($notes > 0) : ?>
            <table>
                <tr>
                    <th>Module</th>
                    <th>Traitement Numériqued de l'information multimédia</th>
                    <th>Theorie de l'information</th>
                    <th>Architecture et programmation réseaux</th>
                    <th>Conduite de projets multimédia</th>
                    <th>base de données multimédia</th>
                    <th>Technologie web multimédia</th>
                    <th>Transmission de données multimédia</th>
                    <th>programmation Mobile multimédia</th>
                    <th>It-security</th>
                    <th>PFE</th>
                </tr>
                <th>Note</th>
                <td><?php echo $notes['tnim'] ?></td>
                <td><?php echo $notes['theorie'] ?></td>
                <td><?php echo $notes['apr'] ?></td>
                <td><?php echo $notes['cpm'] ?></td>
                <td><?php echo $notes['bdm'] ?></td>
                <td><?php echo $notes['twm'] ?></td>
                <td><?php echo $notes['tdm'] ?></td>
                <td><?php echo $notes['pmm'] ?></td>
                <td><?php echo $notes['it_sec'] ?></td>
                <td><?php echo $notes['pfe'] ?></td>
            </table>
    </div>
<?php else : ?>
    <div style="padding:2rem 0rem;    background-color: antiquewhite;
">
        <h1 style="color:brown">Les resultats ne sont pas encore etre mises en place</h1>
    </div>
<?php endif; ?>

</div>
<?php

include 'includes/templates/statistiques.php';
?>


<div class="calendar">
    <h1 class="heading-primary mb-4">Emplois du temps</h1>
    <div>

        <div class="calendar__S5">
            <table class="table_emploi">
                <tr>
                    <th rowspan="2">Emploi de temps</th>
                    <td colspan="2" class="bg-blue">Matin</td>
                    <td colspan="2" class="bg-blue">Après midi</td>
                </tr>
                <tr>
                    <td>8h30-10h20</td>
                    <td>10h20-12h30</td>
                    <td>13h30-15h20</td>
                    <td>15h20-17h30</td>
                </tr>
                <tr>
                    <th>Lundi</th>
                    <td colspan="2">TI</td>
                    <td colspan="2">TNIM</td>
                </tr>
                <tr>
                    <th>Mardi</th>
                    <td colspan="2">APR</td>
                    <td colspan="2">TNIM</td>
                </tr>
                <tr>
                    <th>Mercredi</th>
                    <td colspan="2">APR</td>
                    <td colspan="2">TI</td>
                </tr>
                <tr>
                    <th>Jeudi</th>
                    <td colspan="2">TNIM</td>
                    <td colspan="2">APR</td>
                </tr>
                <tr>
                    <th>Vendredi</th>
                    <td colspan="2">TI</td>
                    <td colspan="2">Ratt/Exam/Controle</td>
                </tr>
                <tr>
                    <th>Samedi</th>
                    <td colspan="2">Ratt/Exam/Controle</td>
                    <td colspan="2"></td>
                </tr>
            </table>
            <h2 style="text-align: center; padding-top: 1rem;">Semestre 5</h2>
        </div>
        <div class="calendar__S6">
            <table class="table_emploi">
                <tr>
                    <th rowspan="2">Emploi de temps</th>
                    <td colspan="2" class="bg-blue">Matin</td>
                    <td colspan="2" class="bg-blue">Après midi</td>
                </tr>
                <tr>
                    <td>8h30-10h20</td>
                    <td>10h20-12h30</td>
                    <td>13h30-15h20</td>
                    <td>15h20-17h30</td>
                </tr>
                <tr>
                    <th>Lundi</th>
                    <td colspan="2">PMM</td>
                    <td colspan="2">PMM</td>
                </tr>
                <tr>
                    <th>Mardi</th>
                    <td colspan="2">TDM</td>
                    <td colspan="2">IT_Security</td>
                </tr>
                <tr>
                    <th>Mercredi</th>
                    <td colspan="2">TDM</td>
                    <td colspan="2"></td>
                </tr>
                <tr>
                    <th>Jeudi</th>
                    <td colspan="2">TDM</td>
                    <td colspan="2">PMM</td>
                </tr>
                <tr>
                    <th>Vendredi</th>
                    <td colspan="2">IT_Security</td>
                    <td colspan="2">IT_Security</td>
                </tr>
                <tr>
                    <th>Samedi</th>
                    <td colspan="2">Ratt/Exam/Controle</td>
                    <td colspan="2"></td>
                </tr>
            </table>
            <h2 style="text-align: center; padding-top: 1rem;">Semestre 6</h2>
        </div>
    </div>
</div>
</section>

<?php

include 'includes/templates/footer.php';
?>