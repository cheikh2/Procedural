<?php
########******* Coding BY CHEIKH MBOW **********#########
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once('../model/config.php');

if (isset($_POST['submit'])) {

    if (isset($_POST['nomEmpl'], $_POST['nomEmpl'])) {
        if ($_POST['nomEmpl'] != "" && $_POST['nomEmpl'] != "") {
            // enregistrement
            $nomEmpl = $_POST['nomEmpl'];
            $ninea = $_POST['ninea'];
            $rc = $_POST['rc'];
            $raisonSocial = $_POST['raisonSocial'];
            $adressEmpl = $_POST['adressEmpl'];

            $insertion = "INSERT INTO Moral (nomEmpl, ninea, rc, raisonSocial, adressEmpl)
             VALUES('$nomEmpl', '$ninea', '$rc', '$raisonSocial', '$adressEmpl')";

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