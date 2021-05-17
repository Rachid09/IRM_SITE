<?php
session_start();
?>

<?php
include 'includes/templates/head.php';
include 'includes/templates/navbar.php';

?>

<section class="programme">
    <div class="programme__modules">
        <h1 class="heading-primary mt-4 mb-6">Descriptif des modules</h1>
        <div class="modules__wrapper">
            <div class="module">
                <div class="module--name">
                    <h2>Traitement Numérique de l'Information Multimédia</h2>
                </div>
                <div class="module--objective">
                    <h2>Objectifs du module</h2>
                    <p class="text-font">
                        Ce module introduit les notions de bases en multimédia avec un
                        point de vue traitement du signal ; en vue de la compréhension
                        de la problématique scientifique et informatique liée aux
                        applications de traitement de l'information multimédia. Il
                        présente les fondements scientifiques et technologiques
                        indispensables pour le traitement numérique de l'information
                        multimédia
                    </p>
                </div>
                <div class="module--prerequies">
                    <h2>Pre-requis pedagogiques</h2>
                    <p class="text-font">
                        <i class="far fa-dot-circle"></i>
                        Bases informatiques et mathématiques de niveau DEUST MIP/SMI
                        (FST/FS)
                    </p>
                </div>
            </div>

            <div class="module">
                <div class="module--name">
                    <h2>Technologie Web pour le Multimédia</h2>
                </div>
                <div class="module--objective">
                    <p class="text-font">
                        L’objectif du module est de faire acquérir les connaissances et les techniques nécessaires pour le développement d’applications multimédia sur le web. En fait, La conception et la création de pages web conviviales incluant des objets multimédia à l’aide des technologies Html5 et CSS3. Ensuite, L'insertion de script clients à l’aide de JavaScript et JQuery. Enfin, l’utilisation d’un langage de développement web dynamique pour manipuler des données stockées au sein d’un SGBDR.
                    </p>
                </div>
                <div class="module--prerequies">
                    <p class="text-font">
                        <i class="far fa-dot-circle"></i>
                        Les modules requis pour suivre ce module :
                        – Algorithmique et programmation 1 (tronc commun MIP)
                        – Algorithmique et Programmation 2 (tronc commun MIP)
                        – Systèmes d’Information et Base de données (tronc commun MIP)
                        – Traitement Numérique de l'Information Multimédia – TNIM

                    </p>
                </div>
            </div>
            <div class="module">
                <div class="module--name">
                    <h2>Théorie de l’Information</h2>
                </div>
                <div class="module--objective">
                    <p class="text-font">
                        La théorie de l'information, sans précision, est le nom usuel désignant la théorie de l'information de Shannon, qui est une théorie probabiliste permettant de quantifier le contenu moyen en information d'un ensemble de messages, dont le codage informatique satisfait une distribution statistique précise. Ce domaine trouve son origine scientifique avec Claude Shannon qui en est le père fondateur avec son article A Mathematical Theory of Communication publié en 1948.
                    </p>
                </div>
                <div class="module--prerequies">
                    <p class="text-font">
                        <i class="far fa-dot-circle"></i>
                        Bases informatiques et mathématiques de niveau DEUST MIP/SMI
                        (FST/FS)
                    </p>
                </div>
            </div>
            <div class="module">
                <div class="module--name">
                    <h2>Base de Données Multimédia</h2>
                </div>
                <div class="module--objective">
                    <p class="text-font">
                        L’objectif de ce module vise à ce que l’étudiant doit premièrement connaître les techniques de stockage et de recherche d’objets multimédia dans un système de gestion de base de données. Ensuite il doit être capable de créer une base de données multimédia et d'en extraire les données. Pour les travaux pratiques, le SGBDR choisi est Oracle multimédia.
                    </p>
                </div>
                <div class="module--prerequies">
                    <p class="text-font">
                        <i class="far fa-dot-circle"></i>
                        o Systèmes d’Information et Base de données (tronc commun MIP)
                        o Traitement numérique de l'information multimédia - TNIM
                        o Programmation multimédia mobile – PMM
                    </p>
                </div>
            </div>
            <div class="module">
                <div class="module--name">
                    <h2>Conduite de projets Multimédias</h2>
                </div>
                <div class="module--objective">
                    <p class="text-font">
                        - Acquérir et développer les connaissances et compétences requises pour conduire et gérer un projet multimédia en respectant un cahier de charges.
                        - Se familiariser avec les méthodologies et les pratiques permettant de mener à bien un projet multimédia de qualité dans le temps et le budget impartis.
                        - Maîtriser les outils de gestion de projets multimédias.

                    </p>
                </div>
                <div class="module--prerequies">
                    <p class="text-font">
                        <i class="far fa-dot-circle"></i>
                        - Algorithmique et programmation
                        - Technologie web pour le multimédia
                        - Traitement numérique de l'information multimédia
                    </p>
                </div>
            </div>
            <div class="module">
                <div class="module--name">
                    <h2>Architecture et programmation réseaux</h2>
                </div>
                <div class="module--objective">
                    <p class="text-font">
                        Le but de ce cours est d'offrir pour l’étudiant une introduction aux réseaux informatiques, principalement les réseaux TCP/IP et le modèle OSI. Et par la suite l’étudiant doit maitriser les concepts des algorithmes de routage sur IP. Parallèlement au cours, les TD et TP permettront de se familiariser avec les problèmes d’implémentation de protocoles ainsi que la mise en pratique des concepts étudiés.
                    </p>
                </div>
                <div class="module--prerequies">
                    <p class="text-font">
                        <i class="far fa-dot-circle"></i>
                        o Bases mathématiques et informatique DEUST MIP et/ou DEUG SMI
                        o Traitement numérique de l'information multimédia - TNIM
                    </p>
                </div>
            </div>
            <div class="module">
                <div class="module--name">
                    <h2>Transmission de données multimédia</h2>
                </div>
                <div class="module--objective">
                    <p class="text-font">
                        Les enseignements dans ce module s'appuient sur des disciplines larges et complémentaires, qui permettent à l'étudiant d'acquérir les bases théoriques et appliquées adaptées à la transmission et l'échange de données multimédias et les exigences des applications multimédias dans les réseaux de télécommunications. À la fin du cours, l'étudiant sera en mesure de :
                        • comprendre la transmission et l'échange de données multimédia ;
                        • comprendre les technologies de compression d'image, de vidéo, d'audio et de parole,
                        • comprendre les mécanismes assurant la qualité de service pour les applications multimédias.
                    </p>
                </div>
                <div class="module--prerequies">
                    <p class="text-font">
                        <i class="far fa-dot-circle"></i>
                        • Traitement numérique de l'information multimédia
                        • Architecture et programmation réseau
                    </p>
                </div>
            </div>
            <div class="module">
                <div class="module--name">
                    <h2>Multimédia sur IP et Qualité de services</h2>
                </div>
                <div class="module--objective">
                    <p class="text-font">
                        Le but de ce cours est de présenter à l’étudiant les différents protocoles de transport et de gestion des multimédias sur IP ainsi que les concepts de la qualité de services et voir l’impact des flux multimédias sur la QoS. Et par la suite l’étudiant doit maitriser les concepts utilisés pour le transfert du multimédia sur IP. Parallèlement au cours, les TD et TP permettront de se familiariser avec les problèmes d’implémentation de protocoles ainsi que la mise en pratique des concepts étudiés. </p>
                </div>
                <div class="module--prerequies">
                    <p class="text-font">
                        <i class="far fa-dot-circle"></i>
                        o Systèmes d’Information et Base de données (tronc commun MIP)
                        o Traitement numérique de l'information multimédia - TNIM
                        o Programmation multimédia mobile – PMM

                    </p>
                </div>
            </div>
            <div class="module">
                <div class="module--name">
                    <h2>Programmation Multimédia Mobile</h2>
                </div>
                <div class="module--objective">
                    <p class="text-font">
                        L’objectif du module est de faire acquérir les connaissances et les techniques nécessaires pour le développement d’applications multimédia sur une plateforme mobile. Le type d’application traitée est celui manipulant des objets multimédia. La technologie mobile utilisée est celle liée à la plateforme Java Android. </p>
                </div>
                <div class="module--prerequies">
                    <p class="text-font">
                        <i class="far fa-dot-circle"></i>
                        o Algorithmique et programmation 1 (tronc commun MIP)
                        o Algorithmique et Programmation 2 (tronc commun MIP)
                        o Systèmes d’Information et Base de données (tronc commun MIP)
                        o Traitement Numérique de l'Information Multimédia - TNIM
                    </p>
                </div>
            </div>
            <div class="module">
                <div class="module--name">
                    <h2>PROJET DE FIN D’ETUDES</h2>
                </div>
                <div class="module--objective">
                    <p class="text-font">
                        Le projet de fin d'études a un double but, il doit d'une part permettre à l’étudiant d'acquérir une expérience de gestion de projet par la pratique, et d'autre part lui offrir l'occasion de se constituer une carte de visite.
                        Le travail à effectuer répond à un besoin industriel exprimé par un professionnel qui assure un co-tutorat avec un enseignant universitaire ou bien correspond aux attentes d’une thématique, en développement dans le laboratoire attaché au département informatique, et qui sera encadré par un enseignant du département.
                    </p>
                </div>
                <div class="module--prerequies">
                    <p class="text-font">
                        <i class="far fa-dot-circle"></i>
                        Chaque stagiaire est encadré dans l’institution d’accueil par un professionnel qui assure un co-tutorat, et dans la Faculté par un enseignant du département informatique qui assure son encadrement, à qui il adresse un compte rendu hebdomadaire d'avancement de son travail.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>


