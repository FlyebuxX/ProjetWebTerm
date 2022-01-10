function change_height(nb){
    if (document.getElementById("check" + String(nb)).checked == true) {
        // Afficher le code
        document.getElementById("code-show" + String(nb)).style.display = "block";
        document.getElementById("left-part" + String(nb)).style.height = "100%";
    }

    else {
        document.getElementById("code-show" + String(nb)).style.display = "none";
        document.getElementById("left-part" + String(nb)).style.height = "40%";
    }
};