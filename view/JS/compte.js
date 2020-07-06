function compteType() {
    let status = document.getElementById("typeCompte");

    if (status.value == "epargne") {
        document.getElementById("agio").style.display = "none";
        // document.getElementById("labS").style.display = "none";

        // document.getElementById("employeur").style.display = "none";
        // document.getElementById("labEmp").style.display = "none";
    } else if (status.value == "courant") {
        document.getElementById("frai").style.display = "none";
        document.getElementById("dateDebut").style.display = "none";
        document.getElementById("dateFin").style.display = "none";
        document.getElementById("labD").style.display = "none";
        document.getElementById("labF").style.display = "none";

        // document.getElementById("employeur").style.display = "";
        // document.getElementById("labEmp").style.display = "";
    }
}