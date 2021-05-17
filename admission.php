<?php
session_start();
?>

<?php
include 'includes/templates/head.php';
include 'includes/templates/navbar.php';

?>

<section class="admission">
    <div class="admission-conditions mb-4">
        <h1 class="heading-primary mb-4 mt-4">
            Modalités d'admission au semestre 5 dans le cadre des passrelles
        </h1>
        <div class="admission-conditions__text">
            <p class="mb-1">
                Pour être admis au programme de Licence Sciences et Techniques
                Informatiques, Réseaux et Multimédia, il faut satisfaire aux
                conditions suivantes :
            </p>
            <div>
                Pré-requis pédagogiques :
                <p><i class="far fa-dot-circle"></i> Titulaire d'un DEUST MIP.</p>
                <p><i class="far fa-dot-circle"></i> Titulaire d'un DEUG SMI.</p>
            </div>
            <div>
                Procédure de sélection :
                <p>
                    <i class="far fa-dot-circle"></i>
                    La sélection des candidats se fait à leur demande sur la base de
                    leurs dossiers scolaires. Les dossiers sont examinés par la
                    commission de recrutement de l’établissement qui, après étude de
                    dossier peut décider d’autoriser le candidat à s’inscrire.
                </p>
            </div>
            <div class="text-center mb-2 mt-2">
                <a href="" class="cta-btn">Je candidate</a>
            </div>
        </div>
    </div>


    <?php

    include 'includes/templates/statistiques.php';
    ?>

    <div class="admission-documents pb-3 mt-4">
        <h1 class="heading-primary mb-4">Pièces à fournir</h1>
        <div>
            <div class="admission-documents--image">
                <img src="./layout/img/pièce-à-fournir-scaled-800x450.jpg" alt="" />
            </div>
            <ul class="admission-documents__list">
                <li class="admission-documents--item">
                    <i class="far fa-dot-circle"></i>5 photos d’identité
                </li>
                <li class="admission-documents--item">
                    <i class="far fa-dot-circle"></i>1 extrait d’acte de naissance
                </li>
                <li class="admission-documents--item">
                    <i class="far fa-dot-circle"></i>Une photocopie de la carte
                    d’identité nationale
                </li>
                <li class="admission-documents--item">
                    <i class="far fa-dot-circle"></i>3 photocopies certifiées
                    conformes du diplôme Baccalauréat
                </li>
                <li class="admission-documents--item">
                    <i class="far fa-dot-circle"></i>2 photocopies certifiées
                    conformes de bulletins de notes des 2 dernières années d’études
                </li>
                <li class="admission-documents--item">
                    <i class="far fa-dot-circle"></i>2 relevés de notes années
                    réussies après le bac
                </li>
                <li class="admission-documents--item">
                    <i class="far fa-dot-circle"></i>3 photocopies certifiées
                    conformes du dernier diplôme obtenu
                </li>
            </ul>
        </div>
    </div>
</section>


<?php

include 'includes/templates/footer.php';
?>