<?php


define('__ROOT__', dirname(dirname(__FILE__)));
require(__ROOT__ . '/site_irm/includes/functions/connect.php');

session_start();
if (isset($_POST['submit'])) {
    $cne = $_POST['cne'];
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $password = $_POST['password'];
    $tele = $_POST["tele"];
    $annee_bac = $_POST['annee_bac'];
    $serie_bac = $_POST['serie_bac'];
    $etab_prev = $_POST['etab_prev'];
    $diplome = $_POST['diplome'];

    $req = "UPDATE info_etudiants SET cne=?,
    nom=?,
    prenom=?,
    tele=?,
    email=?,
    annee_bac=?,
    serie_bac=?,
    etab_prev=?,
    diplome=? WHERE cne=?";
    $stmt = $db->prepare($req);


    $stmt->bindValue(1, $cne, PDO::PARAM_STR);
    $stmt->bindValue(2, $nom, PDO::PARAM_STR);
    $stmt->bindValue(3, $prenom, PDO::PARAM_STR);
    $stmt->bindValue(4, $tele, PDO::PARAM_STR);
    $stmt->bindValue(5, $email, PDO::PARAM_STR);
    $stmt->bindValue(6, $annee_bac, PDO::PARAM_INT);
    $stmt->bindValue(7, $serie_bac, PDO::PARAM_STR);
    $stmt->bindValue(8, $etab_prev, PDO::PARAM_STR);
    $stmt->bindValue(9, $diplome, PDO::PARAM_STR);
    $stmt->bindValue(10, $cne, PDO::PARAM_STR);
    $result = $stmt->execute();

    $db = null;
    header('location: profile.php');
}
