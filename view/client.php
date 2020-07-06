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
                    <li><a href="employeur.php">client Moral</a></li>
                    <li><a href="compte.php">Compte</a></li>
                </ul>
            </nav>
            <br />

            <form action="../controller/client.php" method="POST" id="myform">

                <fieldset id="field1">
                    <legend id="legend1">Informations Client</legend>
                    <div id="infoClient">
                        <div id="infoClient1">
                            <label for="TypeClient">Type Client physique* : </label>
                            <select id="TypeClient" name="TypeClient" value="" onchange="clientType()">
                                <option value="0">--Type de client physique--</option>
                                <option value="salarie">Salarie</option>
                                <option value="nonSalarie">Non Salarié</option>
                            </select>
                            <span id="ErrorTypeClient"></span>

                            <label for="prenom" id="lab3">Prenom* : </label>
                            <input type="text" id="prenom" name="prenom" value="" placeholder="Prenom" />
                            <span id="ErrorPrenom"></span>

                            <label for="nom" id="lab2">Nom* : </label>
                            <input type="text" id="nom" name="nom" value="" placeholder="Nom" />
                            <span id="ErrorNom"></span>

                            <label for="sexe">Sexe* : </label>
                            <select class="sexe" name="sexe" id="sexe" value="sexe">
                                <option value="Homme">Homme</option>
                                <option value="Femme">Femme</option>
                            </select>

                            <label for="cni" id="lab1">Numéro CNI* : </label>
                            <input type="text" id="cni" name="cni" value="" placeholder="Numéro CNI" />
                            <span id="ErrorCni"></span>

                            <label for="salaire" id="labS">Salaire* : </label>
                            <input type="number" id="salaire" name="salaire" value="" placeholder="Salaire" />
                            <span id="missSalaire"></span>
                        </div>

                        <div id="infoClient2">
                            <label for="profession" id="lab1">Profession* : </label>
                            <input type="profession" id="profession" name="profession" value="" placeholder="Profession" />
                            <span id="issProfession"></span>

                            <label for="adress" id="lab1">Adresse* : </label>
                            <input type="text" id="adress" name="adress" value="" placeholder="Adresse" />
                            <span id="ErrorAdresse"></span>

                            <label for="email" id="lab1">Email : </label>
                            <input type="email" id="email" name="email" value="" placeholder="Email" />
                            <span id="ErrorEmail"></span>

                            <label for="tel" id="lab1">Téléphone* :</label>
                            <input type="tel" id="telephone" name="telephone" value="" placeholder="Téléphone" />
                            <span id="ErrorTelephone"></span>

                            <label for="employeur" id="labEmp">Employeur* :</label>
                            <input type="employeur" id="employeur" name="idEmployeur" value="" placeholder="Employeur" />
                            <span id="employeur"></span>

                            <label for="employeur">Employeur</label>
                            <select name="employeur" id="employeur" class="employeur" required>
                                <?php
                                require_once '../model/type.php';
                                ?>
                            </select>

                        </div>
                    </div>

    </div>
    </div>
    </fieldset>

    <button type="submit" name="submit">Valider</button>
    </form>
    <script type="text/javascript" src="JS/client.js"></script>
    </main>
    </div>
</body>

</html>