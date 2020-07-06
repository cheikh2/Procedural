let myform = document.getElementById("myform2");

myform.addEventListener("submit", function(e) {
    /**** Control du numéro agence ****/
    let myNom = document.getElementById("nomEmpl");
    let nomRegex = /^[a-zA-Z0-9-]+$/;

    if (myNom.value.trim() == "") {
        e.preventDefault();
        alert("nom obligatoire");
    } else if (nomRegex.test(myNom.value) == false) {
        alert("Champ prenom invalide");
        e.preventDefault();
    } else {
        /**** Control du numéro agence ****/
        let myNinea = document.getElementById("ninea");
        let nineaRegex = /^[a-zA-Z0-9-]+$/;

        if (myNinea.value.trim() == "") {
            e.preventDefault();
            alert("ninea obligatoire");
        } else if (nineaRegex.test(myNinea.value) == false) {
            alert("Champ nom invalide");
            e.preventDefault();
        } else {
            /**** Control de rc ****/
            let myRc = document.getElementById("rc");
            let rcRegex = /^[a-zA-Z0-9-]+$/;

            if (myRc.value.trim() == "") {
                alert("registre de commerce obligatoire");
                e.preventDefault();
            } else if (rcRegex.test(myRc.value) == false) {
                alert("Registre invalide");
                e.preventDefault();
            } else {
                /**** Control de raison sociale ****/
                let myRaison = document.getElementById("raisonSocial");
                let raisonRegex = /^[a-zA-Z0-9-]+$/;

                if (myRaison.value.trim() == "") {
                    alert("Raison sociale obligatoire");
                    e.preventDefault();
                } else if (raisonRegex.test(myRaison.value) == false) {
                    alert("Raison sociale invalide");
                    e.preventDefault();
                } else {
                    let myAdressEmpl = document.getElementById("adressEmpl");
                    let adressEmplRegex = /^[a-zA-Z0-9-]+$/;

                    if (myAdressEmpl.value.trim() == "") {
                        alert("Adresse obligatoire");
                        e.preventDefault();
                    } else if (adressEmplRegex.test(myAdressEmpl.value) == false) {
                        alert("Raison sociale invalide");
                        e.preventDefault();
                    }
                }
            }
        }

    }
});