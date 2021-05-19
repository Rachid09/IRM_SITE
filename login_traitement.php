<?php
define('__ROOT__', dirname(dirname(__FILE__)));
require(__ROOT__ . '/site_irm/includes/functions/connect.php');
if (isset($_POST['cne']) && !empty($_POST['cne']) && isset($_POST['password']) && !empty($_POST['password'])) {
    $cne = htmlspecialchars($_POST['cne']);
    $password = htmlspecialchars($_POST['password']);
    try {

        $req = "SELECT * FROM info_etudiants WHERE cne=?";
        $stmt = $db->prepare($req);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute(array($cne));
        $info = $stmt->fetch(PDO::FETCH_ASSOC);


        if (password_verify($password, $info['password'])) {
            session_start();
            $_SESSION['cne'] = $_POST['cne'];
            $_SESSION['password'] = $_POST['password'];
            $_SESSION['prenom'] = $info['prenom'];
            $_SESSION['nom'] = $info['nom'];
            $_SESSION['email'] = $info['email'];
            header('location:profile.php');
        } else {
            header('location:login.php?login_err=mtp_incorrect');
        }
        $db = null;
    } catch (PDOException $e) {

        echo "ERREUR :" . $e->getMessage();
    }
}
