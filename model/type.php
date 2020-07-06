<?php
require_once 'config.php';

$req = $pdo->prepare("SELECT * FROM Moral");
$req->execute();

?>
<option value="">Choisir employeur</option>
<?php
while ($employeur = $req->fetch(PDO::FETCH_ASSOC)) {;
?>
    <option value="<?= $employeur['employeur'] ?>"> <?= $employeur['nomEmpl'] ?> </option>
<?php } ?>


<?php
$req = $pdo->prepare("SELECT * FROM Physique");
$req->execute();

?>
<option value="">Choisir Client</option>
<?php
while ($client = $req->fetch(PDO::FETCH_ASSOC)) {;
?>
    <option value="<?= $client['idPhysique'] ?>"> <?= $client['cni'] ?> </option>
<?php } ?>