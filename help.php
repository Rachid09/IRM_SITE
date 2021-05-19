<?php
session_start();
?>

<?php
include 'includes/templates/head.php';
include 'includes/templates/navbar.php';


?>

<div class="container pb-3" style="padding-left:5rem">
    <h1 class="heading-primary mb-3 mt-3">Contact</h1>
    <div class="info_chef" style="margin:0 auto; width:100%; display:flex;  ">

        <img src=" ./layout/img/moumkine.jpg" alt="" class="prof__image" style="border-radius: 50%; margin-right:1.5rem " />
        <div style="display:flex; flex-direction:column;  align-items:stretch">
            <h1 class="mb-1 mt-2">Pr.Noureddine moumkine</h1>
            <h5 class="mb-1" style="font-size:1rem;">Chef de filiere IRM</h5>
            <span style="font-size:0.9rem; margin-bottom:0.5rem">noureddinemoumkin@gmail.com .</span>
            <span style="font-size:0.9rem;">Tel : +212 612593901</span>
        </div>
    </div>
</div>


<?php

include 'includes/templates/statistiques.php';
?>

<center class="pt-3 pb-3">
    <div class="embed-responsive embed-responsive-21by9 border">
        <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9398.22283584762!2d-7.355922248582594!3d33.70809805765616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7b6d37fd56af5%3A0x5e62c736d5933ac1!2sFacult%C3%A9+des+Sciences+et+Techniques!5e0!3m2!1sfr!2sma!4v1555176401673!5m2!1sfr!2sma" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
</center>





<?php

include 'includes/templates/footer.php';
?>