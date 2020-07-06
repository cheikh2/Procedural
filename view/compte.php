<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Client Physique</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div id="container">
        <header>
            <div id="entete">
                <img alt="logo" src="images/logo bancaire.jpg" id="img1" />
                <div id="text1">
                    <h2>Bienvenue à la banque du peuple</h2>
                </div>
            </div>
            <div id="lien">
                <ul id="naviguer">
                    <li><a href="#">Home</a></li>
                    <li><a href="../Model/List_Client_Physique.php">Liste clients</a></li>
                    <li><a href="#">Liste des comptes</a></li>
                    <li><a href="deconnexion.php">Deconnexion</a></li>
                </ul>
            </div>
            <br />
        </header>

        <main>
            <div id="text2">
                <h2>Ouverture de compte</h2>
            </div>
            <nav>
                <ul id="navigation">
                    <li><a href="client.php">Client</a></li>
                    <li><a href="employeur.php">Client Moral</a></li>
                    <li><a href="compte.php">Compte</a></li>
                </ul>
            </nav>
            <br />

            <form action="../controller/compte.php" method="POST" id="myform1">

                <fieldset id="field1">
                    <legend id="legend1">Informations Client</legend>
                    <div id="infoClient">

                        <div id="infoClient1">

                            <label for="numAgence" id="lab3">Numero Agence* : </label>
                            <input type="text" id="numAgence" name="numAgence" value="" placeholder="Numero Agence" />
                            <span id="missNumAgence"></span>

                            <label for="numCompte" id="lab1">Numero Compte* : </label>
                            <input type="text" id="numCompte" name="numCompte" value="" placeholder="Numero Compte" />
                            <span id="missCompte"></span>

                            <label for="rib" id="lab">Cle Rib* : </label>
                            <input type="rib" id="rib" name="rib" value="" placeholder="Cle Rib" />
                            <span id="missRib"></span>

                            <label for="typeCompte">Type de compte* : </label>
                            <select id="typeCompte" name="typeCompte" value="" onchange="compteType()">
                                <option value="0">--Type de compte--</option>
                                <option value="epargne">Epargne</option>
                                <option value="courant">Courant</option>
                                <option value="bloque">Bloqué</option>
                            </select>
                            <span id="ErrorTypeClient"></span><br/>

                            <div id="frai">
                                <label class="frais"> Attention ce compte necessite des frais d'ouverture</label>
                                <input type="checkbox" id="frais" value="oui" />
                            </div>
                        </div>

                        <div id="infoClient2">

                            <label for="montant" id="lab1">Montant* : </label>
                            <input type="montant" id="montant" name="montant" value="" placeholder="Montant" />
                            <span id="missMontant"></span>

                            <label for="dateDebut" id="labD">Date de Debut* : </label>
                            <input type="date" id="dateDebut" name="dateDebut" value="" placeholder="Date de Debut" />
                            <span id="missDebut"></span>

                            <label for="dateFin" id="labF">Date de Fin* : </label>
                            <input type="date" id="dateFin" name="dateFin" value="" placeholder="Date de Fin" />
                            <span id="missFin"></span>

                            <label for="clientT">Client</label>
                            <select name="clientT" id="clientT" class="clientT" required>
                                <?php
                                require_once '../model/type.php';
                                ?>
                            </select>

                            <div id="agio">
                                <label class="agios"> Attention ce compte necessite des agios</label>
                                <input type="checkbox" id="agios" value="oui" />
                            </div>

                        </div>
                    </div>
                </fieldset>

                <button type="submit" name="submit">Valider</button>
            </form>
            <script type="text/javascript" src="JS/compte.js"></script>
        </main>
    </div>
</body>

</html>