<?php
########******* Coding BY CHEIKH MBOW **********#########
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once('../model/config.php');

if (isset($_POST['submit'])) {

    if (isset($_POST['prenom'], $_POST['nom'])) {
        if ($_POST['TypeClient'] == "salarie") {
            // enregistrement
            $prenom = $_POST['prenom'];
            $nom = $_POST['nom'];
            $sexe = $_POST['sexe'];
            $cni = $_POST['cni'];
            $salaire = $_POST['salaire'];
            $profession = $_POST['profession'];
            $adress = $_POST['adress'];
            $email = $_POST['email'];
            $telephone = $_POST['telephone'];
            $idEmployeur = $_POST['idEmployeur'];

            $insertion = "INSERT INTO Physique (prenom, nom, sexe, cni, salaire, profession, adress, email, telephone, idEmployeur)
             VALUES('$prenom', '$nom', '$sexe', '$cni', '$salaire', '$profession', '$adress', '$email', '$telephone', '$idEmployeur')";

            $execute = $pdo->query($insertion);

            if ($execute == true) {
                $smgSuccess = "information enregistrées avec succes";
            } else {
                $smgError = "information non enregistrées";
            }
        } else {
            // enregistrement
            $prenom = $_POST['prenom'];
            $nom = $_POST['nom'];
            $sexe = $_POST['sexe'];
            $cni = $_POST['cni'];
            $salaire = $_POST['salaire'];
            $profession = $_POST['profession'];
            $adress = $_POST['adress'];
            $email = $_POST['email'];
            $telephone = $_POST['telephone'];

            $insertion = "INSERT INTO Physique (prenom, nom, sexe, cni, profession, adress, email, telephone)
             VALUES('$prenom', '$nom', '$sexe', '$cni', '$profession', '$adress', '$email', '$telephone')";

            $execute = $pdo->query($insertion);

            if ($execute == true) {
                $smgSuccess = "information enregistrées avec succes";
            } else {
                $smgError = "information non enregistrées";
            }
        }
    }
}
?>

<div>

    <?php
    if (isset($smgError)) {
        echo $smgError;
    } elseif (isset($smgSuccess)) {
        echo $smgSuccess;
    }
    ?>

</div>