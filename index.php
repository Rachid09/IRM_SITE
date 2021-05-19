<?php
session_start();
?>
<?php
include 'includes/templates/head.php';
include 'includes/templates/navbar.php';


?>


<div class="slid-wrapper">
    <ul class="bxslider">
        <li><img src="./layout/img/PIC.jpg" /></li>
        <li><img src="./layout/img/pic3.jpg" /></li>
        <li><img src="./layout/img/pic4.jpg" /></li>
    </ul>
</div>


</header>
<?php

include 'includes/templates/statistiques.php';
?>
<main class="main-content">
    <section class="irm-brief">
        <div class="irm-wrapper">
            <div class="irm__description">
                <h1 class="heading-primary">LST IRM</h1>
                <!-- <h5 class="sub-heading">description</h5> -->
                <p class="text-font">
                    Le programme de la formation Licence en Sciences et Techniques IRM
                    prépare à l’exercice du métier d’informaticien en techniques de
                    développement et réseaux multimédia. Cette formation vise à
                    fournir des connaissances en culture numérique qui implique
                    l'usage des techniques de la société de l'information :
                    l'informatique, le multimédia et l'internet, qui désormais
                    irriguent tous les domaines économiques et sociaux. Les contenus
                    des modules sont définis de sorte que les pré-requis nécessaires
                    aux modules de chaque semestre soient acquis dans les modules des
                    semestres qui les précèdent. Les contenus des modules qui relèvent
                    d’un même champ disciplinaire sont ainsi organisés selon une
                    progression graduelle. Conformément aux grandes lignes tracées par
                    le nouveau CNPN, le programme de la formation LST_IRM vise aussi à
                    préparer les lauréats à l’accès à d’autres débouchés de formation
                    en Masters de recherches afin d’accéder à un centre d’études
                    doctorales. Ainsi que de développer, chez les étudiants, des
                    connaissances professionnelles leurs permettant de réussir leurs
                    tâches dans une entreprise
                </p>
            </div>
            <div class="irm__image">
                <img src="./layout/img/2 2.jpg" alt="" srcset="" />
            </div>
        </div>
    </section>
    <section class="features">
        <div class="features__item">
            <i class="fas fa-laptop-code"></i>
            <h4 class="heading-third">Informatique</h4>
        </div>
        <div class="features__item">
            <i class="fas fa-network-wired"></i>
            <h4 class="heading-third">Réseau</h4>
        </div>
        <div class="features__item">
            <i class="fas fa-photo-video"></i>
            <h4 class="heading-third">Multimedia</h4>
        </div>
    </section>
    <section class="cta">
        <div class="cta-wrapper">
            <div class="cta__image">
                <img src="./layout/img/3196-scaled.jpg" alt="" />
            </div>
            <div class="cta__description">
                <h2 class="heading-second">Candidature</h2>
                <p>
                    Nous donnons à nos élèves licencieés une formation de qualité et
                    des expériences qui les préparent au succès dans leurs carrières.
                    Nous les aidons aussi à découvrir un domaine qui les passionne et
                    à oser le diriger.
                </p>
                <a href="candidature.php" class="cta-btn"><strong>Je candidate</strong></a>
            </div>
        </div>
    </section>
    <section class="events">
        <h1 class="heading-primary">Evenements</h1>
        <div class="events__container">
            <div class="events__card">
                <div class="events__img">
                    <a href="#"></a>
                    <img src="./layout/img/khawarizmi.jpg" alt="" srcset="" />
                </div>
                <div class="events__description">
                    <div class="events__date">
                        <h1 class="events__date--day">05</h1>
                        <h3 class="events__date--months">MAR</h3>
                    </div>
                    <div class="events__details">
                        <h1 class="events__heading">
                            Online Hack&Pitch Hackathon MaroCovid19
                        </h1>
                        <div class="events__time">
                            <span><i class="simple-icon-clock"></i> 10:00 - 12:00</span>
                            <span><i class="simple-icon-location-pin"></i>Fstm salle des conferances</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="events__card">
                <div class="events__img">
                    <a href="#"></a>
                    <img src="./layout/img/pic4.jpg" alt="" srcset="" />
                </div>
                <div class="events__description">
                    <div class="events__date">
                        <h1 class="events__date--day">20</h1>
                        <h3 class="events__date--months">AVR</h3>
                    </div>
                    <div class="events__details">
                        <h1 class="events__heading">
                            IoT security workshop
                        </h1>
                        <div class="events__time">
                            <span><i class="simple-icon-clock"></i> 16:00 - 18:00</span>
                            <span><i class="simple-icon-location-pin"></i>Fstm salle des conferances</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="events__card">
                <div class="events__img">
                    <a href="#"></a>
                    <img src="./layout/img/images.png" alt="" srcset="" />
                </div>
                <div class="events__description">
                    <div class="events__date">
                        <h1 class="events__date--day">07
                        </h1>
                        <h3 class="events__date--months">JUI</h3>
                    </div>
                    <div class="events__details">
                        <h1 class="events__heading">
                            Liste des candidats convoqués au concours des masters ...
                            <div class="events__time">
                                <span><i class="simple-icon-clock"></i> 8:00 - 10:00</span>
                                <span><i class="simple-icon-location-pin"></i>Fstm salle des conferances</span>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="btn-inline-box">
            <a href="evenements.php" class="btn-inline">Voir tous <span>&rarr;</span></a>
        </div>
    </section>
    <section class="profs">
        <h1 class="heading-primary">Equipe d'enseignants</h1>
        <div class="images">
            <div class="images--firstLine">
                <div class="prof">
                    <img src="./layout/img/moumkine.jpg" alt="" class="prof__image" />
                    <h5 class="heading-five">Pr.Noureddine moumkine</h5>
                </div>

                <div class="prof">
                    <img src="./layout/img/Adib.jpg" alt="" class="prof__image" />
                    <h5 class="heading-five">Pr. Abdellah Adib</h5>
                </div>
                <div class="prof">
                    <img src="./layout/img/mohamed_noua.jpg" alt="" class="prof__image" />
                    <h5 class="heading-five">Pr. mohammed noua</h5>
                </div>
                <div class="prof avatar">
                    <i class="iconsminds-male-2"></i>
                    <h5 class="heading-five">Pr.Omar khadir</h5>
                </div>
            </div>
            <div class="images--secondLine">
                <div class="prof">
                    <img src="./layout/img/leghris.jpg" alt="" class="prof__image" />
                    <h5 class="heading-five">Pr. Cherkaoui Leghris</h5>
                </div>
                <div class="prof">
                    <img src="./layout/img/khalil.jpg" alt="" class="prof__image" />
                    <h5 class="heading-five">Pr. Mohammed Khalil</h5>
                </div>
                <div class="prof avatar">
                    <i class="iconsminds-female-2"></i>
                    <h5 class="heading-five">Pr.Salima chantit</h5>
                </div>
            </div>
        </div>
    </section>
</main>

<?php

include 'includes/templates/footer.php';
?>