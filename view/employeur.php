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

            <form action="../controller/employeur.php" method="POST" id="myform2">

                <fieldset id="field1">
                    <legend id="legend1">Informations Client</legend>
                    <div id="infoClient">

                        <div id="infoClient1">
                            <label for="nomEmpl" id="lab3">Nom Employeur* : </label>
                            <input type="text" id="nomEmpl" name="nomEmpl" value="" placeholder="Nom Employeur" />
                            <span id="missNomEmpl"></span>

                            <label for="ninea" id="lab1">Ninea* : </label>
                            <input type="text" id="ninea" name="ninea" value="" placeholder="Ninea" />
                            <span id="missNinea"></span>

                            <label for="rc" id="lab">Registre de commerce* : </label>
                            <input type="rc" id="rc" name="rc" value="" placeholder="Registre de commerce" />
                            <span id="missRc"></span>
                        </div>

                        <div id="infoClient2">
                            <label for="raisonSocial" id="lab1">Raison Social* : </label>
                            <input type="raisonSocial" id="raisonSocial" name="raisonSocial" value="" placeholder="Raison Social" />
                            <span id="missRaisonSocial"></span>

                            <label for="adressEmpl" id="lab1">Adresse* : </label>
                            <input type="text" id="adressEmpl" name="adressEmpl" value="" placeholder="Adresse de l'employeur" />
                            <span id="missAdressEmpl"></span>

                        </div>
                    </div>
                </fieldset>

                <button type="submit" name="submit">Valider</button>
            </form>
            <script type="text/javascript" src="JS/employeur.js"></script>
        </main>
    </div>
</body>

</html>