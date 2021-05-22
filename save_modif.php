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
    $password_retype = $_POST['R_password'];
    $filename = $_FILES["img_profile"]["name"];
    $tempname = $_FILES["img_profile"]["tmp_name"];
    $folder = "layout/uploads/" . $filename;
    $tele = $_POST["tele"];
    $annee_bac = $_POST['annee_bac'];
    $serie_bac = $_POST['serie_bac'];
    $etab_prev = $_POST['etab_prev'];
    $diplome = $_POST['diplome'];
    if ($password == $password_retype) {
        $password_hashed = password_hash($password, PASSWORD_DEFAULT);

        $req = "UPDATE info_etudiants SET cne=?,
        nom=?,
        prenom=?,
        tele=?,
        email=?,
        password=?,
        profile_img=?,
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
        $stmt->bindValue(6, $password_hashed, PDO::PARAM_STR);
        $stmt->bindValue(7, $filename, PDO::PARAM_STR);
        $stmt->bindValue(8, $annee_bac, PDO::PARAM_INT);
        $stmt->bindValue(9, $serie_bac, PDO::PARAM_STR);
        $stmt->bindValue(10, $etab_prev, PDO::PARAM_STR);
        $stmt->bindValue(11, $diplome, PDO::PARAM_STR);
        $stmt->bindValue(12, $cne, PDO::PARAM_STR);
        if (move_uploaded_file($tempname, $folder)) {
            $result = $stmt->execute();
        } else {
            echo 'image not uploded';
        }



        $db = null;
        header('location: profile.php');
    } else {
        header('Location:modif.php?reg_err=mtp_incorrect');
    }
}
