<?php
########******* Coding BY CHEIKH MBOW **********#########
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once('../model/config.php');

if (isset($_POST['submit'])) {

    if (isset($_POST['numAgence'], $_POST['numCompte'])) {
        if ($_POST['numAgence'] != "" && $_POST['numAgence'] != "") {
            // enregistrement
            $numAgence = $_POST['numAgence'];
            $numCompte = $_POST['numCompte'];
            $rib = $_POST['rib'];
            $typeCompte = $_POST['typeCompte'];
            $montant = $_POST['montant'];
            $dateDebut = $_POST['dateDebut'];
            $dateFin = $_POST['dateFin'];
            $clientT = $_POST['clientT'];

            $insertion = "INSERT INTO Compte (numAgence, numCompte, rib, typeCompte, montant, dateDebut, dateFin, clientT)
             VALUES('$numAgence', '$numCompte', '$rib', '$typeCompte', '$montant', '$dateDebut', '$dateFin', '$clientT')";

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