<?php

include 'includes/templates/statistiques.php';
?>

<div class="organisation-module pb-3">
    <table class="organisation-modules__table">
        <tr>
            <th rowspan="2">Semestre</th>
            <th rowspan="2">Liste des modules</th>
            <th rowspan="2">VH globale des modules</th>
            <th rowspan="2">Département dont relève le module</th>
            <th colspan="4">Cordonnateur de moduule</th>
        </tr>
        <tr>
            <td>Nom et prénom</td>
            <td>Etablissement</td>
            <td>Département</td>
            <td>Spécialité</td>
        </tr>
        <tr>
            <td rowspan="6">S5</td>
            <td>M25 : Traitement Numérique de l'Information Multimédia</td>
            <td>56 h</td>
            <td>Département Informatique</td>
            <td>ADIB Abdellah</td>
            <td>Faculté Sciences et Techniques Mohammedia</td>
            <td>Département Informatique</td>
            <td>Informatique et Traitement de l’information</td>
        </tr>
        <tr>
            <td>M26 : Technologie Web pour le Multimédia</td>
            <td>56 h</td>
            <td>Département Informatique</td>
            <td>MOUMKINE Noureddine</td>
            <td>Faculté Sciences et Techniques Mohammedia</td>
            <td>Département Informatique</td>
            <td>Informatique</td>
        </tr>
        <tr>
            <td>M27 : Théorie de l’Information</td>
            <td>56 h</td>
            <td>Département Informatique</td>
            <td>KHADIR Omar</td>
            <td>Faculté Sciences et Techniques Mohammedia</td>
            <td>Département Informatique</td>
            <td>Mathématiques</td>
        </tr>
        <tr>
            <td>M28 : Base de données Multimédia</td>
            <td>56 h</td>
            <td>Département Informatique</td>
            <td>KHALIL Mohammed</td>
            <td>Faculté Sciences et Techniques Mohammedia</td>
            <td>Département Informatique</td>
            <td>Informatique</td>
        </tr>
        <tr>
            <td>M29 : Conduite de projets Multimédias</td>
            <td>56 h</td>
            <td>Département Informatique</td>
            <td>CHANTIT Salima</td>
            <td>Faculté Sciences et Techniques Mohammedia</td>
            <td>Département Informatique</td>
            <td>Informatique</td>
        </tr>
        <tr>
            <td>M30 : Architecture et programmation réseaux</td>
            <td>56 h</td>
            <td>Département Informatique</td>
            <td>MOUMKINE Noureddine</td>
            <td>Faculté Sciences et Techniques Mohammedia</td>
            <td>Département Informatique</td>
            <td>Informatique</td>
        </tr>
        <tr>
            <td>VH global du semestre 5</td>
            <td>336 h</td>
            <td colspan="6"></td>
        </tr>
        <tr>
            <td rowspan="3">S6</td>
            <td>M31 : Transmission de données multimédia</td>
            <td>56 h</td>
            <td>Département Informatique</td>
            <td>ADIB Abdellah</td>
            <td>Faculté Sciences et Techniques Mohammedia</td>
            <td>Département Informatique</td>
            <td>Informatique et Traitement de l’information</td>
        </tr>
        <tr>
            <td>M32 : Multimédia sur IP et Qualité de services</td>
            <td>56 h</td>
            <td>Département Informatique</td>
            <td>LEGHIRS Cherkaoui</td>
            <td>Faculté Sciences et Techniques Mohammedia</td>
            <td>Département Informatique</td>
            <td>Informatique</td>
        </tr>
        <tr>
            <td>M33 : Programmation Multimédia Mobile</td>
            <td>56 h</td>
            <td>Département Informatique</td>
            <td>NOUA Mohamed Amine</td>
            <td>Faculté Sciences et Techniques Mohammedia</td>
            <td>Département Informatique</td>
            <td>Informatique</td>
        </tr>
        <tr>
            <td>PFE</td>
            <td>168 h</td>
            <td colspan="6"></td>
        </tr>
        <tr>
            <td>VH global du semestre 6</td>
            <td>336 h</td>
            <td colspan="6"></td>
        </tr>
    </table>
</div>

<?php

include 'includes/templates/footer.php';
?>